<?php 

class Usuario {
    private $conn;
    private $nomeTabela = "usuarios";

    public $faixas;
    public $quantidadeIdade;

    public function __construct($db) {
        $this->conn = $db;
    }
 
function read(){

    $sql = "select 
    case 
        when idades.idade <= 6 then '6' 
        when idades.idade between 7 and 7 then '7' 
        when idades.idade between 8 and 8 then '8'
        when idades.idade between 9 and 9 then '9' 
        when idades.idade >= 10  then 'Outros'
    end as faixas, sum(idades.quantidadeIdade) as quantidadeIdade
    from ( SELECT YEAR(now()) - YEAR(dataNascimento) - ( DAYOFYEAR(now()) < DAYOFYEAR(dataNascimento)) as idade, count(*) as quantidadeIdade 
    from ".$this->nomeTabela."
    group by idade) idades 
    group by faixas ";
 
     $stmt = $this->conn->prepare($sql);
     $stmt->execute();
 
     return $stmt;
 }



}
?>