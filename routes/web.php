<?php

use App\Helpers\Telegram;
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

Route::get('/', function (Telegram $telegram) {
    $buttons = [
        'inline_keyboard' => [
            [
                [
                    'text' => 'button4',
                    'callback_data' => '1',
                ],
                [
                    'text' => 'button2',
                    'callback_data' => '2',
                ],
            ]
        ]
    ];
    $sendMessage = $telegram->sendMessage('380288175', 'Это текст нового сообщения');
    $sendMessage = json_decode($sendMessage);
    dd($sendMessage);
});
