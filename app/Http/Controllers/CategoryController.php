<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::latest()->paginate(5);

        return view('categories/index', compact('categories'));
        return Category::filter($request)->get();
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $input = $request->validated();
        $avatar = Arr::pull($input, 'avatar');
        $categories = Category::create($input);
        $categories->addMedia($avatar)->toMediaCollection('avatar');
        return redirect()->route('categories.index')
        ->with('success', 'Admin created successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
        ->with('success', 'Product deleted successfully');
    }
}
