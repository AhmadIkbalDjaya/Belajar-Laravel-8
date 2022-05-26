<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"=>"Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author"=>"Ahmad Ikbal Djaya",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, ea deserunt. Unde commodi quaerat accusamus? Ipsa natus adipisci illo assumenda accusamus recusandae placeat accusantium, tempora suscipit dolorem sunt reprehenderit a. Sapiente ex fugiat sint officia quo quam ratione hic itaque doloribus provident in quis, sed est iure rerum quae corrupti vel debitis saepe mollitia illum recusandae obcaecati eveniet eaque? Blanditiis doloribus, delectus quasi pariatur laboriosam consequuntur sequi maiores incidunt praesentium nemo soluta ab distinctio officia illo itaque, iure fuga consequatu?"
        ],
        [
            "title"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=>"Agung Umar",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dignissimos fuga perspiciatis laborum voluptate dolore quisquam sit modi saepe ducimus nisi quia quae soluta quod, nesciunt quaerat, tempore quo nemo dolorum repudiandae in ipsam fugit ab. Doloremque quas quaerat ullam reprehenderit voluptatem obcaecati placeat. In reprehenderit temporibus distinctio dolorem corporis sapiente iste sint voluptas libero laborum totam recusandae similique numquam nisi assumenda debitis accusamus, enim suscipit nobis molestiae. Autem amet in a consectetur eius magnam odio, esse, id aperiam debitis dolores exercitationem explicabo totam voluptatibus. Ex libero magnam nobis ea corporis repudiandae facilis eius, necessitatibus adipisci harum distinctio, inventore perspiciatis?"
        ]
    ];

    public static function all(){
        // kareana $blog_post adalah static maka kita memanggilnya tidak menggunakan $this-> tapi menggunakan self::
        // self::dada       => berfungsi unutk memanggil protie static
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        // self:: untuk mengakses property static sedangkan static:: untuk mengakses method static
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);


        
    }
}
