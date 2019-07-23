<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $products = Product::all();

        return view('home', compact('products', 'users'));
    }

    public function manage()
    {

        return view('manage');
    }

    public function welcome()
    {
        $events = Event::all();
        $category1 = Category::all()->where('id', '=',1);
        $category2 = Category::all()->where('id', '=',2);
        $category3 = Category::all()->where('id', '=',3);
        $category4 = Category::all()->where('id', '=',4);
        $category5 = Category::all()->where('id', '=',5);
        $parent1 = Category::all()->where('id_parent', '=',1);
        $parent2 = Category::all()->where('id_parent', '=',2);
        $parent3 = Category::all()->where('id_parent', '=',3);
        $parent4 = Category::all()->where('id_parent', '=',4);
        $parent5 = Category::all()->where('id_parent', '=',5);

        $products = Product::paginate(12);
        return view('welcome', compact('products', 'events','categories', 'category1','category2','category3','category4','category5','category6','parent1','parent2','parent3','parent4','parent5'));
    }
    public function categoryDetail($id)
    {
        $events = Event::all();
        $category1 = Category::all()->where('id', '=',1);
        $category2 = Category::all()->where('id', '=',2);
        $category3 = Category::all()->where('id', '=',3);
        $category4 = Category::all()->where('id', '=',4);
        $category5 = Category::all()->where('id', '=',5);
        $parent1 = Category::all()->where('id_parent', '=', 1);
        $parent2 = Category::all()->where('id_parent', '=',2);
        $parent3 = Category::all()->where('id_parent', '=',3);
        $parent4 = Category::all()->where('id_parent', '=',4);
        $parent5 = Category::all()->where('id_parent', '=',5);
        $products = Product::where('id_category', '=' ,$id)->paginate(12);
        $detailcategory = Category::find($id);
        return view('categories.detail',compact('detailcategory','events','products', 'events','categories', 'category1','category2','category3','category4','category5','parent1','parent2','parent3','parent4','parent5'));
    }
}

