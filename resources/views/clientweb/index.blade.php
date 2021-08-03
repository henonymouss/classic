
@extends("layouts.creativeclient")

@section('content')
    <style>
        .img:hover {
            /* Start the shake animation and make the animation last for 0.5 seconds */
            animation: shake 0.5s;

            /* When the animation is finished, start again */
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% { transform: translate(1px, 1px) rotate(0deg); }
            10% { transform: translate(-1px, -2px) rotate(-1deg); }
            20% { transform: translate(-3px, 0px) rotate(1deg); }
            30% { transform: translate(3px, 2px) rotate(0deg); }
            40% { transform: translate(1px, -1px) rotate(1deg); }
            50% { transform: translate(-1px, 2px) rotate(-1deg); }
            60% { transform: translate(-3px, 1px) rotate(0deg); }
            70% { transform: translate(3px, 1px) rotate(-1deg); }
            80% { transform: translate(-1px, -1px) rotate(1deg); }
            90% { transform: translate(1px, 2px) rotate(0deg); }
            100% { transform: translate(1px, -2px) rotate(-1deg); }
        }
    </style>
@foreach($hpdata as $hpdata1)
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('/images/creative/'.$hpdata1->bg1)}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hs-text">
                            <h2>{{$hpdata1->company_name}}</h2>
                            <p>Classic selfie studio the one and only selfie studio in ethiopa<br /> more quote...........</p>
                            <a href="tel:{{$hpdata1->phone}}" class="primary-btn">Contact Us <i class="fa fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hs-item set-bg" data-setbg="{{asset('/images/creative/'.$hpdata1->b2)}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hs-text">
                            <h2>{{$hpdata1->company_name}}</h2>
                            <p>Classic selfie studio the one and only selfie studio in ethiopa<br /> more quote...........<br />                         gravida accumsan lacus vel facilisis.</p>
                            <a href="tel:{{$hpdata1->phone}}" class="primary-btn"  >Contact Us<i class="fa fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
@endforeach
<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6" >
                <div class="services-item img">
                    <img src="img/services/service-1.jpg" alt="">
                    <h3>Shooting</h3>
                    <p>Our main objective as photographers is to capture images that tell the story of your special day.
                        Our experience and professionalism allows us to capture a solid workflow of images made up of consistent,
                        accurate, candid and artistic
                        images...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" >
                <div class="services-item img">
                    <img src="img/services/service-2.jpg" alt="" id="log1" >
                    <h3>Videos</h3>
                    <p>Our main objective as photographers is to capture images that tell the story of your special day.
                        Our experience and professionalism allows us to capture a solid workflow of images made up of consistent,
                        accurate, candid and artistic
                        images....</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services-item img">
                    <img src="img/services/service-3.jpg" alt="">
                    <h3>Editing</h3>
                    <p>Our main objective as photographers is to capture images that tell the story of your special day.
                        Our experience and professionalism allows us to capture a solid workflow of images made up of consistent,
                        accurate, candid and artistic
                        images...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<!-- Categories Section Begin -->
<section class="categories-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h2>Categories</h2>
                    <p>Our goal is to capture the connection between two people in love <br /> on one of the best days of their lives..</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="right-btn"><a href="#" class="primary-btn">VIew all</a></div>
            </div>
        </div>
        <div class="categories-slider owl-carousel">
            <div class="cs-item">
                <div class="cs-pic set-bg" data-setbg="{{asset('/images/creative/'.$catweddings->image)}}"></div>
                <div class="cs-text">

                    <h4>{{$catweddings->categories}}</h4>
                    <span>{{$countweddings}} pictures</span>
                </div>
            </div>
            <div class="cs-item">
                <div class="cs-pic set-bg" data-setbg="{{asset('/images/creative/'.$catlifestyles->image)}}"></div>
                <div class="cs-text">

                    <h4>{{$catlifestyles->categories}}</h4>
                    <span>{{$countlifestyles}} pictures</span>
                </div>
            </div>
            <div class="cs-item">
                <div class="cs-pic set-bg" data-setbg="{{asset('/images/creative/'.$catselfies->image)}}"></div>
                <div class="cs-text">

                    <h4>{{$catselfies->categories}}</h4>
                    <span>{{$countselfies}} pictures</span>
                </div>
            </div>
            <div class="cs-item ">
                <div class="cs-pic set-bg " data-setbg="{{asset('/images/creative/'.$catnatures->image)}}"></div>
                <div class="cs-text">

                    <h4>{{$catnatures->categories}}</h4>
                    <span>{{$countnatures}} pictures</span>
                </div>
            </div>
            <div class="cs-item" >
                <div class="cs-pic set-bg" data-setbg="{{asset('/images/creative/'.$catfashions->image)}}"></div>
                <div class="cs-text">

                    <h4>{{$catfashions->categories}}</h4>
                    <span>{{$countfashions}} pictures</span>
                </div>
            </div>
            <div class="cs-item">
                <video width="360" height="360" controls playsinline autoplay muted loop >
                    <source src="/images/creative/selfiestudio.mp4" type="video/mp4">
                    <source src="/images/creative/selfiestudio.ogg" type="video/ogg"></video>
                <div class="cs-text">

                    <h4>{{$catvideos->categories}}</h4>
                    <span>{{$countvideos}} </span>
                </div>
            </div>

        </div>
        </div>
