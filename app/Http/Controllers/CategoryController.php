<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\CategoryTranslation;
use DB;
use Auth;
use Session;
use Image;

class CategoryController extends Controller
{
    public function search(Request $request){
        $search = $request->input('search') ?: '';
        $categories = \App\Category::where('level','1')->orderBy('ordering')->get();
        $parentCategory = \App\Category::where('title','like','%'.$search.'%')
                                       ->orWhereIn('parent_id',DB::table('categories')->where('title',$search)->lists('id'))
                                       ->lists('id');
        $contents = \App\Content::where('title','like','%'.$search.'%')
                                ->orWhereIn('category_id', $parentCategory->toArray())
                                ->orderBy('created_at')
                                ->paginate(21);
        return view('project_list')->with([
            'category' => '',
            'categories' => $categories,
            'contents' => $contents
        ]);
    }
}
