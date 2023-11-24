<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Padaria Camargo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
<link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Padaria Camargo</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="/index" class="nav-item nav-link">Home</a>
                <a href="/serviços" class="nav-item nav-link">Serviços</a>
                <a href="/produtos" class="nav-item nav-link active">Produtos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu m-0">
                        <a href="team.html" class="dropdown-item">Nosso Time</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contato</a>
            </div>
            <div class=" d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <a href="about.html" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Produtos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/produtos">Adicione um Produto</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Produto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    
    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">A melhor padaria da cidade</h1>
                    </div>
                    
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Bakery Products</p>
                <h1 class="display-6 mb-4">Explore o melhor da padaria</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">R$20</div>
                            <h3 class="mb-3">Bolo</h3>
                            
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('img/bolo-1.jpg') }}" alt="Example Image">

                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">R$8</div>
                            <h3 class="mb-3">Refrigerante</h3>
                            
                        </div>
                        <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('img/refri-2.jpg') }}" alt="Example Image">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">R$9</div>
                            <h4 class="mb-3">Salgado</h4>
                            
                        </div>
                        <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('img/salgado-2.jpg') }}" alt="Example Image">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11</div>
                            <h4 class="mb-3">Soda</h4>
                            
                        </div>
                        <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('img/soda-2.jpg') }}" alt="Example Image">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">R$15</div>
                            <h4 class="mb-3">Pizza</h4>
                            
                        </div>
                        <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('img/pizza-1.jpg') }}" alt="Example Image">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">R$12</div>
                            <h4 class="mb-3">Verdinha</h4>
                            
                        </div>
                        <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('img/verdinha-1.jpg') }}" alt="Example Image">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

     <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">

     @foreach($produtos as $p)
     
    <tr>
        <td>{{$p->valor_inicial}}</td>
        <th scope="row">{{$p->idProduto}}</th>
        <td>{{$p->Pnome}}</td>
        <td>{{$p->Descricao}}</td>
        <td>{{$p->categoria}}</td>
        <td>{{$p->quantidade}}</td>
        <td><img src="{{ asset('storage/uploads/' . $p->imagem)}}" alt="Imagem do Produto"></td>
        <td><a href="/produto-escolhido/escolhido/{{$p->idProduto}}">Visualizar</a></td>
        <td><a href="/produto-escolhido/excluir/{{$p->idProduto}}">Excluir</a></td>
    </tr>
@endforeach


<div class="div-dinamica" style="display: flex; justify-content: space-between; gap:20px;">
    @foreach($produtos as $p)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="product-item d-flex flex-column rounded overflow-hidden h-100">
                <div class="text-center p-4">
                    <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">{{ $p->valor_inicial }}</div>
                    <h4 class="mb-3">{{ $p->Pnome }}</h4>
                </div>
                <div class="position-relative mt-auto">
                    <img class="img-fluid" src="{{ asset('storage/uploads/'.$p->imagem) }}" alt="Imagem do Produto">
                    <div class="product-overlay">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i>
                        <a href="/produto-escolhido/escolhido/{{$p->idProduto}}">Visualizar</a> |
                                <a href="/produto-escolhido/excluir/{{$p->idProduto}}">Excluir</a></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
                  <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Valor</th>
                            
                            <th scope="col">Nome do Produto</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead> 
                     <tbody>
                        <tr>
                            <td>{{ $p->valor_inicial }}</td>
                            <td>{{ $p->idProduto }}</td>
                            <td>{{ $p->Pnome }}</td>
                            <td>{{ $p->Descricao }}</td>
                            <td>{{ $p->categoria }}</td>
                            <td>{{ $p->quantidade }}</td>
                            <td><img src="{{ asset('storage/uploads/' . $p->imagem) }}" alt="Imagem do Produto"></td>
                            <td>
                                <a href="/produto-escolhido/escolhido/{{$p->idProduto}}">Visualizar</a> |
                                <a href="/produto-escolhido/excluir/{{$p->idProduto}}">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                    <a href="/download-csv"> Downloads dos produtos em CSV </a>

<br />


                 </table>  
                 
          


    <!-- Product End -->


   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Libraries JavaScript -->
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template JavaScript -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/endpoint.js') }}"></script>

</body>

</html>

