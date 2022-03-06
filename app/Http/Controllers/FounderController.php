<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $founders = Founder::all();
        return view('backend.founders.index',[
            'founders' => $founders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.founders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name.en' => 'required',
            'name.ar' => 'required',
            'description.ar' => 'required',
            'description.en' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'image' => 'nullable',
            'status' => 'nullable'
        ]);

        Founder::create([
            'name' => [
                'en' => $request->name['en'],
                'ar' => $request->name['ar']
            ],
            'description' => [
                'en' => $request->description['en'],
                'ar' => $request->description['ar']
            ],
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'image' => $request->image,
        ]);

        toastr()->success('Data has been save successfully');
        return redirect()->route('founders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function show(Founder $founder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function edit(Founder $founder)
    {
        return view('backend.founders.edit',[
            'founder' => $founder->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Founder $founder)
    {
        $request->validate([
            'name.en' => 'required',
            'name.ar' => 'required',
            'description.ar' => 'required',
            'description.en' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'image' => 'nullable',
            'status' => 'nullable'
        ]);

        $founder->update($request->all());
        toastr()->success('Data has been Updated Successfully');
        return redirect()->route('founders.edit',['founder' => $founder]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Founder $founder)
    {
        $founder->delete();
        toastr()->success('Data has been deleted successfully');
        return redirect()->route('founders.index');
    }
}
