<x-app-layout>
    <div class="py-12">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <h2>Book Dashboard</h2>

            @if(count($books) > 0)
            <div class="table-responsive mb-3">
                <table class="table table-striped mt-3">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <th scope="row">{{$books->firstItem() + $loop->index}}</th>
                            <td >
                                <img src="{{asset($book->product_image)}}" alt="" width="100px" height="100px">
                            </td>
                            <td >{{$book->product_name}}</td>
                            <td >{{Str::limit($book->product_description, 20)}}</td>
                            <td >{{$book->product_price}}</td>
                            <td>
                                <a href="{{url('/editBook/'.$book->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('/deleteBook/'.$book->id)}}" class="btn btn-danger"
                                    onclick="return confirm('Wanna Delete ?')"
                                >Remove</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                {{$books->links()}}
            @else
            <div class="alert alert-danger mt-3">
                <p>Don't have any book in collection</p>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>