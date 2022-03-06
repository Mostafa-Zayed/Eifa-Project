<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('backend.partners.index',[
            'partners' => $partners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partners.create');
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
            'description.en' => 'required',
            'description.ar' => 'required',
            'image' => 'nullable',
            'link' => 'required',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'status' => 'nullable'
        ]);

        Partner::create([
            'name' => [
                'ar' => $request->name['ar'],
                'en' => $request->name['en']
            ],
            'description' => [
                'ar' => $request->description['ar'],
                'en' => $request->description['en']
            ],
            'link' => $request->link,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
        ]);

        toastr()->success('Data has been Save Successfully');
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.partners.edit',[
            'partner' => $partner->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name.en' => 'required',
            'name.ar' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
            'image' => 'nullable',
            'link' => 'required',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'status' => 'nullable'
        ]);

        $partner->update($request->all());
        toastr()->success('Data has been updated Successfully');
        return redirect()->route('partners.edit',$partner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        toastr()->success('Partner has been deleted Successfully');
        return redirect()->route('partners.index');
    }
}
