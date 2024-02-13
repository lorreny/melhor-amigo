<?php include '../include/base.html'; ?>
<?php include '../include/header.html'; ?>
<main class="container-fluid mt-5">

<!-- Seção com fundo verde -->
<section id="tosa-especializada" class="full-width-container bg-success text-center text-white py-5">
    <h2>Tosa Especializada</h2>
</section>

<!-- Nova seção "Banner Banho e Tosa" -->
<section id="banner-banho-e-tosa">
    <div class="custom-container">
        <div class="row align-items-center">
            <!-- Coluna única para o texto -->
            <div class="col-md-6 texto align-self-center">
                <!-- Texto do Banner Banho e Tosa -->
                <h3>O cuidado que o seu pet merece</h3>
                <p>Serviços completos e seguros para a higiene do seu melhor amigo.<br>
                <!-- Botão -->
                <a class="servico-tosa botao" href="#duvidas">Tire suas dúvidas</a>
            </div>

            <!-- Coluna para o vídeo -->
            <div class="col-md-6 coluna-video">
                <video autoplay loop width="100%" height="100%" preload="none" controls>
                    <source src="../produtos/servico-de-tosa/hero_compress.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
            </div>
        </div>
    </div>
</section>

<!-- Nova seção "Higiene do pet" -->
<section id="higiene-do-pet">
    <div class="custom-container">
    <div class="row">
        <!-- Coluna para a imagem -->
        <div class="col-md-6 coluna-imagem">
            <img class="imagem-higiene-do-pet" src="../assets/img/bath-benefits.jpg" alt="A higiene do pet">
        </div>

        <!-- Coluna única para o texto -->
        <div class="col-md-6 texto">
            <!-- Texto do Higiene do pet -->
            <h3>A higiene do pet é indicada por veterinários</h3>
            <p>Com cuidados preventivos, ela reduz a transmissão de doenças para pets e humanos..<br>
            <ul class="higiene-do-pet">
                <li><i class="fas fa-check"></i> O banho é um aliado no tratamento de doenças de pele nos pets.</li>
                <li><i class="fas fa-check"></i> A tosa higiênica facilita a limpeza do pet e evita a contaminação do ambiente.</li>
                <li><i class="fas fa-check"></i> A escovação do pelo reduz a queda habitual e elimina os nós.</li>
                <li><i class="fas fa-check"></i> O banho ajuda a manter a pelagem bem cuidada e evita maus cheiros.</li>
            </ul>
            <!-- Botão -->
            <a class="servico-tosa botao" href="https://wa.me/5531999999999?text=Quero+agendar+o+cuidado+para+meu+pet">Agendar agora</a>
        </div>
    </div>
    </div>
</section>

<!-- Nova seção "Conheça as etapas do banho" -->
<section id="etapas-do-banho">
    <div class="custom-container">
        <div class="row">
            <div class="col">
                <h3>Conheça as etapas do banho</h3>
            </div>
        </div>

        <!-- Div com 5 colunas -->
        <div class="row">
            <div class="col-md-2 text-center">
                <!-- Conteúdo da primeira coluna -->
                <div class="details">
                    <i class="fas fa-bath"></i>
                    <h4>Banho</h4>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <!-- Conteúdo da segunda coluna -->
                <div class="details">
                    <i class="fas fa-wind"></i>
                    <h4>Secagem</h4>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <!-- Conteúdo da terceira coluna -->
                <div class="details">
                    <i class="fas fa-paint-brush"></i>
                    <h4>Escova na pelagem</h4>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <!-- Conteúdo da quarta coluna -->
                <div class="details">
                    <!-- Substitua a classe do ícone pelo ícone correto -->
                    <i class="fas fa-deaf"></i>
                    <h4>Limpeza dos ouvidos</h4>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <!-- Conteúdo da quinta coluna -->
                <div class="details">
                    <i class="fas fa-cut"></i>
                    <h4>Corte de unhas</h4>
                </div>
            </div>
        </div>

        <!-- Div com um botão -->
        <div class="row">
            <div class="col">
                <a class="servico-tosa botao" href="#duvidas">Tire suas dúvidas</a>
            </div>
        </div>
    </div>
