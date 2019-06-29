@foreach($list as $item)

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">

        <img src="../uploads/bracelets/{{$item->bracelet_name}}" class="popup_img img-thumbnail">
        </div>


@endforeach
{{$list->links()}}
