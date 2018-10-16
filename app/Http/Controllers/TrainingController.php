<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index() {

        $trainings = Training::all();

        return view('training.index', compact('trainings'));
    }
    public function create() {
        return view('training.create');
    }

    public function store(Request $request) {

        Training::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description')
        ]);

        $trainings = Training::all();

        return view('training.index', compact('trainings'));
    }
}
