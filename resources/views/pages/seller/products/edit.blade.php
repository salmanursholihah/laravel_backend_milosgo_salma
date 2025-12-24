<form action="{{ route('seller.products.update', $product->id) }}"
      method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class="form-control"
               value="{{ $product->name }}" required>
    </div>

    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control"
               value="{{ $product->price }}" required>
    </div>

    <div class="form-group">
        <label>Image</label><br>
        @if($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" width="100">
        @endif
        <input type="file" name="image" class="form-control mt-2">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control">
            {{ $product->description }}
        </textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
