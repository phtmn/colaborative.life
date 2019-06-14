<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard',[
            'oscs'      => DB::table('oscs')->count(),
            'projetos'  => DB::table('projetos')->count(),
            'users'     => DB::table('users')->count(),
            'investimentos' => DB::table('investimentos')->sum('valor')
        ]);
    }
}
