<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PsicologaCad;
use App\Models\Aluno;
use App\Models\Solicitacao;
use App\Models\AlunoHistor;


class AlunoHistorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web'); // exigindo que o admin esteja logado para acessar qualquer método do controlador
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function histor()
    {

      return view('aluno.histor');
    }

}
