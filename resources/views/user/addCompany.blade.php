
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
                                        <label class="required" for="cr_number">اسم مستعار للشركة</label>
                                        <input type="text" class="form-control" name="company_name" id="company_name" maxlength="30" value="" data-placeholder="اسم المستعار للشركة ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label class="" for="business_activities">النشاط الرئيسي</label>
                                        <input type="text" class="form-control" name="business_activities" id="business_activities" value="" data-placeholder="النشاط الفرعي">
                                    </div>
                                </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="col-12">
                                        <div class="field">
                                            <label class="required" for="cr_number">رقم السجل التجاري</label>
                                            <input type="text" class="form-control numeric_only" name="cr_number" id="cr_number" maxlength="10" value="" data-placeholder="رقم السجل التجاري">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="field">
                                            <label class="" for="business_type">نوع الشركة</label>
                                            <input type="text" class="form-control" name="business_type" id="business_type" value="" data-placeholder="نوع الشركة">
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
