<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Import;
use Excel;

class CoreController extends Controller
{
    public function index ()
    {
        return view('core.import.index');
    }

    public function import (Request $request)
    {
        $rows = Excel::toArray(new Import, $request->file('file'));
        return view('core.import.list', compact('rows'));
    }
}
