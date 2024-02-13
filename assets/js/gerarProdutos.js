document.addEventListener('DOMContentLoaded', function () {
    function gerarProdutos(categoria, quantidadeExibicao = 4, containerId) {
        console.log("Chamando gerarProdutos para a categoria:", categoria);

        const container = document.getElementById(containerId);

        if (!container) {
            console.error(`Elemento com id '${containerId}' não encontrado na página.`);
            return;
        }

        // Garante que não excedemos a quantidade desejada
        const quantidadeReal = Math.min(quantidadeExibicao, categoria.length);

        // Remove produtos antigos do container
        container.innerHTML = '';

        for (let i = 0; i < quantidadeReal; i++) {
            const produto = categoria[i];

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
        }
    }

    // Chamada para categorias sem especificar quantidade
    gerarProdutos(categorias.racaoPremium, undefined, "racao-premium-list");
    gerarProdutos(categorias.tosaEspecializada, undefined, "tosa-especializada-list");
    gerarProdutos(categorias.banhoRelaxante, undefined, "banho-relaxante-list");
    gerarProdutos(categorias.brinquedosInterativos, undefined, "brinquedos-interativos-list");
    gerarProdutos(categorias.higieneCuidados, undefined, "higiene-cuidados-list");

    // Chamada para categorias especificando quantidade
    gerarProdutos(categorias.racaoPremium, 8, "racao-premium-list-8");
    gerarProdutos(categorias.tosaEspecializada, 8, "tosa-especializada-list-8");
    gerarProdutos(categorias.banhoRelaxante, 8, "banho-relaxante-list-8");
    gerarProdutos(categorias.brinquedosInterativos, 8, "brinquedos-interativos-list-8");
    gerarProdutos(categorias.higieneCuidados, 8, "higiene-cuidados-list-8");
});
