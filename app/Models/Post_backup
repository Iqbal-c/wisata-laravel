<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, iusto esse placeat veniam quisquam nemo magni vitae, sint sit atque quasi rem, explicabo eius! Optio aliquid alias libero quaerat numquam laborum excepturi nesciunt hic laboriosam, quos dicta incidunt a iste asperiores soluta illo esse aspernatur ullam, inventore consequuntur totam magnam ab. Earum odit nemo dolorem necessitatibus in illo natus unde nihil quam. Quod dolorem rerum aperiam odio rem itaque quia voluptas, dolore, debitis et consectetur nisi magni cumque perspiciatis quae."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint amet saepe tempora cum, libero molestiae delectus veritatis ad vel recusandae. Voluptate assumenda corporis commodi. Delectus, eius debitis ipsam reprehenderit nostrum laboriosam voluptate similique quos dolor ratione voluptatum repellat, ipsum minima eum commodi expedita quod laborum perferendis? Ex aut praesentium reprehenderit consequuntur ea labore quidem corporis esse iste inventore. Hic aliquam tenetur iure sapiente quas. Libero dolorem iure obcaecati deleniti quia blanditiis incidunt, placeat sunt quidem. Placeat modi sint, incidunt rem facilis, error laboriosam ea iusto esse cum provident fugit laborum beatae exercitationem voluptatibus minus mollitia nostrum aliquam culpa corporis id."
        ]
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
