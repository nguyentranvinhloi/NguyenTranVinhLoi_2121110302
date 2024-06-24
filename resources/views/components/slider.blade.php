 <!-- CSS -->
 <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-- CSS -->
 <!-- --------------------------------------------------------------------------------------------- -->


 <div id="myCarousel" class="carousel slide mt-2" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
         @foreach ($list_banner as $row)
             @if ($loop->first)
                 <div class="item active">
                     <img src="{{ asset('images/banners/' . $row->image) }}" height="450" width="1250"
                         class="d-block w-100" alt="{{ $row->image }}" />
                 </div>
             @else
                 <div class="item">
                     <img src="{{ asset('images/banners/' . $row->image) }}" height="450" width="1250"
                         class="d-block w-100" alt="{{ $row->image }}" />
                 </div>
             @endif
         @endforeach

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>


     {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach ($list_banner as $row)
                @if ($loop->first)
                    <div class="item active">
                        <img src="{{ asset('images/banners/' . $row->image) }}" height="300" width="2000" class="d-block w-100"
                            alt="{{$row->image}}" />
                    </div>
                @else
                    <div class="item">
                        <img src="{{ asset('images/banners/' . $row->image) }}" height="300" width="2000" class="d-block w-100"
                            alt="{{$row->image}}" />
                    </div>
                @endif
            @endforeach
      
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> --}}
