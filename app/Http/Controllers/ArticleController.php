<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('backend.articles.index',[
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.articles.create',['categories' => $categories]);
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
            'title.en' => 'required',
            'title.ar' => 'required',
            'description.ar' => 'required',
            'description.en' => 'required',
            'author.ar' => 'required',
            'author.en' => 'required',
            'category_id' => 'required'
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            foreach ($messages->all() as $message) {
                toastr()->error($message);
            }
            return redirect()->route('articles.create');
        }


        Article::create([
            'title' => [
                'en' => $request->title['en'],
                'ar' => $request->title['ar']
            ],
            'description' => [
                'en' => $request->description['en'],
                'ar' => $request->description['ar']
            ],
            'author' => [
                'en' => $request->author['en'],
                'ar' => $request->author['ar']
            ],
            'date' => $request->date,
            'image' => 'image',
            'category_id' => $request->category_id,
            'status' => $request->status
        ]);

        toastr()->success('Data has been saved successfully');
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
