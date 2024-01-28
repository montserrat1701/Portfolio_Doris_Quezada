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
       return 'About';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function update(Request $request, About $about)
    {
      }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        
    }
}
