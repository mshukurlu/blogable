<?php

namespace Mshukurlu\Blogable\Http\Controllers\Frontend;

use Mshukurlu\Blogable\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){

        return view($this->frontendLayout.'pages/index');
    }
}
