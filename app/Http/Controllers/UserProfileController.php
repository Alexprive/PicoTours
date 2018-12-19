<?php

namespace App\Http\Controllers;

use App\UserProfile;
use App\User;
use App\City;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userprofiles = UserProfile::orderBy('hometown', 'asc')->paginate(10);

        return view('userprofiles.index')->with('userprofiles', $userprofiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userprofiles.create');
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
            'hometown' => 'required',
            'languages' => 'required',
            'shortdescription' => 'required',
            'description' => 'required',
            'profilepic' => 'image|nullable|max:1999',
            'profileheader' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('profilepic')){
            // Get filename with the extension
            $filenameWithExt1 = $request->file('profilepic')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            // Get just ext
            $extension1 = $request->file('profilepic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename1.'_'.time().'.'.$extension1;
            // Upload Image
            $path = $request->file('profilepic')->storeAs('public/profilepics', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'noimage.jpg';
        }

        if($request->hasFile('headerpic')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('headerpic')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('headerpic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename2.'_'.time().'.'.$extension2;
            // Upload Image
            $path2 = $request->file('headerpic')->storeAs('public/profileheaders', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.jpg';
        }

        $userprofile = new UserProfile;
        $userprofile->user_id =  auth()->user()->id;
        $userprofile->hometown = $request->input('hometown');
        $userprofile->languages = $request->input('languages');
        $userprofile->mobilephone = $request->input('mobilephone');
        $userprofile->shortdescription = $request->input('shortdescription');
        $userprofile->description = $request->input('description');
        $userprofile->profilepic = $fileNameToStore1;
        $userprofile->profileheader = $fileNameToStore2;
        $userprofile->save();

        return redirect('/userprofiles')->with('success', 'Userprofile is stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userprofile = UserProfile::find($id);
        $user = User::where('id', $userprofile->user_id)->first();

        $data = array(
            'userprofile' => $userprofile,
            'user' => $user
        );

        return view('userprofiles.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userprofile = UserProfile::find($id);

        return view('userprofiles.edit')->with('userprofile', $userprofile);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hometown' => 'required',
            'languages' => 'required',
            'shortdescription' => 'required',
            'description' => 'required',
            'profilepic' => 'image|nullable|max:1999',
            'profileheader' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('profilepic')){
            // Get filename with the extension
            $filenameWithExt1 = $request->file('profilepic')->getClientOriginalName();
            // Get just filename
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            // Get just ext
            $extension1 = $request->file('profilepic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename1.'_'.time().'.'.$extension1;
            // Upload Image
            $path = $request->file('profilepic')->storeAs('public/profilepics', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'noimage.jpg';
        }

        if($request->hasFile('headerpic')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('headerpic')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just ext
            $extension2 = $request->file('headerpic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename2.'_'.time().'.'.$extension2;
            // Upload Image
            $path2 = $request->file('headerpic')->storeAs('public/profileheaders', $fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.jpg';
        }

        $userprofile = UserProfile::find($id);
        $userprofile->user_id =  auth()->user()->id;
        $userprofile->hometown = $request->input('hometown');
        $userprofile->languages = $request->input('languages');
        $userprofile->mobilephone = $request->input('mobilephone');
        $userprofile->shortdescription = $request->input('shortdescription');
        $userprofile->description = $request->input('description');
        if($request->hasFile('profilepic')){
        $userprofile->profilepic = $fileNameToStore1;}
        if($request->hasFile('headerpic')){
        $userprofile->profileheader = $fileNameToStore2;}
        $userprofile->save();

        return redirect('/userprofiles')->with('success', 'Userprofile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userprofile = UserProfile::find($id);

        if($userprofile->profilepic != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/profilepics/'.$userprofile->profilepic);
        }

        if($userprofile->headerpic != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/headerpics/'.$userprofile->headerpic);
        }

        $userprofile->delete();

        return redirect('/userprofiles')->with('success', 'Userprofile removed');
    }

    public function guideprofile($id)
    {
        $userprofile = UserProfile::find($id);
        $user = User::where('id', $userprofile->user_id)->first();

        $data = array(
            'userprofile' => $userprofile,
            'user' => $user
        );

        return view('pages.guideprofile')->with($data);
    }

    public function tourtemplate($id)
    {
        $userprofile = UserProfile::find($id);
        $user = User::where('id', $userprofile->user_id)->first();
        $tours = Tour::where('user_id', $user->id)->get();
        $citycount = City::count();
        $guidecount = User::count();
        $tourcount = Tour::count();

        $data = array(
            'userprofile' => $userprofile,
            'user' => $user,
            'tours' => $tours,
            'citycount' => $citycount,
            'guidecount' => $guidecount,
            'tourcount' => $tourcount
        );

        return view('pages.tourtemplate')->with($data);

    }
}
