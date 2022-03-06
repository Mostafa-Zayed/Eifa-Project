<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceList;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.services.index',['services' => Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => 'required',
            'title_en' => 'required',
            'content_ar' => 'required',
            'content_en' => 'required',
            'status' => 'nullable'
        ]);
        $service = Service::create([
            'title' => [
                'ar' => $request->title_ar,
                'en' => $request->title_en
            ],
            'content' => [
                'ar' => $request->content_ar,
                'en' => $request->content_en
            ],
            'status' => $request->status
        ]);
        $serviceList = ! empty($request->list) ? $request->list : null;
        $this->addServiceList($serviceList,$service->id);
        toastr()->success('Data has been saved successfully');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.services.edit',['service' => $service->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        toastr()->success('Service has been deleted successfully');
        return redirect()->route('services.index');
    }

    private function addServiceList(&$list, $serviceId)
    {

        foreach ($list as $item) {
            ServiceList::create([
                'content' => $item,
                'service_id' => $serviceId
            ]);
        }
    }
}
