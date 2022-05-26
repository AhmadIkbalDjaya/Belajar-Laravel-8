<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=>"Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title"=>"About",
        "name" => "Ahmad Ikbal",
        "email" => "ikbal@djaya.ahmad",
        "image" => "mrx.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog_post = [
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

    return view('blog', [
        "title"=>"Blog",
        "posts"=>$blog_post
    ]);
});

// halaman single post
Route::get('/posts/{slug}', function($slug){
    $blog_post = [
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

    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title"=>"Single Post",
        "post"=>$new_post
    ]);
});