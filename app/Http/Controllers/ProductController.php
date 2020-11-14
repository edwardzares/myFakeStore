<?php
/**
 * Created by PhpStorm.
 * User: EDWARD OSORIO
 * Date: 14/11/2020
 * Time: 8:53 AM
 */

namespace App\Http\Controllers;


use App\Business\api\FakeStoreApi;
use App\Business\Component\CategoryComponent;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController
{

    private $fakeStoreApi;

    public function __construct()
    {
        $this->fakeStoreApi = new FakeStoreApi();
    }


    public function getProducts(Request $request){
        $products = Product::whereNull('deleted_at')->with('category')->get();
        if(empty($products->all())){
            $this->storeProducts();
            $products = Product::whereNull('deleted_at')->with('category')->get();
        }
        //dd($products);
        $categories = Category::all();
        return view('home', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Guarda en base de datos los productos que provienen de fakeStoreapi.com
     * @throws \Exception
     */
    private function storeProducts(){
        $products = $this->fakeStoreApi->getAllProducts();
        foreach ($products as $product){
            $category = CategoryComponent::getOrCreate($product['category']);
            Product::create([
                'id' => $product['id'],
                'title' => $product['title'],
                'price' => $product['price'],
                'category_id' => $category->id,
                'description' => $product['description'],
                'image' => $product['image'],
            ]);
        }
    }

    public function filter(Request $request){
        $data = $request->all();
        switch ($data['type']){
            case ('title'):
                $products = Product::where('title', 'LIKE', '%'.$data['filter'].'%')->get();
                break;
            case ('description'):
                $products = Product::where('description', 'LIKE', '%'.$data['filter'].'%')->get();
                break;
            case ('min_price'):
                $products = Product::where('price', '<=', $data['filter'])->get();
                break;
            case ('max_price'):
                $products = Product::where('price', '>=', $data['filter'])->get();
                break;
        }
        $categories = Category::all();
        return view('home', ['products' => $products, 'categories' => $categories]);
    }

}