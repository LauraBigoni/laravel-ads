<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $visited = true;
        if ($request->session()->has('visited')) {
            $this->$visited = false;
        } else {
            session(['visited' => true]);
        }
        return view('cookie', compact('visited'));
    }
}
