<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Psicologa;
use App\Models\PsicologaCad;
use App\Models\Admin;
use App\Models\Servidor;
use App\Models\Motivo;
use Illuminate\Support\Facades\Auth;



class MotivoController extends Controller
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
 
         $motivos = DB::select("SELECT * FROM motivos");
 
         return view("motivo/create")->with("motivos", $motivos);
     }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $motivo = new Motivo();
        $motivo->descricao = $request->descricao;
        $motivo->save();
        //echo"descricao". $request->descricao;
        
       

        return redirect('motivo/show');
       //return view("psicologa/create")->with("solicitacaos", $solicitacao);
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

        $motivos = DB::select("SELECT * FROM motivos");

   // dd($solicitacoes);


        return view('motivo.show')->with('motivos',$motivos);

    }
 

   

}
