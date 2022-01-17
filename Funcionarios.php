<?php

class Funcionarios
{
   private $funcionarios;
   public function __construct()
   {
       $this->$funcionarios =[
        ["id" => 0, "nome" => "Joao",   "salario" => 1500],
        ["id" => 1, "nome" => "Pedro",  "salario" => 4500],
        ["id" => 2, "nome" => "Zé",     "salario" => 2900],
    ];
   }
   
   public function all()
   {
       return $this->funcionarios;
   }

   /**
     * Busca um funcionário pelo id
     * 
     * @param int $id
     * 
     * @return array|null
     */

   public function find($id);
   {
    foreach($this->funcionarios as $func){
    if ($func['id'] == $id){
        return $func;
        }
    }

    return null;
   }
}

?>