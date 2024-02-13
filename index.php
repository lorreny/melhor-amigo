<?php include 'include/base.html'; ?>
<?php include 'include/header.html'; ?>
<script src="../assets/js/cadastro-produtos.js"></script>
<script src="../assets/js/gerarProdutos.js"></script>

<main class="container-fluid mt-5">
<!-- Conteúdo principal da página aqui -->
<section id="bem-vindo" class="container-fluid mt-5 text-center banner-section">
    <div class="row justify-content-center align-items-center flex-md-row-reverse">
        <!-- Coluna com texto e botão -->
        <div class="col-md-6 order-1 order-md-2">
            <div class="text-container">
                <h2>Bem-vindo ao Petshop "Melhor Amigo"!</h2>
                <p>No Petshop "Melhor Amigo", nós entendemos que seu animal de estimação é mais do que apenas um bichinho, é um membro especial da sua família...</p>
                <button class="btn btn-primary"><a class="bem-vindo botao" href="../#nossos-servicos">Saiba Mais</a></button>
            </div>
        </div>
        
        <!-- Coluna com imagem -->
        <div class="col-md-6 order-2 order-md-1">
            <div class="image-container">
                <img src="assets/img/img-banner-direita.png" alt="Imagem Petshop" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Nova seção "Nossos Serviços" -->
<section id="nossos-servicos" class="custom-container mt-5">
    <div class="row">
        <div class="col">
            <h3>Nossos Serviços</h3>
        </div>
    </div>

    <!-- Div com 4 colunas -->
    <div class="row mt-4">
        <div class="col-md-3 text-center">
            <!-- Conteúdo da primeira coluna -->
            <img src="../assets/img/racao-premium-verde.svg" alt="Ração Premium">
            <h4>Ração Premium</h4>
            <p>No Petshop "Melhor Amigo", oferecemos uma seleção
                de rações premium para cães e gatos.</p>
        </div>
        <div class="col-md-3 text-center">
            <!-- Conteúdo da segunda coluna -->
            <img src="../assets/img/tosa-personalizada-verde.svg" alt="Serviço de Tosa">
            <h4>Serviço de Tosa</h4>
            <p>Proporcionamos serviços profissionais de
                tosa para cães de todas as raças</p>
        </div>
        <div class="col-md-3 text-center">
            <!-- Conteúdo da terceira coluna -->
            <img src="../assets/img/higiene-e-cuidado-especial-verde.svg" alt="Banho Relaxante">
            <h4>Banho Relaxante</h4>
            <p>Na nossa seleção de produtos, você encontrará uma gama de itens de higiene e cuidados para o seu pet.</p>
        </div>
        <div class="col-md-3 text-center">
            <!-- Conteúdo da quarta coluna -->
            <img src="../assets/img/brinquedos-iterativos-verde.svg" alt="Brinquedos Interativos">
            <h4>Brinquedos Interativos</h4>
            <p>Valorizamos o enriquecimento e a diversão dos animais, 
                por isso oferecemos uma variedade de brinquedos interativos.</p>
        </div>
    </div>

    <!-- Div com um botão -->
    <div class="row mt-4">
        <div class="col">
            <button class="btn btn-primary"><a class="nossos-servicos botao" href="../produtos.php">Saiba Mais</a></button>
        </div>
    </div>
</section>

<!-- Nova seção "Nutrição Premium" -->
<section id="nutricao-premium">
    <div class="custom-container">
        <div class="row">
            <!-- Coluna para a imagem -->
            <div class="col-md-6 coluna-imagem">
                <img src="../assets/img/nutricao-premium.png" alt="Nutrição Premium">
            </div>
            <!-- Coluna única para o texto -->
            <div class="col-md-6 texto">
                <!-- Adicione uma div para a imagem no canto direito -->
                <div class="imagem-canto-direito">
                    <img src="../assets/img/pata.svg" alt="Pata">
                </div>

                <!-- Texto do nutricao-premium -->
                <h3>Nutrição Premium para Pets Felizes</h3>
                <p>Descubra a diferença em nossa ampla seleção de rações de alta qualidade e 
                    alimentos balanceados.<br>
                    Nossos especialistas estão aqui para fornecer orientação personalizada, 
                    garantindo que seu amiguinho receba a nutrição ideal para uma vida saudável e feliz.</p>

                <!-- Botão -->
                <a href="../produtos.php" class="botao">Veja nossos produtos</a>
            </div>
        </div>
    </div>
