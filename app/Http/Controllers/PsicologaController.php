<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Psicologa;
use App\Models\Aluno;
use App\Models\Solicitacao;
use App\Models\SolicitacaosAlunos;



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

        $users = DB::select("SELECT * FROM users");
        $solicitacaos = DB::select("SELECT * FROM solicitacaos");
        //$solicitacaos = DB::select("SELECT * FROM solicitacaos 
                                    //JOIN data_solicitacaos on Solicitacaos.data_solicitacaos_idDataSolicitacao = data_solicitacaos.idDataSolicitacao");
                                   // WHERE solicitacaos.id = ?", [$id]); // [obj], []

        return view("psicologa/create")
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
        
        $solicitacao = new Solicitacao();
        $solicitacao->comentario = $request->comentario;
        $solicitacao->atdGrupo = $request->atdGrupo;
        $solicitacao->ativo = $request->input('ativo') ? 1 : 0;
        $solicitacao->save();
        $novoId = $solicitacao->id;
        //echo"id".$novoId;

        $solicitacaosAluno = new SolicitacaosAlunos();
        $solicitacaosAluno->Alunos_idUser = $request->idUsers; // Pega o id do usuário que está logado
        $solicitacaosAluno->Solicitacaos_id = $novoId;      
        $solicitacaosAluno->estado = "A";
        $solicitacaosAluno->save();
       
        return redirect('psicologa/show');
       // return view("psicologa/create")->with("solicitacaos", $solicitacao);

    }
    public function show(Request $request)
    {
        // $solicitacaos = DB::table('alunos')
        // ->join('solicitacaos_alunos', 'alunos.idUser', '=', 'solicitacaos_alunos.Alunos_idUser')
        // ->join('solicitacaos', 'solicitacaos_alunos.Solicitacaos_id', '=', 'solicitacaos.id')
        // ->join('data_solicitacaos', 'data_solicitacaos.idDataSolicitacao', '=', 'data_solicitacaos.idDataSolicitacao')  
        // ->join('users', 'alunos.idUser', '=', 'users.id') // Junção com a tabela 'users'
        // ->select('users.name as user_name', 'alunos.curso', 'alunos.fase', 'solicitacaos.comentario', 'solicitacaos.atdGrupo')
        // ->get();

   // dd($solicitacoes);

         $solicitacaos = DB::table('solicitacaos')
        ->join('solicitacaos_alunos', 'id', '=', 'solicitacaos_alunos.Solicitacaos_id')
        ->join('Alunos', 'idUser', '=', 'solicitacaos_alunos.Alunos_idUser')
        ->join('Users', 'Users.id', '=', 'Alunos.idUser')
        ->select('users.name as user_name', 'alunos.curso', 'alunos.fase', 'solicitacaos.comentario', 'solicitacaos.atdGrupo')
        ->get();

        return view('psicologa.show')->with('solicitacaos',$solicitacaos);

    }

    public function confirmarSolicitacao(Request $request){

        // echo"chegou aqui".$id;

        $solicitacao_id = $request->input('solicitacao_id');
    
        if ($request->has('action')) {
            $action = $request->input('action');
            
            // Extraia a ação e o ID da ação
            $parts = explode('_', $action);
            $action_name = $parts[0];
            $solicitacao_id = $parts[1];
    
            if ($action_name === 'confirmar') {
                // Lógica para confirmação
            } elseif ($action_name === 'descartar') {
                // Lógica para descartar
            } elseif ($action_name === 'solicitar') {
                // Lógica para solicitar nova data
            }
    
            // Faça o que for necessário com $solicitacao_id
            echo "chegou aqui" . $solicitacao_id;
        }
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
