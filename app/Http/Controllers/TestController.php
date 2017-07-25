<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function index()
    {
    	$mainCategory = DB::table('category')->where('level',1)->get();
    	$sub1Category = DB::table('category')->where('level',2)->get();
    	$sub2Category = DB::table('category')->where('level',3)->get();

    	return view('admin_template', compact('mainCategory', 'sub1Category', 'sub2Category'));

    }

    public function search(Request $request)
    {
        if ($request->has('cate_main')) {
            $quizs = DB::table('quiz')->where('category_main_id', $request->cate_main)->paginate(10);

            return view('table', compact('quizs'));
        }
        return back();
    }
}
