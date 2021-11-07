@extends('index')
@section('content')
<section id="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="content-title">Product Page</h2>
        <form action="{{ route('product.simpan') }}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name"> 
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Unit Price</label>
              <input type="number" class="form-control" id="exampleInputPassword1" name="unit_price">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">QTY</label>
              <input type="number" class="form-control" id="exampleInputPassword1" name="qty">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</section>
@endsection