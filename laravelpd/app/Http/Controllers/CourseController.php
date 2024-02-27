<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function Store(Request $request){
        $validate = $request->validate([
            "title"=>"required|string|max:255",
            "description"=>"required|string",
            "banner_address"=>"required|url",
            "participants"=>"required|integer"

        ]);

        $course = Course::create($validate);

        return response()->json([
            'message'=>'Course created succesfully',
            'data'=>$course
        ]);
    }
    public function index(){
        $course = Course::all();
        return response()->json([
            'data'=>$course
        ]);
    }
}
