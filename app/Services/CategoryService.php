<?php


namespace App\Services;


use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{
    public function getCategoryByName($name)
    {
        $category = Category::where('title', $name)->first();
        return $category;
    }
}