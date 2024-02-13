<?php include '../include/basegaleria.html'; ?>
<?php include '../include/header.html'; ?>
<script src="../assets/js/cadastro-produtos.js"></script>
<script src="../assets/js/gerarProdutos.js"></script>
<script src="../assets/js/paginacao.js"></script>
<main class="container-fluid mt-5">

    <!-- Seção com fundo verde -->
    <section id="higiene-cuidados" class="full-width-container bg-success text-center text-white py-5">
        <h2>Higiene e Cuidados</h2>
    </section>

    <section id="texto" class="custom-container">
        <p>Na nossa seleção de produtos, você encontrará uma gama de itens de higiene e cuidados para o seu pet.<br>
        Isso inclui shampoos e condicionadores específicos para diferentes tipos de pelagem, escovas e pentes para manter os pelos desembaraçados e saudáveis, produtos de limpeza auricular e ocular, além de acessórios essenciais como coleiras, guias e comedouros. <br>
        Tudo o que você precisa para manter seu animalzinho limpo, confortável e bem cuidado</p>
    </section>
    <!-- Seção de Produtos -->
    <section id="lista-de-produto-higiene" class="custom-container">
        <div id="product-list-higiene" class="row">
            <!-- Chamada para gerar produtos da categoria "Higiene e Cuidados" -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    mostrarPaginacao(categorias.higieneCuidados, 'product-list-higiene', 'pagination-container-produtos-higiene');
                });
            </script>
        </div>
    </section>

    <!-- Paginação -->
    <section id="product-pagination-higiene" class="custom-container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <!-- Adicione a marcação para a paginação aqui -->
                <ul class="pagination" id="pagination-container-produtos-higiene" class="pagination-style">
                    <!-- A marcação da página será adicionada aqui dinamicamente -->
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include '../include/footer.php'; ?>
