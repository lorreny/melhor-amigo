<?php include '../include/basegaleria.html'; ?>
<?php include '../include/header.html'; ?>
<script src="../assets/js/cadastro-produtos.js"></script>
<script src="../assets/js/gerarProdutos.js"></script>
<script src="../assets/js/paginacao.js"></script>
<main class="container-fluid mt-5">

    <!-- Seção com fundo verde -->
    <section id="banho-relaxante" class="full-width-container bg-success text-center text-white py-5">
        <h2>Banho Relaxante</h2>
    </section>

    <section id="texto" class="custom-container">
        <p>Oferecemos banhos relaxantes para cães e gatos. Utilizamos produtos de qualidade, seguros e adequados para cada tipo de pelagem, garantindo uma limpeza
        profunda e refrescante. <br>
        Nossos profissionais carinhosos proporcionam um ambiente tranquilo e seguro para que seu pet desfrute de um banho
        agradável, deixando-o com uma pelagem macia, brilhante e cheirosa.</p>
    </section>

    <!-- Seção de Produtos -->
    <section id="lista-de-produto-banho" class="custom-container">
        <div id="product-list-banho" class="row">
            <!-- Chamada para gerar produtos da categoria "Banho Relaxante" -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    mostrarPaginacao(categorias.banhoRelaxante, 'product-list-banho', 'pagination-container-produtos-banho');
                });
            </script>
        </div>
    </section>

    <!-- Paginação -->
    <section id="product-pagination-banho" class="custom-container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <!-- Adicione a marcação para a paginação aqui -->
                <ul class="pagination" id="pagination-container-produtos-banho" class="pagination-style">
                    <!-- A marcação da página será adicionada aqui dinamicamente -->
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include '../include/footer.php'; ?>
