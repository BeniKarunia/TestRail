<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    protected $products;

    protected $collections;
    public function __construct()
    {
        //insert your dummy data in constructor class

        (array) $productsTemp = [];
        (array) $collectionsTemp = [];
        for ($i = 0; $i < 15; $i++) {
            $productsTemp[] = [
                'id' => $i + 1,
                'name' => 'Product ' . $i + 1,
                'price' => rand(1000000, 3000000),
                'image' => Arr::random([
                    asset('assets/images/Produk/Brand1.jpeg'),
                    asset('assets/images/Produk/Brand2.jpg'),
                    asset('assets/images/Produk/Brand3.jpg'),
                    asset('assets/images/Produk/Brand4.jpeg'),
                    asset('assets/images/Produk/Brand5.jpg'),
                    asset('assets/images/Produk/Brand6.jpg'),
                    asset('assets/images/Produk/Brand7.jpg'),
                    asset('assets/images/Produk/Brand8.jpg'),
                    asset('assets/images/Produk/Brand9.jpeg'),
                    asset('assets/images/Produk/Brand10.jpg'),
                    asset('assets/images/Produk/Brand11.jpg'),
                ]),
                'weight' => Arr::random(['0.5', '1.0','1.5', '2.0','2.5', '3.0']),
                'category' => Arr::random(['Ring', 'Necklace', 'Bracelet', 'Earring', 'Pendant', 'Piercing', 'Crowns']),
                'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged",
                'gender' => Arr::random(['man', 'woman']),
                'stock' => rand(1, 10),
            ];
        }

        for ($i = 0; $i < 5; $i++) {
            $collectionsTemp[] = [
                'id' => $i + 1,
                'name' => 'Jago ' . $i + 1,
                'image' => Arr::random([
                    asset('assets/images/background.jpeg'),
                    asset('assets/images/background2.jpg'),
                    asset('assets/images/background3.jpg'),
                ]),
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ];
        }
        $this->products = $productsTemp;
        $this->collections = $collectionsTemp;
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        return view('products', ['products' => $this->products]);
    }
    public function allCollection()
    {
        return view('allCollection', ['collections' => $this->collections]);
    }
    public function cart()
    {
        $products = Arr::random($this->products, 4);
        return view('cart', ['products' => $products]);
    }
    public function profile()
    {
        $products = Arr::random($this->products, 2);
        return view('profile', ['products' => $products]);
    }
    public function collectionOne()
    {
        $products = Arr::random($this->products, 4);
        return view('collectionOne', ['products' => $products]);
    }
    public function transactionOne()
    {
        return view('transactionOne');
    }
    public function transactionTwo()
    {
        return view('transactionTwo');
    }
    public function productOne(int $id)
    {
        $product = Arr::first($this->products, function ($product) use ($id) {
            return $product['id'] === $id;
        });
        return view('productOne', ['product' => $product]);
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function forgotPassword()
    {
        return view('forgotPassword');
    }

    public function searchProduct(Request $request)
    {
        //search incase sensitive
        $product = Arr::first($this->products, function ($product) use ($request) {
            return strtolower($product['name']) === strtolower($request->search);
        });

        if (!$product) {
            toastr()->error('Product not found');
            return redirect()->back();
        }

        return redirect()->route('product-one', ['id' => $product['id']]);
    }
}