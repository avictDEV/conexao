<?php include "menu.php"; ?>
<?php include "conexao.php"; ?>
<?php
$totalLivros = $db->query("SELECT COUNT(*) as total FROM livros")
->fetch(PDO::FETCH_ASSOC)["total"];
$totalUsuarios = $db->query("SELECT COUNT(*) as total FROM usuarios")
->fetch(PDO::FETCH_ASSOC)["total"];
$totalEmprestimos = $db->query("SELECT COUNT(*) as total FROM emprestimos
WHERE status='ativo'")
->fetch(PDO::FETCH_ASSOC)["total"];
?>
<div class="container mt-4">
<h3>Painel do Sistema</h3>
<div class="row mt-4">
<div class="col-md-4">
<div class="card text-bg-primary">
<div class="card-body">
<h5>Total de Livros</h5>
<h2><?php echo $totalLivros; ?></h2>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-bg-success">
<div class="card-body">
<h5>Usuários</h5>
<h2><?php echo $totalUsuarios; ?></h2>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-bg-warning">
<div class="card-body">
<h5>Empréstimos Ativos</h5>
<h2><?php echo $totalEmprestimos; ?></h2>
</div>
</div>
</div>
</div>
</div>