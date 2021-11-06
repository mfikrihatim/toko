@extends('index')
@section('content')



<section id="content-wrapper">
    <div class="row py-5">
      <div class="col-lg-12 py-5">
        <h2 class="content-title">Test</h2>
        
        <form>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Order ID</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
          </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-12">
        <table id="example" class="table table-hover responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Client Name</th>
              <th>Phone Number</th>
              <th>Profession</th>
              <th>Date of Birth</th>
              <th>App Access</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="#">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-blue mr-3">EB</div>
  
                    <div class="">
                      <p class="font-weight-bold mb-0">Ethan Black</p>
                      <p class="text-muted mb-0">ethan-black@example.com</p>
                    </div>
                  </div>
                </a>
              </td>
              <td>(784) 667 8768</td>
              <td>Designer</td>
              <td>09/04/1996</td>
              <td>
                <div class="badge badge-success badge-success-alt">Enabled</div>
              </td>
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
  
            <tr>
              <td>
                <a href="#">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-pink mr-3">JR</div>
  
                    <div class="">
                      <p class="font-weight-bold mb-0">Julie Richards</p>
                      <p class="text-muted mb-0">julie_89@example.com</p>
                    </div>
                  </div>
                </a>
              </td>
              <td> (937) 874 6878</td>
              <td>Investment Banker</td>
              <td>13/01/1989</td>
              <td>
                <div class="badge badge-success badge-success-alt">Enabled</div>
              </td>
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
            <tr>
                <td>
                  <a href="#">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-pink mr-3">JR</div>
    
                      <div class="">
                        <p class="font-weight-bold mb-0">Julie Richards</p>
                        <p class="text-muted mb-0">julie_89@example.com</p>
                      </div>
                    </div>
                  </a>
                </td>
                <td> (937) 874 6878</td>
                <td>Investment Banker</td>
                <td>13/01/1989</td>
                <td>
                  <div class="badge badge-success badge-success-alt">Enabled</div>
                </td>
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
              <tr>
                <td>
                  <a href="#">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-pink mr-3">JR</div>
    
                      <div class="">
                        <p class="font-weight-bold mb-0">Julie Richards</p>
                        <p class="text-muted mb-0">julie_89@example.com</p>
                      </div>
                    </div>
                  </a>
                </td>
                <td> (937) 874 6878</td>
                <td>Investment Banker</td>
                <td>13/01/1989</td>
                <td>
                  <div class="badge badge-success badge-success-alt">Enabled</div>
                </td>
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
              <tr>
                <td>
                  <a href="#">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-pink mr-3">JR</div>
    
                      <div class="">
                        <p class="font-weight-bold mb-0">Julie Richards</p>
                        <p class="text-muted mb-0">julie_89@example.com</p>
                      </div>
                    </div>
                  </a>
                </td>
                <td> (937) 874 6878</td>
                <td>Investment Banker</td>
                <td>13/01/1989</td>
                <td>
                  <div class="badge badge-success badge-success-alt">Enabled</div>
                </td>
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
              <tr>
                <td>
                  <a href="#">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-pink mr-3">JR</div>
    
                      <div class="">
                        <p class="font-weight-bold mb-0">Julie Richards</p>
                        <p class="text-muted mb-0">julie_89@example.com</p>
                      </div>
                    </div>
                  </a>
                </td>
                <td> (937) 874 6878</td>
                <td>Investment Banker</td>
                <td>13/01/1989</td>
                <td>
                  <div class="badge badge-success badge-success-alt">Enabled</div>
                </td>
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
              <tr>
                <td>
                  <a href="#">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-pink mr-3">JR</div>
    
                      <div class="">
                        <p class="font-weight-bold mb-0">Julie Richards</p>
                        <p class="text-muted mb-0">julie_89@example.com</p>
                      </div>
                    </div>
                  </a>
                </td>
                <td> (937) 874 6878</td>
                <td>Investment Banker</td>
                <td>13/01/1989</td>
                <td>
                  <div class="badge badge-success badge-success-alt">Enabled</div>
                </td>
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