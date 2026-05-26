<?php include "menu.php"; ?>
<?php include "conexao.php"; ?>
<?php
$sql = "
SELECT
e.id,
u.nome AS usuario,
l.titulo AS livro,
e.data_emprestimo,
e.status
FROM emprestimos e
JOIN usuarios u ON u.id = e.usuario_id
JOIN livros l ON l.id = e.livro_id
";
$resultado = $db->query($sql);
?>
<div class="container mt-4">
<h3>Empréstimos</h3>
<table class="table table-hover">
<tr>
<th>ID</th>
<th>Usuário</th>
<th>Livro</th>
<th>Data</th>
<th>Status</th>
</tr>
<?php while($e = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
<tr>
<td><?php echo $e["id"]; ?></td>
<td><?php echo $e["usuario"]; ?></td>
<td><?php echo $e["livro"]; ?></td>
<td><?php echo $e["data_emprestimo"]; ?></td>
<td><?php echo $e["status"]; ?></td>
</tr>
<?php } ?>
</table>
</div>