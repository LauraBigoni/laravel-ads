<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
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
        return view('session', compact('visited'));
    }
}
