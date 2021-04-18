<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    public function index(Request $request)
    {
        return view('examples/index');
    }

    public function snippet(Request $request)
    {
        return view('examples/snippet');
    }

    public function snippetWithParams(Request $request)
    {
        return view('examples/snippet-with-params');
    }

    public function snippetFromCache(Request $request)
    {
        return view('examples/snippet-from-cache');
    }

    public function snippets(Request $request)
    {
        return view('examples/snippets');
    }

    public function snippetsWithParams(Request $request)
    {
        return view('examples/snippets-with-params');
    }

    public function snippetsFromCache(Request $request)
    {
        return view('examples/snippets-from-cache');
    }
}
