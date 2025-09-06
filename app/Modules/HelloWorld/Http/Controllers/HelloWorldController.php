<?php

namespace App\Modules\HelloWorld\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("HelloWorld::welcome");
    }
}
