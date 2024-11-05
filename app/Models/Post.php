<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'udit',
                'body' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Similique, omnis autem. Possimus sapiente, saepe, repudiandae veritatis vero eaque temporibus eligendi qui, distinctio molestiae nisi cumque assumenda fugit? Incidunt, fuga architecto?'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'uditz',
                'body' => 'poemon'
            ],
        ];
    }

}

?>