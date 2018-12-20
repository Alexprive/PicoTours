<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourCategory;
use App\TourType;
use App\City;
use App\UserProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
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
        $tours = Tour::orderBy('name', 'asc')->paginate(10);

        return view('tours.index')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourcategories = TourCategory::pluck('categoryname', 'id');
        $city = City::pluck('name', 'id');
        $userprofile= UserProfile::where('id', auth()->user()->id)->first();

        if (count($userprofile) < 1) {

            return view('userprofiles.create')->with('error', 'Create a Userprofile first!');
        }

        else {


        $data = array (
            'tourcategories' => $tourcategories,
            'city' => $city
        );

        return view ('tours.create')->with($data);

        }
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
            'city_id' => 'required',
            'tourcategory_id' => 'required',
            'tourstartlocation' => 'required',
            'tourdeparturetime' => 'required',
            'tourduration' => 'required',
            'tourshortdescription' => 'required',
//            'tourhighlights' => 'required',
            'whatsinc1' => 'required',
            'whatsinc2' => 'required',
            'whatsinc3' => 'required',
            'tourdescription' => 'required',
            'tourprice' => 'required',
            'tour_img' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('tour_img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('tour_img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('tour_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('tour_img')->storeAs('public/tour_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $tours = new Tour();
        $tours->name = $request->input('name');
        $tours->user_id = auth()->user()->id;
        $tours->city_id = $request->input('city_id');
        $tours->tourcategory_id = $request->input('tourcategory_id');
        $tours->tourstartlocation = $request->input('tourstartlocation');
        $tours->tourdeparturetime = $request->input('tourdeparturetime');
        $tours->tourduration = $request->input('tourduration');
        $tours->tourshortdescription = $request->input('tourshortdescription');
        $tours->tourhighlights1 = $request->input('tourhighlights1');
        $tours->tourhighlights2 = $request->input('tourhighlights2');
        $tours->tourhighlights3 = $request->input('tourhighlights3');
        $tours->whatsinc1 = $request->input('whatsinc1');
        $tours->whatsinc2 = $request->input('whatsinc2');
        $tours->whatsinc3 = $request->input('whatsinc3');
        $tours->tourdescription = $request->input('tourdescription');
        $tours->tourdescription = $request->input('tourdescription');
        $tours->tourprice = $request->input('tourprice');
        $tours->tour_img = $fileNameToStore;
        $tours->save();

        return redirect('/tours')->with('success', 'You added a Tour!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tours =Tour::find($id);
        $tourcategories = TourCategory::where('id', $tours->tourcategory_id)->first();
        $city = City::where('id', $tours->city_id)->first();

        $data = array (
            'tours' => $tours,
            'tourcategories' => $tourcategories,
            'city' => $city
        );

        return view ('tours.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours =Tour::find($id);
        $tourcategories = TourCategory::pluck('categoryname', 'id');
        $city = City::pluck('name', 'id');

        $data = array (
            'tours' => $tours,
            'tourcategories' => $tourcategories,
            'city' => $city
        );

        if (Auth()->user()->id !== $tours->user_id){

            return redirect('home')->with('error', 'Unauthorized page!');
        }

        return view ('tours.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'city_id' => 'required',
            'tourcategory_id' => 'required',
            'tourstartlocation' => 'required',
            'tourdeparturetime' => 'required',
            'tourduration' => 'required',
            'tourshortdescription' => 'required',
//           'tourhighlights' => 'required',
            'whatsinc1' => 'required',
            'whatsinc2' => 'required',
            'whatsinc3' => 'required',
            'tourdescription' => 'required',
            'tourprice' => 'required',
            'tour_img' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('tour_img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('tour_img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('tour_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('tour_img')->storeAs('public/tour_images', $fileNameToStore);
        }

        $tours = Tour::find($id);
        $tours->name = $request->input('name');
        $tours->user_id = auth()->user()->id;
        $tours->city_id = $request->input('city_id');
        $tours->tourcategory_id = $request->input('tourcategory_id');
        $tours->tourstartlocation = $request->input('tourstartlocation');
        $tours->tourdeparturetime = $request->input('tourdeparturetime');
        $tours->tourduration = $request->input('tourduration');
        $tours->tourshortdescription = $request->input('tourshortdescription');
        $tours->tourhighlights1 = $request->input('tourhighlights1');
        $tours->tourhighlights2 = $request->input('tourhighlights2');
        $tours->tourhighlights3 = $request->input('tourhighlights3');
        $tours->whatsinc1 = $request->input('whatsinc1');
        $tours->whatsinc2 = $request->input('whatsinc2');
        $tours->whatsinc3 = $request->input('whatsinc3');
        $tours->tourdescription = $request->input('tourdescription');
        $tours->tourprice = $request->input('tourprice');
        if($request->hasFile('tour_img')){ $tours->tour_img = $fileNameToStore;}
        $tours->save();

        return redirect('/tours')->with('success', 'You updated a Tour!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tours = Tour::find($id);

        if($tours->tour_img != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/tour_images/'.$tours->tour_img);
        }

        $tours->delete();

        return redirect('/tours')->with('success', 'Tour Removed');
    }

    public function tourdetails($id)
    {
        $tour = Tour::find($id);
        $city = DB::table('cities')->where('id', $tour->city_id )->first();
        $guide = DB::table('user_profiles')->where('user_id',  $tour->user_id)->first();
        $user = DB::table('users')->where('id', $tour->user_id)->first();
        $category = DB::table('tour_categories')->where('id', $tour->tourcategory_id)->first();

        $data = array (
            'tour' => $tour,
            'city' => $city,
            'guide' => $guide,
            'user' => $user,
            'category' => $category
        );
        

        return view ('pages.tourdetails')->with($data);
    }
}
