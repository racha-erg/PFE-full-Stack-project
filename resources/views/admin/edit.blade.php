@extends('admin.adminmaster')
@section('bodyContent')
<div id="layoutSidenav_content" class="p-3">

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 my-3">
                <div class="row">
                    <div class="col-3"></div>
<div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 35rem;">
    <h5 class="text-center display-4 titre">Edit Product</h5>
    <form method="POST" enctype='multipart/form-data' action="{{ route('admin.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <br>
            <div class="input-group">
                <input type="text" name="name" required placeholder="Name" class="form-control" value="{{ $product->name }}">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="description" required placeholder="Description" class="form-control" value="{{ $product->description }}">
            </div>
            <br>
            <div class="input-group"> 
                <img src="{{ asset('storage/'.$product->image1) }}" width="70px" alt="product">
                <input type="file" accept="image/*" name="image1" placeholder="Image 1" class="form-control">
            </div>
            
            <div class="input-group"> 
                <img src="{{ asset('storage/'.$product->image2) }}" width="70px" alt="product">
                <input type="file" accept="image/*" name="image2" placeholder="Image 2" class="form-control">
            </div>
            <div class="input-group"> 
                <img src="{{ asset('storage/'.$product->image3) }}" width="70px" alt="product">
                <input type="file" accept="image/*" name="image3" placeholder="Image 3" class="form-control">
            </div>
            <div class="input-group"> 
                <img src="{{ asset('storage/'.$product->image4) }}" width="70px" alt="product">
                <input type="file" accept="image/*" name="image4" placeholder="Image 4" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <input type="number" name="quantity" required placeholder="quantity" class="form-control" value="{{ $product->quantity }}">
            </div>
            <br>
            <div class="input-group">
                <input type="number" name="price" required placeholder="price" class="form-control" value="{{ $product->price }}">
            </div>
            <br>
            <div class="input-group">
                <select name="category_id" required class="form-select">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id === $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <input type="submit" value="Update" class="btn btn-primary form-control">
        </div>
    </form>
</div>
<div class="col-2"></div>
                </div>
                
            </div>
        </main>
    </div>
  </div>

@endsection
