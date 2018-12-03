<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->orderBY('id','desc')->get();
    $sliders = DB::table('slider')->where('com','gioi-thieu')->get();
?>
<header>
    <div class="navbar-wrapper mobile"> <!-- menu for mobile -->
        <div class="container-fluid mb">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                        <a href="#"><img style="padding-top: 15px;" src="{{asset('upload/hinhanh/'.$setting->photo)}}"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Trang chủ</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <div class="container-fluid"> <!-- information  -->
        <div class="row title-top">
            <div class="col-xs-6 col-md-2 col-md-offset-1 col-large-2 title-top1">
                <div class="email">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> {{$setting->email}}</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-2 col-large-2">
                <div class="icons">
                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                    <span><i class="fa fa-google" aria-hidden="true"></i></span>
                    <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="col-xs-6 col-md-2 col-md-offset-3 col-large-2 title-top1">
                <div class="email">
                    <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{$setting->phone}}</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-2 col-large-2">
                <div class="email " style="padding-left: 0;">
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i></i>
                    8:00 - 23:00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-wrapper pc"> <!-- menu for pc -->
        <div class="container-fluid header">
            <nav class="navbar navbar-inverse navbar-static-top navheight">
                <div class="container conaito">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                         </button>
                        <a href="{{url('')}}"><img style="padding-top: 15px;" src="{{asset('upload/hinhanh/'.$setting->photo)}}"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse list">
                        <ul class="nav navbar-nav menu">
                            <li><a href="{{url('')}}">Trang chủ</a></li>
                            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                            @foreach($categories as $category)
                            <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- slider  -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k == 0)active @endif">
               <img style="width: 100%;" class="first-slide" src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="First slide">
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    
</header>