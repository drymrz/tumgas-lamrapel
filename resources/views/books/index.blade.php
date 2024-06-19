@extends('layout.main')
@section('content')
    <div class="col-12 pt-5 px-5">
        <div class="table-responsive">
            <div class="text-end mb-2">
                <a href="/books/create" class="btn btn-primary fw-medium"><i class="fa-solid fa-plus me-1"></i>Create
                    New
                    Data</a>
            </div>
            <table class="table table-striped table-borderless">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('/storage/book-images/' . $book->image_name) }}" alt="{{ $book->title }}"
                                    width="100">
                            </td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->price }}</td>
                            <td>{{ $book->stock }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book->slug) }}" class="btn btn-warning">Edit</a>
                                <form action="/books/{{ $book->slug }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
