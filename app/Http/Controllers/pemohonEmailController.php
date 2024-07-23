<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use Illuminate\Http\Request;
use Illuminate\View\View;


class pemohonEmailController extends Controller
{
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {

        //get all pemohons
        $pemohons = Pemohon::latest()->paginate(10);

        return view('formClient.formEmail', compact('pemohons'));
    }
}
