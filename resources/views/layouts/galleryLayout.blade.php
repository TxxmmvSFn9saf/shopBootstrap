
    @extends('layouts.header')
    @section('content')

        <div class="categoryName col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="galleryMenu row">
                <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><a onclick="ringGallery()"><h1>КОЛЬЦА</h1></a></li>
                <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><a onclick="braceletsGallery()"><h1>БРАСЛЕТЫ</h1></a></li>
                <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><a onclick="necklacesGallery()"><h1>ОЖЕРЕЛЬЯ</h1></a></li>
                <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12"><a onclick="earringGallery()"><h1>СЕРЬГИ</h1></a></li>
            </ul>
        </div>

        <div class="popupGallery" style="    background-size: 320px 320px;
">
            <div class="closeBtn">x</div>
        </div>
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                    @foreach($list as $item)
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <img src="../uploads/rings/{{$item->ring_name}}" class="popup_img img-thumbnail">
                            </div>
                    @endforeach
                        {{$list->links()}}

                    </div>

                </div>
        @include('layouts.footer')
    @endsection
