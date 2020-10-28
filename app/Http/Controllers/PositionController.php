<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {

        $data = Position::all();

        return view('positions.show', [
            'positions' => $data,
        ]);

        return view('positions.show');
    }

    public function create()
    {
        return view('positions.create');
    }

    public function store()
    {
        // validasi
        request()->validate([
            'jabatan' => ['required'],
        ]);
        $slug = \Str::slug(request('jabatan')) . '-' . \Str::random(10);

        Position::create([
            'jabatan' => request('jabatan'),
            'slug' => $slug,
        ]);
        return redirect()->route('positions.index');
    }

    public function edit(Position $position)
    {
        return view('positions.edit', compact('position'));
    }

    public function update(Position $position)
    {
        // validasi
        request()->validate([
            'jabatan' => ['required'],
        ]);
        $slug = \Str::slug(request('jabatan')) . '-' . \Str::random(10);

        $position->update([
            'jabatan' => request('jabatan'),
            'slug' => $slug,
        ]);
        return redirect()->route('positions.index');
    }

    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('positions.index');
    }
}