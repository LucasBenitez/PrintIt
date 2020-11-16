@extends('layouts/app')
@section('title', 'Productos')
@section('content')
<div class="container">
   <div class="jumbotron">
       <div class="container">
           <h1 class="display-3">Hello, world!</h1>
           <p>This is a template for a simple marketing or informational website. It includes a large callout
               called a jumbotron and three supporting pieces of content. Use it as a starting point to create
               something more unique.</p>
           <p><a class="btn btn-primary btn-lg" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/#"
                   role="button">Learn more »</a></p>
       </div>
   </div>
<div class="container">
   <div class="row">
@foreach ($products as $item)
      
          <div class="col">
              <h2>{{ $item->nombre }}</h2>
              <p>{{ $item->descripcion }} </p>
              <p><a class="btn btn-secondary" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/#"
                      role="button">View details »</a></p>
          </div>    
      

@endforeach
</div>
</div>

@endsection