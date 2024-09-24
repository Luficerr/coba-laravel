<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Lutfi Faiz Ziyadatullah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, itaque ea? Adipisci explicabo laboriosam error facilis debitis fuga harum. Incidunt, repellendus omnis nobis reiciendis, eos quaerat, libero ullam voluptatem odit minima recusandae dolorem minus saepe? Illum aliquid quam deserunt quidem officia impedit nesciunt modi ut incidunt ab similique ipsum itaque animi, maiores adipisci tempora, eaque culpa voluptas eligendi sequi sit dolorem. Tenetur non hic ipsa unde omnis iure eum porro, earum cum deleniti expedita iste corrupti iusto dolor. Nam, fugiat."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Xaviera Putri Ardianingsih Listyo",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga inventore dolor dolorem soluta tenetur alias a eveniet quae perferendis nobis. Nostrum expedita architecto cumque placeat amet et quas temporibus perspiciatis ipsa autem, adipisci inventore corrupti quo labore atque. In expedita earum, ut doloremque, distinctio fugiat vero voluptates tempora qui libero veritatis, quaerat molestias ab quisquam adipisci laboriosam debitis culpa eligendi recusandae ducimus tenetur modi dolores! Maxime voluptas sed deleniti delectus vitae. Dicta nobis, aspernatur quibusdam provident quis adipisci nam, magnam qui impedit non fugit id ipsum tempore similique aliquam quasi iusto dolores maiores doloribus quisquam necessitatibus eos dolorum cum autem."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
