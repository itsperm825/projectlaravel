@extends('layoutmaster')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Halaman Edit Produk</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('product.index') }}" class="btn btn-info">Back</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Data tidak tersimpan!!!</strong>
                <ul>
                    @foreach ($errors->all as $error)
                        <li>{{ $error }}</li><br>
                    @endforeach
                </ul>
            </div>

        @endif
        <form action="{{ route('product.update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <!-- <p>{{ $product->id }}</p> -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <strong>Nama Product :</strong>
                        <input type="text" name="nama_product" class="form-control" value="{{ $product->nama_product }}" placeholder="Nama Product">
                    </div>
                    <div class="form-group">
                        <strong>Detail :</strong>
                        <textarea name="detail" class="form-control" placeholder="Detail" style="height: 150%">{{ $product->detail }}</textarea>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection