<?php

namespace App\Http\Controllers;

use App\Models\Shark as ModelsShark;
use Illuminate\Http\Request;


class Shark extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shark = ModelsShark::all();
        return view("shark.index", compact("shark"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("shark.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        "name"=> "required",
        "email"=>"required|email",
        "shark_level" => "required|numeric",
       ]);

       $shark = new ModelsShark();
       $shark->name = $request->name;
       $shark->email = $request->email;
       $shark->shark_level = $request->shark_level;
       $shark->save();
       return redirect()->route("sharks.index")->with("success","Created Succesfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shark = ModelsShark::find($id);
        return view("shark.show", compact("shark"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shark = ModelsShark::find($id);
        return view("shark.edit", compact("shark"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shark = ModelsShark::find($id);
        $shark->update($request->all());
        return redirect()->route("sharks.index")->with("success","success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shark = ModelsShark::find($id);
        $shark->delete();
        return redirect()->route("sharks.index")->with("success","Deleted Successfully");
    }
}
