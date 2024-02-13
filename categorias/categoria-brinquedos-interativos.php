<?php include '../include/basegaleria.html'; ?>
<?php include '../include/header.html'; ?>
<script src="../assets/js/cadastro-produtos.js"></script>
<script src="../assets/js/gerarProdutos.js"></script>
<script src="../assets/js/paginacao.js"></script>
<main class="container-fluid mt-5">

    <!-- Seção com fundo verde -->
    <section id="brinquedos-interativos" class="full-width-container bg-success text-center text-white py-5">
        <h2>Brinquedos Interativos</h2>
    </section>

    <section id="texto" class="custom-container">
        <p>Valorizamos o enriquecimento e a diversão dos animais, por isso oferecemos uma variedade de brinquedos interativos.<br>
        Esses brinquedos estimulam a mente e o corpo do seu pet, promovendo o exercício físico e mental. <br>
        Desde brinquedos de mastigação duráveis até jogos interativos, temos opções para cães e gatos de todos os tamanhos
        e idades, garantindo horas de entretenimento e diversão saudável</p>
    </section>

    <!-- Seção de Produtos -->
    <section id="lista-de-produto-brinquedos" class="custom-container">
        <div id="product-list-brinquedos" class="row">
            <!-- Chamada para gerar produtos da categoria "Brinquedos Interativos" -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    mostrarPaginacao(categorias.brinquedosInterativos, 'product-list-brinquedos', 'pagination-container-produtos-brinquedos');
                });
            </script>
        </div>
    </section>

    <!-- Paginação -->
    <section id="product-pagination-brinquedos" class="custom-container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <!-- Adicione a marcação para a paginação aqui -->
                <ul class="pagination" id="pagination-container-produtos-brinquedos" class="pagination-style">
                    <!-- A marcação da página será adicionada aqui dinamicamente -->
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include '../include/footer.php'; ?>
