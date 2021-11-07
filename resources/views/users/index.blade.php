@extends('index')
@section('content')



<section id="content-wrapper">
    <div class="row py-5">
        <div class="col-lg-6 pb-5">
          @if ($user->role_id == 1)
            <a href="{{ route('user.create') }}"><button type="button" class="btn btn-primary">Tambah Data</button></a>
          @else
             
          @endif
            
        </div>
      <div class="col-12">
        <table id="example" class="table table-hover responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Client Name</th>
              <th>Phone Number</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $data)
            <tr>
              <td>{{ $data->name }}</td>
              <td>{{ $data->email }}</td>
              <td>
                @if ($user->role_id == 1)
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
              @else
                 
              @endif
                
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
</section>

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'>
</script><script  src="assets/script.js"></script>
@endsection