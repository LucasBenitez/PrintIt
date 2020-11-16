@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Bienvenido a Print it</h1>
                <p>Brindamos el asesoramiento indicado para resolver y
                hacer realidad todas las necesidades gráficas de nuestros clientes. 
                Atendemos al público, al gremio gráfico y a empresas y grandes corporaciones.</p>
                <p><a class="btn btn-primary btn-lg" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/#"
                        role="button">Contactenos</a></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
         @foreach ($products as $item)
               
                   <div class="col card px-2 pt-3 m-2">
                       <h2>{{ $item->nombre }}</h2>
                       <img src="{{ $item->nombre }}'" alt="" >
                       <p>{{ $item->descripcion }} </p>
                       <h2 class="text-center mb-2 font-weight-bold">${{ $item->precio }}</h2>
                       <p><a class="btn btn-danger float-right" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/#"
                               role="button">Comprar</a></p>
                   </div>    
               
         
         @endforeach
         </div>
         </div>
    </div>
@endsection
