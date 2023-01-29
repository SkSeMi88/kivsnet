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
    return view('welcome');
});

Route::get('/users/create', function () {
    return view('.users.create');
});

Route::post('/users/create', function () {
    dump($_REQUEST);
    var_dump($_REQUEST);
    foreach($_REQUEST AS $k=>$v)
    {
        echo "<hr>$k=>$v";
    }

    $translit   = [
        "а" => "a",
        "б" => "a",
        "в" => "a",
        "г" => "a",
        "д" => "a",
        "е" => "a",
        "ё" => "a",
        "ж" => "xh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "p",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "ph",
        "х" => "h",
        "ц" => "ts",
        "щ" => "a",
        "щ" => "a",
        "ъ" => "a",
        "ы" => "y",
        "ь" => "_",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
    ];

    echo "<br>";
    $email_ru = implode(".",[strtolower($_REQUEST["name"]), strtolower($_REQUEST["fname"])]);
    // print_r($email_ru);
    // echo"<br>".strlen($email_ru);
    // echo"<br>".$email_ru[1];

    $email  = "";
    for($i=0; $i<strlen($email_ru); $i++)
    {
        // echo"<br>$email_ru[$i]";
        if (in_array($email_ru[$i], array_keys($translit)))
        {
            $email  .= $translit[$email_ru[$i]];
            continue;
        }
        $email  .= $email_ru[$i];
        echo $email_ru[$i];
    }
    echo "<hr>".$email;


    return view('.users.create');
});


Route::get('/users/list', function () {
    return view('.users.list');
});

Route::get('/users/card', function () {
    return view('.users.card');
});

Route::get('/cui', function () {
    return view('.mkutsui.mkutsui');
});

Route::get('/skill', function () {
    return view('.skill.index');
});

Route::get('/test', function () {
    return view('.users.test');
});



