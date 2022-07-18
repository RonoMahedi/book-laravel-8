@extends('backend/layouts/app')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage publishers</h1>
        <a href="{{route('publishers.create')}}" data-toggle="modal" data-target="#addModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add publisher</a>

    </div>

    <!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New publisher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('publishers.store')}}" method="post">
          @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Publisher Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
              </div>
              <div class="form-group col-md-6">
                <label for="link">Publisher Link</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Enter Url">
              </div>
              <div class="form-group col-md-6">
                <label for="address">Publisher Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter name">
              </div>
              <div class="form-group col-md-6">
                <label for="outlet">Publisher Outlet</label>
                <input type="text" class="form-control" id="outlet" name="outlet" placeholder="Enter name">
              </div>
              <div class="form-group col-md-12">
                <label for="description">Publisher Details</label>
                <textarea name="description" class="form-control" id="description" rows="5" cols="30"></textarea>
              </div>

              <div class="mt-4 ml-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </form>

      </div>

    </div>
  </div>
</div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">publisher Lists</h6>


            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Link</th>
                      <th>Address</th>
                      <th>Outlet</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($publishers as $key=>$publisher)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$publisher->name}}</td>
                      <td>{{$publisher->link}}</td>
                      <td>{{$publisher->address}}</td>
                      <td>{{$publisher->outlet}}</td>
                      <td>
                        <a href="#editModal{{$publisher->id}}"   data-toggle="modal" class="btn btn-sm btn-success"><i  class="fas fa-edit"></i>Edit</a>
                        <a href="#deleteModal{{$publisher->id}}" data-toggle="modal" class="btn btn-sm btn-danger"><i  class="fas fa-trash"></i>Delete</a>

                      </td>
                    </tr>

                    <!-- Edit Modal -->
                      <div class="modal fade" id="editModal{{$publisher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Edit publisher</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <form action="{{route('publishers.update',$publisher->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="name">Publisher Name</label>
                                    <input type="text" class="form-control" id="name" value="{{$publisher->name}}" name="name"  placeholder="Enter name">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="link">Publisher Link</label>
                                    <input type="text" class="form-control" id="link" name="link" value="{{$publisher->link}}" placeholder="Enter name">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="address">Publisher Address</label>
                                    <input type="text" class="form-control" id="address" value="{{$publisher->address}}" name="address" placeholder="Enter name">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="outlet">Publisher Outlet</label>
                                    <input type="text" class="form-control" id="outlet" value="{{$publisher->outlet}}" name="outlet" placeholder="Enter name">
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label for="description">Publisher Details</label>
                                    <textarea name="description" class="form-control" id="description" rows="5" cols="30">{{$publisher->description}}</textarea>
                                  </div>

                                  <div class="mt-4 ml-3">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </div>
                              </form>

                            </div>

                          </div>
                        </div>
                      </div>


                      <!-- DElete Modal -->
                        <div class="modal fade" id="deleteModal{{$publisher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit publisher</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form action="{{route('publishers.destroy',$publisher->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <div class="form-group">
                                    {{$publisher->name}} will be Deleted!!
                                  </div>

                                  <div class="mt-4">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn btn-primary">OK Confirm</button>
                                  </div>
                                </form>

                              </div>

                            </div>
                          </div>
                        </div>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>

    <!-- Content Row -->

</div>


@endsection
