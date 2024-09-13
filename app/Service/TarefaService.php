<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService{
public function create(array $tarefa){
    $dados = Tarefa::create([
        'titulo' => $tarefa['titulo'],
        'descricao' => $tarefa['descricao'],
        'status' => 'Esta em aberto'
        

]);
    return $dados;

}
public function findById($id){
  $tarefa=Tarefa::find($id);
  if ($tarefa == null){
    return [
        "status"=>false,
        "message"=> 'tarefa não encontrada'
    ];
  }
  return[
    "satatus"=> true,
    "message"=> 'pesquisa realizada com sucesso',
    'data'=> $tarefa
  ];
}
  public function getAll (){
    $tarefas = Tarefa ::all();
    return[
        'status'=>true,
        'message'=>'pesquisa efetuada com sucesso',
        'data'=> $tarefas
    ];

 }

};

