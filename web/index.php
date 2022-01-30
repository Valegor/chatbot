<?php

const TOKEN = '5266274068:AAGgJojw6PqmSzoP2-26EEBA0chpLEUzYvs';

const BASE_ULR = 'https://api.telegram.org/bot' . TOKEN . '/';

$url = BASE_ULR . 'getUpdates';

$res = json_decode(file_get_contents($url));

debug($res);


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}
