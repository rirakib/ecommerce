@extends('backend.master')
@section('admin_title','Category')
@section('admin_content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="{{route('dashboard')}}" class="link">Dashboard</a></li>
                        <li class="item-link"><a href="{{route('dashboard.category.index')}}" class="link">Category</a>
                        </li>
                        <li class="item-link"><a href="{{route('dashboard.category.create')}}" class="link">Create</a>
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
                        <h2>Create Category</h2>
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
                        <form id="demo-form2" action="{{route('dashboard.category.store')}}" method="POST"
                            enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_id">Category Id
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="cat_id" name="cat_id"
                                         required="required"
                                        placeholder="Must be unique" class="form-control col-md-7 col-xs-12 @error('cat_id') is-invalid @enderror">
                                    @error('cat_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Name <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" 
                                        required="required" class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror"
                                        placeholder="Category Name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="short_description" class="control-label col-md-3 col-sm-3 col-xs-12">Short
                                    Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="short_description" class="form-control col-md-7 col-xs-12 @error('short_description') is-invalid @enderror" type="text"
                                        name="short_description"
                                        placeholder="Maximum 40 words">
                                    @error('short_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Category Image
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image" class="form-control col-md-7 col-xs-12 @error('image') is-invalid @enderror" type="file" name="image"
                                    >
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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