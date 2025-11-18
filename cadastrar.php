<?php
// Página simples de cadastro que persiste em data/organizacoes.json
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required = ['nome','cnpj','categoria','estado','cidade','status'];
    $data = [];
    foreach ($required as $f) {
        $data[$f] = trim($_POST[$f] ?? '');
        if ($data[$f] === '') {
            $err = 'Preencha todos os campos obrigatórios.';
            break;
        }
    }
    $data['certificacoes'] = trim($_POST['certificacoes'] ?? '');
    if (!isset($err)) {
        $fileDir = __DIR__ . '/data';
        if (!is_dir($fileDir)) mkdir($fileDir, 0755, true);
        $file = $fileDir . '/organizacoes.json';
        $list = [];
        if (file_exists($file)) {
            $json = file_get_contents($file);
            $list = json_decode($json, true) ?: [];
        }
        // evita duplicar mesmo CNPJ
        foreach ($list as $exists) {
            if ($exists['cnpj'] === $data['cnpj']) {
                $err = 'CNPJ já cadastrado.';
                break;
            }
        }
    }
    if (!isset($err)) {
        $list[] = $data;
        file_put_contents($file, json_encode($list, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);
        header('Location: index.php?msg=Cadastro+realizado');
        exit;
    }
}
?>
<?php include 'inc/header.php'; ?>
<div class="container py-5">
    <h2 class="mb-4">Cadastrar ONG</h2>
    <?php if (!empty($err)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($err) ?></div>
    <?php endif; ?>
    <form method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nome</label>
            <input name="nome" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">CNPJ</label>
            <input name="cnpj" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Categoria</label>
            <input name="categoria" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Estado</label>
            <input name="estado" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Cidade</label>
            <input name="cidade" class="form-control" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option>Ativa</option>
                <option>Inativa</option>
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Certificações / Observações</label>
            <input name="certificacoes" class="form-control">
        </div>
        <div class="col-12">
            <button class="btn btn-success">Cadastrar</button>
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
</body>
</html>