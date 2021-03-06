<div class="widget mercado-widget filter-widget brand-widget">
    <h2 class="widget-title">Brand</h2>
    <div class="widget-content">
        <ul class="list-style vertical-list list-limited" data-show="6">
            @foreach(DB::table('brands')->orderBy('id','desc')->get() as $brand)
            <li class="list-item"><a class="filter-link " href="#">{{$brand->name}}</a></li>
            @endforeach
            <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>'
                    class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down"
                        aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>