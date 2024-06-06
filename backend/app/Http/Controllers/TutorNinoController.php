<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorNino;


class TutorNinoController extends Controller
{
      public function index2(Request $request)
    {
        $search2 = $request->input('search2');

        $query = TutorNino::query();

        if ($search2) {
            $query->where('id_tutor' , $search2);
        }

        $datos = $query->get();

        return view('/nino/view', compact('datos'));
    }
}
