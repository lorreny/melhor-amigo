<?php include 'include/base.html'; ?>
<?php include 'include/header.html'; ?>

<main class="container-fluid mt-5">
    <!-- Seção com fundo verde -->
    <section id="contact-title" class="full-width-container bg-success text-center text-white py-5">
        <h2>Entre em Contato</h2>
    </section>

    <!-- Seção com duas colunas -->
    <section id="contact-form" class="custom-container">
        <div class="row">
    <!-- Coluna com informações de contato -->
    <div class="col-md-6">
        <div class="contact-info-container">
            <h4>Informações de Contato</h4><br>
            <p><i class="fas fa-paw"></i> Petshop Melhor Amigo</p>
            <p><i class="fas fa-map-marker-alt"></i> Av. do Contorno, 6480 - Savassi, Belo Horizonte - MG, 31210-190</p>
            <p><i class="fas fa-phone"></i> Telefone: (34) 3659-4798 - (34) 99443-6718 (whatsapp)</p>
            <p><i class="far fa-envelope"></i> <a href="mailto:contato@melhoramigo.com.br" style="color: #000000;">contato@melhoramigo.com.br</a></p>
        </div>
    </div>
                
        <!-- Coluna com formulário -->
        <div class="col-md-6">
            <div class="form-container">
                <h4>Entre em Contato</h4>
                <p>Preencha o formulário abaixo para entrar em contato conosco.</p>
                <form action="banco-de-dados/processar-formulario-contato.php" method="post">
                <!-- Adicione este campo oculto -->
                <input type="hidden" name="origem" value="contato">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Nome" name="nome">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" placeholder="Telefone" name="telefone">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Mensagem" rows="5" name="mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>

    <section id="contact-title" class="full-width-container">
        <!-- Coluna com o mapa -->
        <div class="col-md-12 full-width-container">
            <div class="map-container">
                <!-- Substitua "YOUR_EMBEDDED_MAP_URL" pela URL de incorporação do seu mapa do Google -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.6385806872117!2d-43.94444931450472!3d-19.93962949076543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699dc3b0a592d%3A0x72478ef5ed116c38!2sInfinity%20School%20Belo%20Horizonte!5e0!3m2!1spt-BR!2sbr!4v1706049829197!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
        </div>
    </section>


</main>

<?php
// Verifica se a variável "enviado" está presente na URL (após o envio do formulário)
if (isset($_GET['enviado'])) {
    echo '<script>alert("Mensagem enviada com sucesso!");</script>';
}
?>

<?php include 'include/footer.php'; ?>
