<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        if ($request->validated()) {
            Category::create(
                [
                    'name' => $request->name,
                    'slug' => slug($request->name),
                    'user_id' => getLoggedInUserId()
                ]
            );
        }

        return back()->with('success', 'Category created successfully!');
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->validated()) {
            $category->update(
                [
                    'name' => $request->name,
                    'slug' => slug($request->name),
                    'user_id' => getLoggedInUserId()
                ]
            );
        }

        return back()->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category deleted successfully!');;
    }
}
