<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Psicologa;
use App\Models\PsicologaCad;
use App\Models\Admin;
use App\Models\Servidor;
use Illuminate\Support\Facades\Auth;



class PsicologaCadController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); // exigindo que o usuário esteja logado para acessar qualquer método do controlador
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {

        return view('psicologa.index');
    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $servidors = DB::select("SELECT * FROM servidors");

        return view("psicologaCad/create")->with("servidors", $servidors);
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
            
            $servidor = new Servidor();
            // $servidors->superUser = $request->superUser;
            $servidor->Admins_id = Auth::admin()->id; // Pega o id do usuário que está logado
            $servidor->setor = $request->setor;
            $servidor->siape = $request->siape;
            $servidor->telefone = $request->telefone;
            $servidor->save();

            $admin = new Admin(); 
            $admin->name = $request->name;
            $admin->save();
            
            return view("psicologaCad/create")->with("servidors", $servidor);     

    }

    public function show(Request $request)
    {
        // $providencia = DB::table('providencia')
        // ->join('solicitacaos_alunos', 'alunos.idUser', '=', 'solicitacaos_alunos.Alunos_idUser')
        // ->join('solicitacaos', 'solicitacaos_alunos.Solicitacaos_id', '=', 'solicitacaos.id')
        // ->join('data_solicitacaos', 'data_solicitacaos.idDataSolicitacao', '=', 'data_solicitacaos.idDataSolicitacao')  
        // ->join('users', 'alunos.idUser', '=', 'users.id') // Junção com a tabela 'users'
        // ->select('users.name as user_name', 'alunos.curso', 'alunos.fase', 'solicitacaos.comentario', 'solicitacaos.atdGrupo', 'data_solicitacaos.periodo')
        // ->get();

        // $servidors = DB::select("SELECT * FROM servidors");

        $servidors = DB::table('servidors')
        // ->join('solicitacaos_alunos', 'id', '=', 'solicitacaos_alunos.Solicitacaos_id')
        ->join('Admins', 'admins.id', '=', 'Servidors.Admins_id')
        ->select('admins.name as admin_name', 'servidors.setor', 'servidors.siape', 'servidors.telefone')
        ->get();

   // dd($solicitacoes);


        return view('psicologaCad.show')->with('servidors',$servidors);

    }


}
