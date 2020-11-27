<?php

session_start();

// Chamando a conexão com o banco de dados
include_once "../database/Connection.php";
include "../Link/RunningTime.php";

// Pegando os dados por parametros
$pagina = filter_input(INPUT_POST, 'page', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

//calcular o inicio visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

//consultar no banco de dados
$result = "SELECT * FROM links ORDER BY id DESC LIMIT $inicio, $qnt_result_pg";
$resultado = mysqli_query($conn, $result);

include "../../partition/alert.php";

//Verificar se encontrou resultado na tabela "promocao"
if(($resultado) AND ($resultado->num_rows != 0)){ 
    $count = 1;
	while($content = mysqli_fetch_assoc($resultado)){ ?>
		<ul class="list-group">
            <form action="" method="POST">
                <input type="hidden" name="link" value="<?= $content['id']; ?>">
                <button id="tosave" type="button">
                    <img onclick="changesIcon('./assets/images/vote-primary.svg', <?= $content['id']; ?>)" id="btnIcon<?= $content['id']; ?>" src="./assets/images/vote-white.svg">
                </button>
            </form>
            <li class="list-group-item">
                <a href="<?= $content['url']; ?>" target="_blank"><?= $count++; ?> • <?= $content['title']; ?></a>
                <div class="spans">
                    <span>239 pontos por kodisha</span>
                    <span><?= format_time($content['time']); ?></span>
                    <span>117 comentários</span>
                </div>
            </li>
        </ul>
	<?php
	}
	
	//Paginação - Somar a quantidade de promocao
	$result_pg = "SELECT COUNT(id) AS num_result FROM links";
	$resultado_pg = mysqli_query($conn, $result_pg);
	$row_pg = mysqli_fetch_assoc($resultado_pg);

	//Quantidade de pagina
	$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

	//Limitar os link antes depois
	$max_links = 1;

	if ($row_pg['num_result'] > 12) {
		echo '<div class="col-12 text-center">';
            echo "<a class='btn btn-light' href='#' onclick='listLinks(1, $qnt_result_pg)'>Primeira</a>";
            
            for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
                if($pag_ant >= 1){
                    echo "<a href='#' class='btn btn-light ml-1' onclick='listLinks($pag_ant, $qnt_result_pg)'>$pag_ant </a>";
                }
            }
            
            echo '<span class="ml-1 btn active">';
                echo "$pagina";
            echo '</span>';

            for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
                if($pag_dep <= $quantidade_pg){
                    echo "<a href='#' class='btn btn-light ml-1' onclick='listLinks($pag_dep, $qnt_result_pg)'>$pag_dep</a>";
                }
            }
            
            echo "<a class='btn btn-light ml-1' href='#' onclick='listLinks($quantidade_pg, $qnt_result_pg)'>Última</a>";
		echo '</div>';
	}
}else{
	echo "<div class='text-center'><h5 class='text-white'>Nenhuma promoção encontrado!</h5></div>";
}

?>