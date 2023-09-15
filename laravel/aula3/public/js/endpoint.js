$(document).ready(function () {
    // Capturar o evento de envio do formulário ou clique no botão "Adicionar Produto"
    $('#form-card').on('submit', function (event) {
        event.preventDefault(); // Impede o envio do formulário padrão

        // Recupere os dados do formulário (incluindo a imagem, se aplicável)
        var formData = new FormData(this);

        $.ajax({
            url: '/produtos', 
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                // Aqui, response contém os detalhes do novo produto

                // Crie uma nova div de produto com os detalhes do produto
                var newProductDiv = $('<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">');
                newProductDiv.append('<div class="product-item d-flex flex-column rounded overflow-hidden h-100">');
                newProductDiv.find('.product-item').append('<div class="text-center p-4">');
                newProductDiv.find('.text-center').append('<div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">' + response.valor_inicial + '</div>');
                newProductDiv.find('.text-center').append('<h4 class="mb-3">' + response.Pnome + '</h4>');
                newProductDiv.find('.product-item').append('<div class="position-relative mt-auto">');
                newProductDiv.find('.position-relative').append('<img class="img-fluid" src="' + response.imagepath + '" alt="Example Image">');
                newProductDiv.find('.position-relative').append('<div class="product-overlay">');
                newProductDiv.find('.product-overlay').append('<a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>');


                $('#sua-div-de-produtos').append(newProductDiv);


            }
        });
    });
});

