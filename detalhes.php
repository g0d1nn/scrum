<?php
include 'dados.php';
$cnpj = $_GET['cnpj'] ?? '';
$orgEncontrada = null;
foreach ($organizacoes as $o) {
    if ($o['cnpj'] === $cnpj) {
        $orgEncontrada = $o;
        break;
    }
}
include 'inc/header.php';
?>
<div class="container py-5">
    <?php if (!$orgEncontrada): ?>
        <div class="alert alert-warning">Organização não encontrada.</div>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    <?php else: ?>
        <div class="card custom-results p-4">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h2 class="mb-1"><?= htmlspecialchars($orgEncontrada['nome']) ?></h2>
                    <div class="small-muted mb-2"><strong>CNPJ:</strong> <?= htmlspecialchars($orgEncontrada['cnpj']) ?></div>
                    <div class="d-flex gap-2 mb-2">
                        <span class="badge <?= ($orgEncontrada['status'] === 'Ativa') ? 'badge-success' : 'badge-warning' ?>"><?= htmlspecialchars($orgEncontrada['status']) ?></span>
                        <span class="badge" style="background:#eef6ff;color:#0b57a4;"><?= htmlspecialchars($orgEncontrada['categoria']) ?></span>
                    </div>
                </div>
                <div class="small-muted text-end">
                    <div><?= htmlspecialchars($orgEncontrada['cidade']) ?> / <?= htmlspecialchars($orgEncontrada['estado']) ?></div>
                    <a href="mailto:contato@exemplo.org" class="btn btn-outline-primary btn-sm mt-2"><i class="fa fa-envelope"></i> Contato</a>
                </div>
            </div>

            <hr>
            <p><strong>Certificações:</strong> <?= htmlspecialchars($orgEncontrada['certificacoes']) ?></p>

            <hr>
            <h5>Transparência e confiança</h5>
            <p>Verifique documentos públicos da organização (estatuto, demonstrativos) e solicite contato direto para confirmar projetos locais.</p>

            <div class="mt-3">
                <a href="resultados.php" class="btn btn-secondary"><i class="fa fa-arrow-left me-1"></i> Voltar</a>
            </div>
        </div>
    <?php endif; ?>
</div>
</body>
</html>