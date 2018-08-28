<?php
require_once "pessoa.php";
$pessoa = new Pessoa;
$pessoa->andar();
/* situacao 1 */
(new Pessoa)->andar();
/* situacao 2 */
new Pessoa;
?>
