<?php

namespace Ninhpham\Demo;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');

        return $response['title'] . ' -' . $response['userId'] . ' - ???';
    }
}