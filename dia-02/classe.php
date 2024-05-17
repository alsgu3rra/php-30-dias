<!DOCTYPE html>
<html>
<body>

<?php
  class Carro {
    public $cor;
    public $modelo;

    function __construct($cor, $modelo) {
      $this-> cor = $cor;
      $this-> modelo = $modelo;
    }

    function mensagem() {
      return "Seu carro é um ".$this->$modelo." de cor ".$this->$cor."!";
    }
  }

  $meu_carro = new Carro("Vermelho", "BMW");

  var_dump(meu_carro);
?>

</body>
</html>
