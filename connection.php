<?php
class Con{
    public $nome="epiz_26177904";
    public $senha="xIlpDTlI395s";
    public $server="sql106.epizy.com";
    public $dbName="epiz_26177904_tropical";
    public $id;
    public $resultado;
    
    public function conectar(){
        if($this->id=mysqli_connect($this->server,$this->nome,$this->senha,$this->dbName))
            $nada=0;
            //echo "Conectado";
        else
            echo "Nao foi Possivel Conectar!";
    }
    public function consultar($sql){
        $this->resultado=mysqli_query($this->id,$sql);
    }
    public function fechar(){
        mysqli_close($this->id);
    }

}
?>
