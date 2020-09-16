@extends('layoutmaster')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>CRUD Laravel</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
            </div>
        </div>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
            @forelse ($product as $pr)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pr->nama_product }}</td>
                    <td>{{ $pr->detail }}</td>
                    <td>
                        <form action="{{ route('product.destroy', $pr->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('product.show', $pr->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('product.edit', $pr->id) }}" class="btn btn-info">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada Data</td>
                    </tr>
            @endforelse
            <!-- <tr>
                <td>1</td>
                <td>Baju Muslim</td>
                <td>Ini baju muslim</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr> -->
        </table>
    </div>
@endsection