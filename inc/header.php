<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConectaONG - Localizar Organizações</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <!-- LOGO / NOME -->
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php">
                <div style="width:40px; height:40px; background:linear-gradient(135deg, #0b57a4 0%, #1e88e5 100%); border-radius:8px; display:flex; align-items:center; justify-content:center; color:white; font-size:1.2rem;">
                    <i class="fas fa-handshake"></i>
                </div>
                <div>
                    <div style="font-size:1rem; color:#0b57a4;">ConectaONG</div>
                    <div style="font-size:0.65rem; color:#6b7280; font-weight:400;">Transparência & Confiança</div>
                </div>
            </a>

            <!-- BOTÃO MOBILE -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- LINKS -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-1">
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage === 'index.php') ? 'active fw-600' : '' ?>" href="index.php">
                            <i class="fas fa-home me-1"></i> Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage === 'buscar.php') ? 'active fw-600' : '' ?>" href="index.php">
                            <i class="fas fa-search me-1"></i> Buscar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal">
                            <i class="fas fa-circle-info me-1"></i> Sobre
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:contato@conectaong.org">
                            <i class="fas fa-envelope me-1"></i> Contato
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary btn-sm px-3" href="cadastrar.php">
                            <i class="fas fa-plus me-1"></i> Cadastrar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER HERO -->
    <?php if ($currentPage === 'index.php'): ?>
    <div style="background:linear-gradient(135deg, #0b57a4 0%, #1e88e5 100%); color:white; padding:2rem 0; margin-bottom:2rem;">
        <div class="container text-center">
            <h1 class="mb-2" style="font-size:2rem; font-weight:700;">
                <i class="fas fa-globe me-2"></i>Encontre Organizações Confiáveis
            </h1>
            <p style="font-size:1.05rem; opacity:0.95;">Localize ONGs, Fundações e Entidades Beneficentes reconhecidas pela Receita Federal do Brasil</p>
        </div>
    </div>
    <?php endif; ?>

</header>

<!-- MODAL SOBRE -->
<div class="modal fade" id="infoModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">Sobre ConectaONG</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>ConectaONG</strong> é uma plataforma que facilita a conexão entre empresas e organizações do terceiro setor.</p>
                <p>Aqui você pode:</p>
                <ul>
                    <li>Buscar organizações por categoria, estado e cidade</li>
                    <li>Verificar certificações e status de funcionamento</li>
                    <li>Cadastrar novas ONGs para ampliar visibilidade</li>
                    <li>Estabelecer parcerias transparentes e confiáveis</li>
                </ul>
                <p class="text-muted small">Dados sincronizados com a Receita Federal do Brasil.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>