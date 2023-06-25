@extends('jpanel.layouts.app')
@section('title')
    Company Details
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item ">Company Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row flash-message">
                <div class="col-12">
                    @include('jpanel/flash-message')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <!-- Profile Update box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Company Details </h3>
                                <div class="card-tools">
                                    <a href="{{ route('company') }}" class="bg-side btn btn-sm btn-secondary bg-pcb">
                                        <i class="fas fa-eye"></i> View All Companies
                                    </a>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    {{-- Company Name  --}}
                                    <div class="form-group col-md-4">
                                        <label for="company_name">Company Name</label>
                                        <p>{{$company->name}}</p>
                                    </div>
                                    {{-- Email  --}}
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <p>{{$company->email}}</p>
                                    </div>
                                    {{-- Website --}}
                                    <div class="form-group col-md-4">
                                        <label for="website">Website</label>
                                        <p>{{$company->website}}</p>
                                    </div>
                                    {{-- Logo  --}}
                                    <div class="form-group col-md-4">
                                        <label for="logo">Logo</label> <br>
                                      <a href="{{asset('/storage/images/icon/'.$company->logo)}}" target="_blank"><img style="width:100px;height:100px" src="{{asset('/storage/images/icon/'.$company->logo)}}" alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    @include('jpanel.company.ajax')
@endsection