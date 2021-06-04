<?php
require 'todos/header_inicial.php';

?>

<h1 class="page_title">Teste rápido</h1>

<?php
try{
    $valor = 1;
    $res = $valor > 2 ? true : throw new Exception("Opps");
} catch(Exception $err){
    echo $err->getMessage();
}







?>

<?php
require 'todos/footer.php';
?>
