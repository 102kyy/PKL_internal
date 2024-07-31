<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\UserHabit;
use Illuminate\Http\Request;

class UserHabitController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('userHabit', ['kategoris' => $kategoris]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        // Create a new habit
        $habit = new UserHabit();
        $habit->kategori_id = $request->kategori_id;
        $habit->user_id = auth()->id(); // Assuming the user is authenticated
        $habit->save();

        // Redirect to the 'yourhabit' page
        return redirect()->route('yourhabit')->with('success', 'Habit added successfully!');
    }

    public function yourhabit()
    {
        $habits = UserHabit::with('kategori')->where('user_id', auth()->id())->get();
        return view('yourhabit', compact('habits'));
    }
}
