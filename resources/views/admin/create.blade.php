@extends('admin.adminmaster')
@section('bodyContent')
<div id="layoutSidenav_content" class="p-3">

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 my-3">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 35rem;">
                        <h5 class="text-center display-4 titre ">Ajouter un produit</h5>
                        <form method="POST" enctype='multipart/form-data' action="{{ route('admin.store') }}">
                        @csrf
                        <div class="form-group">
                            <br>
                            <div class="input-group">
                                <input type="text" name="name" required placeholder="name" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" name="description" required placeholder="description" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="file" accept="image/*" name="image1" required placeholder="image1" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="file" accept="image/*" name="image2" required placeholder="image2" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="file" accept="image/*" name="image3" required placeholder="image3" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="file" accept="image/*" name="image4" required placeholder="image4" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="number" name="quantity" required placeholder="quantity" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="number" name="price" required placeholder="price" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <select name="category_id" id="category_id" required class="form-select">
                                    <option value="">Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>  
                        <input type="submit" value="Ajouter" class="btn btn-primary form-control">
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
        
      