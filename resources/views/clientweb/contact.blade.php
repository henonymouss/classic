@extends("layouts.creativeclient")

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2227.9313877726095!2d38.71283824288665!3d8.957128180007977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b813778b05b53%3A0x9aa2de2eab57166f!2sJemo%2C%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1626470438094!5m2!1sen!2set" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Get in touch</h3>
                        <p>Feel free to contact us!</p>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Address</h5>
                                <p>Ethiopia , Adds Ababa, Jomo Wainisha Biulding 3rd floor</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>+251911913218</li>
                                    <li>+251111111111</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                            <p><a href="mailto:classicstudio@gmail.com"> creativestudio@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>Work With Us!</h3>
                        <form action="{{route('contactus')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @if(session()->has('message'))
                                <div class="alert alert-info" role="alert">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you!  <i class="fa fa-thumbs-up"></i> <br>
                                    YOUR Message sent  Successfully!<br>
                                    Our team reply as fast as possible.
                                </div>

                            @endif
                            @csrf
                            <div class="form-group">
                            <input type="text" placeholder="Full Name" id="name" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror</div>
                            <div class="form-group">
                            <input type="text" placeholder="Email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="form-group">
                            <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"  value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="form-group">
                                <input type="text" placeholder="subject" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror"  value="{{ old('subject') }}" required autocomplete="subject" autofocus>

                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="form-group">
                                <textarea placeholder="Message" id="message" name="message"class="form-control @error('message') is-invalid @enderror"  value="{{ old('message') }}" required autocomplete="message" autofocus></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                            <div class="form-group">
                                <input type="file" placeholder="attachedfile" id="attachedfile" name="attachedfile"  class="form-control">
                            </div>
                                <button type="submit" class="site-btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

