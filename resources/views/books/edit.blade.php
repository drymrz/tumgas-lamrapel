@extends('layout.main')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-light-danger color-danger">
                <i class="bi bi-exclamation-circle"></i> {{ $error }}
            </div>
        @endforeach
    @endif
    <div class="container-xxl mt-5">
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Edit Data Buku</h6>
            </div>
            <div class="card-body">
                <form action="/books/{{ $book->slug }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Judul Buku</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    required="" id="title" name="title" value="{{ old('title', $book->title) }}">
                                @error('title')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Kategori</label>
                                <input class="form-control @error('category') is-invalid @enderror" required name="category"
                                    id="category" value="{{ old('category', $book->category) }}">

                                </input>
                                @error('category')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Penulis</label>
                                <input class="form-control @error('author') is-invalid @enderror" required name="author"
                                    id="author" value="{{ old('author', $book->author) }}">

                                </input>
                                @error('author')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Penerbit</label>
                                <input class="form-control @error('publisher') is-invalid @enderror" required
                                    name="publisher" id="publisher" value="{{ old('publisher', $book->publisher) }}">

                                </input>
                                @error('publisher')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Jumlah Stok</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    placeholder="1" required="" name="stock" id="stock"
                                    value="{{ old('stock', $book->stock) }}" />
                                @error('stock')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Harga</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    placeholder="65000" required="" name="price" id="price"
                                    value="{{ old('price', $book->price) }}" />
                                @error('price')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-soft"><i
                                    class="fa fa-edit me-2"></i>Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
