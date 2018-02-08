<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){

      $first_name = $req->input('firstname');
      $last_name = $req->input('lastname');
      $address = $req->input('Address');
      $phone_number = $req->input('phonenumber');
      $city = $req->input('City');
      $state = $req->input('State');

      $data = array('firstname'=>$first_name,'lastname'=>$last_name,'Address'=>$address,'phonenumber'=>$phone_number,'City'=>$city,'State'=>$state);

      DB::table('customer')->insert($data);

      echo "succcessss";




    }
}
