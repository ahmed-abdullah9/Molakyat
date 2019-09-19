
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('إضافة شركة') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.postAddCompany') }}">
                        @csrf 
                        
                        <div class="row row-spacer">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="col-12">
                                    <div class="field">
                                        <label class="required" for="company_name">اسم الشركة</label>
                                        <input type="text" class="form-control numeric_only" name="company_name" id="company_name" maxlength="10" value="" data-placeholder="اسم الشركة">
                                    </div>
                                    </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label class="" for="business_activities">القطاع</label>                                        
                                        <select class="form-control m-bot12 col-md-12" name="business_activities">    
                                            @foreach($sectors as $sector)
                                                <option value="{{$sector->id}}">{{$sector->name}}</option>
                                            @endforeach
                                             
                                        </select>
                                    </div>
                                </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="col-12">
                                        <div class="field">
                                            <label class="required" for="company_username">اسم مستعار للشركة</label>
                                            <input type="text" class="form-control" name="company_username" id="company_username" maxlength="30" value="" data-placeholder="اسم المستعار للشركة ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0" style="padding-top: 26px;">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('إضافة شركة') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
