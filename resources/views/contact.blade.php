@extends('layouts.navbar_footer')

@section('content')



    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h1>Contact Us</h1>

                </div>
            </div>
        </div>
    </section>



    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>Message</h2>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Your phone..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-heading contact-info">
                        <h2>Contact Info</h2>
                        <p>CITY PARK – CASABLANCA
                            Angle Abderrahmane Shraoui et Houssine Ben Ali n°3.<br><br><em>05 22 27 39 11 <i class="fa fa-phone"></i></em> <br><em> 06 61 62 43 06  <i class="fa fa-phone"></i></em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.77553384773!2d-7.657032961291917!3d33.57222832695985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d29a5e2e6bb3%3A0xbf2cb7f78a40699a!2sLe%20Cuistot%20Traditionnel!5e0!3m2!1sfr!2sma!4v1675869311071!5m2!1sfr!2sma" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
