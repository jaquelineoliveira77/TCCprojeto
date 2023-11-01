<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentosController extends Controller
{

    public function index(){


        echo"<h1> listar </h1>";

        return view('psicologa.listar');

        // $solicitacaos = DB::table('alunos')
        // ->join('solicitacaos_alunos', 'alunos.idUser', '=', 'solicitacaos_alunos.Alunos_idUser')
        // ->join('solicitacaos', 'solicitacaos_alunos.Solicitacaos_idSolicitacao', '=', 'solicitacaos.idSolicitacao')
        // ->join('users', 'alunos.idUser', '=', 'users.id') // Junção com a tabela 'users'
        // ->select('users.name as user_name', 'alunos.curso', 'alunos.fase', 'solicitacaos.comentario')
        // ->get();
        // return view('psicologa.show')->with('solicitacaos',$solicitacaos);
    }
}
