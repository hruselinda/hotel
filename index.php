<?php include('header.php'); ?>



<!-- main carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="carousel_background" style="background-image:url(img/cover1.jpg)"></div>
        </div>
        <div class="item">
            <div class="carousel_background" style="background-image:url(img/cover2.jpg)"></div>
        </div>
        <div class="item">
            <div class="carousel_background" style="background-image:url(img/cover3.jpg)"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!--the reservation form -->
<?php include('reservation.php'); ?>

<!--empty div height -->
<div class="mt50under"></div>

<!-- title cards guest rooms -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title text-center">
                <span>Guests Favourite Rooms</span>
            </h2>
        </div>
    </div>
</div> 


<!-- cards guest rooms-->
<div class="container"> 
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="polaroid">
                <div style="background-image:url('img/11.jpg');" class="polaroid_image"></div>
                <div class="card_text container col-md-8 col-xs-8">
                    <p>Studio</p>
                </div>
                <div class="card_price col-md-4 col-xs-4">
                    <i class="fa fa-gbp"></i> 39.00<br /><span>per night</span>
                </div> 
                <div class="card_content col-md-12 col-xs-12">
                    <h5>A cosy studio</h5>
                    <p>Pellentesque scelerisque at leo nec vestibulum. malesuada metus.Itempor erat in magna pulvinar fermentum.</p>
                    <div class="row">
                        <ul class="check_circle col-md-12 col-xs-12">
                            <li><i class="fa fa-check-circle"></i>Breakfast</li>
                            <li><i class="fa fa-check-circle"></i>Mountain view</li>
                            <li><i class="fa fa-check-circle"></i>Lake view</li>
                        </ul>
                    </div>
                    <p><a class="input_btn btn btn-info btn-block" href="#" role="button">BOOK ROOM</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="polaroid">
                <div style="background-image:url('img/08.jpg');" class="polaroid_image"></div>
                <div class="card_text container col-md-8 col-xs-8">
                    <p>Double room</p>
                </div>
                <div class="card_price col-md-4 col-xs-4">
                    <i class="fa fa-gbp"></i> 69.00<br /><span>per night</span>
                </div> 
                <div class="card_content  col-md-12 col-xs-12">
                    <h5>A modern double room</h5>
                    <p>Pellentesque scelerisque at leo nec vestibulum. malesuada metus.Itempor erat in magna pulvinar fermentum.</p>
                    <div class="row">
                        <ul class="check_circle col-md-6">
                            <li><i class="fa fa-check-circle"></i>Breakfast</li>
                            <li><i class="fa fa-check-circle"></i>Private balcony</li>
                            <li><i class="fa fa-check-circle"></i>Free Wi-Fi</li>
                        </ul>
                        <ul class="check_circle col-md-6">
                            <li><i class="fa fa-check-circle"></i>Mountain view</li>
                            <li><i class="fa fa-check-circle"></i>Lake view</li>
                        </ul>
                    </div>
                    <p><a class="input_btn btn btn-info btn-block" href="#" role="button">BOOK ROOM</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="polaroid">
                <div style="background-image:url('img/01.jpg');" class="polaroid_image"></div>
                <div class="card_text container col-md-8 col-xs-8">
                    <p>The whole hotel</p>
                </div>
                <div class="card_price col-md-4 col-xs-4">
                    <i class="fa fa-gbp"></i> 169.00<br /><span>per night</span>
                </div> 
                <div class="card_content  col-md-12 col-xs-12">
                    <h5>The whole hotel</h5>
                    <p>Pellentesque scelerisque at leo nec vestibulum. malesuada metus.Itempor erat in magna pulvinar fermentum.</p>
                    <div class="row">
                        <ul class="check_circle col-md-6">
                            <li><i class="fa fa-check-circle"></i>Party decoration</li>
                            <li><i class="fa fa-check-circle"></i>Mountain view</li>
                            <li><i class="fa fa-check-circle"></i>Lake view</li>
                        </ul>
                        <ul class="check_circle col-md-6">
                            <li><i class="fa fa-check-circle"></i>Breakfast</li>
                            <li><i class="fa fa-check-circle"></i>Private balcony</li>
                            <li><i class="fa fa-check-circle"></i>Free Wi-Fi</li>
                        </ul>
                    </div>
                    <p><a class="input_btn btn btn-info btn-block" href="#" role="button">BOOK ROOM</a></p>
                </div>
            </div>
        </div>
    </div>
