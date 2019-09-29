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
                    <select class="form-control m-bot8 col-md-6" name="business_activities" onchange="location = this.value;">    
                        <option value="{{ url('/') }}">كل السوق</option>
                        @foreach($allSectors as $sector)
                            @if ($sector->id == Request::get('sector'))
                                <option selected="selected" value="{{ url('/home?sector=' . $sector->id) }}">{{$sector->name}}</option>
                            @else
                                <option  value="{{ url('/home?sector=' . $sector->id) }}">{{$sector->name}}</option>
                            @endif
                        @endforeach
                         
                    </select>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                            <thead>
                                    <tr style="background-color: #223a42 !important; color: #ccc;">
                                    <th scope="col" style="vertical-align: inherit;">الشركة</th>
                                    <th style="white-space: nowrap; vertical-align: inherit; text-align: center;" scope="col">المبيعات</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">تكلفة المبيعات</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">ايرادات اخرى</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">إجمالي الإيرادات</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">إجمالي المصاريف</th>
                                    <th scope="col" style="white-space: nowrap; vertical-align: inherit;">صافي الدخل<br> من العمليات</th>
                                    <th scope="col" style="vertical-align: inherit;text-align: center;">صافي الدخل <br> قبل الزكاة والضريبة</th>
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
                                                        @if (!empty($company->getProfitsAndLosses()['revenues']))
                                                            <td>{{ number_format($company->getProfitsAndLosses()['revenues'], 2)}}</td>    
                                                        @else
                                                               <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['costOfsales']))
                                                            <td>{{number_format($company->getProfitsAndLosses()['costOfsales'], 2)}}</td>
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['otherIncome'] ))
                                                            <td>{{number_format($company->getProfitsAndLosses()['otherIncome'], 2)}}</td>
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['totalOperatingIncome']))
                                                            <td>{{number_format($company->getProfitsAndLosses()['totalOperatingIncome'], 2)}}</td>
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['totalOperatingExpenses']))
                                                            <td>{{number_format($company->getProfitsAndLosses()['totalOperatingExpenses'], 2)}}</td>
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['profitOfOperations']))
                                                            <td>{{number_format($company->getProfitsAndLosses()['profitOfOperations'], 2)}}</td>
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['continuingOperations']))
                                                            <td>{{number_format($company->getProfitsAndLosses()['continuingOperations'], 2)}}</td>
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['zakatExpense']))
                                                            <td>{{number_format($company->getProfitsAndLosses()['zakatExpense'], 2)}}</td>  
                                                        @else
                                                            <td>-</td> 
                                                        @endif

                                                        @if (!empty($company->getProfitsAndLosses()['profitFromContinuousOperations']))
                                                            
                                                            <td>{{number_format($company->getProfitsAndLosses()['profitFromContinuousOperations'], 2)}}</td>  
                                                        @else
                                                            <td>-</td> 
                                                        @endif
                                                        
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
