<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(\Auth::user()->customer){
        $contactDetails = \Auth::user()->customer;
      }
      else
      {
        $contactDetails = \Auth::user()->employee;
      }
	  
        return view('home',['contactDetails'=>$contactDetails]);
    }
    public function store(Request $request){
          $this->validate($request, [
    'First_Name' => 'required|string|max:25',
    'Last_Name' => 'required|string|max:25',
    'Address' => 'required|string|max:45',
    'Phone_Num' => 'required|integer',
    'City' => 'required|string|max:25',
    'State' => 'required|string|max:2',
      ]);

      if(\Auth::user()->customer){
        $contactDetails = \Auth::user()->customer;
      }
      else
      {
        $contactDetails = \Auth::user()->employee;
      }
      $contactDetails->fill($request->all());
      if($contactDetails->update())
      {
    		session()->flash("flash_success", "Your Account has been Updated");
      }
      else

      {

      }

      return back();

    }

}
