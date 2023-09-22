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
                <a href="login" class="nav-item nav-link">Login</a>
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
    <div class="container-xxl bg-light my-6 py-6 pt-0" >
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">A melhor padaria da cidade</h1>
                    </div>
                    
                </div>
            </div>
          
     <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center" style ="height:50%;">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Cadastre um produto</h3>
            <p class="blue-text">Crie um produto<br> e tenha controle do seu estoque</p>
            <div class="card">
                <form class="form-card" action="/produtos" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-between text-left">
                    {{csrf_field()}}
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nome do Produto<span class="text-danger"> *</span></label> <input type="text" id="fname" name="txPnome" placeholder="Produto" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Descrição<span class="text-danger"> *</span></label> <input type="text" id="lname" name="txDescricao" placeholder="Descricao" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3"  id="email"onblur="validate(3)">Categoria<span class="text-danger"> *</span></label>
                        <select class="form-control" id="categoria" name="txCategoria">
            <option value="Salgado">Salgado</option>
            <option value="Doce">Doce</option>
            <option value="Bebida">Bebida</option>
            <option value="Massa">Massa</option>
            <!-- Adicione outras opções do ENUM aqui -->
        </select>
                    
                    </div>
                       
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Quantidade<span class="text-danger"> *</span></label> <input type="text" id="mob" name="txQuantidade" placeholder="Quantidade" onblur="validate(4)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Valor<span class="text-danger"> *</span></label> <input type="text" id="job" name="txValor_Inicial" placeholder="Valor" onblur="validate(5)"> </div>
                    </div>
                    <div class="form-group col-sm-6 flex-column d-flex">
        <label class="form-control-label px-3">Imagem do Produto<span class="text-danger"> *</span></label> 
        <input type="file" id="imagem" name="imagem" accept="image/*"> --> 
    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary" value="Salvar">Cadastrar Produto</button> </div>
                    </div>
                </form>
    <section class="table" style="margin-top:inherit;">

    <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Valor</th>
      <th scope="col">#</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      
     <th scope="col">Imagem</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $p)
      <tr>
        <td>{{$p->valor_inicial}}</td>
        <th scope="row">{{$p->idProduto}}</th>
        <td>{{$p->Pnome}}</td>
        <td>{{$p->Descricao}}</td>
        <td>{{$p->categoria}}</td>
        <td>{{$p->quantidade}}</td>
        
        <td><img src="{{ asset('storage/uploads/' . $p->imagem)}}" alt="Imagem do Produto"></td>
      </tr>
    @endforeach
  </tbody>
</table>


            </div>
        </div>
    </div>
</div>
    </div>
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