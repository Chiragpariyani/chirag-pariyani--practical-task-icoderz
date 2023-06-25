@extends('jpanel.layouts.app')
@section('title')
    Edit Company
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Company</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item ">Edit Company</li>
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
                    <form action="{{ route('update.company',$company->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Company </h3>
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
                                        <input type="text" class="form-control form-control-sm @error('company_name') is-invalid @enderror " id="company_name"
                                            name="company_name" placeholder="Enter company name" value="{{$company->name}}">
                                            @if ($errors->has('company_name'))
                                            <div class="text-danger">{{ $errors->first('company_name') }}</div>
                                        @endif
                                    </div>
                                    {{-- Email  --}}
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control form-control-sm @error('email') is-invalid @enderror " id="email"
                                            name="email" placeholder="Enter Email" value="{{$company->email}}" >
                                            @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    {{-- Website --}}
                                    <div class="form-group col-md-4">
                                        <label for="website">Website</label>
                                        <input type="text" class="form-control form-control-sm @error('website') is-invalid @enderror " id="website"
                                            name="website" placeholder="Enter Website" value="{{$company->website}}" >
                                            @if ($errors->has('website'))
                                            <div class="text-danger">{{ $errors->first('website') }}</div>
                                        @endif
                                    </div>
                                    {{-- Logo  --}}
                                    <div class="form-group col-md-4">
                                        <label for="logo">Change Logo</label>
                                        <input type="file" class="p-0 form-control form-control-sm @error('logo') is-invalid @enderror " id="logo"
                                            name="logo">
                                            @if ($errors->has('logo'))
                                            <div class="text-danger">{{ $errors->first('logo') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="logo">Image</label> <br>
                                      <a href="{{asset('/storage/images/icon/'.$company->logo)}}" target="_blank"><img style="width:100px;height:100px" src="{{asset('/storage/images/icon/'.$company->logo)}}" alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary bg-side btn-block">UPDATE <i
                                        class="fas fa-angle-double-right"></i></button>
                            </div>
                            <!-- /.card-footer-->

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