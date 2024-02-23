@extends('layouts/app')

@section('hal', 'Dashboard')
@section('title', 'Dashboard')
@section('content')
    
<div class="row">
     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2" style="background-color: #FDFCFB">
             <div class="card-body" >
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                             Books</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">1899</div>
                     </div>
                     <div class="col-auto">
                         <i class="fa fa-book fa-2x text-gray-300" aria-hidden="true"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2" style="background-color: #FDFCFB">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Client</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">238</div>
                     </div>
                     <div class="col-auto">
                         <i class="fa fa-users fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2" style="background-color: #FDFCFB">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                              Transaction</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">3434</div>
                      </div>
                      <div class="col-auto">
                          <i class="fa fa-user fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2" style="background-color: #FDFCFB">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Comment</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                     </div>
                     <div class="col-auto">
                         <i class="fa fa-check-square fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Content Row -->

 <div class="row">

    

     <!-- Pie Chart -->
     
             <!-- Card Body -->
             

 <!-- Content Row -->
 <div class="row">
     <div class="col-lg-6 mb-4">

         <!-- Illustrations -->
         <div class="card shadow mb-4">
             <div class="card-header py-3" style="background-color: #fdfcfb">
                 <h6 class="m-0 font-weight-bold " style="color: #1c1a1b">Library Data</h6>
             </div>
             <div class="card-body" >
                 {{-- <div class="text-center">
                     <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                         src="img/undraw_posting_photo.svg" alt="...">
                 </div> --}}
                 <dl class="row">
                    <dt class="col-sm-3">Library Address</dt>
                    <dd class="col-sm-9">Jl. Cimanuk No.309A, Sukagalih, Kec. Tarogong Kidul, <br> Kabupaten Garut, Jawa Barat 44151, <br> Jawa Barat</dd>
                  
                    <dt class="col-sm-3">Telp. number</dt>
                    <dd class="col-sm-9">(021) 80643104</dd>
                  
                    <dt class="col-sm-3">Opening hours</dt>
                    <dd class="col-sm-9">Senin  10.00–21.00 <br>
                         Selasa 10.00–21.00 <br>
                         Rabu	  10.00–21.00 <br> 
                         Kamis  10.00–21.00 <br>
                         Jumat  10.00–11.30 <br>
                         Sabtu  10.00–21.00</dd>
                    
                    <dt class="col-sm-3">Visi</dt>
                    <dd class="col-sm-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat adipisci voluptatibus voluptate mollitia. Ullam blanditiis atque esse recusandae explicabo culpa.</dd>
                    
                  </dl>
             </div>
         </div>

         <!-- Approach -->


     </div>
 </div>
 @endsection
