
 @extends('layouts.navbar_footer')

@section('content')


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Menus</h1>
                    <p>
                        Dans l’atmosphère particulière du Cuistot Traditionnel à la fois chaleureuse et décontractée, le choix s’offre à vous.

Nous associons en effet les grands classiques de l’art culinaire marocain et authentique, le tout fait maison avec des ingrédients de qualité choisis méticuleusement.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="breakfast-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/breakfast_menu.jpg" alt="Breakfast">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>Breakfast Menu</h2>
                                <div id="owl-breakfast" class="owl-carousel owl-theme">
                                    @foreach ($menus as $menu)
                                        @if($menu->menu_type=="Breakfast")
                                        <a href="{{route('show',$menu->id)}}">
                                        <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{asset($menu->photo) }}" alt="">
                                            <div class="price">{{($menu->prix)}}DH</div>
                                            <div class="text-content">
                                                <h4> {{($menu->nom)}}</h4>
                                                <p title="{{$menu->description}}"> {{(substr($menu->description,0,20))}}...</p>
                                            </div>

                                        </div>
                                    </div>
                                </a>

                                    @endif
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="lunch-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>Lunch Menu</h2>
                                <div id="owl-lunch" class="owl-carousel owl-theme">
                                    @foreach ($menus as $menu)
                                    @if($menu->menu_type=="Lunch")
                                    <a href="{{route('show',$menu->id)}}">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{asset($menu->photo) }}" alt="">
                                            <div class="price">{{$menu->prix }}DH</div>
                                            <div class="text-content">
                                                <h4>{{$menu->nom }}</h4>
                                                <p title="{{$menu->description}}"> {{(substr($menu->description,0,20))}}...</p>

                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    @endif
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/lunch_menu.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dinner-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="dinner-menu-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-image">
                                    <img src="img/dinner_menu.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2>Dinner Menu</h2>
                                <div id="owl-dinner" class="owl-carousel owl-theme">
                                    @foreach ($menus as $menu)
                                    @if($menu->menu_type=="Dinner")
                                    <a href="{{route('show',$menu->id)}}">
                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{asset($menu->photo) }}" alt="">
                                            <div class="price">{{$menu->prix}}DH</div>
                                            <div class="text-content">
                                                <h4>{{$menu->nom }}</h4>
                                                <p title="{{$menu->description}}"> {{(substr($menu->description,0,20))}}...</p>

                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                   @endif
                                   @endforeach

                                </div>
                            </div>
                        </div>
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
                <div class="col-md-4 col-md-offset-2">
                    <div class="left-image">
                        <img src="img/book_left_image.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-4">
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
