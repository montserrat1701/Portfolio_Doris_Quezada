<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Models\About;
use App\Models\Project;
use App\Http\Resources\AboutResource;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = AboutResource::collection(About::all());
        return Inertia::render('Abouts/Index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Abouts/Create', compact('abouts'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image'],
            'text' => ['required', 'min:3'],
            'description' => ['required', 'min:6']
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('abouts');
            About::create([
                'text'=> $request->text,
                'description'=> $request->description,
                'image'=> $image,
            ]);

            return Redirect::route('abouts.index')->with('message', 'Information created successfuly.');
        }
        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return Inertia::render('Abouts/Edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function update(Request $request, About $about)
    {
        $image = $about->image;
        $request->validate([
            'text' => ['required', 'min:3'],
            'description' => ['required']
        ]);
        if($request->hasFile('image')){
            Storage::delete($about->image);
            $image = $request->file('image')->store('abouts');
        }

        $about->update([
            'text' => $request->text,
            'description'=> $request->description,
            'image' => $image
        ]);

        return Redirect::route('abouts.index')->with('message', 'Information updated successfuly.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        Storage::delete($about->image);
        $about->delete();

        return Redirect::back()->with('message', 'Information deleted successfuly.');
    }
}