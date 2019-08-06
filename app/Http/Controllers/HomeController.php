<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageEvent;
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
        $categories = Category::all();
        $users = User::all();
        $products = Product::all();

        return view('home', compact('products', 'users', 'categories'));
    }

    public function manage()
    {

        return view('manage');
    }

    public function welcome()
    {
        $events = ImageEvent::all();
        $category1 = Category::all()->where('id', '=', 1);
        $category2 = Category::all()->where('id', '=', 2);
        $category3 = Category::all()->where('id', '=', 3);
        $category4 = Category::all()->where('id', '=', 4);
        $category5 = Category::all()->where('id', '=', 5);
        $parent1 = Category::all()->where('id_parent', '=', 1);
        $parent2 = Category::all()->where('id_parent', '=', 2);
        $parent3 = Category::all()->where('id_parent', '=', 3);
        $parent4 = Category::all()->where('id_parent', '=', 4);
        $parent5 = Category::all()->where('id_parent', '=', 5);

        $products = Product::with
        (
            [
                'event' => function ($query) {
                    $query->select(['id', 'promotion_price']);
                },
                'images' => function ($query) {
                    $query->select(['id_product', 'name']);
                },
            ]
        )->get()->toArray();
        return view('welcome', compact('products', 'events', 'categories', 'category1', 'category2', 'category3', 'category4', 'category5', 'category6', 'parent1', 'parent2', 'parent3', 'parent4', 'parent5'));
    }

    public function categoryDetail($id)
    {
        $events = ImageEvent::all();
        $category1 = Category::all()->where('id', '=', 1);
        $category2 = Category::all()->where('id', '=', 2);
        $category3 = Category::all()->where('id', '=', 3);
        $category4 = Category::all()->where('id', '=', 4);
        $category5 = Category::all()->where('id', '=', 5);
        $parent1 = Category::all()->where('id_parent', '=', 1);
        $parent2 = Category::all()->where('id_parent', '=', 2);
        $parent3 = Category::all()->where('id_parent', '=', 3);
        $parent4 = Category::all()->where('id_parent', '=', 4);
        $parent5 = Category::all()->where('id_parent', '=', 5);
        $products = $product_image = Product::with
        (
            [
                'event' => function ($query) {
                    $query->select(['id', 'promotion_price']);
                },
                'images' => function ($query) {
                    $query->select(['id_product', 'name']);
                },
            ]
        )->where('id_category', '=', $id)->get()->toArray();
        $detailcategory = Category::find($id);
        return view('categories.detail', compact('detailcategory', 'events', 'products', 'events', 'categories', 'category1', 'category2', 'category3', 'category4', 'category5', 'parent1', 'parent2', 'parent3', 'parent4', 'parent5'));
    }

    public function getSearch(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->key . '%')->get();
        $events = ImageEvent::all();
        $category1 = Category::all()->where('id', '=', 1);
        $category2 = Category::all()->where('id', '=', 2);
        $category3 = Category::all()->where('id', '=', 3);
        $category4 = Category::all()->where('id', '=', 4);
        $category5 = Category::all()->where('id', '=', 5);
        $parent1 = Category::all()->where('id_parent', '=', 1);
        $parent2 = Category::all()->where('id_parent', '=', 2);
        $parent3 = Category::all()->where('id_parent', '=', 3);
        $parent4 = Category::all()->where('id_parent', '=', 4);
        $parent5 = Category::all()->where('id_parent', '=', 5);

        return view('search', compact('products', 'categories', 'events', 'categories', 'category1', 'category2', 'category3', 'category4', 'category5', 'parent1', 'parent2', 'parent3', 'parent4', 'parent5'));
    }

    public function getSearch(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->key . '%')->get();
        $events = Event::all();
        $categories = Category::all();

        return view('search', compact('products', 'events', 'categories'));
    }
}

