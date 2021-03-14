<?php
  include_once 'conexao_bd_teif.php';
?>

<?php

  $sql = 'SELECT * from jogador_csgo';
  
  foreach ($conn->query($sql) as $key => $value){
    print_r($value);
    echo '<hr>';
  }

?>
