<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;
use App\Models\AlunoCad;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AlunoCadController extends Controller
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

        $alunos = DB::select("SELECT * FROM alunos");

        return view("alunoCad/create")->with("alunos", $alunos);
    }


 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        // $user = new User();  //primeiro chave dourada(primária) tem que gravar
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;

        // if($user->save()){
            //mt_rand(11111111,99999999); gerar senha e mandar para o aluno
            //para novos atendimentos mandar emial para psicóloga, para não precisar ficar olhan do o sistema / diferencial
            
            $aluno = new Aluno();
            // $aluno->idUser = $user->id;
            $aluno->idUser = Auth::user()->id; // Pega o id do usuário que está logado
            $aluno->curso = $request->curso;
            $aluno->fase = $request->fase;
            $aluno->matricula = $request->matricula;
            $aluno->telefone = $request->telefone;
            $aluno->nomeResponsavel = $request->nomeResponsavel;
            $aluno->telefoneResponsavel = $request->telefoneResponsavel;
            $aluno->deficiencia = $request->deficiencia;
            // $aluno->estado = "A";
            $aluno->save();

            return view("alunoCad/create")->with("alunos", $aluno);
        // }

        

    }


}
