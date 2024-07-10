@extends('admin.navbar')

@section('titleAdmin', 'dashboard')

@section('page')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        
        
         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="/dashUser">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Pengguna</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="/dashAlphabet">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Abjad</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-font fa-2x text-gray-300"></i> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
       
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="/dashWord">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Kata Sederhana</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-file-word fa-2x text-gray-300"></i> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <a href="/dashTestimoni">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Testimoni</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comment-dots fa-2x text-gray-300"></i> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="/dashContact">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Kontak Kami</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-address-book fa-2x text-gray-300"></i> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
  
  
       
    </div>
    </div>

@endsection
