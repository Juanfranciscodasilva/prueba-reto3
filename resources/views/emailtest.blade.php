@extends('layout')
@include('layout_nav')
@include('layout_footer')

@section('body')
    <body>
    <div id="pagina">
    @yield('nav')
    <!-- Masthead-->
        <header class="masthead">

            <div  class="container d-flex justify-content-center">
                <form class="bg-light col-12 p-3 m-t-10 m-b-10 col-sm-10 d-flex flex-column align-items-start border-s shadow rounded-3 col-md-6 "
                      onsubmit=" return validacion()" action={{route('contact')}} method="POST">

                    @csrf
                    <h2>Introduce tu email</h2>
                    <div class="mb-10 w-100 d-flex flex-column align-items-start">
                        <label for="exampleInputEmail1" class="form-label  ">Email:</label>
                        <input style="border-color:{{$dato}};" type="email" class="form-control m-b-3" id="exampleInputEmail1" aria-describedby="emailHelp"
                               value="{{ old ('email')}}" name="email">
                        <input hidden type="text" name="valor" value="1">
                        <div id="emailHelp" class="form-text align-self-center" >No compartas tu correo con nadie.</div>
                    </div>

                    <button id="btn"type="submit" class="btn col-md-8 col-12 p-3  sm btn-success align-self-center">Enviar</button>
                </form>
            </div>
        </header>
        @yield('footer')
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/principal.js"></script>
    <script src="js/emailtest.js"></script>
    <script src="js/app.js"></script>

    </body>
@endsection

@section('head')
    <!-- Google fonts-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/inicio.css" rel="stylesheet" />
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/emailtest.css" rel="stylesheet" />

@endsection
