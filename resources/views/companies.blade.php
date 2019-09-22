@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="clearfix"></div>
                <div class="page-header" style="margin-bottom: 96px;">
                    <h2 class="float-right">جميع الشركات</h2>
                    <div class="float-left">

                    </div>
                    <div class="clearfix"></div>
                    <select class="form-control m-bot8 col-md-6" name="business_activities">    
                        @foreach($sectors as $sector)
                            <option value="{{$sector->id}}">{{$sector->name}}</option>
                        @endforeach
                         
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                            <thead>
                                    <tr style="background-color: #223a42 !important; color: #ccc;">
                                    <th scope="col" style="vertical-align: inherit;">الشركة</th>
                                    <th style="white-space: nowrap; vertical-align: inherit;" scope="col">المبيعات</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">تكلفة المبيعات</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">ايرادات اخرى</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">إجمالي الإيرادات</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">إجمالي المصاريف</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">صافي الدخل من العمليات</th>
                                    <th scope="col" style="vertical-align: inherit;">صافي الدخل قبل الزكاة والضريبة</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">الزكاة والضريبة</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">صافي الدخل</th>                                    
                                    </tr>
                            </thead>
                            <tbody>

                                {{-- <tr> --}}
                                    @foreach ($sectors as $sector)
                                    <tr>
                                        <td colspan="12" style="background: #0092D5 ; color: #fff; text-align: right;">
                                            {{$sector->name}} 
                                        </td>
                                    </tr>
                                        @foreach ($sector->getCompany() as $company)
                                            <tr>
                                                    <td>
                                                        <a href="{{route('companyDetails', ['id' => $company->id])}}">
                                                                {{$company->name}}
                                                        </a>
                                                    </td>
                                                    @if ($company->getProfitsAndLosses() != null )
                                                        <td style="font-size: .875em;">{{$company->getProfitsAndLosses()['revenues'] ?? ''}}</td>
                                                        <td style="font-size: .875em;">{{$company->getProfitsAndLosses()['costOfsales'] ?? '' }}</td>
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
                                    @endforeach
                                {{-- </tr> --}}
                
                            </tbody>
                    </table>
                 </div>
        </div>
</div>
</div>
@endsection
