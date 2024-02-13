// gerarGaleria.js

function gerarGaleria(imagens, legendas) {
    // Container da galeria
    const galleryContainer = document.getElementById("galleryContainer");

    // Criar elementos para cada imagem
    imagens.forEach((imagem, index) => {
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

    // Inicializar o Fancybox após o carregamento da página
    $(document).ready(function() {
        $("[data-fancybox]").fancybox({
            animationEffect: "fade",
            transitionEffect: "slide",
        });
    });
}
