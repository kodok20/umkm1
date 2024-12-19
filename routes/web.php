<?php
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UMKM;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\Auth\LoginController;
Route::get('/', function () {
    return view('home', ['title' => 'Home page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> Post::all()]);
});


Route::get('/posts/{slug}', function ($slug) {
   
    

       $post = Post::find($slug);
       return view('post', ['title' => 'Single Post', 'post' =>$post ]);
});
Route::get('/about', function () {
    return view('about',['title' => 'about']);
});
Route::get('/contact', function () {
    return view('contact',['title' => 'contact']);
});

Route::resource('umkms', UMKMController::class);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['web'])->group(function () { Route::get('/', [UMKMController::class, 'index'])->name('umkms.index'); Route::get('/umkms/create', [UMKMController::class, 'create'])->name('umkms.create'); Route::post('/umkms', [UMKMController::class, 'store'])->name('umkms.store'); Route::get('/umkms/{umkm}', [UMKMController::class, 'show'])->name('umkms.show'); Route::get('/umkms/{umkm}/edit', [UMKMController::class, 'edit'])->name('umkms.edit'); Route::put('/umkms/{umkm}', [UMKMController::class, 'update'])->name('umkms.update'); Route::delete('/umkms/{umkm}', [UMKMController::class, 'destroy'])->name('umkms.destroy'); 
});

