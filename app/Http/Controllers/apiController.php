<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class apiController extends Controller
{
     public function testapi()
     {
         echo ' this is from test api';
     }


     public function add_data(Request $req)
     {

     }
}
