<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorNino;


class TutorNinoController extends Controller
{
      public function index(Request $request)
    {
        $search = $request->input('search');

        $query = TutorNino::query();

        if ($search) {
            $query->where('id_tutor' , $search);
        }

        $datos = $query->get();

        return view('/vistaTutoresNino/index', compact('datos'));
    }
}
