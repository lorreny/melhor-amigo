// cadastro-produtos.js
console.log("Script 'cadastro-produtos.js' está sendo executado.");
const categorias = {
    racaoPremium: [
        {
            nome: "Ração Golden para Cães",
            descricao: "Ração Golden Fórmula Mini Bits Para Cães Adultos de Porte Pequeno Sabor Carne e Arroz.",
            valor: "R$ 166,90",
            imagem: "../produtos/racao-premium/racao-golden-formula-mini-bits-para-caes-adultos-pequeno-porte-sabor-carne-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Gatos",
            descricao: "Ração Golden para Gatos Adultos Castrados Sabor Salmão.",
            valor: "R$ 184,99",
            imagem: "../produtos/racao-premium/racao-golden-para-gatos-adultos-castrados-sabor-salmao.jpg"
        },
        {
            nome: "Ração Golden para Gatos",
            descricao: "Ração Golden para Gatos Adultos Castrados Sabor Frango.",
            valor: "R$ 171,90",
            imagem: "../produtos/racao-premium/racao-golden-para-gatos-adultos-castrados-sabor-frango.jpg"
        },
        {
            nome: "Ração Golden para Cães",
            descricao: "Ração Golden Fórmula Mini Bits para Cães Adultos de Porte Pequeno Sabor Frango e Arroz.",
            valor: "R$ 166,90",
            imagem: "../produtos/racao-premium/racao-golden-formula-mini-bits-para-caes-adultos-de-pequeno-porte-sabor-frango-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Gatos",
            descricao: "Ração Golden para Gatos Adultos Sabor Frango.",
            valor: "R$ 161,99",
            imagem: "../produtos/racao-premium/racao-golden-para-gatos-adultos-sabor-frango.jpg"
        },
        {
            nome: "Ração Golden para Gatos",
            descricao: "Ração Golden Fórmula para Cães Adultos Sabor Frango e Arroz.",
            valor: "R$ 220,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-para-caes-adultos-sabor-frango-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Cães",
            descricao: "Ração Golden Fórmula Light Mini Bits para Cães Adultos de Porte Pequeno Sabor Frango e Arroz.",
            valor: "R$ 140,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-mini-bits-light-para-caes-adultos-de-pequeno-porte-sabor-frango-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Cães",
            descricao: "Ração Golden Fórmula para Cães Adultos Sabor Salmão e Arroz.",
            valor: "R$ 29,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-para-caes-adultos-sabor-salmao-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Gatos",
            descricao: "Ração Golden Fórmula para Cães Adultos Sabor Frango e Arroz.",
            valor: "R$ 220,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-para-caes-adultos-sabor-frango-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Cães",
            descricao: "Ração Golden Fórmula Light Mini Bits para Cães Adultos de Porte Pequeno Sabor Frango e Arroz.",
            valor: "R$ 140,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-mini-bits-light-para-caes-adultos-de-pequeno-porte-sabor-frango-e-arroz.jpg"
        },
        {
            nome: "Ração Golden para Cães",
            descricao: "Ração Golden Fórmula para Cães Adultos Sabor Salmão e Arroz.",
            valor: "R$ 29,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-para-caes-adultos-sabor-salmao-e-arroz.jpg"
        },
        // Adicione mais produtos conforme necessário
    ],
    tosaEspecializada: [
        {
            nome: "Tosa Especializada 1",
            descricao: "Descrição do Produto 1",
            valor: "R$ 19,99",
            imagem: "../produtos/racao-premium/racao-golden-formula-mini-bits-light-para-caes-adultos-de-pequeno-porte-sabor-frango-e-arroz.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        {
            nome: "Tosa Especializada 2",
            descricao: "Descrição do Produto 2",
            valor: "R$ 29,99",
            imagem: "caminho-da-imagem-2.jpg"
        },
        // Produtos para a categoria "Tosa Especializada"
    ],
    banhoRelaxante: [
        {
            nome: "Lixa Chalesco",
            descricao: "Lixa Chalesco Premium para Cães e Gatos",
            valor: "R$ 59,99",
            imagem: "../produtos/banho-relaxante/lixa-chalesco-para-caes-e-gatos-premium.jpg"
        },
        {
            nome: "Lenços Umedecidos",
            descricao: "Lenços Umedecidos Chalesco para Cães",
            valor: "R$ 27,99",
            imagem: "../produtos/banho-relaxante/lencos-umedecidos-chalesco-para-caes.jpg"
        },
        {
            nome: "Cortador de Unha Chalesco",
            descricao: "Cortador de Unha Chalesco Guilhotina para Cães",
            valor: "R$ 37,99",
            imagem: "../produtos/banho-relaxante/cortador-de-unha-chalesco-guilhotina.jpg"
        },
        {
            nome: "Cortador de Unha Chalesco",
            descricao: "Cortador de Unha Chalesco Alicate para Cães",
            valor: "R$ 40,99",
            imagem: "../produtos/banho-relaxante/cortador-de-unha-chalesco-para-caes-alicate.jpg"
        },
        {
            nome: "Shampoo Agener União",
            descricao: "Shampoo Agener União Sebotrat S 200ml",
            valor: "R$ 94,99",
            imagem: "../produtos/banho-relaxante/shampoo-agener-uniao-sebotrat-s.jpg"
        },
        {
            nome: "Hidrapet Shampoo",
            descricao: "Hidrapet Shampoo para Cães e Gatos",
            valor: "R$ 107,09",
            imagem: "../produtos/banho-relaxante/hidrapet-xampu-para-caes-e-gatos.jpg"
        },
        {
            nome: "Shampoo Agener",
            descricao: "Shampoo Agener União Sebotrat O 200ml",
            valor: "R$ 109,99",
            imagem: "../produtos/banho-relaxante/shampoo-agener-uniao-sebotrat-o.jpg"
        },
        {
            nome: "Hidrapet Shampoo",
            descricao: "Hidrapet Shampoo para Cães e Gatos",
            valor: "R$ 203,99",
            imagem: "../produtos/banho-relaxante/hidrapet-xampu-para-caes-e-gatos.jpg"
        },
        {
            nome: "Toalhas Umedecidas",
            descricao: "Toalhas Umedecidas Petz para Cães e Gatos",
            valor: "R$ 18,99",
            imagem: "../produtos/banho-relaxante/toalhas-umedecidas-petz-para-caes-e-gatos.jpg"
        },
        {
            nome: "Banho a Seco Petz",
            descricao: "Banho a Seco Petz para Cães e Gatos 500ml",
            valor: "R$ 24,09",
            imagem: "../produtos/banho-relaxante/banho-a-seco-petz-para-caes-500ml.jpg"
        },
        {
            nome: "Shampoo Banho",
            descricao: "Shampoo Banho de Carinho Petz para Cães 500ml",
            valor: "R$ 16,09",
            imagem: "../produtos/banho-relaxante/shampoo-banho-de-carinho-petz-para-caes-500ml.jpg"
        },
        {
            nome: "Toalhas Umedecidas",
            descricao: "Toalhas Umedecidas Petz para Cães e Gatos",
            valor: "R$ 37,98",
            imagem: "../produtos/banho-relaxante/toalhas-umedecidas-petz-para-caes-e-gatos.jpg"
        },
        {
            nome: "Toalhas Umedecidas",
            descricao: "Toalhas Umedecidas Petz para Cães e Gatos",
            valor: "R$ 59,98",
            imagem: "../produtos/banho-relaxante/toalhas-umedecidas-petz-para-caes-e-gatos.jpg"
        },
        {
            nome: "Shampoo Hora da Diversão",
            descricao: "Shampoo Hora da Diversão Petz para Cães 500ml",
            valor: "R$ 16,09",
            imagem: "../produtos/banho-relaxante/shampoo-hora-da-diversao-petz-para-caes.jpg"
        },
        {
            nome: "Shampoo Cheio de Energia",
            descricao: "Shampoo Cheio de Energia Petz para Cães 500ml",
            valor: "R$ 16,09",
            imagem: "../produtos/banho-relaxante/shampoo-cheio-de-energia-petz-para-caes.jpg"
        },
        
        // Produtos para a categoria "Banho Relaxante"
    ],
    brinquedosInterativos: [
        {
            nome: "Macaco Pelúcia",
            descricao: "Brinquedo Chalesco Macaco Pelúcia Marrom para Cães",
            valor: "R$ 28,34",
            imagem: "../produtos/brinquedos-interativos/brinquedo-chalesco-macaco-pelucia-marrom-para-caes.jpg"
        },
        {
            nome: "Mordedor Galinha",
            descricao: "Brinquedo Napi Mordedor Galinha para Cães",
            valor: "R$ 9,99",
            imagem: "../produtos/brinquedos-interativos/arranhador-de-rampa-furacao-pet-para-gatos.jpg"
        },
        {
            nome: "Bola Cravo para Cães",
            descricao: "Brinquedo Líder Pet Bola Cravo para Cães - Cores Sortidas",
            valor: "R$ 7,99",
            imagem: "../produtos/brinquedos-interativos/brinquedo-lider-bola-cravo-para-caes.jpg"
        },
        {
            nome: "Chalesco Pelúcia",
            descricao: "Brinquedo Chalesco Pelúcia Manopla para Cães",
            valor: "R$ 27,99",
            imagem: "../produtos/brinquedos-interativos/brinquedo-de-pelucia-chalesco-manopla.jpg"
        },
        {
            nome: "Chalesco Varinha",
            descricao: "Brinquedo Chalesco Varinha com Pena e Guizo para Gatos - Cores Sortidas",
            valor: "R$ 7,99",
            imagem: "../produtos/brinquedos-interativos/brinquedo-chalesco-varinha-com-pena-e-guizo-cores-sortidas.jpg"
        },
        {
            nome: "Catnip Cansei",
            descricao: "Catnip Cansei de Ser Gato 2 g",
            valor: "R$ 9,59",
            imagem: "../produtos/brinquedos-interativos/catnip-cansei-de-ser-gato-2-g.jpg"
        },
        {
            nome: "Catnip Chalesco",
            descricao: "Catnip Chalesco Erva para Gatos",
            valor: "R$ 17,59",
            imagem: "../produtos/brinquedos-interativos/catnip-chalesco-erva-para-gatos.jpg"
        },
        {
            nome: "Arranhador de Rampa",
            descricao: "Arranhador de Rampa Furacão Pet para gatos",
            valor: "R$ 59,99",
            imagem: "../produtos/brinquedos-interativos/arranhador-de-rampa-furacao-pet-para-gatos.jpg"
        },
        {
            nome: "Ferplast Goodbite",
            descricao: "Brinquedo Ferplast Goodbite Tiny & Natural Para Roedores Milho",
            valor: "R$ 29,99",
            imagem: "../produtos/brinquedos-interativos/brinquedo-ferplast-goodbite-tiny-e-natural-para-roedores-milho.jpg"
        },
        {
            nome: "Pawise Doce Mineral",
            descricao: "Brinquedo Pawise Doce Mineral para Roedores",
            valor: "R$ 24,99",
            imagem: "../produtos/brinquedos-interativos/brinquedo-pawise-mineral-candy-para-roedores.jpg"
        },
        {
            nome: "Macaco Pelúcia",
            descricao: "Brinquedo Chalesco Macaco Pelúcia Marrom para Cães",
            valor: "R$ 28,34",
            imagem: "../produtos/brinquedos-interativos/brinquedo-chalesco-macaco-pelucia-marrom-para-caes.jpg"
        },
        {
            nome: "Mordedor Galinha",
            descricao: "Brinquedo Napi Mordedor Galinha para Cães",
            valor: "R$ 9,99",
            imagem: "../produtos/brinquedos-interativos/arranhador-de-rampa-furacao-pet-para-gatos.jpg"
        },
        // Produtos para a categoria "Brinquedos Interativos"
    ],
    higieneCuidados: [
        {
            nome: "Rasqueadeira Chalesco",
            descricao: "Rasqueadeira Chalesco Prática para Cães e Gatos - Cores Sortidas",
            valor: "R$ 21,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-chalesco-para-caes-e-gatos-pratica.jpg"
        },
        {
            nome: "Escova Chalesco",
            descricao: "Escova Chalesco Special Pets para Cães",
            valor: "R$ 22,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/escova-chalesco-special-pets.jpg"
        },
        {
            nome: "Rasqueadeira Chalesco",
            descricao: "Rasqueadeira Chalesco Super Clean para Cães e Gatos",
            valor: "R$ 22,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-chalesco-super-clean-para-caes-e-gatos.jpg"
        },
        {
            nome: "Aspirador de Pelos",
            descricao: "Aspirador de Pelos Chalesco Portátil para Cães e Gatos",
            valor: "R$ 76,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/aspirador-de-pelos-chalesco-portatil-para-caes-e-gatos.jpg"
        },
        {
            nome: "Pente Chalesco Antipulgas",
            descricao: "Pente Chalesco Antipulgas com Aspirador para Cães e Gatos",
            valor: "R$ 197,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/pente-petz-para-caes.jpg"
        },
        {
            nome: "Creme Revipel",
            descricao: "Creme Revipel Pocket 70g Equilíbrio",
            valor: "R$ 90,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/creme-revipel-pocket-70g-equilibrio.jpg"
        },
        {
            nome: "Escova Dupla Petz",
            descricao: "Escova Dupla Petz para Cães e Gatos - Cores Sortidas",
            valor: "R$ 44,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/escova-dupla-petz-para-caes-e-gatos-cores-sortidas.jpg"
        },
        {
            nome: "Rasqueadeira Petz",
            descricao: "Rasqueadeira Petz para Cães",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-petz-para-caes.jpg"
        },
        {
            nome: "Pente Petz",
            descricao: "Pente Petz para Cães",
            valor: "R$ 31,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/pente-petz-para-caes.jpg"
        },
        {
            nome: "Fluido Desembaraçador",
            descricao: "Fluido Desembaraçador Pet Society Cães e Gatos 240ml",
            valor: "R$ 63,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/fluido-desembaracador-pet-society-caes-e-gatos.jpg"
        },
        {
            nome: "Colônia Pet Baby",
            descricao: "Colônia Pet Society Baby para Cães e Gatos 50ml",
            valor: "R$ 89,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/colonia-pet-society-baby-para-caes-e-gatos.jpg"
        },
        {
            nome: "Colônia Pet Lovely",
            descricao: "Colônia Pet Society Lovely para Cães e Gatos 50ml",
            valor: "R$ 89,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/colonia-pet-society-vip-para-caes-e-gatos.jpg"
        },
        {
            nome: "Loção Protetora Pet Glove",
            descricao: "Loção Protetora Hidratante Soft Care Pet Glove para Cães e Gatos 50g",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/pet-glove-locao-pet-society-para-caes-e-gatos.jpg"
        },
        {
            nome: "Loção Protetora Hydra Reflex",
            descricao: "Loção Protetora Soft Care Hydra Reflex para Cães e Gatos 50g",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/locao-protetora-soft-care-hydra-reflex-para-caes-e-gatos.jpg"
        },
        {
            nome: "Spray Hidratante",
            descricao: "Spray Hidratante Soft Care SKB-on Complex para Cães e Gatos 100ml",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/soft-care-skb-on-complex-spray-hidratante-100ml-para-caes-e-gatos.jpg"
        },
        {
            nome: "Super Secão",
            descricao: "Super Secão Tapete Higiênico para Cachorro",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/super-secao-tapete-higienico-para-cachorro.jpg"
        },
        {
            nome: "Rasqueadeira Petz",
            descricao: "Rasqueadeira Petz para Cães",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-petz-para-caes.jpg"
        },
        {
            nome: "Rasqueadeira Petz",
            descricao: "Rasqueadeira Petz para Cães",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-petz-para-caes.jpg"
        },
        {
            nome: "Rasqueadeira Petz",
            descricao: "Rasqueadeira Petz para Cães",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-petz-para-caes.jpg"
        },
        {
            nome: "Rasqueadeira Petz",
            descricao: "Rasqueadeira Petz para Cães",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-petz-para-caes.jpg"
        },
        {
            nome: "Rasqueadeira Petz",
            descricao: "Rasqueadeira Petz para Cães",
            valor: "R$ 36,99",
            imagem: "../produtos/produtos-de-higiene-e-cuidados/rasqueadeira-petz-para-caes.jpg"
        },
        // Produtos para a categoria "Produtos de Higiene e Cuidados"
    ],
};
console.log("Objeto 'categorias' definido:", categorias);

// Exemplo de como você poderia adicionar mais produtos dinamicamente:
/*categorias.racaoPremium.push({
    nome: "Ração Premium 3",
    descricao: "Descrição do Produto 3",
    valor: "R$ 39,99",
    imagem: "caminho-da-imagem-3.jpg"
});*/

