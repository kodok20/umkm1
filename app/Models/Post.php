<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Yazid Abdillah',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, perferendis. Molestias, fugiat iste itaque velit saepe, ex voluptates consequatur dicta, rerum doloremque modi labore vero laboriosam omnis non aliquid mollitia.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Yazid Abdillah',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, perferendis. Molestias, fugiat iste itaque velit saepe, ex voluptates consequatur dicta, rerum doloremque modi labore vero laboriosam omnis non aliquid mollitia.'    
            ]
            ];
    }
    public static function find ($slug){
     /*    return $post =Arr::first(static::all(), function($post) use ($slug) {
            return $post['slug'] == $slug;
           }); */
           return $post =Arr::first(static::all(), fn ($post) => $post ['slug'] == $slug);
           return view('post', ['title' => 'Single Post', 'post' =>$post ]);
    }
}