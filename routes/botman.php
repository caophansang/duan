<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
$botman->listen('Hi', function ($bot) {
	error_log('Some message here.');
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
