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
               <div class="comics-list">
                <h1 class="d-inline-block">i'm batman!!</h1>
               </div>
                
        
            
        </div>
        
    </div>
   




</main>
@endsection