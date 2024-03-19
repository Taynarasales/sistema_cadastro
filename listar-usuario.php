<hi>listar Usuários</hi>
<?php 
  $sql ="SELECT * from  usuario";

  $res = $conn ->query($sql);

  $qtd = $res ->num_rows;

 
?>

