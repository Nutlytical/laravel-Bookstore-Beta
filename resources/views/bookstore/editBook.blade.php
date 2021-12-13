<x-app-layout>
    <div class="py-12">
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <h2>Edit Product 
                <span class="fs-5">&nbsp; lasted update : {{Carbon\Carbon::parse($book->updated_at)->diffForHumans()}}</span>
            </h2>
            <form action="{{url('/updateBook/'.$book->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" 
                        placeholder="Product Name" value="{{$book->product_name}}">
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">Description</label>
                    <textarea class="form-control" name="product_description" id="product_description" placeholder="Description" rows="3">{{$book->product_description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input type="file" class="form-control"  name="product_image" id="product_image" value="{{$book->product_image}}">
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="product_price" id="product_price" 
                        placeholder="Price" value="{{$book->product_price}}">
                </div>
                <input type="hidden" name="old_image" value="{{$book->product_image}}">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
