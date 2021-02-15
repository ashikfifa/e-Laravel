<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class superAdminController extends Controller
{
    public function logout(){
        
        Session::flush();
        
        return Redirect::to('/admin_login');
    }
}
