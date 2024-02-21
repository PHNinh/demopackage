<?php

namespace Ninhpham\Demo;

use Illuminate\Support\Facades\Http;

class Test {
    public function demo() {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');

        return $response['title'] . ' -' . $response['userId'] . ' - ???';
    }
}