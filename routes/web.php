<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('products', [
        'products' => Product::latest('updated_at')->with('category', 'user')->get()
    ]);
});

Route::get('/products/{product:slug}', function(Product $product) {
    return view('product', [
        'product' => $product
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('category', [
        'category' => $category
    ]);
});

Route::get('users/{user:username}', function(User $user){
    return view('user', [
        'user' => $user
    ]);
});