</section>

<!-- Nova seção "Cuidado adicional" -->
<section id="cuidado-adicional" class="custom-container">
    <div class="row">
        <div class="col">
            <h3>Que tal um cuidado adicional?</h3>
            <p>Ajudam no bem-estar do pet e tornam a interação dele com a família ainda mais prazerosa.</p>
        </div>
    </div>

    <!-- Div com 4 colunas -->
    <div class="row mt-4">
    <div class="col-md-3 text-center">
        <!-- Conteúdo da primeira coluna -->
        <img src="../assets/img/tratamento-da-pelagem.png" alt="Ração Premium">
        <h4>Tratamento da pelagem</h4>
        <p>Hidratações para deixar o pelo saudável, brilhoso e cheiroso.</p>

        <!-- Botão Ver Mais -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tratamentoPelagemModal">
            Ver Mais
        </button>
    </div>

    <div class="modal fade" id="tratamentoPelagemModal" tabindex="-1" role="dialog" aria-labelledby="tratamentoPelagemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tratamentoPelagemModalLabel">Mais Além</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Hidratação com Hydra</strong></p>
                    <p>Rica em ômega-9 e óleo de amêndoas doces, proporciona nutrição e deixa os pelos macios e saudáveis.</p>
                    <p><strong>Hidratação de argan</strong></p>
                    <p>Rica em ômega-9, repõe a queratina, criando uma camada super protetora na pele e nos pelos.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 text-center">
        <!-- Conteúdo da primeira coluna -->
        <img src="../assets/img/tonalizacao-da-pelagem.png" alt="Ração Premium">
        <h4>Tonalização da pelagem</h4>
        <p>Banho tonalizante para pelos brancos mais saudáveis e brilhosos.</p>

        <!-- Botão Ver Mais -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tonalizacaoPelagemModal">
            Ver Mais
        </button>
    </div>

    <div class="modal fade" id="tonalizacaoPelagemModal" tabindex="-1" role="dialog" aria-labelledby="tonalizacaoPelagemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tonalizacaoPelagemModalLabel">Mais Além</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Banho tonalizante</strong></p>
                    <p>Realça a cor natural e o brilho de pelagens claras. Não age como tintura.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 text-center">
        <!-- Conteúdo da primeira coluna -->
        <img src="../assets/img/opcoes-de-tosa.png" alt="Ração Premium">
        <h4>Opções de tosa</h4>
        <p>Para pets de pelos longos e curtos.</p>

        <!-- Botão Ver Mais -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#opcoesTosaModal">
            Ver Mais
        </button>
    </div>

    <div class="modal fade" id="opcoesTosaModal" tabindex="-1" role="dialog" aria-labelledby="opcoesTosaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="opcoesTosaModalLabel">Mais Além</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Tosa na tesoura</strong></p>
                    <p>Indicada para pets de pelagem longa por ajudar e prevenir alergias.</p>
                    <p><strong>Tosa na máquina</strong></p>
                    <p>É feita com a máquina de tosa e deixa a pelagem bem baixa.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 text-center">
        <!-- Conteúdo da primeira coluna -->
        <img src="../assets/img/manutencao-essencial.png" alt="Ração Premium">
        <h4>Manutenção essencial</h4>
        <p>Ajudam a manter a higiene e saúde em dia.</p>

        <!-- Botão Ver Mais -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manutencaoEssencialModal">
            Ver Mais
        </button>
    </div>

    <div class="modal fade" id="manutencaoEssencialModal" tabindex="-1" role="dialog" aria-labelledby="manutencaoEssencialModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manutencaoEssencialModalLabel">Mais Além</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Tosa higiênica</strong></p>
                    <p>É realizada nas partes íntimas, patas e cantos dos olhos para prolongar a higiene e evitar o acúmulo de sujeira.</p>
                    <p><strong>Escovação de dentes</strong></p>
                    <p>O cuidado com a saúde bucal dos pets é essencial para evitar o acúmulo de tártaro, mau hálito e infecções.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Div com um botão -->
    <div class="row mt-4">
        <div class="col">
            <a class="servico-tosa botao" href="https://wa.me/5531999999999?text=Quero+agendar+o+cuidado+para+meu+pet">Consulte valores</a>
        </div>
    </div>
