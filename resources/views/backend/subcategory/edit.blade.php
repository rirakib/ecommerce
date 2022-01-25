@extends('backend.master')
@section('admin_title','Edit')
@section('admin_content')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="{{route('dashboard')}}" class="link">Dashboard</a></li>
                        <li class="item-link"><a href="{{route('dashboard.subcategory.index')}}" class="link">Subcategory</a>
                        </li>
                        <li class="item-link"><a  class="link">Edit</a>
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
                        <h2>Edit Subcategory</h2>
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
                        <form id="demo-form2" action="{{route('dashboard.subcategory.update',$subcategory->id)}}" method="POST"
                            enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="" value="{{$subcategory->id}}">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_id">Subcategory Id
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="cat_id" name="subcat_id" value="{{$subcategory->subcat_id}}" required="required"
                                        placeholder="Must be unique"
                                        class="form-control col-md-7 col-xs-12 @error('subcat_id') is-invalid @enderror">
                                    @error('subcat_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subcategory Name <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" value="{{$subcategory->name}}" required="required"
                                        class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror"
                                        placeholder="Subcategory Name">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control"  name="cat_id" class="@error('cat_id') is-invalid @enderror">
                                        <option value="{{$subcategory->category->id}}">{{$subcategory->category->name}}</option>
                                        @foreach(DB::table('categories')->get() as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="short_description" class="control-label col-md-3 col-sm-3 col-xs-12">Short
                                    Description
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="short_description"
                                        class="form-control col-md-7 col-xs-12 @error('short_description') is-invalid @enderror"
                                        type="text" value="{{$subcategory->short_description}}" name="short_description" placeholder="Maximum 40 words">
                                    @error('short_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Subcategory Image
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image"
                                        class="form-control col-md-7 col-xs-12 @error('image') is-invalid @enderror"
                                        type="file" name="image">
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