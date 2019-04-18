<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories      = Category::with('posts')->orderBy('title')->paginate($this->limit);
        $categoriesCount = Category::count();

        return view("backendblog.categories.index", compact('categories', 'categoriesCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $category = new Category();
        return view("backendblog.categories.create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CategoryStoreRequest $request)
    {
        Category::create($request->all());

        return redirect("/backend/category")->with("message", "New category was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view("backendblog.categories.edit", compact('category'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CategoryUpdateRequest $request, $id)
    {
        Category::findOrFail($id)->update($request->all());

        return redirect("/backend/category")->with("message", "Category was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Requests\CategoryDestroyRequest $request, $id)
    {
        Post::withTrashed()->where('category_id', $id)->update(['category_id' => config('cms.default_category_id')]);

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect("/backend/category")->with("message", "Category was deleted successfully!");
    }
}
