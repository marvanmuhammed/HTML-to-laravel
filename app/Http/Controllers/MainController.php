<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $data['title']= "CHOCOLUX";
		return view('index',compact('data'));
    }

    public function about() {
        $data['title']= "ABOUT | CHOCOLUX";
		return view('about',compact('data'));
    }

    public function testimonial() {
        $data['title']= "TESTIMONIAL | CHOCOLUX";
		return view('testimonial',compact('data'));
    }

    public function contact() {
        $data['title']= "CONTACT | CHOCOLUX";
		return view('contact',compact('data'));
    }

    public function chocolate() {
        $data['title']= "CHOCOLATE | CHOCOLUX";
        return view('chocolate',compact('data'));
    }

    public function insertData(Request $request) {
        $messeges = new Contact();
        $messeges->fullname = $request->input('name');
        $messeges->message = $request->input('message');
        $messeges->phone = $request->input('phone');
        $messeges->email = $request->input('email');
        $messeges->save();

        return response()->json([
            'data'=> $messeges,
            'message'=> 'Submitted..!'
        ]); 
    }


}