</section>
<!-- Categories Section End -->

<!-- Portfolio Section Begin -->
<section class="portfolio-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our latest works</h2>
                    <br>
                    <h6>This is Our latest portfolio sample you can find more on our Gallery</h6>
                    <br>
                                  </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="portfolio-filter">
                    <div class="pf-item set-bg fashion" data-setbg="{{asset('/images/creative/'.$catfashions->image)}}" id="logo">
                        <a href="{{asset('/images/creative/'.$catfashions->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catfashions->name}}</h4>
                            <span>{{$catfashions->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item large-width large-height set-bg lifestyle"
                         data-setbg="{{asset('/images/creative/'.$catlifestyles->image)}}">
                        <a href="{{asset('/images/creative/'.$catlifestyles->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catlifestyles->name}}</h4>
                            <span>{{$catlifestyles->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item large-width set-bg natural" data-setbg="{{asset('/images/creative/'.$catnatures->image)}}">
                        <a href="img/portfolio/pf-3.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catnatures->name}}</h4>
                            <span>{{$catnatures->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item large-height set-bg wedding" data-setbg="{{asset('/images/creative/'.$catweddings->image)}}">
                        <a href="{{asset('/images/creative/'.$catweddings->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catweddings->name}}</h4>
                            <span>{{$catweddings->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item set-bg lifestyle" data-setbg="{{asset('/images/creative/'.$catlifestyleslast->image)}}">
                        <a href="{{asset('/images/creative/'.$catlifestyleslast->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catlifestyleslast->name}}</h4>
                            <span>{{$catlifestyleslast->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item set-bg natural" data-setbg="{{asset('/images/creative/'.$catnatureslast->image)}}">
                        <a href="{{asset('/images/creative/'.$catnatureslast->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catnatureslast->name}}</h4>
                            <span>{{$catnatureslast->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item set-bg videos" data-setbg="img/portfolio/pf-5.jpg">
                        <a href="img/portfolio/pf-5.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>COLORS SPEAK</h4>
                            <span>Fashion</span>
                        </div>
                    </div>
                    <div class="pf-item set-bg fashion" data-setbg="{{asset('/images/creative/'.$catfashionslast->image)}}">
                        <a href="{{asset('/images/creative/'.$catfashionslast->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catfashionslast->name}}</h4>
                            <span>{{$catfashionslast->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item large-width set-bg videos" data-setbg="{{asset('/images/creative/'.$catselfies->image)}}">
                        <a href="{{asset('/images/creative/'.$catselfies->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catselfies->name}}</h4>
                            <span>{{$catselfies->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item set-bg fashion" data-setbg="{{asset('/images/creative/'.$catselfieslast->image)}}">
                        <a href="{{asset('/images/creative/'.$catselfieslast->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catselfieslast->name}}</h4>
                            <span>{{$catselfieslast->categories}}</span>
                        </div>
                    </div>
                    <div class="pf-item large-width large-height set-bg wedding"
                         data-setbg="{{asset('/images/creative/'.$catweddingslast->image)}}">
                        <a href="{{asset('/images/creative/'.$catweddingslast->image)}}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                            <h4>{{$catweddingslast->name}}</h4>
                            <span>{{$catweddingslast->categories}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="load-more-btn">
        <a href="#">Load More</a>
    </div>
</section>
<!-- Portfolio Section End -->


@endsection


