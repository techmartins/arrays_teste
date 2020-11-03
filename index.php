<?php

//Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'], percorra os vetores dados e crie um outro com a seguinte estrutura: ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 'RJ'=>'Rio de Janeiro', 'SP'=>'São Paulo']. Depois de criado terceiro vetor, leia-o e imprima em cada linha a chave de cada posição e seu respectivo valor separados por "-".

$siglas  = array("ES","MG","RJ","SP");
$estados = array("São Paulo","Rio de Janeiro","Minas Gerais","Espírito Santo");

foreach ($siglas as $key => $uf) {
	foreach ($estados as $chave => $estado) {
		if($uf=="ES" && $estado=="Espírito Santo"){
			$resultado[] = array($uf=>$estado);
		}elseif ($uf=="MG" && $estado=="Minas Gerais") {
			$resultado[] = array($uf=>$estado);
		}elseif ($uf=="RJ" && $estado=="Rio de Janeiro") {
			$resultado[] = array($uf=>$estado);
		}
	}
}

$n = 0;
foreach ($resultado as $resultado) {
	foreach ($resultado as $chave => $valor) {
		echo $n . " - " . $valor . "<br>";
	}
	$n++;
}

?>
