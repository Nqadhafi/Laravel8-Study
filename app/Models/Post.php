<?php

namespace App\Models;



class Post 
{

    private static $post = [
        [
            'slug' => 'judul-post-pertama',
            'title' => 'Judul Post pertama',
            'author' => 'Nanda',
            'body' => '
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda excepturi nam impedit, autem ea beatae, vero officiis nemo inventore architecto alias, porro placeat error recusandae iste. Quisquam alias pariatur totam non, nemo tempora, esse ipsam ea nisi, sit necessitatibus suscipit.',
        ],
        [
            'slug' => 'judul-post-kedua',
            'title' => 'Judul Post kedua',
            'author' => 'Ahmad',
            'body' => '
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda excepturi nam impedit, autem ea beatae, vero officiis nemo inventore architecto alias, porro placeat error recusandae iste. Quisquam alias pariatur totam non, nemo tempora, esse ipsam ea nisi, sit necessitatibus suscipit.',
        ]
        ];

        public static function all(){
            return collect(self::$post);
        }

        public static function find($slug){
            $postingan = static::all();
            return $postingan->firstWhere('slug', $slug);
        }
}
