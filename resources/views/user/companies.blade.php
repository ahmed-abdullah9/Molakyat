@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                 <div class="col-md-8">
                        <div class="clearfix"></div>
                                <div class="page-header" style="margin-bottom: 96px;">
                                         <h2 class="float-left">Manage your Company</h2>
                                        <div class="float-right">
                                                <a href="{{route('user.addCompany')}}" title="Add new Company">
                                                        <div style="padding-left: 21px;">
                                                                <img src="https://img.icons8.com/material/48/000000/plus.png">  
                                                        </div>
                                                        <div>Add new Company</div>
                                                </a>                       
                                        </div>
                                        <div class="clearfix"></div>
 
                                </div>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                                <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Activity</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">CR</th>
                                        <th scope="col">Option</th>
                                        </tr>
                                </thead>
                                <tbody>
  
                                        @foreach ($companies as $company)
                                        <tr>
                                                <th scope="row">{{$company->id}}</th>
                                                <td>{{$company->name}}</td>
                                                <td>{{$company->activity}}</td>
                                                <td>{{$company->type}}</td>
                                                <td>{{$company->CR}}</td>
                                                <td> <button class="btn btn-primary" onclick="window.location='{{ url("user/import_excel/$company->id ") }}'">
                                                        Details</button> 
                                                </td>
                                        </tr>
                                    @endforeach
                    
                                </tbody>
                        </table>
                </div>
        </div>
</div>
</div>
@endsection
