@extends('layouts.master')

@section('title')
Kais Blog
@endsection

@section('content')
<div class="banner-intro">
    <div class="avatar">
        <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/90243212_2668977989998483_2802821689442828288_n.jpg?_nc_cat=106&_nc_sid=7aed08&_nc_ohc=U_-rctCGQywAX9kI1IS&_nc_ht=scontent.fhan3-3.fna&oh=f0bc8777ae5ae7c146ba48a4950a03a8&oe=5EC15CA5"
            alt="">
    </div>
    <h1>Duc Chinh</h1>
    <span>I am a <span id="js-rotating" class="text-rotating">Web Full-Stack Developer, Designer,
            Photographer</span></span>
    <div class="social-connect">
        <a href="#"><i class="fa fa-facebook-square"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-github-square"></i></a>
    </div>
</div>
<div class="scroll-down-area">
    <p>Scroll Down</p>
    <a href="#" class="scroll-down" address="true"></a>
</div>
<div class="about-me">
    <h2 class="section-title">About Me</h2>
    <div class="profile">
        <div class="avatar">
            <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/90243212_2668977989998483_2802821689442828288_n.jpg?_nc_cat=106&_nc_sid=7aed08&_nc_ohc=U_-rctCGQywAX9kI1IS&_nc_ht=scontent.fhan3-3.fna&oh=f0bc8777ae5ae7c146ba48a4950a03a8&oe=5EC15CA5"
                alt="">
        </div>
        <div class="infomation">
            <div class="introduction">
                <p>Hi ! My full name is Phung Duc Chinh - A web developer, all my information is in the CV below. So I
                    will provide some
                    additional information not included: "I like listening to music" (^^J4F) .....</p>
                <div class="sim-button button20"><a href="#">Register</a></div>
            </div>
            <div class="my-skills">
                <div class="bar">
                    <div class="skill">
                        <h4 class="skill-info">HTML & CSS</h4>
                    </div>
                    <div class="bar-outer">
                        <div class="speech-bubble html">75%</div>
                        <div class="bar-inner ht"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="skill">
                        <h4 class="skill-info">jQuery</h4>
                    </div>
                    <div class="bar-outer">
                        <div class="speech-bubble jquery">25%</div>
                        <div class="bar-inner jq"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="skill">
                        <h4 class="skill-info">PHP</h4>
                    </div>
                    <div class="bar-outer">
                        <div class="speech-bubble phplang">60%</div>
                        <div class="bar-inner php"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="skill">
                        <h4 class="skill-info">Photoshop</h4>
                    </div>
                    <div class="bar-outer">
                        <div class="speech-bubble photo">75%</div>
                        <div class="bar-inner ph"></div>
                    </div>
                </div>
                <!-- <div class="bar">
                    <div class="skill">Illustrator</div>
                    <div class="bar-outer">
                        <div class="speech-bubble illustrator">90%</div>
                        <div class="bar-inner il"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="skill">InDesign</div>
                    <div class="bar-outer">
                        <div class="speech-bubble indesign">85%</div>
                        <div class="bar-inner in"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="skill">Fluent in Korean</div>
                    <div class="bar-outer">
                        <div class="speech-bubble fluent">75%</div>
                        <div class="bar-inner fl"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="my-exper">
    <h2 class="section-title">Time Line</h2>
    <div class="exp">
        <div class="timeline">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"
                        style="background-image: url(https://scontent.fhan3-3.fna.fbcdn.net/v/t31.0-0/p640x640/21457690_2118310768398544_3081762378312569789_o.jpg?_nc_cat=101&_nc_sid=05277f&_nc_ohc=tfQKx10TGd8AX8gKbiJ&_nc_ht=scontent.fhan3-3.fna&_nc_tp=6&oh=bb47acc8d8094234e4084f899bf4c0a5&oe=5EC9E841"
                        data-year="2018">
                        <img src="" alt="">
                        <div class="swiper-slide-content"><span class="timeline-year">July 2018</span>
                            <h5 class="timeline-title">High school graduate</h5>
                            <p class="timeline-text">From 2015 to 2018, I studied at Hung Vuong High School</p>
                        </div>
                    </div>
                    <div class="swiper-slide"
                        style="background-image: url(https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/90052700_1044019762665163_1702664459362762752_n.jpg?_nc_cat=106&_nc_sid=110474&_nc_ohc=KphWiCKJs3UAX8cRaS3&_nc_ht=scontent.fhan3-3.fna&oh=df9ff08d6378caa97fd6c28843764a07&oe=5EC7CEA4"
                        data-year="">
                        <div class="swiper-slide-content"><span class="timeline-year">September 2018</span>
                            <h5 class="timeline-title">Start studying at VTC Academy</h5>
                            <p class="timeline-text">From 2018-2021, I studied at VTC Academy</p>
                        </div>
                    </div>
                    <div class="swiper-slide"
                        style="background-image: url(https://scontent.fhan4-1.fna.fbcdn.net/v/t1.0-9/s960x960/66858394_2470331619685522_6124565502296588288_o.jpg?_nc_cat=105&_nc_sid=110474&_nc_ohc=syu3Z2ScNHIAX-Xtncq&_nc_ht=scontent.fhan4-1.fna&_nc_tp=7&oh=6d0dc2d25bad18ce13d67c11d842063c&oe=5ECA3478"
                        data-year="2019">
                        <div class="swiper-slide-content"><span class="timeline-year">17 July 2019</span>
                            <h4 class="timeline-title">Complete Sem 1</h4>
                            <p class="timeline-text">Project: Cafe Management,code by C#, MySQL</p>
                        </div>
                    </div>
                    <div class="swiper-slide"
                        style="background-image: url(https://scontent.fhan4-1.fna.fbcdn.net/v/t1.0-9/s960x960/81727533_2216339758466267_6388344633927139328_o.jpg?_nc_cat=104&_nc_sid=110474&_nc_ohc=ah2ImVIdHToAX92tica&_nc_ht=scontent.fhan4-1.fna&_nc_tp=7&oh=7a8dae22fc5b934599de237d7349c592&oe=5ECA38F1"
                        data-year="">
                        <div class="swiper-slide-content"><span class="timeline-year">30 Semtember 2019</span>
                            <h4 class="timeline-title">Complete Project Sem 2</h4>
                            <p class="timeline-text">2nd Semester project: Music Website, built using pure PHP, MySQL,
                                boostrap</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=15"
                        data-year="2015">
                        <div class="swiper-slide-content"><span class="timeline-year">2015</span>
                            <h4 class="timeline-title">Our nice super title</h4>
                            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do
                                eisumod
                                tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16"
                        data-year="2016">
                        <div class="swiper-slide-content"><span class="timeline-year">2016</span>
                            <h4 class="timeline-title">Our nice super title</h4>
                            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do
                                eisumod
                                tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>


</div>

<div class="service">
    <h2 class="section-title">Services</h2>
    <div class="my-services">
        <div class="item-service design">
            <img src="https://cdn2.iconfinder.com/data/icons/round-varieties/60/Rounded_-_High_Ultra_Colour15_-_Palette-512.png"
                alt="">
            <h5 class="card-title">Web & Graphic Desgin</h5>
        </div>
        <div class="item-service web-development">
            <img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_220/https://findyourmvp.com/wp-content/uploads/2018/06/WebDevIcon.png"
                alt="">
            <h5 class="card-title">Web Development</h5>
        </div>
        <div class="item-service photography">
            <img src="https://cdn2.iconfinder.com/data/icons/news-media-flat-colorful/614/7501_-_Photograph_Camera-512.png"
                alt="">
            <h5 class="card-title">Photography</h5>
        </div>
    </div>
    <p class="flast-contact">Looking for a custom job? <a href="#contact">Click here</a> to contact me! </p>
</div>
<div class="products">
    <h3 class="section-title">Products</h3>
    <div class="filters">
        <ul>
            <li class="active" data-filter="*">All</li>
            <li data-filter=".designpro">Design</li>
            <li data-filter=".website">Website</li>
            <li data-filter=".agency">Agency</li>
            <li data-filter=".portal">Portal</li>
        </ul>
    </div>
    <div class="filters-content">
        <div class="grid porti"> 
            <div class="porti all designpro">
                <div class="items card card1">
                    <div class="imgBx">
                        <a href="#img1"> <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}" alt="images"></a>
                    </div>
                    <div class="details">
                        <h3>Happy Birthday Card<br><span>Photoshop by me</span></h3>
                    </div>
                </div>
                <div class="items card card1">
                    <div class="imgBx">
                        <a href="#img1"> <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h3>Happy Birthday Card<br><span>Photoshop by me</span></h3>
                    </div>
                </div>

                <div class="items card">
                    <div class="imgBx">
                        <a href="#img2"><img src="{{ URL::to('/img/posteryYen1.jpg') }}" alt="images"></a>


                    </div>
                    <div class="details">
                        <h3>Poster YenXOI <br><span>Producer</span></h3>
                    </div>
                </div>

                <div class="items card card2">
                    <div class="imgBx">
                        <a href="#img3"><img src="{{ URL::to('/img/posterlee.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h3>SomeOne Famous<br><span>Actor</span></h3>
                    </div>
                </div>
                <a href="#_" class="lightbox" id="img1">
                    <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img2">
                    <img src="{{ URL::to('/img/posteryYen1.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img3">
                    <img src="{{ URL::to('/img/posterlee.jpg') }}">
                </a>


            </div>
            <div class="porti all website">
                <div class="card card1">
                    <div class="imgBx">
                        <a href="#img1"> <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h2>Happy Birthday Card<br><span>Photoshop by me</span></h2>
                    </div>
                </div>

                <div class="card">
                    <div class="imgBx">
                        <a href="#img2"><img src="{{ URL::to('/img/posteryYen1.jpg') }}" alt="images"></a>


                    </div>
                    <div class="details">
                        <h2>Poster YenXOI <br><span>Producer</span></h2>
                    </div>
                </div>

                <div class="card card2">
                    <div class="imgBx">
                        <a href="#img3"><img src="{{ URL::to('/img/posterlee.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h2>SomeOne Famous<br><span>Actor</span></h2>
                    </div>
                </div>
                <a href="#_" class="lightbox" id="img1">
                    <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img2">
                    <img src="{{ URL::to('/img/posteryYen1.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img3">
                    <img src="{{ URL::to('/img/posterlee.jpg') }}">
                </a>
            </div>
            <div class="porti all agency">
                <div class="card card1">
                    <div class="imgBx">
                        <a href="#img1"> <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h3>Happy Birthday Card<br><span>Photoshop by me</span></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="imgBx">
                        <a href="#img2"><img src="{{ URL::to('/img/posteryYen1.jpg') }}" alt="images"></a>


                    </div>
                    <div class="details">
                        <h3>Poster YenXOI <br><span>Producer</span></h3>
                    </div>
                </div>

                <div class="card card2">
                    <div class="imgBx">
                        <a href="#img3"><img src="{{ URL::to('/img/posterlee.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h3>SomeOne Famous<br><span>Actor</span></h3>
                    </div>
                </div>
                <a href="#_" class="lightbox" id="img1">
                    <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img2">
                    <img src="{{ URL::to('/img/posteryYen1.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img3">
                    <img src="{{ URL::to('/img/posterlee.jpg') }}">
                </a>
            </div>
            <div class="porti all portal">
                <div class="card card1">
                    <div class="imgBx">
                        <a href="#img1"> <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h2>Happy Birthday Card<br><span>Photoshop by me</span></h2>
                    </div>
                </div>

                <div class="card">
                    <div class="imgBx">
                        <a href="#img2"><img src="{{ URL::to('/img/posteryYen1.jpg') }}" alt="images"></a>


                    </div>
                    <div class="details">
                        <h3>Poster YenXOI <br><span>Producer</span></h3>
                    </div>
                </div>

                <div class="card card2">
                    <div class="imgBx">
                        <a href="#img3"><img src="{{ URL::to('/img/posterlee.jpg') }}" alt="images"></a>

                    </div>
                    <div class="details">
                        <h3>SomeOne Famous<br><span>Actor</span></h3>
                    </div>
                </div>
                <a href="#_" class="lightbox" id="img1">
                    <img src="{{ URL::to('/img/CrazyCLubBirthdayHUy.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img2">
                    <img src="{{ URL::to('/img/posteryYen1.jpg') }}">
                </a>
                <a href="#_" class="lightbox" id="img3">
                    <img src="{{ URL::to('/img/posterlee.jpg') }}">
                </a>
            </div>

        </div>
    </div>

</div>

<div class="near-post">
</div>
<div class="contact-info">

</div>
@endsection