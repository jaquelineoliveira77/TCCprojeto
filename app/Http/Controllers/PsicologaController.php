<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Psicologa;
use App\Models\Aluno;
use App\Models\Solicitacao;
use App\Models\Data_Solicitacao;



class PsicologaController extends Controller
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


      return view('psicologa.index');
    }


    public function listar()
    {
            echo"<h1> listar </h1>";

      return view('psicologa.listar');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $solicitacaos = DB::select("SELECT * FROM solicitacaos");
        //$solicitacaos = DB::select("SELECT * FROM solicitacaos 
                                    //JOIN data_solicitacaos on Solicitacaos.data_solicitacaos_idDataSolicitacao = data_solicitacaos.idDataSolicitacao");
                                   // WHERE solicitacaos.id = ?", [$id]); // [obj], []

        return view("psicologa/create")->with("solicitacaos", $solicitacaos);
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
        $solicitacao->ativo = $request->input('ativo') ? 1 : 0;
        $solicitacao->save();

        $data_solicitacao = new Data_Solicitacao();
        $data_solicitacao->Solicitacaos_id = $data_solicitacao->idDataSolicitacao;
        $data_solicitacao->periodo = $request->periodo;
        $data_solicitacao->save();
       

        return redirect('psicologa/show');
       // return view("psicologa/create")->with("solicitacaos", $solicitacao);
    }
    public function show(Request $request)
    {
        $solicitacaos = DB::table('alunos')
        ->join('solicitacaos_alunos', 'alunos.idUser', '=', 'solicitacaos_alunos.Alunos_idUser')
        ->join('solicitacaos', 'solicitacaos_alunos.Solicitacaos_id', '=', 'solicitacaos.id')
        ->join('data_solicitacaos', 'data_solicitacaos.idDataSolicitacao', '=', 'data_solicitacaos.idDataSolicitacao')  
        ->join('users', 'alunos.idUser', '=', 'users.id') // Junção com a tabela 'users'
        ->select('users.name as user_name', 'alunos.curso', 'alunos.fase', 'solicitacaos.comentario', 'solicitacaos.atdGrupo', 'data_solicitacaos.periodo')
        ->get();

   // dd($solicitacoes);


        return view('psicologa.show')->with('solicitacaos',$solicitacaos);

    }


    public function edit($id)

    {
        //mostra o form de edição do recurso id

    }
    public function update(Request $request, $id)

    {

    }

    public function destroy($id)

    {

    }

    // public function exibirBotao()
    // {
    //     return view('psicologa.show'); // Página com o botão de confirmação
    // }

    // public function exibirConfirmacao(Request $request)
    // {
        
    //     //console.log("teste");
    //     $confirmacao = $request->input('confirmacao'); // Obtém a confirmação do botão

    
    //     // Aqui você pode processar a confirmação e passar os dados para a página de confirmação
    //     // return view('psicologa.agendDia', ['confirmacao' => $confirmacao]);
    //     return redirect()->route('psicologa.agendDia');
    // }


}
