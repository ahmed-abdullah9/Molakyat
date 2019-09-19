@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="clearfix"></div>
                <div class="page-header" style="margin-bottom: 96px;">
                    <h2 class="float-right">جميع الشركات</h2>
                    <div class="float-left">
                        {{-- <a href="{{route('companyDetails', ['id' => $companies->id] )}}" title="Add new Company">
                            <div style="padding-left: 21px;">
                                    <img src="https://img.icons8.com/material/48/000000/plus.png">  
                            </div>
                            <div>Add new Company</div>
                        </a>                        --}}
                    </div>
                    <div class="clearfix"></div>
                    {{-- <label class="float-right" for="business_activities"> القطاع</label>                                         --}}
                    <select class="form-control m-bot8 col-md-6" name="business_activities">    
                        @foreach($sectors as $sector)
                            <option value="{{$sector->id}}">{{$sector->name}}</option>
                        @endforeach
                         
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                            <thead>
                                    <tr>
                                    <th scope="col">الشركة</th>
                                    <th scope="col">إجمالي الإيرادات</th>
                                    <th scope="col">تكلفة مبيعات</th>
                                    <th scope="col">دخل آخر</th>
                                    <th scope="col">إجمالي الدخل التشغيلي</th>
                                    <th scope="col">إجمالي مصاريف العمليات</th>
                                    <th scope="col">ربح (خسارة) العمليات</th>
                                    <th scope="col">الربح (الخسارة) قبل الزكاة وضريبة الدخل، العمليات المستمرة</th>
                                    <th scope="col">*العمليات المستمرة</th>
                                    <th scope="col">ربح (خسارة) الفترة من العمليات المستمرة</th>                                    
                                    </tr>
                            </thead>
                            <tbody>

                                    @foreach ($companies as $company)
                                    <tr>
                                            <td>
                                                <a href="{{route('companyDetails', ['id' => $company->id])}}">
                                                        {{$company->name}}</a></td>
                                            @if ($company->getProfitsAndLosses() != null )
                                                <td>{{$company->getProfitsAndLosses()['revenues'] ?? ''}}</td>
                                                <td>{{$company->getProfitsAndLosses()['costOfsales'] ?? '' }}</td>
                                                <td>{{$company->getProfitsAndLosses()['otherIncome'] ?? '' }}</td>
                                                <td>{{$company->getProfitsAndLosses()['totalOperatingIncome'] ?? '' }}</td>
                                                <td>{{$company->getProfitsAndLosses()['totalOperatingExpenses'] ?? ''}}</td>
                                                <td>{{$company->getProfitsAndLosses()['profitOfOperations']  ?? ''}}</td>
                                                <td>{{$company->getProfitsAndLosses()['continuingOperations'] ?? ''}}</td>
                                                <td>{{$company->getProfitsAndLosses()['zakatExpense'] ?? '' }}</td>
                                                <td>{{$company->getProfitsAndLosses()['profitFromContinuousOperations'] ?? '' }}</td>
                                                
                                            @endif
                                    </tr>
                                @endforeach
                
                            </tbody>
                    </table>
                 </div>
        </div>
</div>
</div>
@endsection
