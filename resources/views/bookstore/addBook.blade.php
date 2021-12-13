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

            <h2>Add Book</h2>
            <form action="{{route('addBookToStore')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Book Name">
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">Description</label>
                    <textarea class="form-control" name="product_description" id="product_description" placeholder="Description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input type="file" class="form-control"  name="product_image" id="product_image">
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Price">
                </div>
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
