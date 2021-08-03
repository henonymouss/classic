@extends("layouts.creativeclient")


@section('content')
    @if(session()->has('found'))
        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row mb-4">
                <h2 class="col-6 tm-text-primary">
                    {{$srched}}
                </h2>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <form action="" class="tm-text-primary">
                        Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                    </form>
                </div>
            </div>
            <div class="row tm-mb-90 tm-gallery">
                @foreach($srch as $gallery)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('/images/creative/'.$gallery->image)}}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>{{$gallery->name}}</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span class="tm-text-gray-light">18 Oct 2020</span>
                            <span>9,906 views</span>

                        </div>
                    </div>
                @endforeach
                @else
                        <p>{{$srched}} not found</p>
                @endif
                @endsection
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



