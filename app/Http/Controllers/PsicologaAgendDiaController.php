<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PsicologaCad;
use App\Models\Aluno;
use App\Models\Solicitacao;


class PsicologaAgendDiaController extends Controller
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

    //  meu index
    public function agendDia()
    {

      return view('psicologa.agendDia');
    }


    public function confirmacao()
    {
       
    }

    public function agendamentoConcluido()
    {
        
    }





    // public function confirmarAtendimento(Request $request)
    // {
    //     // Aqui você pode adicionar a lógica para processar a confirmação de atendimento
    //     // por exemplo, salvar em banco de dados, atualizar um registro, etc.

    //     // Exemplo de ação (salvar em um banco de dados, por exemplo)
    //     $agendamento = Agendamento::find($request->input('solicitacaos.id'));
        
        
    //     $agendamento->confirmado = true;
        
       
    //     $agendamento->save();
        

    //     // Após a confirmação, você pode redirecionar para outra página ou retornar uma resposta
    //     // return redirect()->route('psicologa.agendDia');
    //     return view('psicologa.agendDia');
    //}


    // public function exibirBotao()
    // {
    //     return view('psicologa.show'); // Página com o botão de confirmação
    // }

    // public function exibirConfirmacao(Request $request)
    // {
        
    //     //console.log("teste");
    //     $confirmacao = $request->input('confirmacao'); // Obtém a confirmação do botão

    
    //     // Aqui você pode processar a confirmação e passar os dados para a página de confirmação
    //     return view('psicologa.agendDia', ['confirmacao' => $confirmacao]);
    // }


}
