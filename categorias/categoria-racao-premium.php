<?php include '../include/basegaleria.html'; ?>
<?php include '../include/header.html'; ?>
<script src="../assets/js/cadastro-produtos.js"></script>
<script src="../assets/js/gerarProdutos.js"></script>
<script src="../assets/js/paginacao.js"></script>
<main class="container-fluid mt-5">
    <!-- Seção com fundo verde -->
    <section id="racao-premium" class="full-width-container bg-success text-center text-white py-5">
        <h2>Ração Premium</h2>
    </section>

    <section id="texto" class="custom-container">
        <p>Oferecemos uma seleção de rações premium para cães e gatos. Essas rações são formuladas com ingredientes de alta qualidade, garantindo uma nutrição balanceada e
        adequada para o seu pet.<br>
        Temos opções para diferentes idades, raças e necessidades específicas, proporcionando uma dieta saudável e saborosa
        para o seu melhor amigo</p>
    </section>

    <!-- Seção de Produtos -->
    <section id="lista-de-produto-racao" class="custom-container">
        <div id="product-list-racao" class="row">
            <!-- Chamada para gerar produtos da categoria "Ração Premium" -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    mostrarPaginacao(categorias.racaoPremium, 'product-list-racao', 'pagination-container-produtos-racao');
                });
            </script>
        </div>
    </section>

    <!-- Paginação -->
    <section id="product-pagination-racao" class="custom-container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <!-- Adicione a marcação para a paginação aqui -->
                <ul class="pagination" id="pagination-container-produtos-racao" class="pagination-style">
                    <!-- A marcação da página será adicionada aqui dinamicamente -->
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include '../include/footer.php'; ?>
