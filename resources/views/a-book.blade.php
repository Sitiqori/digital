@extends('layouts/app')
@section('hal', 'Books')
@section('title', 'Books')
@section('content')

<div class="container-fluid">


     <!-- DataTales Example -->
     <div class="card shadow col-lg-12 mb-4 ">
        <div class="nav-item dropdown no-arrow  ">
            <a class="nav-link dropdown  d-flex justify-content-start m-2" href="#" id="" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <button style="background-color: #EEEFE1" class="tambah btn btn-light mr-2"><i class="fa fa-plus-square mr-2" ></i>Create</button>
           </a>
           <div class="col-lg-12  d-flex justify-content-end ">
               <a style="background-color: #E26266" href="" class="btn btn-danger mr-2"><i class="fa fa-trash mr-2" ></i>Destroy</a>
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>


                @endif
           </div>

           <form action="{{ route('abook.store') }}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="dropdown-list dropdown-menu dropdown-menu shadow animated--grow-in p-3"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                       Insert Book
                    </h6>
                    <hr>
                    <a class="dropdown-item align-items-center" href="#">
                        <label for="judul">Title</label>
                       <input type="text" class="form-control" id="judul" placeholder="The Prisoner of Azkaban" name="judul" required>
                    </a>
                    <a class="dropdown-item  align-items-center" href="#">
                        <label for="penulis">Author</label>
                        <input type="text" class="form-control" id="penulis" placeholder="Jk Rowling" name="penulis" required>
                    </a>
                    <a class="dropdown-item  align-items-center" href="#">
                        <label for="penerbit">Publisher</label>
                        <input type="text" class="form-control" id="penerbit" placeholder="Gramedia" name="penerbit" required>
                    </a>
                    <a class="dropdown-item align-items-center" href="#">
                        <label for="tahun_terbit">Publication Year</label>
                        <input type="datetime" class="form-control" id="tahun_terbit" placeholder="2022" name="tahun_terbit" required>
                    </a>
                    <a class="dropdown-item align-items-center" href="#">
                        <label for="kategori_id">Category Book</label>
                        <select name="kategoribuku[]" id="category"  class=" form-control" >
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                            @endforeach
                        </select>
                    </a>
                    <a class="dropdown-item align-items-center" href="#">
                        <label for="sinopsis">Sinopsis</label>
                        <input class="form-control"  type="text" style="height: 4rem"  id="sinopsis" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quibusdam quasi minima repellendus earum enim assumenda omnis saepe nobis beatae?" name="sinopsis" required>
                    </a>
                    <a class="dropdown-item align-items-center" href="#">
                        <label for="image">Image Book</label>
                        <input type="file" class="form-control mb-1" id="cover" placeholder=" " name="image" >
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
                         <th>Title</th>
                         <th>Author</th>
                         <th>Publisher</th>
                         <th>Publication Year</th>
                         <th>Category</th>
                         <th>Sinopsis</th>
                         <th>Status</th>
                         <th>Cover</th>
                         <th>Action</th>
                     </tr>
                     </thead>
                     <tbody>
                         @foreach ($books as $item)
                             <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$item->judul}}</td>
                                   <td>{{$item->penulis}}</td>
                                   <td>{{$item->penerbit}}</td>
                                   <td>{{$item->tahun_terbit}}</td>
                                   <td>
                                    @foreach ($item->kategoribuku as $category)
                                        {{$category->namakategori}}
                                    @endforeach
                                   </td>
                                   <td>{{$item->sinopsis}}</td>
                                   <td>{{$item->status}}</td>
                                   <td>{{$item->cover}}</td>
                                   <td class="d-flex">
                                       {{----------------------------------------------- edit ------------------------------------------------------}}
                                        <div class="d-flex" href="/{{$item->slug}}">
                                            <a class=" "  id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                <button  class=" btn btn-secondary mr-2" href="/{{$item->slug}}">Edit</button>
                                            </a>
                                            <!-- Dropdown - Messages -->
                                            <form action=" {{ route('abook.update', $item->slug) }} " method="post" >
                                                @csrf
                                                @method('put')
                                                <div class=" dropdown-menu shadow animated--grow-in p-3" aria-labelledby="messagesDropdown" href="a-book/{{$item->slug}}">
                                                    <h6 class="dropdown-header" style="text-align: center">
                                                        Edit Book Data
                                                    </h6>
                                                        <a class="dropdown-item align-items-center" href="#">
                                                            <label for="judul">Title</label>
                                                        <input type="text" class="form-control" id="judul" placeholder="The Prisoner of Azkaban" name="judul" required>
                                                        </a>
                                                        <a class="dropdown-item  align-items-center" href="#">
                                                            <label for="penulis">Author</label>
                                                            <input type="text" class="form-control" id="penulis" placeholder="Jk Rowling" name="penulis" required>
                                                        </a>
                                                        <a class="dropdown-item  align-items-center" href="#">
                                                            <label for="penerbit">Publisher</label>
                                                            <input type="text" class="form-control" id="penerbit" placeholder="Gramedia" name="penerbit" required>
                                                        </a>
                                                        <a class="dropdown-item align-items-center" href="#">
                                                            <label for="tahun_terbit">Publication Year</label>
                                                            <input type="datetime" class="form-control" id="tahun_terbit" placeholder="2022" name="tahun_terbit" required>
                                                        </a>
                                                        <a class="dropdown-item align-items-center" href="#">
                                                            <label for="kategori_id">Category Book</label>
                                                            <select name="kategoribuku[]" id="category"  class=" form-control" >
                                                                @foreach ($categories as $item)
                                                                    <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                                                                @endforeach
                                                            </select>
                                                        </a>
                                                        <a class="dropdown-item align-items-center" href="#">
                                                            <label for="sinopsis">Sinopsis</label>
                                                            <input class="form-control"  type="text" style="height: 4rem"  id="sinopsis" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quibusdam quasi minima repellendus earum enim assumenda omnis saepe nobis beatae?" name="sinopsis" required>
                                                        </a>
                                                        <a class="dropdown-item align-items-center" href="#">
                                                            <label for="image">Image Book</label>
                                                            <input type="file" class="form-control mb-1" id="cover" placeholder=" " name="image" >
                                                        </a>
                                                    <a class="dropdown-item d-flex align-items-center mb-2" href="#">
                                                        <button type="submit" class="btn btn-secondary form-control">Update </button>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>

                                       {{----------------------------------------------- delete ------------------------------------------------------}}

                                        <div class="d-flex" href="/{{$item->slug}}">
                                            <a class=" "  id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                <button  class=" btn btn-danger mr-2" href="/{{$item->slug}}">Delete</button>
                                            </a>
                                            <!-- Dropdown - Messages -->
                                            <form action="
                                            {{-- {{ route('category.destroy', $item->slug) }} --}}
                                            {{-- " method="post"  --}}"
                                            >
                                                @csrf
                                                {{-- @method('DELETE') --}}
                                                <div class=" dropdown-menu shadow animated--grow-in p-3" aria-labelledby="messagesDropdown" href="a-category/{{$item->slug}}">
                                                    <h5 class="dropdown-header">
                                                        Are You Sure Want to Delete this Book?
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endsection
