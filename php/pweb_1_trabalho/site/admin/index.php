<?php
// PÁGINA INICIAL (LANDING PAGE) - VELHO LIVRO
// Se o usuário já estiver logado, redireciona para o dashboard.

session_start();

// Se já estiver logado, evita mostrar a landing page
if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velho Livro · Sebo & Acervo Literário</title>
    <!-- Bootstrap 5 + Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- CSS específico da landing page (estilo escuro/gótico) -->
    <link rel="stylesheet" href="assets/css/landing.css">
</head>
<body>

<!-- Fundo com círculos flutuantes (efeito sutil) -->
<div class="bg-animation">
    <div class="circle" style="width: 250px; height: 250px; top: -100px; left: -100px; animation-duration: 25s;"></div>
    <div class="circle" style="width: 400px; height: 400px; bottom: -150px; right: -150px; animation-duration: 30s;"></div>
    <div class="circle" style="width: 150px; height: 150px; top: 30%; left: 70%; animation-duration: 18s;"></div>
    <div class="circle" style="width: 100px; height: 100px; bottom: 20%; left: 15%; animation-duration: 22s;"></div>
</div>

<!-- Conteúdo principal da landing page -->
<div class="container position-relative z-1" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center;">
    <!-- Card principal com chamada para ação -->
    <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-8">
            <div class="glass-card p-4 p-md-5">
                <!-- Ícone principal (livro antigo com marca-página) -->
                <i class="fas fa-book-open fa-4x mb-4" style="color: #b89ad0;"></i>
                <h1 class="display-3 fw-bold mb-3" style="color: #ececec;">Velho Livro</h1>
                <p class="lead mb-4" style="color: #c0c0d0;">
                    Sebo & Acervo · Gerencie sua coleção de livros usados com estilo e nostalgia.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="login.php" class="btn btn-custom btn-custom-primary">
                        <i class="fas fa-skull me-2"></i>Acessar Sistema
                    </a>
                    <a href="register.php" class="btn btn-custom btn-custom-outline">
                        <i class="fas fa-user-plus me-2"></i>Cadastrar-se
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de recursos/diferenciais (cards com descrições alinhadas ao conceito de sebo) -->
    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="feature-card text-center h-100">
                <i class="fas fa-search feature-icon"></i>
                <h3 class="h5 fw-semibold">Busca Vintage</h3>
                <p class="small mb-0">Encontre títulos raros, por autor, gênero ou edição – como garimpar em um sebo.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card text-center h-100">
                <i class="fas fa-layer-group feature-icon"></i>
                <h3 class="h5 fw-semibold">Acervo Organizado</h3>
                <p class="small mb-0">Controle seu catálogo de livros usados, com informações completas e estado de conservação.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card text-center h-100">
                <i class="fas fa-hand-holding-heart feature-icon"></i>
                <h3 class="h5 fw-semibold">Gestão de Clientes</h3>
                <p class="small mb-0">Cadastre frequentadores, acompanhe interesses e construa uma comunidade literária.</p>
            </div>
        </div>
    </div>

    <!-- Rodapé simples -->
    <footer class="text-center mt-5 pb-4" style="color: #7a7a90;">
        <small>Velho Livro &copy; <?= date('Y') ?> – Sebo & Acervo Literário</small>
    </footer>
</div>

<!-- MODAL POP-UP EXPLICATIVO (apresenta a proposta do site) -->
<div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #15151e; border: 1px solid #3a3a4a; color: #e0e0e0;">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="welcomeModalLabel" style="color: #b89ad0;">
                    <i class="fas fa-book-dead me-2"></i>Bem-vindo ao Velho Livro
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <p>O <strong>Velho Livro</strong> é um sistema de gestão especialmente criado para <strong>sebos e acervos de livros usados</strong>.</p>
                <p>Com ele você pode:</p>
                <ul>
                    <li><i class="fas fa-archive me-2"></i>Catalogar todo o seu acervo (título, autor, edição, estado de conservação)</li>
                    <li><i class="fas fa-tags me-2"></i>Organizar por gêneros e categorias</li>
                    <li><i class="fas fa-users me-2"></i>Gerenciar clientes e interesses literários</li>
                    <li><i class="fas fa-chart-simple me-2"></i>Acompanhar estatísticas do seu sebo em tempo real</li>
                </ul>
                <p class="mt-3 mb-0">Crie sua conta ou acesse o sistema e transforme a gestão do seu acervo!</p>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" style="background-color: #6c3b8c; border: none;" data-bs-dismiss="modal">Explorar</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Exibe o modal automaticamente assim que a página carregar
    document.addEventListener('DOMContentLoaded', function() {
        var welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        welcomeModal.show();
    });
</script>

<!-- Script do Bootstrap (necessário para o modal e componentes) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>