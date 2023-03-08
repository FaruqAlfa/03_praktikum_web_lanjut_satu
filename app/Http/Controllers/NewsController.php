<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function news($links = ''){
    if($links == ''){
        return view('news');
    }else{
        $message = "Mohon maaf iputan Anda salah";
        echo "<script type='text/javascript'>alert('$message');</script>";
        return view('home');
    }
   }
}