</section>

<!-- Nova seção "Como funciona o atendimento" -->
<section id="como-funciona" class="custom-container">
    <div class="row">
        <div class="col">
            <h3>Como funciona o atendimento</h3>
        </div>
    </div>

    <!-- Linha com 4 colunas -->
    <div class="row mt-4">
        <!-- Coluna 1 -->
        <div class="col-md-3 text-center">
            <div class="icon-with-title">
                <i class="fas fa-calendar-alt fa-2x"></i>
                <h4 class="como-funciona">Agende um horário</h4>
            </div>
            <p>Marque pelo app, Alô Petz (11) 3434-6980 ou nas lojas físicas.</p>
        </div>

        <!-- Coluna 2 -->
        <div class="col-md-3 text-center">
            <div class="icon-with-title">
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <h4 class="como-funciona">Vá até a loja</h4>
            </div>
            <p>Estaremos esperando por vocês no dia e horário agendados.</p>
        </div>

        <!-- Coluna 3 -->
        <div class="col-md-3 text-center">
            <div class="icon-with-title">
                <i class="fas fa-search fa-2x"></i>
                <h4 class="como-funciona">Faça o check-in</h4>
            </div>
            <p>Ao chegar, confirmamos as necessidades do pet antes de começar o atendimento.</p>
        </div>

        <!-- Coluna 4 -->
        <div class="col-md-3 text-center">
            <div class="icon-with-title">
                <i class="fas fa-check fa-2x"></i>
                <h4 class="como-funciona">Busque o pet</h4>
            </div>
            <p>Fique na loja ou seja avisado por telefone quando o pet estiver pronto.</p>
        </div>
    </div>
</section>


<!-- Nova seção "Tratamento 5 estrelas" -->
<section id="tratamento-5-estrelas" class="custom-container">
    <div class="row">
        <div class="col text-center">
        <h3 style="position: relative; display: inline-block;">Tratamento 5 estrelas para o seu astro <br><span style="font-style: italic; text-decoration: line-through; color: #008000;">de Hollywood</span> preferido</h3>
        </div>
    </div>

    <!-- Linha com 3 colunas -->
    <div class="row mt-4">
        <!-- Coluna da foto (50%) -->
        <div class="col-md-5">
            <img src="../assets/img/tratamento-5-estrelas.jpg" alt="Astro de Hollywood"">
        </div>

        <!-- Coluna 1 -->
        <div class="col-md-3 tratamento-col" style="background-color: #f5f5f5; border-radius: 10px; margin-right: 10px;">
            <div class="icon-with-text">
                <i class="fas fa-paw fa-2x"></i>
                <p>Corte de unha e limpeza de orelhas</p>
            </div>
            <div class="icon-with-text">
                <i class="fas fa-dog fa-2x"></i>
                <p>Suporte para cães de grande porte</p>
            </div>
            <div class="icon-with-text">
                <i class="fas fa-tools fa-2x"></i>
                <p>Equipamentos ergonômicos</p>
            </div>
        </div>

        <!-- Coluna 2 -->
        <div class="col-md-3 tratamento-col" style="background-color: #f5f5f5; border-radius: 10px; ">
            <div class="icon-with-text">
                <i class="fas fa-wind fa-2x"></i>
                <p>Secagem à distância com escova especial</p>
            </div>
            <div class="icon-with-text">
                <i class="fas fa-paw fa-2x"></i>
                <p>Guia e coleira para conforto no banho</p>
            </div>
            <div class="icon-with-text">
                <i class="fas fa-user-md fa-2x"></i>
                <p>Auxílio de veterinários, conforme disponibilidade</p>
            </div>
        </div>
    </div>
</section>

