<?php
include 'dados.php';
include 'inc/header.php';
?>

<div class="container py-5">
    <h2 class="mb-4 text-center">Localizar Organizações Reconhecidas pela Receita Federal</h2>

    <!-- Filtros -->
    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-3">
            <select name="categoria" class="form-select">
                <option value="">Categoria</option>
                <option>OSCIP</option>
                <option>Fundação</option>
                <option>Entidade Beneficente</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="estado" class="form-select">
                <option value="">Estado</option>
                <option>SP</option>
                <option>PR</option>
                <option>BA</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">Situação</option>
                <option>Ativa</option>
                <option>Inativa</option>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary w-100">Filtrar</button>
        </div>
    </form>

    <?php
    // Filtros simulados
    $filtroCategoria = $_GET['categoria'] ?? '';
    $filtroEstado = $_GET['estado'] ?? '';
    $filtroStatus = $_GET['status'] ?? '';

    $resultados = array_filter($organizacoes, function($org) use ($filtroCategoria, $filtroEstado, $filtroStatus) {
        return (!$filtroCategoria || $org['categoria'] == $filtroCategoria) &&
               (!$filtroEstado || $org['estado'] == $filtroEstado) &&
               (!$filtroStatus || $org['status'] == $filtroStatus);
    });
    ?>

    <!-- Resultados -->
    <div class="card shadow-sm p-3">
        <h5 class="mb-3"><?= count($resultados) ?> organização(ões) encontrada(s)</h5>

        <?php foreach($resultados as $org): ?>
            <div class="border rounded p-3 mb-3 bg-white">
                <h5><?= $org['nome'] ?></h5>
                <p class="mb-1"><strong>CNPJ:</strong> <?= $org['cnpj'] ?></p>
                <p class="mb-1"><strong>Categoria:</strong> <?= $org['categoria'] ?></p>
                <p class="mb-1"><strong>Localização:</strong> <?= $org['cidade'] ?>/<?= $org['estado'] ?></p>
                <p class="mb-1"><strong>Status:</strong> <?= $org['status'] ?></p>
                <p class="mb-1"><strong>Certificações:</strong> <?= $org['certificacoes'] ?></p>
                <a href="#" class="btn btn-outline-primary btn-sm mt-2">Ver detalhes</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
