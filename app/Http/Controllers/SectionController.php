<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
   public function personnal()
    {
        return view('section_dashboard/personal', [
            'employees' => DB::table('employees')->orderByDesc('id')->paginate(10),
        ]);
    }

    public function cnss(){
       return view('section_dashboard/cnss', []);
    }
}
