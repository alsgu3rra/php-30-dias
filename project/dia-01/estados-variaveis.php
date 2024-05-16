<!-- Utilizar variaveis static, global, local -->
<!DOCTYPE html>
<html>
<body>

<?php
  function utilizarVariavelGlobal() {
    global $estado;
  };

  $pais = "Brasil";

  $estado = "GO";

  static $cidade = "Goiânia";

  function mudarCidade() {
    $cidade = "Mudando cidade";
  };

  echo "Pais: $pais ";
  echo "Estado: $estado ";
  echo "Cidade: $cidade ";
?>

</body>
</html>
