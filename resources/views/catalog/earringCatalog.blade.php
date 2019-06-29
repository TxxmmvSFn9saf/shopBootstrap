@extends('layouts.header')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="categoryName">
            <ul class="row">
                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                    <a href="necklacesCatalog"><h6><i class="fa fa-caret-left"></i>ОЖЕРЕЛЬЕ
                        </h6></a>
                </li>
                <li id="id_2" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <a><h1>СЕРЕЖКИ</h1></a>


                </li>
                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a href="ringCatalog"><h6>КОЛЬЦА<i class="fa fa-caret-right"></i></h6>
                    </a>
                </li>
            </ul>

        </div>

        <div class="create col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 5px !important;">
            @if(Auth::check() && Auth::user()->is_admin == 1)
                <a href="/createEarring/store" class="btn btn-primary btn-info">ДОБАВИТЬ</a>
            @endif
        </div>
        <div class="item col-lg-12 col-md-12 col-sm-12 col-xs-12">

            @foreach($earringList as $item)


                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img class="popup_img" src="../uploads/earring/{{$item->earring_name}}">
                    </div>
                    <div class="catalog_about_text col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <p class="about_mob">
                            <?php
                            echo ( strlen ( "{$item->description}" ) > 300 ? substr ( "{$item->description}" , 0 , 300 ) . '...' : "{$item->description}" );
                            ?>
                        </p>
                        <p class="about_console">
                            <?php
                            echo ( strlen ( "{$item->description}" ) > 100 ? substr ( "{$item->description}" , 0 , 100 ) . '...' : "{$item->description}" );
                            ?>
                        </p>
                        <a href="{{url('/earringCatalog/'.$item->earring_id.'/about')}}">ПОДРОБНЕЕ</a>


                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="price col-lg-7 col-md-7 col-sm-8 col-xs-8"><p>Цена:</p>{{$item->earring_price}}</div>
                        <div class="instock col-lg-5 col-md-5 col-sm-4 col-xs-4">
                            <?php
                            if ( "{$item->check}" == 1 ) {
                                echo '<label class="available"></label>';
                            } elseif ( "{$item->check}" == 0 ) {
                                echo '<label class="notAvailable"></label>';
                            }
                            ?>
                        </div>
                        @if(Auth::check() && Auth::user()->is_admin == 1)
                        @else
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="{{url ('/earringCatalog/'.$item->earring_id.'/buy')}}">
                                    <button class="buybtn btn btn-info">КУПИТЬ</button>
                                </a>
                            </div>

                        @endif
                        @if(Auth::check() && Auth::user()->is_admin == 1)
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="{{url('/earringCatalog/'.$item->earring_id.'/edit')}}">
                                    <button class="btnedit btn btn-primary btn-success">Edit</button>
                                </a>
                            </div>
                        @endif
                        @if(Auth::check() && Auth::user()->is_admin == 1)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="/deleteEar/{{$item->earring_id}}">
                                    <button class="btndel btn btn-danger">Delete</button>
                                </a>
                            </div>
                        @endif
                    </div>


                </div>
            @endforeach
                {{$earringList->links()}}



        </div>
    </div>
    </div>
    @include('layouts.footer')
@endsection
