<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\PMDB\Cover;

class LoginController extends Controller
{
    public function getLoginPage()
    {

        dd(Cover::getCoverImageUrl());

    }
}
