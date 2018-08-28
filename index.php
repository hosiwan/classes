<?php
require_once "pessoa.php";
$pessoa = new Pessoa;
$pessoa->andar();

$pessoa->setNome('Rosivan Santos');

/* situacao 1 */
(new Pessoa)->andar();
/* situacao 2 */
new Pessoa;

var_dump ($pessoa);

?>
