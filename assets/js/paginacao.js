const produtosPorPagina = 8;

function gerarPagina(container, produtosDaPagina) {
    container.classList.add('fade-in');
    container.classList.remove('active');

    setTimeout(() => {
        container.innerHTML = '';

        produtosDaPagina.forEach(produto => {

            const coluna = document.createElement("div");
            coluna.className = "col-md-3 mb-4";

            const card = document.createElement("div");
            card.className = "card";

            const img = document.createElement("img");
            img.src = produto.imagem;
            img.className = "card-img-top";
            img.alt = `Imagem ${produto.nome}`;

            const cardBody = document.createElement("div");
            cardBody.className = "card-body";

            const titulo = document.createElement("h5");
            titulo.className = "card-title";
            titulo.textContent = produto.nome;

            const descricao = document.createElement("p");
            descricao.className = "card-text";
            descricao.textContent = produto.descricao;

            const valor = document.createElement("p");
            valor.className = "card-text";
            valor.textContent = produto.valor;

            const botaoComprar = document.createElement("a");
            botaoComprar.href = "#";
            botaoComprar.className = "btn btn-primary";
            botaoComprar.textContent = "Comprar";

            cardBody.appendChild(titulo);
            cardBody.appendChild(descricao);
            cardBody.appendChild(valor);
            cardBody.appendChild(botaoComprar);

            card.appendChild(img);
            card.appendChild(cardBody);

            coluna.appendChild(card);
            container.appendChild(coluna);
        });
        container.classList.add('active');
    }, 500);
}

function mostrarPagina(pagina, produtos, container, paginationContainerID) {
    const startIndex = (pagina - 1) * produtosPorPagina;
    const endIndex = startIndex + produtosPorPagina;
    const produtosDaPagina = produtos.slice(startIndex, endIndex);

    gerarPagina(container, produtosDaPagina);

    // Remove a classe active de todas as páginas
    const pages = document.querySelectorAll(`#${paginationContainerID} .page-link`);
    for (let i = 0; i < pages.length; i++) {
        pages[i].classList.remove('active');
    }

    // Adiciona a classe active à página atual
    document.querySelector(`#${paginationContainerID} .page-link[data-page="${pagina}"]`).classList.add('active');
}

function mostrarPaginacao(produtos, containerID, paginationContainerID) {
    const container = document.getElementById(containerID);
    const numPaginas = Math.ceil(produtos.length / produtosPorPagina);

    document.getElementById(paginationContainerID).innerHTML = '';

    for (let i = 1; i <= numPaginas; i++) {
        const li = document.createElement('li');
        li.className = 'page-item';
        const a = document.createElement('a');
        a.className = 'page-link';
        a.href = '#';
        a.textContent = i;
        a.setAttribute('data-page', i);
        a.addEventListener('click', () => mostrarPagina(i, produtos, container, paginationContainerID));
        li.appendChild(a);
        document.getElementById(paginationContainerID).appendChild(li);
    }

    mostrarPagina(1, produtos, container, paginationContainerID);
}

document.addEventListener('DOMContentLoaded', function() {
    mostrarPaginacao(categorias.tosaEspecializada, 'product-list-tosa', 'pagination-container-produtos-tosa');
});
document.addEventListener('DOMContentLoaded', function() {
    mostrarPaginacao(categorias.racaoPremium, 'product-list-racao', 'pagination-container-produtos-racao');
});
document.addEventListener('DOMContentLoaded', function() {
    mostrarPaginacao(categorias.banhoRelaxante, 'product-list-banho', 'pagination-container-produtos-banho');
});
document.addEventListener('DOMContentLoaded', function() {
    mostrarPaginacao(categorias.brinquedosInterativos, 'product-list-brinquedos', 'pagination-container-produtos-brinquedos');
});
document.addEventListener('DOMContentLoaded', function() {
    mostrarPaginacao(categorias.higieneCuidados, 'product-list-higiene', 'pagination-container-produtos-higiene');
});


document.addEventListener('DOMContentLoaded', function() {

    const imagensPorPagina = 12;
    const galleryContainer = document.getElementById('galleryContainer');
    const { imagens, legendas } = carregarImagensGaleria();
    const paginationContainerGaleria = document.getElementById('pagination-container-galeria');

    function gerarPaginaGaleria(imagensDaPagina, legendasDaPagina) {
        galleryContainer.classList.add('fade-in');
        galleryContainer.classList.remove('active');

        setTimeout(() => {
            galleryContainer.innerHTML = '';

            imagensDaPagina.forEach((imagem, index) => {
                const galleryItem = document.createElement("div");
                galleryItem.className = "gallery-item";

                const a = document.createElement("a");
                a.href = imagem;
                a.setAttribute("data-fancybox", "gallery");
                a.setAttribute("data-caption", legendas[index]);

                const img = document.createElement("img");
                img.src = imagem;
                img.alt = `Imagem ${index + 1}`;

                a.appendChild(img);
                galleryItem.appendChild(a);
                galleryContainer.appendChild(galleryItem);
            });
    
        // Inicializa o Fancybox após o carregamento da página
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({
                animationEffect: "fade",
                transitionEffect: "slide",
            });
        });
        galleryContainer.classList.add('active');
    }, 500);
}

    function mostrarPaginaGaleria(pagina) {
        const startIndex = (pagina - 1) * imagensPorPagina;
        const endIndex = startIndex + imagensPorPagina;
        const imagensDaPagina = imagens.slice(startIndex, endIndex);
        const legendasDaPagina = legendas.slice(startIndex, endIndex);

        gerarPaginaGaleria(imagensDaPagina, legendasDaPagina);

        // Remove a classe active de todas as páginas
        const pages = paginationContainerGaleria.getElementsByClassName('page-link');
        for (let i = 0; i < pages.length; i++) {
            pages[i].classList.remove('active');
        }

        // Adiciona a classe active à página atual
        paginationContainerGaleria.querySelector(`.page-link[data-page="${pagina}"]`).classList.add('active');
    }

    function mostrarPaginacaoGaleria() {
        const numPaginas = Math.ceil(imagens.length / imagensPorPagina);

        paginationContainerGaleria.innerHTML = '<ul class="pagination">';

        for (let i = 1; i <= numPaginas; i++) {
            const li = document.createElement('li');
            li.className = 'page-item';
            const a = document.createElement('a');
            a.className = 'page-link';
            a.href = '#';
            a.textContent = i;
            a.setAttribute('data-page', i); // Adiciona um atributo data-page com o número da página
            a.addEventListener('click', () => mostrarPaginaGaleria(i));
            li.appendChild(a);
            paginationContainerGaleria.querySelector('.pagination').appendChild(li);
        }

        mostrarPaginaGaleria(1);
    }

    mostrarPaginacaoGaleria();
});
