<?php

namespace Ninhpham\Demo\Controllers;

use Illuminate\Http\Request;
use Ninhpham\Demo\Test;

class DemoController {

    public function __invoke(Test $test) {
        $quote = $test->demo();

        return view('demo::demo', compact('quote'));
    }
}
   