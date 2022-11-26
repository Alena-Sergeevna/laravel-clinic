<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Napravlenie;
use App\Models\Service;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return view('client.index', ['directions' => Napravlenie::all()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function napravlenie(Request $request)
    {
        return view('client.napravlenie', ['napravlenie' => Napravlenie::query()->with('services')->find($request->id)]);
    }

    /**
     * @return string
     */
    public function services()
    {
        return view('client.services', ['napravlenies' => Napravlenie::query()->with('services')->get()]);
    }

    /**
     * @return string
     */
    public function special()
    {
        return view('client.special', ['doctors' => Doctor::query()->with('role', 'napravlenie')->get()]);
    }
}
