<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    private $translations = [
        'en' => null,
        'ar' => null
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pages = Page::all();
        return view('backend.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'page create';
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {

        $requestData = $request->validated();
        Page::create([
            'name' => [
                'en' => $requestData['name_en'],
                'ar' => $requestData['name_ar'],
            ],
            'description' => [
                'en' => $requestData['description_en'],
                'ar' => $requestData['description_ar']
            ],
            'order' => $requestData['order'],
            'keywords' => 'testintg',
            'url' => $request->url,
            'status' => $request->status

        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {

        return view('backend.pages.edit',['page' => $page->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name.ar' => 'required|max:255',
            'name.en' => 'required|max:255',
            'description.ar' => 'nullable',
            'description.en' => 'nullable',
            'order' => 'required|max:255|unique:pages,order,'.$page->id,
            'url' => 'max:255'
        ]);
        if ($page->update($request->all())) {
            toastr()->success('Data has been Update successfully!');
            return redirect()->route('pages.edit',$page->id);
        }
        toastr()->error('An error has occurred please try again later.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if ($page) {
            $page->delete();
            toastr()->success('Data has been deleted successfully');
            return redirect()->route('pages.index');
        }
        toastr()->error('An error has occurred please try again later.');
        return back();
    }

}