</div>  


<!-- title usps font awesome section ( exceptional hotel)-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title text-center">
                <span>An Exceptional Hotel</span>
            </h2>
        </div>
    </div>
</div>

<!-- usps font awesome section ( exceptional hotel) -->
<div class="container">   
    <div class="row">
        <div class="col-md-3  col-xs-6 text-center">
            <div class="usp_img">
                <i class="fa fa-glass"></i>
            </div>
            <h3>Our Hotel</h3>
            <p>Mi porta gravidaDonec id elit nonet risus. Etiam porta sem malesua day tyrty. </p>
            <p class="visible-lg visible-sm hidden-xs">Pus commodo, tortor mauris condimentum nibh, ut fermentum. Don condimentum nibh, ut fermentum massa mod. Donec sed odio dui. </p> 
            <p><a href="blog.php#100">Read more  &#62;&#62;</a></p>
        </div>
        <div class="col-md-3 col-xs-6 text-center">
            <div class="usp_img">
                <i class="fa fa-credit-card"></i>
            </div>
            <h3>Interior</h3>
            <p class="visible-lg visible-sm hidden-xs">Pus commodo, tortor mauris condimentum nibh, ut fermentum massa jm malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p> Etiam porta id elit non mi porta gravida at eget metus condimentum</p>
            <p><a href="blog.php#200">Read more  &#62;&#62;</a></p>
        </div>
        <div class="col-md-3 col-xs-6 text-center">
            <div class="usp_img">
                <i class="fa fa-cutlery"></i>
            </div>
            <h3>Reservation</h3>
            <p>Pio odio dui. Cras justo odio, dapibus ac facilisis tellus ac cursus commodo</p>
            <p class="visible-lg visible-sm hidden-xs">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a href="blog.php#300">Read more  &#62;&#62;</a></p>
        </div>
        <div class="col-md-3 col-xs-6 text-center">
            <div class="usp_img">
                <i class="fa fa-tint"></i>
            </div>
            <h3>All seasons</h3>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in tellus</p>
            <p class="visible-lg visible-sm hidden-xs">Pio odio dui. Cras justo odio, dapibus ac facilisis tellus ac cursus commodo, tortor condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a href="blog.php#400">Read more  &#62;&#62;</a></p>
        </div>
    </div>
</div>


<!--empty div height -->
<div class="mt50"></div>


<!-- jumbotron / parallax -->
<div class="parallax">
    <div class="text-center">
        <div class="container-fluid text-center">
            <h2><i class="fa fa-star-o"></i> STARHOTEL</h2>
            <p>An Exceptional Mountain Experience</p>
            <p><a class="btn btn-info" href="#" role="button">Visit us!</a></p>
        </div>
    </div> 
</div>

<!-- title  gallery / low carousel-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title text-center">
                <span>Gallery</span>
            </h2>
        </div>
    </div>
</div>


<!-- gallery / low carousel / owl carousel -->
<div class="container-fluid">
    <div class="owl-wrapper-outer">
        <div id="owl-demo">
            <div class="item"><div style="background-image:url('img/08.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/10.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/24.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/13.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/03.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/21.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/11.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/12.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/cover1.jpg');" class="low_carousel_image"></div></div>
            <div class="item"><div style="background-image:url('img/cover3.jpg');" class="low_carousel_image"></div></div>

        </div>
    </div>
</div>



