<?php include "menu.php"; ?>
<?php include "conexao.php"; ?>

<?php

$sql = "SELECT * FROM livros";
$resultado = $db->query($sql);
?>

<div class="container mt-4">
<h3>Livros</h3>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Título</th>
<th>Autor</th>
<th>Ano</th>
</tr>
</thead>
<tbody>
<?php while($l = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
<tr>
<td><?php echo $l["id"]; ?></td>
<td><?php echo $l["titulo"]; ?></td>
<td><?php echo $l["autor"]; ?></td>
<td><?php echo $l["ano"]; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>