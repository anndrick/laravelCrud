<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profiles;

class ApiController extends Controller
{
    protected $profile;
    public function __construct(Profiles $profile)
    {
        $this -> profile = $profile;
    }
    // public function dataCreate(Request $request){
    //     $dataCreate = new Profiles();
    //     $dataCreate->name = $request->name;
    //     $dataCreate->lastName = $request->lastName;
    //     $dataCreate->email = $request->email;
    //     $dataCreate->profilePic = $request->profilePic;
    //     $dataCreate->password = $request->password;
    //     $dataCreate->description = $request->description;
    //     $dataCreate->save();
    //     return response()->json([
    //         "status"=>1,
    //         "message"=> "data-create succesfully"
    //     ]);
    // }
    public function store(Request $request)
    {
        $newProfile = new Profiles();
        $newProfile->name = $request->name;
        $newProfile->lastName = $request->lastName;
        // $newProfile->email = $request->email;
        // $newProfile->profilePic = $request->profilePic;
        // $newProfile->password = $request->password;
        $newProfile->description = $request->description;
        $newProfile->save();
        // console.log('Profile created succesfully');
        return redirect("/");
    }
    public function index()
    {
        $profile = $this -> profile -> getProfile();
        return view("home", ["profile" => $profile]);
    }
    public function admin()
    {
        $profile = $this -> profile -> getProfile();
        return view("admin", ["profile" => $profile]);
    }
    public function dataDelete(Request $request){
        if(Profiles::where("id",$request->id)->exists()){
            $dataDelete = Profiles::find($request->id);
            $dataDelete->delete();
            $profile = $this -> profile -> getProfile();
            return redirect("/admin");
        }
    }
    public function dataUpdate(Request $request, $id){
        $profile = Profiles::find($id);
        $profile->name = $request->get('name');
        $profile->lastName = $request->get('lastName');
        // $newProfile->email = $request->email;
        // $newProfile->profilePic = $request->profilePic;
        // $newProfile->password = $request->password;
        $profile->description = $request->get('description');
        $profile->save();
        return redirect("/admin");
    }
    public function edit($id){
        $profile = Profiles::find($id);
        return view('edit')->with('profile', $profile);
    }
    public function dataGet(){
        $dataResponse = Profiles::get();
        return response()->json([
            "status"=>1,
            "message"=> "data-get succesfully",
            "data" => $dataResponse,
        ]);
    }
}
