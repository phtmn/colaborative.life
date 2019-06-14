<?php

namespace App\Http\Controllers\Investidor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Perfil;
use App\Models\Osc;

class DashboardController extends Controller
{

    public function index(){

        return view('dashboard.index',['tab'=>'dashboard']);
    }
}
