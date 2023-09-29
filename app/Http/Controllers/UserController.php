<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class UserController extends Controller
{
    public function index():View
    {
        return view('pages.index');
    }
}
