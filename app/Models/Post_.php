<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Luhur Sutekno",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, illo, nesciunt excepturi sunt error modi reiciendis, natus tenetur repellendus at placeat quaerat quae dolore. Fugit pariatur error iure ipsum molestias! Reprehenderit eius voluptate tempore sed aspernatur modi in quae perferendis? Temporibus earum alias saepe. Nesciunt harum repellat quam aliquid modi cumque libero distinctio deleniti eos, aut tempore molestias dolore hic quasi dolor nihil perferendis non perspiciatis officiis reiciendis. Nobis maxime fugit porro, deserunt recusandae aliquid quis mollitia eius harum magni."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nur Lilis K",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, illo, nesciunt excepturi sunt error modi reiciendis, natus tenetur repellendus at placeat quaerat quae dolore. Fugit pariatur error iure ipsum molestias! Reprehenderit eius voluptate tempore sed aspernatur modi in quae perferendis? Temporibus earum alias saepe. Nesciunt harum repellat quam aliquid modi cumque libero distinctio deleniti eos, aut tempore molestias dolore hic quasi dolor nihil perferendis non perspiciatis officiis reiciendis. Nobis maxime fugit porro, deserunt recusandae aliquid quis mollitia eius harum magni."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
