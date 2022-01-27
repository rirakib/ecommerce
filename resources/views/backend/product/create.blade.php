@extends('backend.master')
@section('admin_title','Create')
@section('admin_content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="{{route('dashboard')}}" class="link">Dashboard</a></li>
                        <li class="item-link"><a href="{{route('product.index')}}" class="link">Product</a>
                        </li>
                        <li class="item-link"><a href="{{route('product.create')}}" class="link">Create</a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        @if(session('stutus'))
                        <h2 style="color:green">{{session('stutus')}}</h2>
                        @else
                        <h2>Create Product</h2>
                        @endif
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left">
                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="product_id">Product Id <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="product_id" name="product_id" required="required"
                                            class="form-control col-md-7 col-xs-12"
                                            placeholder="Product id must be unique">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="name">Product Name <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="name" name="name" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                                    <div class="col-md-7 col-sm-9 col-xs-12">
                                        <select class="form-control" name="cat_id">
                                            <option>Choose Category</option>
                                            @foreach(DB::table('categories')->orderBy('name','asc')->get() as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Subcategory</label>
                                    <div class="col-md-7 col-sm-9 col-xs-12">
                                        <select class="form-control" name="subcat_id">
                                            <option>Choose Subcategory</option>
                                            @foreach(DB::table('subcategories')->orderBy('name','asc')->get() as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Brand</label>
                                    <div class="col-md-7 col-sm-9 col-xs-12">
                                        <select class="form-control" name="brand_id">
                                            <option>Choose Brand</option>
                                            @foreach(DB::table('brands')->orderBy('name','asc')->get() as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Unit</label>
                                    <div class="col-md-7 col-sm-9 col-xs-12">
                                        <select class="form-control" name="unit_id">
                                            <option>Choose Unit</option>
                                            @foreach(DB::table('units')->orderBy('name','asc')->get() as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Color</label>
                                    <div class="col-md-7 col-sm-9 col-xs-12">
                                        <select class="form-control" name="color_id">
                                            <option>Choose Color</option>
                                            @foreach(DB::table('colors')->orderBy('name','asc')->get() as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Size</label>
                                    <div class="col-md-7 col-sm-9 col-xs-12">
                                        <select class="form-control" name="size_id">
                                            <option>Choose Size</option>
                                            @foreach(DB::table('sizes')->orderBy('name','asc')->get() as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="product_quantity">Product Quantity <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="product_quantity" name="product_quantity"
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="price">Price<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="price" name="price" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="product_code">Promo Code<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="product_code" name="product_code" required="required"
                                            placeholder="Optional" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="offer_price">Offer Price<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="offer_price" name="offer_price" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="offer_start_date">Offer start date<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="date" id="offer_start_date" name="offer_start_date"
                                            required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label col-md-3" for="offer_end_date">Offer end date<span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="date" id="offer_end_date" name="offer_end_date" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_description">Short Description</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="short_description" name="short_description">
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection