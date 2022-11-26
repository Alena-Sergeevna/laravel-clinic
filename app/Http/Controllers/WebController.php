<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function about()
    {
       return redirect(route('client'));
    }

}
