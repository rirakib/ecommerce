<div class="widget mercado-widget filter-widget">
    <h2 class="widget-title">Color</h2>
    <div class="widget-content">
        <ul class="list-style vertical-list has-count-index">
            @foreach(DB::table('colors')->orderBy('id','desc')->get() as $color)
            <li class="list-item"><a class="filter-link " href="#">{{$color->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>