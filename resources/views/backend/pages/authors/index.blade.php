@extends('backend/layouts/app')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Authors</h1>
        <a href="{{route('authors.create')}}" data-toggle="modal" data-target="#addModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add </a>

    </div>

    <!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Author</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('authors.store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Author Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
          </div>


          <div class="form-group">
            <label for="description">Author Details</label>
            <textarea name="description" class="form-control" id="description" rows="5" cols="30"></textarea>
          </div>

          <div class="mt-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
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
              <h6 class="m-0 font-weight-bold text-primary">Author Lists</h6>


            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Link</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($authors as $key=>$author)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$author->name}}</td>
                      <td>{{$author->link}}</td>
                      <td>
                        <a href="#editModal{{$author->id}}"   data-toggle="modal" class="btn btn-sm btn-success"><i  class="fas fa-edit"></i>Edit</a>
                        <a href="#deleteModal{{$author->id}}" data-toggle="modal" class="btn btn-sm btn-danger"><i  class="fas fa-trash"></i>Delete</a>

                      </td>
                    </tr>

                    <!-- Edit Modal -->
                      <div class="modal fade" id="editModal{{$author->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Edit Author</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <form action="{{route('authors.update',$author->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                  <label for="name">Author Name</label>
                                  <input type="text" class="form-control" value="{{$author->name}}" id="name" name="name" placeholder="Enter name">
                                </div>


                                <div class="form-group">
                                  <label for="description">Author Details</label>
                                  <textarea name="description" class="form-control" id="description" rows="5" cols="30">{{$author->description}}</textarea>
                                </div>

                                <div class="mt-4">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                              </form>

                            </div>

                          </div>
                        </div>
                      </div>


                      <!-- DElete Modal -->
                        <div class="modal fade" id="deleteModal{{$author->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Author</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form action="{{route('authors.destroy',$author->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <div class="form-group">
                                    {{$author->name}} will be Deleted!!
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
