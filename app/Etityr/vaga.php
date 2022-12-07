<?php
namespace app\Etityr;
use \App\Db\Database;
class Vaga{

        // idenficador da vaga
        public $id;
        //Titulo da vaga
        public $titulo;
        //Descrição da vaga
        public $descricao;
        //vaga ativa ou não
        public $ativo;
        //  data da publicação da vaga
        public $data;
                // metodo para cadastrar
        public function cadastrar(){
        $this->data=date('Y-m-d M:i:s');
        $obDatabase = new Database('vagas');
    $this->id = $obDatabase->insert([
                                      'titulo'    => $this->titulo,
                                      'descricao' => $this->descricao,
                                      'ativo'     => $this->ativo,
                                      'data'      => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

        
}