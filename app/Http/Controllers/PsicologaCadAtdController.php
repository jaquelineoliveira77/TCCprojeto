<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PsicologaCad;
use App\Models\Aluno;
use App\Models\Solicitacao;
use App\Models\Atendimento;
use App\Models\PsicologaCadAtd;


class PsicologaCadAtdController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); // exigindo que o admin esteja logado para acessar qualquer método do controlador
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function index()
    {


      return view('psicologaCadAtd.create');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
     {
 
         $atendimentos = DB::select("SELECT * FROM atendimentos");
         $providencias = DB::select("SELECT * FROM providencias");
         $motivos = DB::select("SELECT * FROM motivos");
         $solicitacaos = DB::select("SELECT * FROM solicitacaos");
         $users = DB::select("SELECT * FROM users");
            // $atendimentos = DB::select("SELECT atendimentos.idUsers,
            //                             atendimentos.intervencao,
            //                             atendimentos.obervacoes,
            //                             atendimentos.users_id,
            //                             users.name,
                                     
            //                     FROM atendimentos
            //                     JOIN users on atendimentos.users_id = user.id");
                                // -- WHERE atendimentos.solicitacaos_id = ?", [$id]); // [obj], []
 
         return view("psicologaCadAtd/create")
         ->with("atendimentos", $atendimentos)
         ->with("providencias", $providencias)
         ->with("motivos", $motivos)
         ->with("solicitacaos", $solicitacaos)
         ->with("users", $users);

     }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $atendimento = new Atendimento();
        $atendimento->Solicitacaos_id = $request->Solicitacaos_id;
        $atendimento->idProvidencia = $request->idProvidencia;
        $atendimento->idUsers = $request->idUsers;
        $atendimento->idMotivos = $request->idMotivos;
        // echo"motivo".$atendimento->idMotivos;
        $atendimento->intervencao = $request->intervencao;
        $atendimento->observacoes = $request->observacoes;
        $atendimento->save();

        // $user = new User();
        // $user->name = $request->name;
        // $user->save();

        // $providencia = new Providencia();
        // $providencia->descricao = $request->descricao;
        // $providencia->save();

        // $motivo = new Motivo();
        // $motivo->descricao = $request->descricao;
        // $motivo->save();

       

        return redirect('psicologaCadAtd/show');
       
     }


    public function show(Request $request)
    {
        $atendimentos = DB::table('atendimentos')
        ->join('Solicitacaos', 'atendimentos.Solicitacaos_id', '=', 'solicitacaos.id')
        ->join('providencias', 'atendimentos.idProvidencia', '=', 'providencias.idProvidencia') 
        ->join('motivos', 'atendimentos.idMotivos', '=', 'motivos.idMotivos') 
        ->join('users', 'atendimentos.idUsers', '=', 'users.id') // Junção com a tabela 'users'
        ->join('alunos', 'atendimentos.idUsers', '=', 'users.id')
        
        ->select('users.name as user_name', 'solicitacaos.comentario',
         'providencias.descricao as providencia_descricao', 'motivos.descricao as motivo_descricao',
         'atendimentos.intervencao', 'atendimentos.observacoes',
         'alunos.curso', 'alunos.fase', 'alunos.matricula', 'alunos.telefone', )
        ->get();

   // dd($solicitacoes);


        return view('psicologaCadAtd.show')->with('atendimentos',$atendimentos);

    }

    


}
