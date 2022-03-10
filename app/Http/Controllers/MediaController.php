<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::all();
        $categories = Category::all();
        return view('backend.media.index',[
            'categories' => $categories,
            'media' => $media
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name.ar' => 'required',
            'name.en' => 'required',
            'description.ar' => 'required',
            'description.en' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'location.ar' => 'required',
            'location.en' => 'required'
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            foreach ($messages->all() as $message) {
                toastr()->error($message);
                session()->flash('hasError',true);
                return redirect()->route('media.index');
            }
        }

        Media::create([
            'name' => [
                'en' => $request->name['en'],
                'ar' => $request->name['ar']
            ],
            'description' => [
                'en' => $request->description['en'],
                'ar' => $request->description['ar']
            ],
            'date' => $request->date,
            'location' => [
                'en' => $request->location['en'],
                'ar' => $request->location['ar']
            ],
            'category_id' => $request->category_id,
        ]);

        toastr()->success('Data has been save successfully');
        return redirect()->route('medias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        $categories = Category::all();

        return view('backend.media.edit',[
            'media' => $media->toArray(),
            'mediaDate' => $media->getAttributes()['date'],
            'categories' => $categories
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
//        dd($request->all());
        $validation = Validator::make($request->all(),[
            'name.ar' => 'required',
            'name.en' => 'required',
            'description.ar' => 'required',
            'description.en' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'location.ar' => 'required',
            'location.en' => 'required',
            'status' => 'required|in:0,1'
        ]);

        $media->update([
            'name' => [
                'en' => $request->name['en'],
                'ar' => $request->name['ar']
            ],
            'description' => [
                'en' => $request->description['en'],
                'ar' => $request->description['ar']
            ],
            'date' => $request->date,
            'location' => [
                'en' => $request->location['en'],
                'ar' => $request->location['ar']
            ],
            'category_id' => $request->category_id,
            'status' => $request->status
        ]);
        return redirect()->route('medias.edit',[$media->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
           $media->delete();
           toastr()->success('Data has been deleted successfully');
           return redirect()->route('medias.index');


    }

    private function getMonthName($myDate)
    {
        $date = Carbon::createFromFormat('m/d/Y', $myDate);

        $monthName = $date->format('F');

        return $monthName;

    }
}
