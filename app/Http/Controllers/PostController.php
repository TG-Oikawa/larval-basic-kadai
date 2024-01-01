<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {
    //
    public function index() {
        // postsテーブルから全てのデータを取得し、変数$postsに代入する
        $posts = DB::table('posts')->get();

        // 変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));

        // 課題の履歴を残している
        // return view('posts/index');
    }
}
