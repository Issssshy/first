<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Category;

class CategoryController extends Controller
{
	/**
	 * Post一覧を表示する
	 * @param Post Postモデル
	 * @return array Postモデルリスト
	 */
	public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}
