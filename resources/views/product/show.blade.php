@extends('layoutmaster')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Show Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('product.index') }}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="form-group">
                <strong>Nama Product</strong>
                {{ $product->nama_product }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12">
            <div class="form-group">
                <strong>Detail : </strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection