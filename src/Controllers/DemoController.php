<?php

namespace Ninhpham\Demo\Controllers;

use Illuminate\Http\Request;
use Ninhpham\Demo\Inspire;

class DemoController {

    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('demo::demo', compact('quote'));
    }
}
   