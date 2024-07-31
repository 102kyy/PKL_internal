<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;


class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }

     public function feedbacks()
    {
        return view('feedbacks');
    }

    public function userHabit()
    {
        $kategori = Kategori::all();
        return view('userHabit', compact('kategori'));
}
 public function yourhabit()
    {

        return view('yourhabit');
}
}