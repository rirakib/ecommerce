<div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach(DB::table('categories')->orderBy('id','desc')->get() as $category)
                            <li class="category-item has-child-cate">
                                <a href="#" class="cate-link">{{$category->name}}</a>
                                <span class="toggle-control">+</span>
                                <ul class="sub-cate">
                                    @foreach(DB::table('subcategories')->orderBy('id','desc')->get() as $subcategory)
                                        @if($category->id == $subcategory->cat_id)
                                            <li class="category-item"><a href="#" class="cate-link">{{$subcategory->name}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>