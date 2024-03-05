@extends('layouts.app')
@section('hal', 'Category Data')
@section('title', 'Category Data')
@section('content')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

             
            <!-- DataTales Example -->
            <div class="card shadow col-lg-8 mb-4 ">
                <div class="nav-item dropdown no-arrow  ">
                     <a class="nav-link dropdown  d-flex justify-content-start m-2" href="#" id="" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button style="background-color: #EEEFE1" class="tambah btn btn-light mr-2"><i class="fa fa-plus-square mr-2" ></i>Create</button>
                    </a> 
                    <div class="col-lg-12  d-flex justify-content-end "> 
                        <a style="background-color: #E26266" href="{{ route('deleted-category') }}" class="btn btn-danger mr-2"><i class="fa fa-trash mr-2" ></i>Destroy</a>
                        <a   class="tambah btn btn-dark"><i class="fas fa-download fa-sm text-white-50 mr-2" ></i>Generate Report</a>
                    </div>

                    
                    <div class="mt3">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="mt3">
                        @if (session('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="dropdown-list dropdown-menu dropdown-menu shadow animated--grow-in p-3"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Create Category
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <input type="text" class="form-control" id="namakategori" placeholder="Horror"
                                       name="namakategori" required>
                            </a>
                            <a class="dropdown-item d-flex align-items-center mb-2" href="#">
                                <button type="submit" class="btn btn-light form-control"
                                        style="background-color: #EEEFE1">Create
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Category Name</th>
                                <th>Action</th> 
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->namakategori }}</td>
                                    <td class="d-flex">
                                        {{-- Edit --}}
                                        {{-- <form action="{{ route('category.update', $item->slug) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="namakategori" value="{{ $item->namakategori }}">
                                            <button type="submit" class="btn btn-secondary mr-2">Edit</button>
                                        </form> --}}
                                        <div class="d-flex" href="/{{$item->slug}}">
                                            <a class=" "  id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                <button  class=" btn btn-secondary mr-2" href="/{{$item->slug}}">Edit</button>
                                            </a>
                                            <!-- Dropdown - Messages -->
                                            <form action="{{ route('category.update', $item->slug) }}" method="post" >
                                                @csrf
                                                @method('put')
                                                <div class=" dropdown-menu shadow animated--grow-in p-3" aria-labelledby="messagesDropdown" href="a-category/{{$item->slug}}">
                                                    <h6 class="dropdown-header">
                                                        Edit Category
                                                    </h6>
                                                    <a class="dropdown-item d-flex align-items-center"  >
                                                        <input type="text" class="form-control " id="namakategori"  name="namakategori"   >
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center mb-2" href="#" >
                                                        <button  type="submit" class="btn btn-secondary form-control" >Update</button>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>

                                        {{-- Delete --}}
                                        {{-- <form action="#" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                        <div class="d-flex" href="/{{$item->slug}}">
                                            <a class=" "  id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                <button  class=" btn btn-danger mr-2" href="/{{$item->slug}}">Delete</button>
                                            </a>
                                            <!-- Dropdown - Messages -->
                                            <form action="{{ route('category.destroy', $item->slug) }}" method="post" >
                                                @csrf
                                                @method('DELETE')
                                                <div class=" dropdown-menu shadow animated--grow-in p-3" aria-labelledby="messagesDropdown" href="a-category/{{$item->slug}}">
                                                    <h5 class="dropdown-header">
                                                        Are You Sure Want to Delete this Category?
                                                    </h5>
                                                    <a class="dropdown-item d-flex align-items-center"  >
                                                        
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center mb-2" href="#" >
                                                        <button  type="submit" class="btn btn-danger form-control" >Delete</button>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
