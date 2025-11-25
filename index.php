<?php
include 'dados.php';
include 'inc/header.php';
?>

<div class="container py-5">
    <!-- HERO SECTION COM BUSCA -->
    <section class="hero-section mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-3" style="color: #0b57a4;">
                    Conecte sua Empresa a Causas Sociais
                </h2>
                <p class="lead mb-4" style="color: #6b7280;">
                    Encontre organizações não governamentais qualificadas e habilitadas para receber recursos via incentivos fiscais. Transparência, confiança e impacto social garantidos.
                </p>
                <div class="d-flex gap-2">
                    <a href="#busca" class="btn btn-primary btn-lg">
                        <i class="fas fa-search me-2"></i>Começar Busca
                    </a>
                    <a href="cadastrar.php" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-plus me-2"></i>Cadastrar ONG
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: linear-gradient(135deg, #0b57a4 0%, #1e88e5 100%); border-radius: 12px; padding: 2rem; color: white; text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="mb-3">Responsabilidade Social Corporativa</h3>
                    <p class="mb-0">Direcione parte do seu imposto de renda para projetos que transformam vidas e comunidades.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE BUSCA DESTACADA -->
    <section id="busca" class="busca-section mb-5">
        <div class="card custom-results" style="border: 2px solid #0b57a4;">
            <h3 class="mb-4" style="color: #0b57a4;">
                <i class="fas fa-filter me-2"></i>Filtrar Organizações
            </h3>
            
            <form method="GET" action="resultados.php" class="row g-3">
                <div class="col-md-3">
                    <label class="form-label fw-600">Categoria</label>
                    <select name="categoria" class="form-select">
                        <option value="">Todas as categorias</option>
                        <option value="OSCIP">OSCIP</option>
                        <option value="Fundação">Fundação</option>
                        <option value="Entidade Beneficente">Entidade Beneficente</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-600">Estado</label>
                    <select name="estado" class="form-select">
                        <option value="">Todos os estados</option>
                        <option value="SP">São Paulo (SP)</option>
                        <option value="PR">Paraná (PR)</option>
                        <option value="BA">Bahia (BA)</option>
                        <option value="MG">Minas Gerais (MG)</option>
                        <option value="RJ">Rio de Janeiro (RJ)</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-600">Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Ex: Ponta Grossa">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-600">Situação</label>
                    <select name="status" class="form-select">
                        <option value="">Todas as situações</option>
                        <option value="Ativa">Ativa</option>
                        <option value="Inativa">Inativa</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        <i class="fas fa-search me-2"></i>Buscar Organizações
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- SEÇÃO DE BENEFÍCIOS -->
    <section class="beneficios-section mb-5">
        <h2 class="text-center mb-5" style="color: #0b57a4; font-weight: 700;">
            <i class="fas fa-star me-2"></i>Por que usar ConectaONG?
        </h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="border-top: 4px solid #0b57a4;">
                    <div class="card-body text-center">
                        <div style="font-size: 2.5rem; color: #0b57a4; margin-bottom: 1rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Organizações Verificadas</h5>
                        <p class="card-text text-muted">Todas as ONGs são validadas e reconhecidas pela Receita Federal do Brasil.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="border-top: 4px solid #087f3f;">
                    <div class="card-body text-center">
                        <div style="font-size: 2.5rem; color: #087f3f; margin-bottom: 1rem;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Impacto Mensurável</h5>
                        <p class="card-text text-muted">Acompanhe o impacto social dos seus investimentos com relatórios detalhados.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm" style="border-top: 4px solid #a66a00;">
                    <div class="card-body text-center">
                        <div style="font-size: 2.5rem; color: #a66a00; margin-bottom: 1rem;">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-2">Segurança Jurídica</h5>
                        <p class="card-text text-muted">Transações seguras e conformes com a legislação de incentivos fiscais.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE CATEGORIAS DESTACADAS -->
    <section class="categorias-section mb-5">
        <h2 class="text-center mb-5" style="color: #0b57a4; font-weight: 700;">
            <i class="fas fa-th me-2"></i>Áreas de Atuação
        </h2>
        
        <div class="row g-3">
            <div class="col-md-6 col-lg-3">
                <a href="resultados.php?categoria=Educação" class="card border-0 shadow-sm text-decoration-none h-100" style="transition: all 0.3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 2rem; color: #0b57a4; margin-bottom: 1rem;">
                            <i class="fas fa-book"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: #0b57a4;">Educação</h5>
                        <p class="card-text text-muted small">Projetos de educação e capacitação</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <a href="resultados.php?categoria=Saúde" class="card border-0 shadow-sm text-decoration-none h-100" style="transition: all 0.3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 2rem; color: #087f3f; margin-bottom: 1rem;">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: #087f3f;">Saúde</h5>
                        <p class="card-text text-muted small">Programas de saúde e bem-estar</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <a href="resultados.php?categoria=Meio Ambiente" class="card border-0 shadow-sm text-decoration-none h-100" style="transition: all 0.3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 2rem; color: #a66a00; margin-bottom: 1rem;">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: #a66a00;">Meio Ambiente</h5>
                        <p class="card-text text-muted small">Sustentabilidade e conservação</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <a href="resultados.php?categoria=Cultura" class="card border-0 shadow-sm text-decoration-none h-100" style="transition: all 0.3s ease;">
                    <div class="card-body text-center">
                        <div style="font-size: 2rem; color: #b91c1c; margin-bottom: 1rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h5 class="card-title fw-bold" style="color: #b91c1c;">Cultura</h5>
                        <p class="card-text text-muted small">Projetos culturais e artísticos</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE ESTATÍSTICAS -->
    <section class="stats-section mb-5" style="background: linear-gradient(135deg, #0b57a4 0%, #1e88e5 100%); color: white; padding: 3rem 0; border-radius: 12px; margin-left: -12px; margin-right: -12px; padding-left: 12px; padding-right: 12px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">
                        <?= count($organizacoes) ?>+
                    </div>
                    <p class="mb-0">Organizações Cadastradas</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">
                        5
                    </div>
                    <p class="mb-0">Estados Atendidos</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">
                        3
                    </div>
                    <p class="mb-0">Tipos de Entidades</p>
                </div>
                <div class="col-md-3">
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">
                        100%
                    </div>
                    <p class="mb-0">Verificadas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE CTA FINAL -->
    <section class="cta-final-section text-center mb-5">
        <h2 class="mb-3" style="color: #0b57a4; font-weight: 700;">
            Pronto para fazer a diferença?
        </h2>
        <p class="lead mb-4" style="color: #6b7280;">
            Comece sua busca agora e encontre a ONG perfeita para sua empresa.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="#busca" class="btn btn-primary btn-lg">
                <i class="fas fa-search me-2"></i>Buscar ONGs
            </a>
            <a href="cadastrar.php" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-plus me-2"></i>Cadastrar Organização
            </a>
        </div>
    </section>

    <!-- SEÇÃO DE FAQ -->
    <section class="faq-section mb-5">
        <h2 class="text-center mb-5" style="color: #0b57a4; font-weight: 700;">
            <i class="fas fa-question-circle me-2"></i>Perguntas Frequentes
        </h2>
        
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3" style="border: 1px solid #e5e7eb !important; border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Como funciona o incentivo fiscal?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                As empresas podem destinar até 1% do imposto de renda devido para organizações qualificadas. ConectaONG facilita encontrar essas organizações e garantir conformidade com a legislação.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3" style="border: 1px solid #e5e7eb !important; border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Todas as ONGs podem receber recursos?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Não. Apenas organizações reconhecidas e habilitadas pela Receita Federal podem receber recursos via incentivos fiscais. Todas as ONGs em nossa plataforma já passaram por essa validação.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3" style="border: 1px solid #e5e7eb !important; border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Como cadastrar minha ONG?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Clique em "Cadastrar ONG" no menu superior. Você precisará fornecer informações básicas, CNPJ e documentação de comprovação de habilitação junto à Receita Federal.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0" style="border: 1px solid #e5e7eb !important; border-radius: 8px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Como entro em contato com uma ONG?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Ao visualizar os detalhes de uma ONG, você encontrará informações de contato como email, telefone e website. Clique em "Ver Detalhes" para acessar essas informações.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- RODAPÉ -->
<footer style="background: #ffffff; color: #1f2937; padding: 3rem 0; margin-top: 3rem; border-top: 3px solid #0b57a4;">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="fw-bold mb-3" style="color: #0b57a4;">ConectaONG</h5>
                <p class="text-muted">Conectando empresas a organizações sociais para um futuro melhor.</p>
            </div>
            <div class="col-md-2 mb-4 mb-md-0">
                <h6 class="fw-bold mb-3" style="color: #0b57a4;">Links</h6>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-muted text-decoration-none" style="transition: color 0.2s;">Início</a></li>
                    <li><a href="resultados.php" class="text-muted text-decoration-none" style="transition: color 0.2s;">Buscar</a></li>
                    <li><a href="cadastrar.php" class="text-muted text-decoration-none" style="transition: color 0.2s;">Cadastrar</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <h6 class="fw-bold mb-3" style="color: #0b57a4;">Contato</h6>
                <p class="text-muted mb-1">Email: <a href="mailto:contato@conectaong.org" class="text-muted text-decoration-none" style="transition: color 0.2s;">contato@conectaong.org</a></p>
                <p class="text-muted">Telefone: (42) 3025-1000</p>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold mb-3" style="color: #0b57a4;">Redes Sociais</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm" style="border: 2px solid #0b57a4; color: #0b57a4; transition: all 0.2s;"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="btn btn-sm" style="border: 2px solid #0b57a4; color: #0b57a4; transition: all 0.2s;"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-sm" style="border: 2px solid #0b57a4; color: #0b57a4; transition: all 0.2s;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="btn btn-sm" style="border: 2px solid #0b57a4; color: #0b57a4; transition: all 0.2s;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr style="border-color: rgba(11, 87, 164, 0.1);">
        <div class="row">
            <div class="col-12 text-center text-muted">
                <p class="mb-0">&copy; 2025 ConectaONG. Todos os direitos reservados. | <a href="#" class="text-muted text-decoration-none" style="transition: color 0.2s;">Política de Privacidade</a> | <a href="#" class="text-muted text-decoration-none" style="transition: color 0.2s;">Termos de Uso</a></p>
            </div>
        </div>
    </div>
</footer>

<style>
    footer a:hover {
        color: #0b57a4 !important;
    }

    footer .btn:hover {
        background-color: #0b57a4 !important;
        color: white !important;
    }
</style>


</body>
</html>
