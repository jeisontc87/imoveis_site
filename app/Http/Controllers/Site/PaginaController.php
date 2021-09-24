<?php

namespace App\Http\Controllers\Site;

use App\Pagina;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaginaController extends Controller
{
    public function sobre()
    {
        $pagina = Pagina::where('tipo', '=', 'sobre')->first();
        return view('site.sobre', compact('pagina'));
    }
}
