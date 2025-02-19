@php
$comics=include(resource_path('comics-array/comics.php'));

@endphp
@extends("layouts.master")

@section('content')
   <main class="main-body"> 
    <div class="jumbotron" style=" background-image: url({{asset('/img/jumbotron.jpg') }});">
       {{--  <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="DC Logo">
 --}}
       </div>
      
    <div class="container  text-white"> 
       <div class="current-series text-center p-3 d-none d-xl-block">
<h2 class="m-0"><strong>CURRENT SERIES</strong></h2>
 </div>
               <div class="comics-list p-3">
               
               
                  <x-comic-card>
                
               </x-comic-card>

          
               </div>
                
        
              
        </div>
        
    </div>
   




</main>
@endsection