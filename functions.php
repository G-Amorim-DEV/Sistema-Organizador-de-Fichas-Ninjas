<?php

require_once 'database.php';

function rankMissao($nivel) {
    switch ($nivel) {
        case 1: return "Rank D";
        case 2: return "Rank C";
        case 3: return "Rank B";
        case 4: return "Rank A";
        case 5: return "Rank S";
        default: return "Nível desconhecido";
    }
}



function exibirCard($nome, $dados) {
    echo "<div>";
    echo "<h2>{$nome}</h2>";
    echo "<p><strong>Clã:</strong> {$dados['cla']}</p>";
    echo "<p><strong>Nível:</strong> {$dados['nivel']} (" . rankMissao($dados['nivel']) . ")</p>";
    echo "<p><strong>Tem filhos:</strong> " . ($dados["tem_filhos"] ? "Sim" : "Não") . "</p>";
    echo "<p><strong>Missões realizadas:</strong></p>";
    echo "<ul>";
    foreach ($dados["missoes_realizadas"] as $missao) {
        echo "<li>{$missao}</li>";
    }
    echo "</ul>";
    echo "</div>";
}
?>