<!-- Nova seção "Banho Relaxante" -->
<section id="banho-relaxante">
    <div class="custom-container">
        <div class="row">
            <!-- Coluna para a imagem -->
            <div class="col-md-6 coluna-imagem">
                <img class="imagem-banho-relaxante" src="../assets/img/banho-relaxante.png" alt="A higiene do pet">
            </div>

            <!-- Coluna única para o texto -->
            <div class="col-md-6 texto">
                <!-- Texto do Higiene do pet -->
                <h3>Banho relaxante e confortável o ano todo</h3>
                <p>Estamos abertos de segunda a segunda..<br>
                <ul class="banho-relaxante">
                    <li><i class="fas fa-check"></i> Ambiente climatizado de acordo com a estação.</li>
                    <li><i class="fas fa-check"></i> Usamos algodão impermeável para proteger os ouvidos.</li>
                    <li><i class="fas fa-check"></i> Nossas toalhas são biodegradáveis.</li>
                    <li><i class="fas fa-check"></i> Você pode levar o shampoo indicado pelo veterinário.</li>
                </ul>
                <!-- Botão -->
                <a class="servico-tosa botao" href="https://wa.me/5531999999999?text=Quero+agendar+o+cuidado+para+meu+pet">Agendar agora</a>
            </div>
        </div>
    </div>
</section>

