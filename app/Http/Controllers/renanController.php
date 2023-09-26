<?php

namespace App\Http\Controllers;

use App\Models\Renan;
use Illuminate\Http\Request;


class RenanController extends Controller
{
    public function create()
    {
        return view('alunos.form');
    }

    public function store(Request $request)
    {
      Renan::create($request->all());
      
}
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


