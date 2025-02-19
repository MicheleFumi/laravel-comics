@php
$comics=include(resource_path('comics-array/comics.php'));

@endphp

<div class="container my-5">
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4">
        @foreach ($comics as $comic)
      
      <a class="col text-decoration-none text-white" href="">
        <div class="ratio ratio-1x1">
          <img 
            src="{{$comic['thumb']}} "
            alt="Comic" 
            class="img-fluid square-img">
        </div>
        <h5 class="comic-title mt-3 ">{{$comic['title']}}</h5>
      </a>
      @endforeach
     
    </div>
  </div>
  