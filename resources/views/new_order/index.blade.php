@extends('index')
@section('content')
<section id="content-wrapper">
    <div class="row pt-0">
      <div class="col-lg-12 pt-0">
        <h2 class="content-title">Test</h2>
        
        <form action="{{ route('new_order.simpan') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Order ID</label>
                @foreach ($qwer as $datas)
                <input type="text" value ="{{$datas->id +1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" readonly>
                @endforeach
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Order Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="order_date">
              </div>
            </div>  
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="customer_name">
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Tambah Product</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-12">
        <table id="example" class="table table-hover responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Unit Price</th>
              <th>QTY</th>
              <th>Sub Total</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($new_order as $data)
            <tr>
              <td>{{ $data->id }}</td>
              <td>{{ $data->product_name }}</td>
              <td>{{ $data->unit_price }}</td>
              <td>{{ $data->qty }}</td>
              <td>{{ $data->subtotal }}</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                          title="Actions"></i>
                      </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                    <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- large modal -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="content-title">Product Page</h2>
              <form action="{{ route('product.simpan') }}" method="POST">
                @csrf
                  <div class="mb-3">
                    <div class="form-group">
                      <label for="sel1">Product ID</label>
                      <select class="form-control" id="sel1" name="product_id">
                        <option selected="selected">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <div></div>
    </div>
  </div>
</section>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://unpkg.com/popper.js'></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</script><script  src="assets/script.js"></script>
@endsection