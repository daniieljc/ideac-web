<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Article::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'description' => 'required',
                'stock' => 'required|number',
                'price' => 'required|decimal'
            ]);

            Article::create([
                'code' => Str::uuid(),
                'description' => $request->description,
                'stock' => $request->stock,
                'price' => $request->price
            ]);
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        try {
            return response()->json($article);
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        try {
            $request->validate([
                'description' => 'required',
                'stock' => 'required|number',
                'price' => 'required|decimal'
            ]);

            Article::find($id)->update([
                'description' => $request->description,
                'stock' => $request->stock,
                'price' => $request->price
            ]);
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        try {
            Article::find($id)->delete();
        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }
}