</section>

<!-- Sessão Nutrientes e Alimentos para cães -->
<section class="custom-container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Nutrientes e Alimentos para cães</h3>
        </div>
        <div class="col-md-6 text-right">
            <a href="../categorias/categoria-racao-premium.php" class="btn btn-primary botao">Ver Mais</a>
        </div>
    </div>

    <!-- Produtos de Ração -->
    <div class="row mt-4" id="racao-premium-list">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gerarProdutos(categorias.racaoPremium, 4, "racao-premium-list");
        });
    </script>
    </div>
 
    <!-- Botão Ver Mais Produtos -->
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <a href="../categorias/categoria-racao-premium.php" class="nutrientes-alimentos botao btn btn-primary">Ver Mais Produtos</a>
        </div>
    </div>
</section>

<!-- Sessão Bem-estar e Diversão -->
<section id="bemestar-e-diversao">
<div class="custom-container">
    <div class="row">
        <!-- Coluna do Texto -->
        <div class="col-md-6 order-md-1 order-2">
            <h3>Bem-Estar e Diversão: O Melhor para Seu Pet!</h3>
            <p>No Petshop 'Melhor Amigo', acreditamos na importância da socialização e diversão 
                para garantir o bem-estar dos animais. <br>
                Oferecemos momentos especiais de brincadeiras e interação em nosso espaço dedicado, 
                onde seu pet se diverte e faz novos amigos.<br> 
                Explore nossa ampla variedade de brinquedos e acessórios, enriquecendo a vida do 
                seu amiguinho. <br>
                Confira nossa galeria de fotos, testemunhando o amor e cuidado que dedicamos a 
                cada cliente peludo que passa pelo nosso petshop. </p>
            <a href="../galeria-de-imagem.php" class="btn btn-primary">Confira nossos cuidados</a>
        </div>

        <!-- Coluna da Imagem -->
        <div class="col-md-6 order-md-2 order-1">
            <img src="../assets/img/diversao-para-seu-pet.png" class="img-fluid" alt="Imagem">
        </div>
    </div>
</div>
</section>


<!-- Sessão de Depoimentos -->
<section class="custom-container mt-5">
<div class="row">
    <!-- Título da Sessão -->
    <div class="col-md-12 text-center">
        <h2>Depoimentos</h2>
    </div>

    <!-- Depoimento 1 -->
    <div class="col-md-3 mb-4 depoimento">
            <div class="depoimento-content">
                <h5>Anna & Tobby</h5>
            <p>Produtos incríveis e entrega no prazo.</p>
            <img src="../assets/img/ossinhos-de-depoimento-1.svg" class="img-fluid" alt="Depoimento 2">
        </div>
    </div>

    <!-- Depoimento 2 -->
    <div class="col-md-3 mb-4 depoimento">
            <div class="depoimento-content">
            <h5>Christine & Tom</h5>
            <p>Adorei a experiência geral do Shpping!</p>
            <img src="../assets/img/ossinhos-de-depoimento.svg" class="img-fluid" alt="Depoimento 2">
        </div>
    </div>

    <!-- Depoimento 3 -->
    <div class="col-md-3 mb-4 depoimento">
            <div class="depoimento-content">
            <h5>Sindy & Kitch</h5>
            <p>Kitch é comida de amor do filhote-hub</p>
            <img src="../assets/img/ossinhos-de-depoimento.svg" class="img-fluid" alt="Depoimento 2">
        </div>
    </div>

    <!-- Depoimento 4 -->
    <div class="col-md-3 mb-4 depoimento">
        <div class="depoimento-content">
                <h5>Anna & Tobby</h5>
            <p>Produtos incríveis e entrega no prazo.</p>
            <img src="../assets/img/ossinhos-de-depoimento-1.svg" class="img-fluid" alt="Depoimento 2">
        </div>
    </div>
</div>
</section>



</main>
<?php include 'include/footer.php'; ?>
