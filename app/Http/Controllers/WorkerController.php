<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $data = Worker::all();

        return view('workers.show', [
            'workers' => $data,
        ]);

        return view('workers.show');
    }

    public function create()
    {
        return view('workers.create');
    }
}