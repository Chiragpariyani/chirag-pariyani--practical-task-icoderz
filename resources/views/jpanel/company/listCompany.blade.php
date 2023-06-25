@extends('jpanel.layouts.app')
@section('title')
    Companies
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 flash-message">
            <div class="col-sm-3">
                <h5>All COMPANIES</h5>
            </div>
            <div class="col-6 messageArea">
                @include('jpanel/flash-message')
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item ">COMPANIES</li> 
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Company List</h3>
                        <div class="card-tools">
                            <a href="{{route('add.company')}}" class="btn btn-sm btn-secondary bg-side">
                                <i class="fas fa-plus-square"></i> Add New company
                            </a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="DataTable">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Logo</th>
                                    <th>website</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $key =>$company)
                                <tr class="dataRow{{$company->id}}">
                                    <td>{{++$key}}</td>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->email}}</td>
                                    <td><a href="{{asset('/storage/images/icon/'.$company->logo)}}" target="_blank"><img style="width:100px;height:100px" src="{{asset('/storage/images/icon/'.$company->logo)}}" alt="logo"></a></td>
                                    <td>{{$company->website}}</td>
                                    <td>
                                            <a href="{{ route('edit.company',$company->id) }}" class="text-primary" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa-solid fa-edit"></i></a> | 
                                            <a href="{{ route('view.company',$company->id) }}" class="text-success" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa-solid fa-eye "></i></a> | 
                                            <a href="javascript:void(0)" data-id="{{$company->id}}" class="text-danger deleteCompany" id="delete{{$company->id}}" name="delete{{$company->id}}" data-toggle="tooltip" data-placement="top" title="Trash"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->                        
@endsection

@section('scripts')
    @include('jpanel.company.ajax')
@endsection
