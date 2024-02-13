<?php include 'include/base.html'; ?>
<?php include 'include/header.html'; ?>
<script src="../assets/js/cadastro-produtos.js"></script>
<script src="../assets/js/gerarProdutos.js"></script>

<main class="container-fluid mt-5">
    <!-- Seção com fundo verde -->
    <section id="product-title" class="full-width-container bg-success text-center text-white py-5">
        <h2>Nossos Produtos</h2>
    </section>

    <!-- Sessão de Ração Premium -->
    <section class="categoria custom-container">
        <h2>Ração Premium</h2>
        <p>No Petshop "Melhor Amigo", oferecemos uma seleção
        de rações premium para cães e gatos. Essas rações são formuladas com
        ingredientes de alta qualidade, garantindo uma nutrição balanceada e
        adequada para o seu pet.<br>Temos opções para diferentes idades, raças e
        necessidades específicas, proporcionando uma dieta saudável e saborosa
        para o seu melhor amigo</p>
        <div class="row mt-4" id="racao-premium-list">
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                gerarProdutos(categorias.racaoPremium, 4, "racao-premium-list");
            });
        </script>
        </div>
        <a href="pagina-racao-premium.html" class="btn btn-primary">Ver Todos os produtos</a>
    </section>

    <!-- Sessão de Tosa Especializada -->
    <section class="categoria custom-container">
        <h2>Serviço de Tosa Especializada</h2>
        <p>Proporcionamos serviços profissionais de
        tosa para cães de todas as raças. Nossos tosadores experientes e
        qualificados utilizam técnicas avançadas para garantir que seu pet tenha
        um visual impecável. <br>Além de cortes de pelos personalizados, também
        realizamos higienização e cuidados especiais, como limpeza de ouvidos e
        corte de unhas, deixando seu cãozinho limpo e bem cuidado.</p>
        <div class="row mt-4" id="tosa-especializada-list">
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                gerarProdutos(categorias.tosaEspecializada, 4, "tosa-especializada-list");
            });
            </script>
        </div>
    </section>

    <!-- Sessão de Banho Relaxante -->
    <section class="categoria custom-container">
        <h2>Banho Relaxante</h2>
        <p>: No Petshop "Melhor Amigo", oferecemos banhos
            relaxantes para cães e gatos. Utilizamos produtos de qualidade, seguros
            e adequados para cada tipo de pelagem, garantindo uma limpeza
            profunda e refrescante. <br>Nossos profissionais carinhosos proporcionam
            um ambiente tranquilo e seguro para que seu pet desfrute de um banho
            agradável, deixando-o com uma pelagem macia, brilhante e cheirosa.</p>
        <div class="row mt-4" id="banho-relaxante-list">
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                gerarProdutos(categorias.banhoRelaxante, 4, "banho-relaxante-list");
            });
            </script>
        </div>
    </section>

    <!-- Sessão de Brinquedos Interativos -->
    <section class="categoria custom-container">
        <h2>Brinquedos Interativos</h2>
        <p> Valorizamos o enriquecimento e a diversão dos
            animais, por isso oferecemos uma variedade de brinquedos interativos.
            Esses brinquedos estimulam a mente e o corpo do seu pet, promovendo
            o exercício físico e mental. <br>Desde brinquedos de mastigação duráveis até
            jogos interativos, temos opções para cães e gatos de todos os tamanhos
            e idades, garantindo horas de entretenimento e diversão saudável</p>
        <div class="row mt-4" id="brinquedos-interativos-list">
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                gerarProdutos(categorias.brinquedosInterativos, 4, "brinquedos-interativos-list");
            });
            </script>
        </div>
    </section>

    <!-- Sessão de Higiene e Cuidados -->
    <section class="categoria custom-container">
        <h2>Produtos de Higiene e Cuidados</h2>
        <p>Na nossa seleção de produtos, você
        encontrará uma gama de itens de higiene e cuidados para o seu pet. Isso
        inclui shampoos e condicionadores específicos para diferentes tipos de
        pelagem, escovas e pentes para manter os pelos desembaraçados e
        saudáveis, produtos de limpeza auricular e ocular, além de acessórios
        essenciais como coleiras, guias e comedouros. <br>Tudo o que você precisa
        para manter seu animalzinho limpo, confortável e bem cuidado</p>
        <div class="row mt-4" id="higiene-cuidados-list">
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                gerarProdutos(categorias.higieneCuidados, 4, "higiene-cuidados-list");
            });
            </script>
        </div>
    </section>

</main>

<?php include 'include/footer.php'; ?>
