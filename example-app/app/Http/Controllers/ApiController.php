<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profiles;

class ApiController extends Controller
{
    public function dataCreate(Request $request){
        $dataCreate = new Profiles();
        $dataCreate->name = $request->name;
        $dataCreate->lastName = $request->lastName;
        $dataCreate->email = $request->email;
        $dataCreate->profilePic = $request->profilePic;
        $dataCreate->password = $request->password;
        $dataCreate->description = $request->description;
        $dataCreate->save();
        return response()->json([
            "status"=>1,
            "message"=> "data-create succesfully"
        ]);
    }
    public function dataDelete(Request $request){
        if(Profiles::where("id",$request->id)->exists()){
            $dataDelete = Profiles::find($request->id);
            $dataDelete->delete();
            return response()->json([
                "status"=>1,
                "message"=> "data-delete succesfully"
            ]);
        }
        else{
            return response()->json([
                "status"=>2,
                "message"=> "data not found"
            ]);

        }
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
