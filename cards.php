<?php

require_once 'functions.php';

echo "<div class = 'card'>";


foreach ($ninjas as $nome => $dados) {
    exibirCard($nome, $dados);
}
echo "</div>";
?>
