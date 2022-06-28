<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     public  function index()
     {
        $read_news = news::OrderBy('id','desc')->get();
          return view('livewire.backend.AdminPanel.news',compact('read_news'));
     }
}
