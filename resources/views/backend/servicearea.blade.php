@extends('layouts.app')

@section('content')
    <!-- Section header -->
    
    <section class="content-header ">
        <h1>
            Product
            <small>List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"> Products</li>
        </ol>
    </section>
    <!-- ./Section header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <div class="box-tools pull-right">
                            <a class="btn btn-info btn-sm" href="{{ URL::route('category.create') }}"><i class="fa fa-plus-circle"></i> Add Product</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <legend>Filters:</legend>
                                    

                                </fieldset>
                            </div>
                        </div>
                        <hr>
                        @if($products)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="listDataTableWithSearch" class="table table-bordered table-striped list_view_table display responsive no-wrap" width="100%">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th>Category Name</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Gross Price</th>
                                                <th>Quantity</th>
                                                <th>Is New</th>
                                                <th>Status</th>
                                                <th class="notexport" width="10%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product )
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->category->name }}</td>
                                                    <td>{{ $product->actual_price }}</td>
                                                    <td>{{ $product->discount }}</td>
                                                    <td>{{ $product->gross_price }}</td> 
                                                    <td>{{ $product->quantity }} {{ strtolower($product->unit)}} </td>
                                                    <td>{{ $product->is_new }}</td>
                                                    <td>
                                                        <input class="statusChange" type="checkbox" data-pk="{{$product->id}}" @if($product->status) checked @endif data-toggle="toggle" data-on="<i class='fa fa-check-circle'></i>" data-off="<i class='fa fa-ban'></i>" data-onstyle="success" data-offstyle="danger">
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a title="Details" data-id="{{ $product->id }}" class="btn btn-primary product-view btn-sm"><i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a title="Edit" href="{{URL::route('product.edit',$product->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                            </a>
                                                        </div>
                                                        <!-- todo: have problem in mobile device -->
                                                        <div class="btn-group">
                                                            <form  class="myAction" method="POST" action="{{URL::route('product.destroy', $product->id)}}">
                                                                @csrf
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                                    <i class="fa fa-fw fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                    
                                                @endforeach
                                            
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>name</th>
                                                <th>Category Name</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Gross Price</th>
                                                <th>Is New</th>
                                                <th>Status</th>
                                                <th class="notexport" width="5%">Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
@endsection 

<script>
    $(document).ready(function(){
        $('.product-view').click(function(){
            let productId = $(this).da
        })
        {{URL::route('product.show',$product->id)}}
    })
</script>    