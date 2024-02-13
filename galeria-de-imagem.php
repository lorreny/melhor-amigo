<?php include 'include/basegaleria.html'; ?>
<?php include 'include/header.html'; ?>

    <script src="../assets/js/cadastro-de-imagens-galeria.js"></script>
    <script src="../assets/js/gerarGaleria.js"></script>
    <script src="../assets/js/paginacao.js"></script>

<main class="container-fluid mt-5">
    <!-- Galeria de Fotos -->

    <section id="gallery" class="full-width-container bg-success text-center text-white py-5">
        <h2>Galeria de Fotos</h2>
    </section>

    <section id="gallery-section" class="custom-container">
        <div class="gallery-container" id="galleryContainer"></div>
    </section>

    <script>
        // Carregar imagens da galeria
        const { imagens, legendas } = carregarImagensGaleria();
        
        // Gerar galeria com as imagens
        gerarGaleria(imagens, legendas);
    </script>

<!-- Paginação -->
<section id="product-pagination" class="custom-container">
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <!-- Adicione a marcação para a paginação aqui -->
            <ul class="pagination" id="pagination-container-galeria" class="pagination-style">
                <!-- A marcação da página será adicionada aqui dinamicamente -->
            </ul>
        </div>
    </div>
</section>

</main>

<?php include 'include/footer.php'; ?>
