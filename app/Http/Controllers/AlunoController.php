<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;
use App\Models\Solicitacao;
use App\Models\SolicitacaosAluno;
use Illuminate\Support\Facades\Auth;



class AlunoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web'); // exigindo que o usuário esteja logado para acessar qualquer método do controlador
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {

        return view('aluno.index');
    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $solicitacaos = DB::select("SELECT * FROM solicitacaos");

        return view("aluno/create")->with("solicitacaos", $solicitacaos);
    }


 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $solicitacao = new Solicitacao();
        $solicitacao->comentario = $request->comentario;
        $solicitacao->atdGrupo = $request->atdGrupo;
        $solicitacao->ativo = $request->ativo;
        $solicitacao->save();

        $solicitacaosAluno = new SolicitacaosAluno();
        $solicitacaosAluno->Alunos_idUser = Auth::user()->id; // Pega o id do usuário que está logado
        $solicitacaosAluno->Solicitacaos_id = $solicitacao->id;      
        $solicitacaosAluno->estado = "A";
        $solicitacaosAluno->save();

        return view("aluno/create")->with("solicitacaos", $solicitacao);

    }


    public function show(Request $request)
    {
        // $solicitacaos = DB::table('alunos')
        // ->join('solicitacaos_alunos', 'alunos.idUser', '=', 'solicitacaos_alunos.Alunos_idUser')
        // ->join('solicitacaos', 'solicitacaos_alunos.Solicitacaos_id', '=', 'solicitacaos.id')
        // // ->join('data_solicitacaos', 'data_solicitacaos.idDataSolicitacao', '=', 'data_solicitacaos.idDataSolicitacao')  'data_solicitacaos.periodo
        // ->join('users', 'alunos.idUser', '=', 'users.id') // Junção com a tabela 'users'
        // ->select('users.name as user_name', 'alunos.curso', 'alunos.fase', 'solicitacaos.comentario', 'solicitacaos.atdGrupo')
        // ->get();



   // dd($solicitacoes);


        // return view('aluno.show') ->with('solicitacaos',$solicitacaos);
        return view('aluno.show');


    }


}
