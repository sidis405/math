<?php

Route::get('math', function () {
    echo 'The calculator!';
});

Route::get('add/{first}/{second}', 'Laramind\Math\Http\Controllers\MathController@add');

Route::get('subtract/{first}/{second}', 'Laramind\Math\Http\Controllers\MathController@subtract');

Route::get('multiply/{first}/{second}', 'Laramind\Math\Http\Controllers\MathController@multiply');

Route::get('divide/{first}/{second}', 'Laramind\Math\Http\Controllers\MathController@divide');
