
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Coffe_Shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap);

body {
    background: #edf3e7;
    font-family: cursive;;
}

.main-content {
    padding-bottom: 100px;
}

a {
    text-decoration: none;
}

.food-card {
    background: #fff;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
    -webkit-transition: 0.1s;
    transition: 0.1s;
}

.food-card:hover {
    -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.food-card .food-card_img {
    display: block;
    position: relative;
}

.food-card .food-card_img img {
    width: 100%;
    height: 200px;
    -o-object-fit: cover;
    object-fit: cover;
}

.food-card .food-card_img i {
    padding-top: 1px;
    border-radius: 8px;
    BACKGROUND-COLOR: #7a6868;
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 25px;
    -webkit-transition: all 0.1s;
    transition: all 0.1s;
}

.food-card .food-card_img i:hover {
    top: 18px;
    right: 28px;
    font-size: 29px;
}

.food-card .food-card_content {
    padding: 15px;
}

.food-card .food-card_content .food-card_title-section {
    height: 80px;
    overflow: hidden;
}

.food-card .food-card_content .food-card_title-section .food-card_title {
    font-size: 24px;
    color: #333;
    font-weight: 500;
    display: block;
    line-height: 1.3;
    margin-bottom: 8px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.food-card .food-card_content .food-card_title-section .food-card_author {
    font-size: 15px;
    display: block;
}

.food-card .food-card_content .food-card_bottom-section .space-between {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers {
    margin-left: 17px;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers img,
.food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
    height: 45px;
    width: 45px;
    border-radius: 45px;
    border: 3px solid #fff;
    margin-left: -17px;
    float: left;
    background: #f5f5f5;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
    position: relative;
}

.food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count span {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 13px;
}

.food-card .food-card_content .food-card_bottom-section .food-card_price {
    font-size: 28px;
    font-weight: 500;
    color: #F47A00;
}

.food-card .food-card_content .food-card_bottom-section .food-card_order-count {
    width: 130px;
}

.food-card .food-card_content .food-card_bottom-section .food-card_order-count input {
    background: #f5f5f5;
    border-color: #f5f5f5;
    -webkit-box-shadow: none;
    box-shadow: none;
    text-align: center;
}

.food-card .food-card_content .food-card_bottom-section .food-card_order-count button {
    border-color: #f5f5f5;
    border-width: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
}

@media (min-width: 992px) {
    .food-card--vertical {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        height: 235px;
    }

    .food-card--vertical .food-card_img img {
        width: 200px;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }
}
   </style>
    </head>

<body>





    @foreach ($get_plat as $plat )
<section class="main-content">
    <div class="container mt-5">
        <h1 class="text-center text-lowercase  "><strong class="">{{$plat->menu_type}}</strong> </h1>
        <br>
        <br>
        <div class="row d-flex justify-content-center align-items-center">

                <div class="col-md-6">
                    <div class="food-card">

                        <div class="food-card_img">
                            <img src="{{asset($plat->photo)}}" alt="">
                            <a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>

                        <div class="food-card_content">
                            <div class="food-card_title-section">
                                <a href="#!" class="food-card_title">{{$plat->nom}}</a>
                                <a href="#!" class="food-card_author">{{$plat->nom_plat}}</a>
                            </div>
                            <div class="food-card_bottom-section">
                                <div class="space-between">
                                    <div class="fs-6">
                                        <span title="{{$plat->description}}" class="fa fa-comment"></span>
                                        {{Str::substr($plat->description,0,20) }}...
                                    </div>

                                    {{-- <div class="pull-right">
                                        <span class="badge badge-success">Veg</span>
                                    </div> --}}
                                </div>
                                <hr>
                                <div class="space-between">
                                    <div class="food-card_price">
                                        <span>{{$plat->prix}}DH</span>
                                    </div>
                                    <div class="food-card_order-count">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary minus-btn" type="button" id="button-addon1"><i class="fa fa-minus"></i></button>
                                            </div>
                                            <input type="text" class="form-control input-manulator" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="0">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary add-btn" type="button" id="button-addon1"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="space-between  d-flex justify-content-center align-items-center">
                                   <a href="{{route('menu')}}" class="btn  btn-warning px-4 fs-4" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
@endforeach


</body>
</html>
