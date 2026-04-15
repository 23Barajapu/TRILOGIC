<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanans = \App\Models\Layanan::take(4)->get();
        return view('index', ['layanans' => $layanans]);
    }

    public function pageView(Request $request)
    {
        if (view()->exists($request->path())) {
            $data = [];
            if ($request->path() === 'service') {
                $data['layanans'] = \App\Models\Layanan::all();
            } elseif ($request->path() === 'index') {
                $data['layanans'] = \App\Models\Layanan::take(4)->get();
            }
            return view($request->path(), $data);
        } else {
            abort(404);
        }
    }
}
