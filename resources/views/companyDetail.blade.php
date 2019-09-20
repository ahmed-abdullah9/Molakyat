
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/global.css') }}" rel="stylesheet">

  <div class="container">
    <h2> القوائم المالية</h2>
    <br />
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active show" href="#home" checked data-toggle="tab" >مركز مالي غير متداول</a>
        <a class="nav-item nav-link" href="#ready" data-toggle="tab">ربح وخسارة حسب الوظيفة </a>
        <a class="nav-item nav-link" href="#completed" data-toggle="tab">دخل شامل بعد الضريبة </a>
        <a class="nav-item nav-link" href="#allOrder" data-toggle="tab">تدفقات نقدية غير مباشرة </a>
    </nav>

    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active show" id="home">
            <table border="1" class="table table-bordered">
                    <tr>
                        <td class="list">قائمة المركز المالي، متداول/ غير متداول، غير الموحدة </td>
                            <td class="list"> النقد وأرصدة لدى البنوك</td>
                            <td class="list">ودائع قصيرة الأجل (غير مصنفة ضمن النقد ومعادلات النقد) </td>

                            <td class="list">موجودات مالية بغرض المتاجرة، متداولة</td>
                            
                            <td class="list">
                                موجودات مالية متاحة للبيع، متداولة
                            </td>

                            <td class="list">
                               استثمارات محتفظ بها بغرض الاستحقاق، متداولة
                            </td>
                            <td class="list">
                               موجودات مالية أخرى، متداولة
                            </td>    
                            <td class="list">
                                المبالغ المستحقة من المدينيين التجاريين وغيرهم

                            </td>        
                            <td class="list">
                                دفعات مقدمة للموردين والمقاولين، متداولة

                            </td>        
                            <td class="list">
                               مدينون عقود إيجار تمويلي، متداولة

                            </td>        
                            <td class="list">
                                إيجار مستحق القبض

                            </td>             
                            <td>
                               مصاريف مدفوعة مقدما

                            </td>        
                            <td class="list">
                              إيرادات مستحقة

                            </td>        
                            <td class="list">
                               أعمال تحت التنفيذ ( إيرادات لم يصدر بها فواتير)

                            </td>        
                            <td class="list">
                                    أرصدة مستحقة من جهات ذات علاقة، متداولة
                            </td>  
                            <td class="list">
                                    أدوات / موجودات مالية مشتقة، متداولة
                            </td>  
                            <td class="list">المخزون</td>  
                            <td class="list">موجودات حيوية، متداولة</td>  
                            <td class="list">موجودات برامج، متداولة</td> 
                            <td class="list">صافي موجودات منافع موظفين محددة، متداولة
                            </td> 
                            <td class="list">
                                    موجودات متداولة أخرى
                            </td> 
                            <td class="list">
                                    موجودات زكاة
                            </td> 
                            <td class="list">
                                    موجودات ضريبة دخل
                            </td> 
                            <td class="list">
                                موجودات غير متداولة أو مجموعات استبعاد متاحة للبيع أو التوزيع للملاك
                            </td>

                            <td class="list">موجودات مالية متاحة للبيع، غير متداولة</td>

                            <td class="list">استثمارات محتفظ بها للاستحقاق، غير متداولة</td>

                            <td class="list">موجودات مالية أخرى، غير متداولة</td>
                            <td class="list">ودائع طويلة الأجل</td>
                            
                            <td class="list">دفعات مقدمة للموردين والمقاولين، غير متداولة</td>
                            
                            <td class="list">مدينون عقود إيجار تمويلي، غير متداولة</td>

                            <td class="list">العقارات والآلات والمعدات</td>
                            
                            <td class="list">موجودات استكشاف وتقويم</td>
                            <td class="list">موجودات متعلقة بالنفط والغاز</td>
                            <td class="list">موجودات حيوية، غير متداولة</td>
                            <td class="list">موجودات بموجب عقود إيجار تمويلية</td>
                            <td class="list">شهرة</td>
                            <td class="list">موجودات غير ملموسة باستثناء الشهرة</td>
                            <td class="list">أدوات / موجودات مالية مشتقة، غير متداولة</td>
                            <td class="list">العقارات الاستثمارية</td>
                           <td class="list"> استثمارات في شركات زميلة</td>
                            <td class="list">استثمارات في مشاريع مشتركة</td>
                            <td class="list">استثمارات في شركات تابعة</td>
                            <td class="list">استثمارات في غير شركات تابعة، زميلة ومشاريع مشتركة</td>
                           <td class="list"> موجودات ضريبية مؤجلة</td>
                           <td class="list"> موجودات برامج، غير متداولة</td>
                           <td class="list"> صافي موجودات منافع موظفين محددة، غير متداولة</td>
                           <td class="list"> أرصدة مستحقة من جهات ذات علاقة، غير متداولة</td>
                           <td class="list"> موجودات غير متداولة أخرى</td>
                           <td class="list"> مخصص منافع موظفين أخرى، متداولة</td>
                           <td class="list">مخصصات أخرى، متداولة </td>

                            <td class="list">مطلوبات مالية بغرض المتاجرة، متداولة</td>
                            <td class="list">مطلوبات مالية أخرى، متداولة</td>
                            <td class="list">سندات دين وقروض لأجل وقروض وصكوك مصدرة، متداولة</td>
                            <td class="list">قروض حكومية، متداولة</td>
                            <td class="list">قروض مساندة، متداولة</td>
                            <td class="list">حسابات مكشوفة لدى البنوك</td>
                            <td class="list">مبالغ مستحقة للدائنين التجاريين وغيرهم</td>
                            <td class="list">ذمم محتجزات دائنة</td>
                            <td class="list">مصاريف مستحقة الدفع</td>
                            <td class="list">مطلوبات عقود إيجار تمويلي، متداولة</td>
                            <td class="list">أرصدة مستحقة إلى جهات ذات علاقة، متداولة</td>
                            <td class="list">ودائع / دفعات مقدمة من عملاء، متداولة</td>
                            <td class="list">منح حكومية، متداولة</td>
                            <td class="list">إيرادات مؤجلة، متداولة</td>
                            <td class="list">توزيعات أرباح مستحقة</td>
                            <td class="list">امتيازات مستحقة</td>
                            <td class="list">أدوات / مطلوبات مالية مشتقة، متداولة</td>
                            <td class="list">مرابحات، متداولة</td>
                            <td class="list">صافي مطلوبات منافع موظفين محددة، متداولة</td>
                            <td class="list">مطلوبات متداولة أخرى</td>
                            <td class="list">التزامات زكاة</td>
                            <td class="list">التزامات ضريبة دخل</td>
                            <td class="list">مطلوبات مرتبطة مباشرة بموجودات أو مجموعات استبعاد متاحة
                                 للبيع أو التوزيع للملاك</td>

                            <td class="list">مخصصات منافع موظفين أخرى طويلة الأجل، غير متداولة</td>
                            <td class="list">مخصصات أخرى، غير متداولة</td> 
                            <td class="list"> سندات دين وقروض لأجل وقروض وصكوك مصدرة، غير متداولة</td>
                            <td class="list"> قروض حكومية، غير متداولة</td>
                            <td class="list"> قروض ثانوية، غير متداولة</td>
                            <td class="list"> مطلوبات مالية أخرى، غير متداولة</td>
                            <td class="list"> صافي مطلوبات منافع موظفين محددة، غير متداولة</td>
                            <td class="list"> مطلوبات عقود إيجار تمويلي، غير متداولة</td>
                            <td class="list"> مطلوبات ضريبية مؤجلة</td>
                            <td class="list"> منح حكومية، غير متداولة</td>
                            <td class="list"> إيرادات مؤجلة، غير متداولة</td>
                            <td class="list"> أدوات / مطلوبات مالية مشتقة، غير متداولة</td>
                            <td class="list"> مرابحات، غير متداولة</td>
                            <td class="list"> ودائع / دفعات مقدمة من عملاء، غير متداولة</td>
                            <td class="list"> أرصدة مستحقة إلى جهات ذات علاقة، غير متداولة</td>
                            <td class="list"> مطلوبات غير متداولة أخرى</td>

                            <td class="list">رأس المال</td> 
                            <td class="list">علاوة إصدار</td> 
                            <td class="list">أسهم خزينة</td> 
                            <td class="list">احتياطي نظامي</td> 
                            <td class="list">احتياطي عام</td> 
                            <td class="list">أرباح مبقاة (خسائر متراكمة)</td> 
                            <td class="list">رأس المال الإضافي</td> 
                            <td class="list">عناصر أخرى لحقوق الملكية</td> 

                           <td class="list"> احتياطي إعادة تقييم موجودات</td>
                            <td class="list">احتياطي فروقات ترجمة عملات أجنبية</td>
                            <td class="list">احتياطي تغطية مخاطر تدفقات نقدية</td>
                            <td class="list">احتياطي أدوات مالية متاحة للبيع</td>
                            <td class="list">احتياطي الدفعات المحسوبة على أساس الأسهم</td>
                            <td class="list">احتياطي إعادة تقييم برامج المنافع المحددة</td>
                           <td class="list"> احتياطي موجودات غير متداولة أو مجموعات استبعاد متاحة للبيع أو التوزيع للملاك</td>
                           <td class="list">احتياطيات متنوعة</td>
                        </tr>
                @foreach($FinancialCenter as $fin)
                <tr>
                    @foreach ($fin as $key => $value)
                    <td class="list">{{$value}}</td>
                    @endforeach
                </tr>
                @endforeach
          </table>
        </div>

        <div class="tab-pane fade" id="ready">
            <table class="table table-bordered">
                    @foreach($ProfitsAndLosses as $fin)
                    <tr>
                        @foreach ($fin as $key => $value)
                        <td class="list">{{$value}}</td>
                        @endforeach
                    </tr>
                    @endforeach
            </table>
        </div>
        <div class="tab-pane fade" id="completed">
            <table class="table table-bordered">
                @foreach($ComprehensiveIncome as $fin)
                    <tr>
                        @foreach ($fin as $key => $value)
                        <td class="list">{{$value}}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="tab-pane fade" id="allOrder">
                <table class="table table-bordered">
                    @foreach($IndirectCashFlows as $fin)
                        <tr>
                            @foreach ($fin as $key => $value)
                            <td class="list">{{$value}}</td>
                            @endforeach
                        </tr>
                    @endforeach
    
                  </table>
            </div>        
      </div>
  </div>
  
  @endsection

