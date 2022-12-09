<?php

namespace App\Models;


class Berita
{
    private static $berita = [
        [
            "title" => "Pergantian Pengurus Tp.2O21/2O22",
            "slug" => "pergantian-pengurus-tp-2O21-2O22",
            "author" => "Sarwan Haiban Hazazi",
            "img"   => "/frontend/images/osis.jpg",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae officiis blanditiis quibusdam dolore mollitia iste 
                    optio alias numquam, iusto ullam sunt magni accusamus odit ex odio harum atque recusandae ipsam. Explicabo, temporibus 
                    eligendi. Quo, dolores unde repudiandae assumenda fuga itaque laboriosam esse, nostrum, accusantium non officia culpa officiis
                    veniam omnis corporis? Voluptas reprehenderit doloribus, suscipit magni expedita facere nostrum quaerat debitis atque ipsam 
                    asperiores quam maxime, consectetur obcaecati deserunt! Dolor illum est soluta quasi, ea iure reiciendis distinctio, voluptas 
                    maiores provident obcaecati aut harum consequatur eos molestias veniam! Ipsa eos sint veritatis fugit fugiat ratione ut repellat aspernatur atque."
        ],
        [
            "title" => "Wisuda Tp.2O21/2O22",
            "slug" => "wisuda-tp-2O21-2O22",
            "author" => "Sarwan Haiban Hazazi",
            "img" => "/frontend/images/wisuda.jpg",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae officiis blanditiis quibusdam dolore mollitia iste 
                    optio alias numquam, iusto ullam sunt magni accusamus odit ex odio harum atque recusandae ipsam. Explicabo, temporibus 
                    eligendi. Quo, dolores unde repudiandae assumenda fuga itaque laboriosam esse, nostrum, accusantium non officia culpa officiis
                    veniam omnis corporis? Voluptas reprehenderit doloribus, suscipit magni expedita facere nostrum quaerat debitis atque ipsam 
                    asperiores quam maxime, consectetur obcaecati deserunt! Dolor illum est soluta quasi, ea iure reiciendis distinctio, voluptas 
                    maiores provident obcaecati aut harum consequatur eos molestias veniam! Ipsa eos sint veritatis fugit fugiat ratione ut repellat aspernatur atque."
        ]
    ];

    public static function all()
    {
        return collect(self::$berita);
    }

    public static function find($slug)
    {
        $blogberita = static::all();
        return $blogberita->firstWhere('slug', $slug);
    }
}