<!-- testimonials and lower menu hotel tabs  -->
<div class="container"> 
    <div class="row">
        <div class="col-md-6">
            <h2 class="title text-center">
                <span>Testimonials</span>
            </h2>
            <!--empty div height -->
            <div class="mt50"></div>
            <div class="testimonials">
                <div id="owl-testimonials" class="owl-carousel owl-theme">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/09.jpg" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit amet, adipiscing elit. Me rem ipsum dolor sit amet, consectetur  rem ipsum dolor sit amet, consectetu adipiscing </p> 
                                    <span class="italic_p text-right">Sherlok</span>
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/10.jpg" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur. </p> 
                                    <span class="italic_p text-right">Agatha K.</span>
                                </div>
                            </div>                        
                        </div>
                    </div>  
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/1.jpg" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit amet, consectetur  rem ipsum dolor sit amet, consectetu adipiscing </p>
                                    <span class="italic_p text-right">Machu Pikchu</span>
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/male.png" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur  rem ipsum dolor sit amet, consectetu adipiscing </p> 
                                    <span class="italic_p text-right">Shel Don</span>
                                </div>
                            </div>                        
                        </div>
                    </div>  
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/300.jpg" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum  consectetur  rem ipsum dolor sit amet, consectetu adipiscing </p> 
                                    <span class="italic_p text-right">Music TV</span>
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/star.png" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur  rem ipsum dolor sit amet, consectetu adipiscing </p> 
                                    <span class="italic_p text-right">scorpionJr</span>
                                </div>
                            </div>                        
                        </div>
                    </div> 
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/04.jpeg" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit, consectetur  rem ipsum dolor sit amet adipiscing </p> 
                                    <span class="italic_p text-right">Lili & Ana</span>
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <img class="img-circle" src="img/400.jpg" alt="..." >
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="testimonials_p">
                                    <p>Me rem ipsum dolor sit amet, adipiscing elit. Me rem ipsum dolor sit amet, consectetur  rem ipsum dolor sit amet, consectetu adipiscing </p> 
                                    <span class="italic_p text-right">Alejandro Martinez</span>
                                </div>
                            </div>                        
                        </div>
                    </div> 
                </div>
            </div> 
        </div>

        <!-- Toggleable / Dynamic Tabs // lower menu hotel tabs-->
        <div class="col-md-6">
            <h2 class="title text-center">
                <span>Hotel Tabs</span>
            </h2>
            <!--empty div height -->
            <div class="mt50"></div>
            <div class="hotel_tabs navbar navbar-default navbar-static-top">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu1">Our restaurants</a></li>
                    <li><a data-toggle="tab" href="#menu2">Events</a></li>
                    <li><a data-toggle="tab" href="#menu3">Kids</a></li>
                    <li><a data-toggle="tab" href="#menu4">Business</a></li>
                </ul>

                <!-- Toggleable / Dynamic Tabs content-->
                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade in active">
                        <h3>Our restaurants</h3>
                        <img src="img/03.jpg" alt="an image"/>
                        <p>Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend.</p>
                        <p class="hidden-xs">Suspendisse interdum eleifend augue, quis rhoncus purus Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. fermentum.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Events</h3>
                        <img src="img/02.jpg" alt="an image"/>
                        <p>Lorem ipsum Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. dolor sit amet: </p>
                        <p> - orem ipsum </p>
                        <p> - rem ipsum </p>
                        <p> - orem ipsum </p>
                        <p class="hidden-xs">Opler dolor sit amet! Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit ametpsum dolor sit amet: Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Kids</h3>
                        <p>Me rem ipsum dolor sit amet,Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. amet: </p>
                        <img src="img/01.jpg" alt="an image"/>
                        <p> - orem ipsum </p>
                        <p> - orem ipsum </p>
                        <p class="hidden-xs">Lorem ipsum dolor sit ametpsum dolor sit amet: Lorem ipsum dolor sit or sit ametpsum dolor sit amet: Lorem ipsum  amet. </p>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>Business</h3>
                        <img src="img/cover3.jpg" alt="an image"/>
                        <p class="hidden-xs">In hendrerit risus arcu, in eleifend metus dapibus egestas non justo. Lorem ipsum dolor sit or sit ametpsum dolor sit amet:Phasellus et mattis lectus, et gravida urna. </p>
                        <p>Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. Me rem ipsum dolor sit amet, consectetur adipiscing elit. m dolor sit amet, consectetur adipiscing </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    



<?php include('footer.php'); ?>