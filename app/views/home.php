<?php 
$this->tituloPagina = "Home";
include 'layout/topo.php';?>
<h2>Essa é a pagina principal</h2>
<p>Lista de compras</p>
<ul>
<?php 
	foreach ($this->compras as $key => $value): ?>
	<li><?php echo $value['titulo']; ?> - <?php echo $value['descricao']; ?></li>
<?php endforeach ?>
</ul>
<?php include 'layout/rodape.php';?>