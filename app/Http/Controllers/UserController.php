<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class UserController extends Controller
{
    public function index():View
    {
        $houses = House::all()->sortDesc();
        // pagination
        $houses = House::paginate(1);
        return view('pages.index', ['houses' => $houses]);
    }
}
