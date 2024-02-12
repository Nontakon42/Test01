<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class Usercontroller extends Controller
{
    public function index(){
        $u = User::all();
        return view('backend.user.index', compact('u'));
    }
}
