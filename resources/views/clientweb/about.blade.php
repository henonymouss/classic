@extends("layouts.creativeclient")

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bo-links">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>About</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<section class="about-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="about-pic set-bg" data-setbg="">
                    <video width="800" height="561" controls playsinline autoplay muted loop >
                        <source src="/images/creative/brookselfie1.mp4" type="video/mp4">
                        <source src="/images/creative/brookselfie1.ogg" type="video/ogg"></video>
<br><br>
                    <h2>About Classic Studio</h2>
                    <br>
                    <p>We are located in Addis ababa, jemo. You are always welcome to visit our studio at jemo *** Building 3rd floor. We are passionate about drawing all of the elements of the day together – from elegance and edginess to fun and quirky moments. Our wedding photographers are attracted to colors that pop, delicious lens flares and we have the tendency to add an unexpected twist to some of our photographs.
                    </p><p>
                        At events, we prefer to let the day unfold naturally, without getting in the way. Sometimes, you may even forget we are there.
<p><p>
                        When we are photographing weddings, our purpose is to help you keep track of and remember all of the moments of your day, whether you witnessed them all or not. We enjoy the fact that we can freeze moments in time for you to cherish forever.</p>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="about-text">
                    <div class="section-title">
                        <h2>Capturing the moments that captivate your heart</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing, tempor incididunt ut labore et dolore
                            magna aliqua. Risus commodo viverra maecenas accumsan lacus vel facilisis. All these
                            taglines are owned by their respective owners, and we do not have any copyright on them.
                        </p>
                    </div>
                    <div class="at-list">
                        <div class="al-item">
                            <div class="al-pic">
                                <img src="img/about/list-1.png" alt="">
                            </div>
                            <div class="al-text">
                                <h5>Professionalism</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.</p>
                            </div>
                        </div>
                        <div class="al-item">
                            <div class="al-pic">
                                <img src="img/about/list-2.png" alt="">
                            </div>
                            <div class="al-text">
                                <h5>Individual approach</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.</p>
                            </div>
                        </div>
                        <div class="al-item">
                            <div class="al-pic">
                                <img src="img/about/list-3.png" alt="">
                            </div>
                            <div class="al-text">
                                <h5>Flexible Schedule</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.</p>
                            </div>
                        </div>
                        <div class="al-item">
                            <div class="al-pic">
                                <img src="img/about/list-4.png" alt="">
                            </div>
                            <div class="al-text">
                                <h5>Experience</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">
                    <h2>Our team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="right-btn">
                    <a href="{{route('contact')}}" class="primary-btn">Appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($empinfo1 as $empinfo)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item">
                    <img src="{{asset('/images/emp/'.$empinfo->avatar)}}" alt="">
                    <div class="ti-text">
                        <h5>{{$empinfo->name}}</h5>
                        <span>{{$empinfo->position}}</span>
                        <div class="ti-social">
                            <a href="{{$empinfo->facebook}}}"><i class="fa fa-facebook"></i></a>
                            <a href="tel:{{$empinfo->phone}}"><i class="fa fa-phone"></i></a>
                            <a href="{{$empinfo->youtube}}"><i class="fa fa-telegram"></i></a>
                            <a href="{{$empinfo->instagram}}"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
</section>
<!-- Team Section End -->

<!-- Cta Section Begin -->
<section class="cta-section spad set-bg" data-setbg="img/cta-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-text">
                    <h2>Wanna promote your brand?</h2>
                    <p>coming soon<br /> coming soon.</p>
                    <a href="{{route('contact')}}" class="primary-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cta Section End -->

<!-- Testimoial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>What Customers say?</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="testimonial-item">
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="images/creative/1626366168.jpg" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>Selam Mekonnen</h5>
                            <span>@selammkonnen</span>
                        </div>
                    </div>
                    <p>Brook from Classic Photo Studio did a wonderful job with the photos for our wedding. He completely understood our vision and executed it beautifully!!! He was a pleasure to work with and took the time to do all the edits that I asked (and there were a lot of edits :-)) Alex thank you very much for all of your efforts!!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="testimonial-item">
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="images/creative/redu.jpg" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>Rediate mengiste</h5>
                            <span>@redu_bini</span>
                        </div>
                    </div>
                    <p>Brook has a brilliant eye for capturing absolutely beautiful and stunning photos. For our wedding, his artistic nature, professionalism and genuine talent were a treasure to have on our special day.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="testimonial-item">
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="images/creative/tsedi.jpg" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>Tsedeniya Mitiku</h5>
                            <span>@tsediduu</span>
                        </div>
                    </div>
                    <p>Working with Brook was a pleasure as he was always very helpful and willing to go above and beyond to make sure everything was perfect for us. We highly recommend working with Brook, as he will make you feel at ease on your special day, and deliver top-notch quality photography..</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="testimonial-item">
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="images/creative/avatarr.png" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>DR. Desalegn arega</h5>
                            <span>@des_arega</span>
                        </div>
                    </div>
                    <p>ብሩክ በጣም ምርጥ idea ነው ይዘህ የመጣሀው የ selfie studio በጣም ወድጄዋለው በርታ ወንድሜ ከ ጎንህ ነን.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->
@endsection
