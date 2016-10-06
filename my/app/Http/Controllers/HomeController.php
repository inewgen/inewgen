<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        Request $request
    ) {
        $this->request = $request;
    }

    public function index()
    {
        $input = $this->request->all();

        $view = [
            'input' => $input,
        ];

        return view('pages.home.index', $view);
    }
}
