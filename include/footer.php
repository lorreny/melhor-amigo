<footer>
    <section id="footer" class="custom-container mt-5">
        <!-- Nova sessão com quatro colunas -->
        <div class="row footer">
            <!-- Coluna 1 - Logo e breve descrição -->
            <div class="col-md-3">
                <img src="../assets/img/logo-verde.svg" alt="Logo Petshop" class="img-fluid logo">
                <p>No Petshop "Melhor Amigo"</p>
                <p>Nós entendemos que seu animal de estimação é mais do que apenas um bichinho, é um membro especial da sua família.</p>
            </div>

            <!-- Coluna 2 - Institucional e Menus -->
            <div class="col-md-3">
                <h4>Serviços</h4>
                <ul>
                    <li><a href="../categorias/categoria-racao-premium.php">Ração Premium</a></li>
                    <li><a href="../categorias/categoria-tosa-especializada.php">Tosa Especializada</a></li>
                    <li><a href="../categorias/categoria-banho-relaxante.php">Banho Relaxante</a></li>
                    <li><a href="../categorias/categoria-brinquedos-interativos.php">Brinquedos Interativos</a></li>
                    <li><a href="../categorias/categoria-higiene-cuidados.php">Higiene e Cuidados</a></li>
                </ul>
            </div>

            <!-- Coluna 3 - Central de Atendimento -->
            <div class="col-md-3">
                <h4>Atendimento</h4>
                <p>Endereço da sede:<br>Av. do Contorno, 6480 - Savassi, Belo Horizonte - MG, 31210-190</p>
                <p>Telefone: (616)-459-8622</p>
            </div>

            <!-- Coluna 4 - Assine a Newsletter -->
            <div class="col-md-3">
                <h4>Assine a Newsletter</h4>
                <form action="banco-de-dados/processar-formulario-contato.php" method="post" id="newsletterForm">
                <!-- Adicione este campo oculto -->
                <input type="hidden" name="origem" value="assinatura">

                    <div class="form-group">
                        <label for="nome" class="sr-only">Nome:</label>
                        <input type="text" class="form-control mb-2" id="nome" placeholder="Seu Nome" name="nome_assinante">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">E-mail:</label>
                        <input type="email" class="form-control mb-2" id="email" placeholder="Seu E-mail" name="email_assinante">
                    </div>
                    <button type="submit" class="btn btn-primary">Assinar</button>
                </form>
            </div>
    </section>

        <!-- Última sessão -->
        <div class="row footer">
            <div class="col text-center">
                <p>&copy; 2024 Petshop "Melhor Amigo". Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
</body>
<!-- Adicione isso ao final do body para importar as dependências do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

<!-- Adicione a biblioteca Bootstrap no final do seu HTML para usar o acordeão -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-twQ50F18NhaBXilfWVdY90gNp0X8bRi1gEM5wevhpmYl1mP5ki1fDkR8dQKxeCQ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-Lh5gR/PmjzuHHYLRy8Xh3rAuU6I3elh3dpSqqUc6UBCm1Pf51CuvH8Tk7o8VI8e0" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyFZ1a64Ic87XC1wkGGFaKtGSL06dMz4N5" crossorigin="anonymous"></script>

<?php
// Verifica se a variável "enviado" está presente na URL (após o envio do formulário)
if (isset($_GET['assinante'])) {
    echo '<script>alert("Você está cadastrado em nossa Newsletter!");</script>';
}
?>