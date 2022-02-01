@extends('backend.master')
@section('admin_title','Product')
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
                    </ul>
                </div>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>


        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if(session('delete'))
                        <h2 style="color:red">{{session('delete')}}</h2>
                    @else
                        <h2>Product List</h2>
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


                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Id </th>
                                    <th class="column-title">Image </th>
                                    <th class="column-title">Name </th>
                                    <th class="column-title">Category </th>
                                    <th class="column-title">Subcategory </th>
                                    <th class="column-title">Type </th>
                                    <th class="column-title">Quantity </th>
                                    <th class="column-title">Status </th>
                                    <th class="column-title">Edit </th>
                                    <th class="column-title no-link last"><span class="nobr">Delete</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($products) == 0)
                                    <tr class="odd pointer">
                                        <td colspan="7" style="text-align:center">There have no data</td>
                                    </tr>
                                @else

                                @foreach($products as $data)
                                <tr class="even pointer">
                                    <td class=" ">{{$data->product_id}}</td>
                                    <td class=" "><img src="{{asset('images/product/title/'.$data->image)}}" class="img_td" alt=""></td>
                                    <td class=" ">{{$data->name}}</td>
                                    <td class=" ">{{$data->category->name}}</td>
                                    <td class=" ">{{$data->subcategory->name}}</td>
                                    <td class=" ">{{$data->product_type}}</td>
                                    <td class=" ">{{$data->product_quantity}}</td>
                                    @if($data->product_stutus == 1)
                                        <td class=" ">Active</td>
                                    @else
                                        <td class=" ">Deactive</td>
                                    @endif
                                    <td class="a-right a-right"><a href="{{route('product.edit',$data->id)}}" class="btn btn-success">Edit</a></td>
                                    <td class=" last">
                                        <form action="{{route('product.destroy',$data->id)}}" method="POST">
                                            @csrf 
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endif
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>



    </div>
</div>

<style>
     img{
        height: 40px;
        width: 40px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
    }
</style>

@endsection