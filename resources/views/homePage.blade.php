@extends('layouts.header')
@section('content')

    <div class="slider col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">


                <div class="item active">
                    <img src="{{asset ("images/slider1.jpg")}}" alt="slide1">
                </div>
                <div class="item">
                    <img src="{{asset ("images/slider2.jpg")}}" alt="slide2">
                </div>
                <div class="item">
                    <img src="{{asset ("images/slider3.jpg")}}" alt="slide3">
                </div>
                <div class="item">
                    <img src="{{asset ("images/slider4.jpg")}}" alt="slide4">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
                <li data-target="#Carousel" data-slide-to="2"></li>
                <li data-target="#Carousel" data-slide-to="3"></li>
            </ol>
        </div>

    </div>



    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 content">
        <ul class=" content">
            <li class=" col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="col-lg-12">
                    <h4>О НАШИХ<br/> <span>КОЛЬЦАХ</span></h4>
                </div>
                <div class="image"><img src="{{asset ('images/home1.jpg')}}"></div>
                <div class="about col-lg-12">
                    <p><?php
                        $text = "Среди потрясающих колец Iva особое место занимает легендарная модель Nirvana, мерцающая кристаллами многочисленных расцветок. В этой изумительной коллекции  есть также простые и в то же время прекрасные модели с родиевым покрытием и прозрачным кристальным паве, поистине роскошные позолоченные коктейльные кольца с восхитительными прозрачными кристаллами в крапановой закрепке и чарующие яркие произведения из кристаллов цвета Black Diamond, Jet Hematite, Jet и Satin в эксклюзивной закрепке Swarovski Pointiage.";
                        echo substr ( "$text" , 0 , 200 ) . "<a href='aboutUs'>...</a>"?></p>
                    <div class="col-lg-12">
                        <a href="ringCatalog" class="more"> КАТАЛОГ КОЛЕЦ</a>
                    </div>
                </div>
            </li>

            <li class=" col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="col-lg-12">
                    <h4>О НАШИХ<br/> <span>БРАСЛЕТАХ</span></h4>
                </div>
                <div class="image"><img src="{{asset ('images/home2.jpg')}}"></div>
                <div class="about col-lg-12">
                    <p><?php
                        $text = "Браслеты Iva, от элегантных романтичных моделей с родиевым покрытием или позолотой и акцентами из кристального паве до шикарных цепочек в урбанистическом стиле это  воплощение современной философии роскоши и инновационного дизайна украшений, которым славится наш бренд. Коллекция Swarovski из сезона в сезон пополняется потрясающими произведениями самых актуальных расцветок, созданными с использованием новейших методик в соответствии с последними модными тенденциями.";
                        echo substr ( "$text" , 0 , 200 ) . "<a href='aboutUs'>...</a>"?></p>
                    <a href="braceletCatalog" class="more"> КАТАЛОГ БРАСЛЕТОВ</a>
                </div>
            </li>

            <li class=" col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="col-lg-12">
                    <h4>О НАШИХ<br/> <span>ОЖЕРЕЛЬЯХ</span></h4>
                </div>
                <div class="image"><img src="{{asset ('images/home3.jpg')}}"></div>
                <div class="about col-lg-12">
                    <p><?php
                        $text = "Коллекция ожерелий Iva это стильные украшения, от простых и в то же время прекрасных нитей с родиевым покрытием или позолотой, усыпанных  кристаллами, до утончённых произведений, которые обязательно привлекут всеобщее внимание. Это изумительные образцы современного инновационного дизайна это прекрасный способ разбавить любой женский образ.";
                        echo substr ( "$text" , 0 , 200 ) . "<a href='aboutUs'>...</a>"?></p>
                    <a href="necklacesCatalog" class="more"> КАТАЛОГ ОЖЕРЕЛИЙ</a>
                </div>
            </li>

            <li class=" col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="col-lg-12">
                    <h4>О НАШИХ<br/> <span>СЕРЬГАХ</span></h4>
                </div>
                <div class="image"><img src="{{asset ('images/home4.jpg')}}"></div>
                <div class="about col-lg-12">
                    <p><?php
                        $text = "В коллекции сверкающих серёжек Iva выделяются серьги-обручи в урбанистическом стиле с родиевым покрытием и паве из кристаллов цвета Fuchsia и Amethyst и прозрачных кристаллов; классические позолоченные серьги с одним прозрачным кристальным шатоном в обрамлении прозрачного кристального паве; винтажные серьги с палладиевым покрытием, украшенные элегантными подвесками из кристаллов разных пастельных оттенков голубого; и броские серьги с родиевым покрытием и сеткой Crystal Mesh.";
                        echo substr ( "$text" , 0 , 200 ) . "<a href='aboutUs'>...</a>"?></p>
                    <a href="earringCatalog" class="more"> КАТАЛОГ СЕРЕЖЕК</a>
                </div>
            </li>
        </ul>



    </div>
    <aside class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <h2>НОВИНКИ</h2>
        <div class="news col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul>
                <li>
                    <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                    </div>
                    <div>

                    </div>
                </li>
            </ul>
        </div>
    </aside>
    @include('layouts.footer')
@endsection

