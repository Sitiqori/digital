@extends('layouts.app')
@section('hal', 'Deleted Category')
@section('title', 'Deleted Category')
@section('content')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            
            <!-- DataTales Example -->
               <div class="card shadow col-lg-8 mb-4 ">
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
                                   @foreach ($deletedCategories as $item)
                                       <tr>
                                           <td>{{ $loop->iteration }}</td>
                                           <td>{{ $item->namakategori }}</td>
                                           <td>
                                               <a class="btn btn-primary mr-2" href="category-restore/{{$item->slug}}" >Restore</a>
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
