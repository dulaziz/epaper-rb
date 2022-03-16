@extends('layouts.main')

@section('child')

    <div class="bg-dark">
        @include('partials.banner')
    </div>
    
    <div class="container">
      @include('partials.price')
    </div>

    <div class="container">
      @include('partials.about')
    </div>

    <div class="container">
      @include('partials.slick')
    </div>

@endsection

<script type="text/javascript">
    $('.slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
</script>