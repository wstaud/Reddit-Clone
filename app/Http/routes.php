<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello/{name?}', function ($name = "World") {
    $data = ["name" => $name];

    return view('my-first-view', $data);
});

Route::get('/rolldice/{guess?}', function ($guess) {
    $roll = rand(1,6);

    if($guess == $roll){
        $message = "You guessed it!";
    }else{
        $message = "You were wrong";
    }

    $data = [
        "guess" => $guess,
        "roll" => $roll,
        "message" => $message

    ];
    return view('roll-dice', $data);
});



Route::get('/uppercase/{word}', function ($word) {
    $newWord = strtoupper($word);
    $data = [
        'word' => $word,
        'newWord' => $newWord
    ];

    return view('uppercase', $data);
});

Route::get('/increment/{number}', function ($number) {
    $newNumber = $number + 1;

    $data = [
        'number' => $number,
        'newNumber' => $newNumber
    ];

    return view('increment', $data);
});

Route::get('/add/{a}/{b}', function ($a, $b) {
    return $a + $b;
});

