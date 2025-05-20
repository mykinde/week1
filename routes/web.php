<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// Route::get('/', [WelcomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});




Route::get('/user/{id}', function ($id) {
    return "User ID is $id";
});

/* Route::get('/post/{slug?}', function ($slug = 'default-post') {
    return "Post slug: $slug";
});

Route::get('/contact', function () {
  
      return "<center> <h1>Contact Page</h1></center>";
    
})->name('contact');

// $url = route('contact'); // Generates URL for contact route
 */


//  use App\Http\Controllers\PageController;

// Route::get('/about', [PageController::class, 'about']);
// Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//  use App\Http\Controllers\SiteController;
// Route::get('/home', [SiteController::class, 'home']);
// Route::get('/services', [SiteController::class, 'services']);

use App\Models\Post;

Route::get('/create-post', function () {
    Post::create([
        'title' => 'First Post',
        'body' => 'This is my first blog post using Laravel!'
    ]);

    return 'Post created!';
});


Route::get('/posts', function () {
    return \App\Models\Post::all();
});


Route::get('/create-product', function () {
    \App\Models\Product::create([
        'name' => 'Laptop',
        'description' => 'A powerful machine.',
        'price' => 1299.99
    ]);

    return 'Product created!';
});




Route::get('/add-product', function () {
    \App\Models\Product::create([
        'name' => 'Monitor',
        'description' => '24-inch LED screen',
        'price' => 249.99
    ]);

    return 'Product added!';
});


Route::get('/products', function () {
    return \App\Models\Product::all();
});
Route::get('/products/{id}', function($id) {
    return \App\Models\Product::findOrFail($id);
});

Route::get('/update-product/{id}', function ($id) {
    $product = \App\Models\Product::findOrFail($id);
    $product->price += 100;
    $product->save();

    return "Updated product #{$id} price!";
});

/* 

php artisan tinker
php artisan tinker --execute="dd(User::find(1)->email)"
$products = \App\Models\Product::all();
$product = \App\Models\Product::find(1);
$cheapProducts = \App\Models\Product::where('price', '<', 1000)->get();
$names = \App\Models\Product::select('name', 'price')->get();
$product = \App\Models\Product::where('name', 'Laptop')->first();
$topProducts = \App\Models\Product::orderBy('price', 'desc')->take(5)->get();
exit

$table->softDeletes();


use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {
    use SoftDeletes;
}

\App\Models\$product->delete(); // Will not be permanently removed
\App\Models\Product::withTrashed()->get();
\App\Models\Product::onlyTrashed()->restore();
*/

// ----Assignment
use Illuminate\Support\Facades\Hash;
Route::get('/create-users', function () {
    \App\Models\User::create([
        'name' => 'Firstname Lastname',
        'email' => 'mail@gmail.com.',
        'password' => Hash::make('password'),
    ]);

    return 'Users created!';
});



Route::get('/users', function () {
    $users = \App\Models\User::get();
    return view('users', compact('users'));
   }); 



Route::get('/products', function () {
    $products = \App\Models\Product::all();
    return view('products.index', compact('products'));
});



// add tutorils
Route::get('/service', function () {
    $services = ['Web Design', 'SEO', 'App Development'];
    return view('service', compact('services'));
});



// ----Assignment / Task
use App\Models\Product;

Route::get('/create-product-list', function () {
    Product::create(['name' => 'iPhone 15 Pro', 'price' => 1200]);
    Product::create(['name' => 'Samsung Galaxy Pro', 'price' => 950]);
    Product::create(['name' => 'Infinix Smart', 'price' => 350]);
    Product::create(['name' => 'HP Laptop Pro', 'price' => 1050]);
    Product::create(['name' => 'Tecno Spark', 'price' => 250]);
    return 'Products created!';
});



Route::get('/cheap-products', function () {
    $products = Product::where('price', '<', 1000)->get();
    return view('products.cheap', compact('products'));
});



Route::get('/filtered-products', function () {
    $products = Product::where('price', '>', 500)
        ->where('name', 'like', '%Pro%')
        ->get();
    return view('products.filtered', compact('products'));
});


// TURN ALL PRODUCTS TO ITEMS

// php artisan make:model Item -m
// php artisan make:controller ItemController --resource

use App\Http\Controllers\ItemController;

Route::resource('items', ItemController::class);

Route::get('/trash', [ItemController::class, 'trash'])->name('trash');
