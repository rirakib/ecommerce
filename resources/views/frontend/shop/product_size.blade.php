<div class="widget mercado-widget filter-widget">
    <h2 class="widget-title">Size</h2>
    <div class="widget-content">
        <ul class="list-style inline-round ">
            @foreach(DB::table('sizes')->orderBy('id','desc')->get() as $size)
            <li class="list-item"><a class="filter-link" href="#">{{$size->name}}</a></li>
            @endforeach
        </ul>
        <div class="widget-banner">
            <figure><img src="{{asset('frontend/assets/images/size-banner-widget.jpg')}}" width="270" height="331"
                    alt="">
            </figure>
        </div>
    </div>
</div>