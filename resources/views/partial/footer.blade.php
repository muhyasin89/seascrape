<footer>
    <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer_image">
            <img src="{{ asset('image/SSI_White.png') }}" width="146.5" />
        </div>
        <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 footer_image mar_top_2_5">
            <img src="{{ asset('image/SSI_White.png') }}" width="146.5" />
        </div> -->
        <div class="col-lg-6 col-md-6 col-sm-12"><h4 class="footer_text_middle" style="letter-spacing:2px;">FIRST CLASS SUBSEA SPECIALIST</h4></div>
        <!-- <div class="col-lg-5 col-md-5 col-sm-5"><h4 class="footer_text_middle">FIRST CLASS SUBSEA SPECIALIST</h4></div> -->
        <div class="col-lg-3 col-md-3 col-sm-12 add_footer_social_white">
            <a href="#"><img src="{{ asset('image/social/facebook.png') }}" ></a>
            <a href="#"><img src="{{ asset('image/social/youtube.png') }}" ></a>
            <a href="#"><img src="{{ asset('image/social/twitter.png') }}" ></a>
            <a href="#"><img src="{{ asset('image/social/linkedin.png') }}" ></a>
        </div>
    </div>
    <div class="row mar_top_2_5">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h4>CONTACT</h4>
            <p><img src="{{ asset('image/social/email.png') }}"> office@seascapesurveys.com</p>
            <p><img src="{{ asset('image/social/handphone.png') }}">+62 21 867000</p>
            <p><img src="{{ asset('image/social/printer.png') }}">+62 21 8671111</p><br>
            <p>ADDRESS<br>
                Jl. Raya Karanggan Muda No. 172<br>
                Gunung Putri, Bogor 16961<br>
                INDONESIA</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer_href">
            <h4>SEASCAPE SURVEY</h4>
            <a href="{{ url('about') }}"><p>About</p></a>
            <a href="{{ url('services') }}"><p>Services</p></a>
            <a href="{{ url('project') }}"><p>Project</p></a>
            <a href="{{ url('news') }}"><p>News</p></a>
            <a href="{{ url('hse') }}"><p>HSE</p></a>
            <a href="{{ url('career') }}"><p>Career</p></a>
            <a href="{{ url('contact_us') }}"><p>Contact</p></a>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h4>ASSETS</h4>
            <p>Air & Saturation Diving</p>
            <p>ROV</p>
            <p>Subsea Inspection</p>
            <p>Survey & Positioning</p>
        </div>
        <div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h4>NEWSLETTER</h4>
            <p>We Provides a wide range of<br>
                Survey and positioning services<br>
                Onboard offshore</p>
            <div class="row">
                <div id="newsletter" class="col-lg-12">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    {{ csrf_field() }}
                    {{ Html::ul($errors->all()) }}
                    {{Form::open([ 'method'  => 'post', 'url'=>'admin/subscriber/store' ])}}
                    {{ Form::text('email', Input::old('email'), array('class' => 'form-control mar_top_5 subscriber', 'placeholder' => 'Enter your email')) }}
                    {{Form::button('Subscribe', array('type' => 'submit', 'class' => 'btn btn-subscriber mar_top_5 form-control'))}}
                    {{ Form::close() }}
                </div>
            </div>


        </div>
    </div>
    <div class="row mar_top_2_5">
        <div class="float_left col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>	&#9400; 2017 PT.Seascape Surveys Indonesia</p>
        </div>
        <div class="float_right col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p align="right">Power by KARTALA</p>
        </div>
    </div>
</footer>
