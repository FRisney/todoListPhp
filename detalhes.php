<?php
// Insere no html os detalhes da tarefa

if (!isset($_GET['id']))
    header('Location: /');

require "src/classes/Tarefa.php";
require "src/classes/ArquivoTarefa.php";

$template = file_get_contents('resource/detalhes.html');

$arquivoTarefa = new ArquivoTarefa('tarefas.json');
$listaTarefasJSON = $arquivoTarefa->le();

$tarefa = null;

foreach ($listaTarefasJSON as $t) {
    if ($_GET['id'] == $t->getId())
    {
        $tarefa = $t;
        continue;
    }
}

$pagina = str_replace('#NOME', $tarefa->getNome(), $template);
$pagina = str_replace('#STATUS', $tarefa->legenda(), $pagina);
$pagina = str_replace('#DATALIMITE', $tarefa->getDataLimite(), $pagina);
$pagina = str_replace('#IMGURL', $tarefa->getImgUrl(), $pagina);
echo str_replace('#DESCRICAO', $tarefa->getDescricao(), $pagina);
