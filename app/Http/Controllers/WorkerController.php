<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\Position;
use Hamcrest\Core\AllOf;

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
        return view('workers.create', [
            'datas' => Position::all(),
        ]);
    }

    public function store()
    {
    }
}