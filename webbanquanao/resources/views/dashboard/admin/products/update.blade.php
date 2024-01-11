
@extends('dashboard.layout.master')
@section('css')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/select2/index.min.css')}}">
<style>
  .icon{
    width: 30px;
    height: 60px;
  }

  .addBi::before{
    font-size: 20px !important;
    margin-top: 8px !important;
    margin-left: 5px !important;
    color: blue

  }
  .colorAdd{
    height: 37.6px;
  }
</style>
@endsection
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('/dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Add Product</li>
      </ol>
    </nav>
  </div>
<div class="container-fuild">
  <div class="row">
    <form method="POST" action="{{ route('update_product')}}" enctype="multipart/form-data">  
      @csrf
      @method('PUT')
        <div class="modal-body">
          
          <div class="row">     
            <div class="form-group col-4">
                <label for="" class="form-lable mb-2">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập name ..." >
            </div>

            <div class="form-group col-4">
                <label for="" class="form-lable mb-2">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Nhập quantity ..." >
            </div>

            <div class="form-group col-4">
                <label for="" class="form-lable mb-2">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Nhập price ..." >
            </div>
          </div>
          <div class="row">
            <div class="form-group mt-2 col-4">
              <label class="form-lable mb-2">Select choose cateygory</label>
              <select class="form-select" name="category_id">
                <option value="null" selected>Choose category</option>
                {{-- {{!! $htmlSelect !!}} --}}
                </select>
            </div>

            <div class="form-group mt-2 col-4">
              <label class="form-lable mb-2">Image</label>
              <input type="file" name="code[]" class="form-control" placeholder="Nhập image..." multiple>
            </div>

            <div class="form-group mt-2 col-4">
              <label class="form-lable mb-2">Select Status</label>
              <select class="form-select" name="category_id">
                <option value="null" selected>Choose status</option>
                {{-- {{!! $htmlSelect !!}} --}}
                </select>
            </div>
          </div>
          <div class="row">
              <div class="form-group col-4 mt-2">
                <label for="" class="form-lable mb-2">Dimensions</label>
                <input type="text" name="dimensions" class="form-control" placeholder="Nhập Dimensions ..." >
            </div>
            <div class="form-group col-4 mt-2">
                <label for="" class="form-lable mb-2">Weight</label>
                <input type="text" name="weight" class="form-control" placeholder="Nhập weight ..." >
            </div>
            <div class="form-group col-4 mt-2">
                <label for="" class="form-lable mb-2">Materials</label>
                <input type="text" name="material" class="form-control" placeholder="Nhập materials ..." >
            </div>
          </div>
          <div class="form-group col mt-2">
            <label for="" class="form-lable mb-2">information content</label>
            <textarea class="form-control my-editor-tinymce4" name="content" placeholder="Nhập content ..."></textarea>
          </div>

        </div>
        <div class="mt-5 text-center">
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-outline-warning">Reset</button>
        </div>
  </form>
  </div>
</div>
@section('js')
<script src="{{ asset('admin/assets/vendor/select2/index.min.js')}}"></script> 
<script src="{{ asset('admin/assets/js/product/addProduct.js')}}"></script>
<script src="/path-to-your-tinymce/tinymce.min.js"></script>
@endsection
@endsection



