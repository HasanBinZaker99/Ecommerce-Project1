<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project\ProjectCategory;

class ProjectCategoryController extends Controller
{
    public function addCategory()
    {
        return view('Project.projectCategory.addCategory');
    }
    public function createCategory(Request $request)
    {
        $category = new ProjectCategory;
        $category->projectCategoryName = $request->projectCategoryName;
        $category->projectCategoryCode = $request->projectCategoryCode;
        $category->save();
        return redirect('/all-Project-Categories')->with('message', 'New Project Category Created Successfully');
    }
    public function allCategory()
    {
        $categories = ProjectCategory::orderBy('id', 'desc')->get();
        return view('Project.projectCategory.allCategory', ['categories'=> $categories]);
    }
}
