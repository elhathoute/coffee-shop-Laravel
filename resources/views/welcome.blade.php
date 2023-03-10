{{-- {{dd($breakfast)}}
{{dd($lunch)}}
{{dd($dinner)}} --}}

@extends('layouts.navbar_footer')

@section('content')

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Here you can find delecious foods</h4>
                    <h2>MORROCAN RESTAURANT</h2>
                    <p id="title-restaurant">The restaurant offers a variety of quality local dishes. The welcome, the taste of the dishes, the service and the friendliness of the chef (who takes the trouble to explain and advise on the choice of dishes) will eventually convince you to come back.</p>
                    <div class="primary-button">
                        <a href="#" class="scroll-link" data-id="book-table">Order Right Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/cook_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>We cook delecious</h4>
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>05 22 27 39 11</h6>
                        </div>
                        <span>or</span>
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/cook_02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu')}}">
                        <img src="img/cook_breakfast.png" alt="Breakfast">
                        <h4>Breakfast</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu')}}">
                        <img src="img/cook_lunch.png" alt="Lunch">
                        <h4>Lunch</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu')}}">
                        <img src="img/cook_dinner.png" alt="Dinner">
                        <h4>Dinner</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Book Your Table Now</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="left-image">
                        <img src="img/book_left_image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-info">
                        <h4>Reservation</h4>
                        <form id="form-reservation" method="POST" action="{{route('reservation')}}" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='day' id='day'>
                                            <option value="" disabled>Select day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='hour' id='hour'>
                                            <option value="" disabled>Select hour</option>
                                            <option value="10-00">10:00</option>
                                            <option value="12-00">12:00</option>
                                            <option value="14-00">14:00</option>
                                            <option value="16-00">16:00</option>
                                            <option value="18-00">18:00</option>
                                            <option value="20-00">20:00</option>
                                            <option value="22-00">22:00</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="full_name"  type="name" class="form-control" id="full_name" placeholder="Full name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="phone"  type="phone" class="form-control" id="phone" placeholder="Phone number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required class="person" name='personne' id='personne'>
                                            <option value="" disabled>How many persons?</option>
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">3 Persons</option>
                                            <option value="4">4 Persons</option>
                                            <option value="5">5 Persons</option>
                                            <option value="6">6 Persons</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit-reservation" class="btn">Book Table</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Cheap Featured Food</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                    <div class="food-item">
                        <h2>Breakfast</h2>
                        <img src="{{asset($breakfast->photo)}}" alt="">
                        <div class="price">{{$breakfast->prix}}DH</div>
                        <div class="text-content">
                            <h4>{{$breakfast->nom}}</h4>
                            <p>{{$breakfast->description}}...</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Lunch</h2>
                        <img src="{{asset($lunch->photo)}}" alt="">
                        <div class="price">{{$lunch->prix}}DH</div>
                        <div class="text-content">
                            <h4>{{$lunch->nom}}</h4>
                            <p>{{$lunch->description}}...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Dinner</h2>
                        <img src="{{asset($dinner->photo)}}" alt="">
                        <div class="price">{{$dinner->prix}}DH</div>
                        <div class="text-content">
                            <h4>{{$dinner->nom}}</h4>
                            <p>{{$dinner->description}}...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Signup for our newsletters</h2>
                    </div>
                </div>
            </div>
            <form id="contact" action="" method="get">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email here..." required="">
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        <fieldset>
                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    document.getElementById('form-reservation').addEventListener('submit', function() {
  Swal.fire({
    title: 'Reservation',
    text: 'successfully',
    icon: 'success',
    confirmButtonText: 'Ok'
  });
});
</script>

@endsection

