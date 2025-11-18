<?php
include 'dados.php';
include 'inc/header.php';
?>

<div class="container py-5">
    <h2 class="mb-4 text-center">Localizar Organizações Reconhecidas pela Receita Federal</h2>

    <!-- Filtros -->
    <form method="GET" class="row g-3 mb-4 filter-row">
        <div class="col-md-3">
            <select name="categoria" class="form-select">
                <option value="">Categoria</option>
                <option value="OSCIP" <?= (($_GET['categoria'] ?? '') === 'OSCIP') ? 'selected' : '' ?>>OSCIP</option>
                <option value="Fundação" <?= (($_GET['categoria'] ?? '') === 'Fundação') ? 'selected' : '' ?>>Fundação</option>
                <option value="Entidade Beneficente" <?= (($_GET['categoria'] ?? '') === 'Entidade Beneficente') ? 'selected' : '' ?>>Entidade Beneficente</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="estado" class="form-select">
                <option value="">Estado</option>
                <option value="SP" <?= (($_GET['estado'] ?? '') === 'SP') ? 'selected' : '' ?>>SP</option>
                <option value="PR" <?= (($_GET['estado'] ?? '') === 'PR') ? 'selected' : '' ?>>PR</option>
                <option value="BA" <?= (($_GET['estado'] ?? '') === 'BA') ? 'selected' : '' ?>>BA</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">Situação</option>
                <option value="Ativa" <?= (($_GET['status'] ?? '') === 'Ativa') ? 'selected' : '' ?>>Ativa</option>
                <option value="Inativa" <?= (($_GET['status'] ?? '') === 'Inativa') ? 'selected' : '' ?>>Inativa</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="text" name="cidade" class="form-control" placeholder="Cidade (ex: Ponta Grossa)" value="<?= htmlspecialchars($_GET['cidade'] ?? '') ?>">
        </div>

        <div class="col-12 d-flex gap-2">
            <button class="btn btn-primary"><i class="fa fa-filter me-1"></i> Filtrar</button>
            <a href="cadastrar.php" class="btn btn-outline-success"><i class="fa fa-plus me-1"></i> Cadastrar ONG</a>
            <div class="ms-auto small-muted">Dica: use "Ponta Grossa" para ver ONGs locais</div>
        </div>
    </form>

    <?php
    // Filtros simulados (mantém lógica original)
    $filtroCategoria = $_GET['categoria'] ?? '';
    $filtroEstado = $_GET['estado'] ?? '';
    $filtroStatus = $_GET['status'] ?? '';
    $filtroCidade = trim($_GET['cidade'] ?? '');

    $resultados = array_filter($organizacoes, function($org) use ($filtroCategoria, $filtroEstado, $filtroStatus, $filtroCidade) {
        $matchCidade = true;
        if ($filtroCidade !== '') {
            $matchCidade = mb_strtolower($org['cidade']) === mb_strtolower($filtroCidade);
        }
        return (!$filtroCategoria || $org['categoria'] == $filtroCategoria) &&
               (!$filtroEstado || $org['estado'] == $filtroEstado) &&
               (!$filtroStatus || $org['status'] == $filtroStatus) &&
               $matchCidade;
    });
    ?>

    <!-- Resultados -->
    <div class="card custom-results">
        <h5 class="mb-3"><span class="result-count"><?= count($resultados) ?></span> organização(ões) encontrada(s)</h5>

        <div class="row g-3">
        <?php foreach($resultados as $org): ?>
            <div class="col-md-6">
                <div class="org-card">
                    <div class="meta">
                        <h5 class="mb-1"><?= htmlspecialchars($org['nome']) ?></h5>
                        <div class="small-muted mb-2">
                            <strong>CNPJ:</strong> <?= htmlspecialchars($org['cnpj']) ?> —
                            <span class="small-muted"><?= htmlspecialchars($org['cidade']) ?>/<?= htmlspecialchars($org['estado']) ?></span>
                        </div>

                        <div class="d-flex gap-2 align-items-center">
                            <span class="badge <?= ($org['status'] === 'Ativa') ? 'badge-success' : 'badge-warning' ?>"><?= htmlspecialchars($org['status']) ?></span>
                            <span class="badge" style="background:#eef6ff;color:#0b57a4;border:1px solid rgba(11,87,164,0.06)"><?= htmlspecialchars($org['categoria']) ?></span>
                            <?php if (!empty($org['certificacoes'])): ?>
                                <span class="badge" style="background:#fff0f6;color:#b91c1c;border:1px solid rgba(185,28,28,0.06)"><?= htmlspecialchars($org['certificacoes']) ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="actions">
                        <a href="detalhes.php?cnpj=<?= urlencode($org['cnpj']) ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

</body>
</html>
