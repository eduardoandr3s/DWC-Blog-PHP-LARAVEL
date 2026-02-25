<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English;

class EnglishController extends Controller
{
    public function index()
    {
        $languages = English::orderBy('name')->get();
        return view('languages.index', compact('languages'));
    }

    public function create()
    {
        return view('languages.create');
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'name' => 'required|min:3',
            ],
            [
                'name.required' => 'The name is required',
                'name.min' => 'The name must be at least 3 characters',
            ]
        );

        $language = new English();
        $language->name = $request->get('name');
        $language->save();
        return redirect()->route('englishes.index');
    }

    public function show(English $english)
    {
        return view('languages.show', compact('english'));
    }

    public function edit(string $id)
    {
        $english = English::findOrFail($id);
        return view('languages.edit', compact('english'));
    }

    public function update(Request $request, string $id)
    {
        request()->validate(
            [
                'name' => 'required|min:3',
            ],
            [
                'name.required' => 'The name is required',
                'name.min' => 'The name must be at least 3 characters',
            ]
        );

        $english = English::findOrFail($id);
        $english->name = $request->get('name');
        $english->save();
        return redirect()->route('englishes.index');
    }

    public function destroy(English $english)
    {
        $english->delete();
        return redirect()->route('englishes.index');
    }
}
