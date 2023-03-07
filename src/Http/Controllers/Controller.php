<?php

namespace Mshukurlu\Blogable\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $frontendLayout;
    public function __construct()
    {
        $this->frontendLayout = 'blogable::'.config('blogable.template_name').'.';
    }
}
