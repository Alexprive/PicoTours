<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Tour;
use App\TourCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'citytemplate', 'cityoverview', 'guideoverview', 'guideprofile', 'tourdetails', 'tourtemplate']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy('name', 'asc')->paginate(10);
        return view('cities.index')->with('cities', $cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'city_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('city_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('city_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('city_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('city_image')->storeAs('public/city_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $city = new City;
        $city->name = $request->input('name');
        $city->description = $request->input('description');
        $city->city_image = $fileNameToStore;
        $city->save();

        return redirect('/cities')->with('success', 'City is stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::find($id);

        return view('cities.show')->with('city', $city);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::find($id);

        return view('cities.edit')->with('city', $city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'city_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('city_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('city_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('city_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('city_image')->storeAs('public/city_images', $fileNameToStore);
        }

        $city = City::find($id);
        $city->name = $request->input('name');
        $city->description = $request->input('description');
        if($request->hasFile('city_image')){
            $city->city_image = $fileNameToStore;
        }
        $city->save();

        return redirect('/cities')->with('success', 'City updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);

        if($city->city_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/city_images/'.$city->city_image);
        }

        $city->delete();

        return redirect('/cities')->with('success', 'City removed');
    }

    public function cityoverview()
    {
        $cities = City::orderBy('name', 'asc')->get();
        $citycount = City::count();
        $guidecount = User::count();
        $tourcount = Tour::count();
        $noresult = count($cities);

        $data =  array (
            'cities' => $cities,
            'citycount' => $citycount,
            'guidecount' => $guidecount,
            'tourcount' => $tourcount,
            'noresult' => $noresult
        );

        return view('pages.cityoverview')->with($data);
    }

    public function citytemplate($id)
    {
        $city = City::find($id);
        $categories = TourCategory::orderBy('categoryname', 'asc')->get();
        $tours = DB::table('tours')->where('city_id', $id)->get();
        $citycount = City::count();
        $guidecount = User::count();
        $tourcount = Tour::count();



        $data =  array (
            'city' => $city,
            'categories'=> $categories,
            'tours' => $tours,
            'citycount' => $citycount,
            'guidecount' => $guidecount,
            'tourcount' => $tourcount
        );


     return view('pages.citytemplate')->with($data);
    }

    public function tourbycategory(Request $request)
    {
        $city = City::find($request->id);
        $categories = TourCategory::orderBy('categoryname', 'asc')->get();
        $tours = DB::table('tours')->where(['city_id' => $request->id,'tourcategory_id' => $request->catid])->get();
        $citycount = City::count();
        $guidecount = User::count();
        $tourcount = Tour::count();

        $data = array(
            'city' => $city,
            'categories' => $categories,
            'tours' => $tours,
            'citycount' => $citycount,
            'guidecount' => $guidecount,
            'tourcount' => $tourcount
        );


        return view('pages.citytemplate')->with($data);
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $cities = City::where('name', 'like', '%'.$search.'%')->orWhere('description', 'like', '%'.$search.'%')->get();
        $citycount = City::count();
        $guidecount = User::count();
        $tourcount = Tour::count();

        $noresult = count($cities);

        $data =  array (
            'cities' => $cities,
            'citycount' => $citycount,
            'guidecount' => $guidecount,
            'tourcount' => $tourcount,
            'noresult' => $noresult
        );

        return view('pages.cityoverview')->with($data);
    }
}