<!-- Sessão Dúvidas -->
<section id="duvidas">
    <div class="custom-container">
        <div class="row">
            <div class="col text-center">
                <h3>Possui dúvidas? Confira nosso FAQ</h3>
                <p>Respostas para as perguntas mais frequentes sobre nossos serviços.</p>
            </div>
        </div>

        <!-- FAQ - Perguntas Frequentes usando Acordeão -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div id="accordion">
                    <!-- Pergunta 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-caret-down"></i> Quais serviços estão inclusos no banho?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            O banho inclui corte de unha, limpeza de orelhas e escovação de dentes.<br>
                            Esses serviços são realizados de acordo com a aceitação do seu pet.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-caret-down"></i> Como funciona a triagem feita antes dos atendimentos?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                            Ao chegar na loja, conferimos se os dados do cadastro feito pelo cliente estão corretos e avaliamos o que seu pet precisa.<br>
                            Se a raça, idade ou peso cadastrados não coincidirem com o animal, o valor previamente informado e o tempo necessário para o atendimento poderão ser alterados.<br>
                            Se a alteração for necessária, a loja poderá sugerir um novo horário de atendimento com base na disponibilidade de agenda ou cancelar o serviço, se o cliente desejar.<br>
                            Essa triagem também ajuda o esteticista a identificar a necessidade de realizar o desembolo e sugerir outros serviços opcionais para potencializar o banho, como por exemplo, hidratações e banho tonalizante.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-caret-down"></i> O que é e como funciona o desembolo?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                            Desembolo é o serviço que consiste em desfazer os nós da pelagem do pet. Ao comparecer para o atendimento, o esteticista fará uma triagem para verificar se o serviço é necessário.<br>
                            Se sim, a realização é obrigatória para seguir com os outros serviços contratados, como: banho, tosas ou hidratações. O desembolo é cobrado à parte.<br>
                            O tempo necessário para realizar o desembolo varia de acordo com a raça, o porte ou tipo de pelagem do pet. Se for necessário um tempo maior do que o disponível na agenda, o cliente poderá escolher entre reagendar ou cancelar o serviço.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-caret-down"></i> Gatos podem tomar banho?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                            Os gatos costumam fazer uma auto limpeza com a língua. Porém, em alguns momentos, uma limpeza mais cuidadosa pode ser necessária, principalmente, se o pet costuma brincar ou frequentar espaços ao ar livre.<br>
                            Nós temos profissionais capacitados para esse atendimento que cuidarão do seu felino com muito carinho, fazendo uma higiene que removerá o acúmulo de sujeira e impurezas nos lugares onde a língua não é tão eficiente.<br>
                            Por segurança e para evitar o estresse em gatos, é obrigatória a presença do tutor durante a realização dos serviços.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 5 -->
                    <div class="card">
                        <div class="card-header" id="headingeFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseeFive" aria-expanded="false" aria-controls="collapseeFive">
                                    <i class="fas fa-caret-down"></i> Não vou conseguir comparecer na data e horário agendados. O que eu faço?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseeFive" class="collapse" aria-labelledby="headingeFive data-parent="#accordion">
                            <div class="card-body">
                            É possível reagendar ou cancelar o seu horário direto pelo nosso aplicativo, de forma rápida e fácil. Basta abrir o app na parte de Banho e Tosa, acessar a agenda e clicar na opção desejada.<br>
                            Se preferir, entre em contato com o Alô Petz pelo telefone (31) 99999-9999.<br>
                            Pedimos que altere ou cancele o seu atendimento o mais breve possível para dar a oportunidade de outro pet ser atendido naquele horário.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 6 -->
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fas fa-caret-down"></i> Como funciona a triagem feita antes dos atendimentos?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                            Ao chegar na loja, conferimos se os dados do cadastro feito pelo cliente estão corretos e avaliamos o que seu pet precisa.<br>
                            Se a raça, idade ou peso cadastrados não coincidirem com o animal, o valor previamente informado e o tempo necessário para o atendimento poderão ser alterados.<br>
                            Se a alteração for necessária, a loja poderá sugerir um novo horário de atendimento com base na disponibilidade de agenda ou cancelar o serviço, se o cliente desejar.<br>
                            Essa triagem também ajuda o esteticista a identificar a necessidade de realizar o desembolo e sugerir outros serviços opcionais para potencializar o banho, como por exemplo, hidratações e banho tonalizante.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 7 -->
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <i class="fas fa-caret-down"></i> Fiz o pagamento pelo aplicativo e não pude comparecer. Como funciona o reembolso?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                            O reembolso é automático e é enviado para a mesma conta usada no pagamento do serviço.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 8 -->
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <i class="fas fa-caret-down"></i> Por que agendei com um profissional e meu pet foi atendido por outro?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                            Nossos profissionais possuem diferentes níveis de formação.<br>
                            O pet sempre será atendido por um especialista naquele serviço, que pode não ser o mesmo escolhido no aplicativo.
                            </div>
                        </div>
                    </div>
                    <!-- Pergunta 9 -->
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <i class="fas fa-caret-down"></i> Quais os melhores dias para os atendimentos de gatos, pets com doenças preexistentes ou idosos?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body">
                            Estamos abertos de segunda a segunda. Porém, os finais de semana costumam ser mais movimentados, o que pode causar estresse em pets desses grupos.<br>
                            Por isso, indicamos que ao agendar serviços de higiene para eles, escolha dias mais tranquilos, como de segunda a quinta-feira.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 10 -->
                    <div class="card">
                        <div class="card-header" id="headingTen">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <i class="fas fa-caret-down"></i> Como faço para que o banho do meu pet seja assistido por um médico-veterinário?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                            <div class="card-body">
                            O acompanhamento deixa os tutores e pets mais seguros, principalmente no caso de gatos, filhotes, pets com doenças preexistentes ou idosos.<br>
                            Esse serviço é cobrado à parte e deve ser combinado com antecedência pelo Alô Petz (31) 9999-9999 ou presencialmente na unidade escolhida para o atendimento.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 11 -->
                    <div class="card">
                        <div class="card-header" id="headingEleven">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <i class="fas fa-caret-down"></i> Quais são as regras e a validade do pacote de banhos?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                            <div class="card-body">
                            O pacote de banhos é vendido apenas nas lojas físicas da Petz e tem validade de 6 meses.<br>
                            Os serviços só podem ser realizados de segunda a sexta, na loja em que foram contratados e o agendamento precisa ser feito de forma presencial e com antecedência.<br>
                            Como cortesia, na compra de cada pacote, o pet ganha uma tosa higiênica ou uma remoção de subpelos.
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 12 -->
                    <div class="card">
                        <div class="card-header" id="headingTwelve">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <i class="fas fa-caret-down"></i> Tenho mais de um desconto disponível para os agendamentos. Quais são as regras de uso?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                            <div class="card-body">
                            Quando há mais de um desconto disponível, é sempre aplicado o mais vantajoso para o cliente. As ofertas não são acumulativas.
                            </div>
                        </div>
                    </div>
                    <!-- Adicione mais perguntas conforme necessário -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../include/footer.php'; ?>