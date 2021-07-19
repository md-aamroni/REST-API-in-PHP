<?php

require_once './vendor/autoload.php';
require_once 'config/app.php';

use App\Http\Controllers\ApiController;

$api = new ApiController();

route('posts', $api->index(), function ($data) {
	arrayResponse($data);
});

route('post', $api->show(2), function ($data) {
	arrayResponse($data);
});
