@php
$comics=config("comics");

@endphp
@extends("layouts.master")

@section('content')
   <main class="main-body"> 
    <div class="jumbotron" style=" background-image: url({{asset('/img/jumbotron.jpg') }});">
     
    </div>
      
    <div class="container  text-white">
        
        <div class="current-series text-center p-3 d-none d-xl-block">
            <h2 class="m-0"><strong>CURRENT SERIES</strong></h2>
        </div>

        <div class="comics-list p-3">  
            <x-comic-card>  
            </x-comic-card>
        </div>
               <div class="button-container">
                <a href="#" class="button-load text-white text-decoration-none ">LOAD MORE</a>
                </div> 
     
             
              
    </div>
        
   
   




</main>
@endsection