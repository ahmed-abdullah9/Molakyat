
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/global.css') }}" rel="stylesheet">

  <div class="container">
      <div class="row">

          <h2 class="text-md-right col-10"> القوائم المالية</h2>
          @if(Auth::guard('web')->check())
          <button type="button" class="btn btn-primary float-left"  data-toggle="modal" data-target="#exampleModal" >طلب استثمار</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">طلب استثمار</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                            {{ csrf_field() }}
                            <input type="hidden" id="company_id" name="company_id" value="{{$company_id}}"/>
                            <div class="form-group">
                                <label for="description" class="col-form-label right-element"> ملاحظة </label>
                                <textarea class="form-control" id="description" placeholder="اختياري" name="description"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close-tap" data-dismiss="modal">{{$company_id}}</button>
                                <button type="button" id="ajaxSubmit" class="btn btn-primary">إرسال</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
      </div>
          
    <br />
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active show" href="#about" checked data-toggle="tab" >عن الشركة</a>
        <a class="nav-item nav-link" href="#home" checked data-toggle="tab" >مركز مالي غير متداول</a>
        <a class="nav-item nav-link" href="#ready" data-toggle="tab">ربح وخسارة حسب الوظيفة </a>
        <a class="nav-item nav-link" href="#completed" data-toggle="tab">دخل شامل بعد الضريبة </a>
        <a class="nav-item nav-link" href="#allOrder" data-toggle="tab">تدفقات نقدية غير مباشرة </a>
    </nav>

    
    <div id="myTabContent" class="tab-content">

            <div class="tab-pane fade in active show" id="about">
                
            </div>
        <div class="tab-pane fade " id="home">
            <table border="1" class="table table-bordered ">
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
                            <td  class="list">مصاريف مدفوعة مقدما</td>        
                            <td class="list"> إيرادات مستحقة</td>        
                            <td class="list">أعمال تحت التنفيذ ( إيرادات لم يصدر بها فواتير)</td>        
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
                <tr>
                    <td class="list">قائمة الأرباح و الخسائر، حسب وظيفة المصروف، غير الموحدة </td>
                    <td class="list"> إيراد مبيعات بضاعة</td>
                    <td class="list"> إيراد تقديم خدمات</td>
                    <td class="list"> دخل إيجار</td>
                    <td class="list"> إيراد من عقود الإنشاء</td>
                    <td class="list"> دخل تمويل</td>
                    <td class="list"> إيرادات أخرى</td>
                    <td class="list"> تكلفة مبيعات</td>
                    <td class="list"> دخل آخر</td>
                    <td class="list"> مصاريف بيع وتوزيع</td>
                    <td class="list">مصاريف عمومية وإدارية</td>
                    <td class="list"> مصاريف أخرى</td>        
                    <td class="list">  تكلفة تمويل</td>
                    <td class="list"> حصة الشركة في ربح (خسارة) الشركات التابعة</td>
                    <td class="list"> حصة الشركة في ربح (خسارة) شركات زميلة</td>
                    <td class="list"> حصة الشركة في ربح (خسارة) مشاريع مشتركة</td>
                    <td class="list"> مصاريف بحث وتطوير</td>
                    <td class="list"> إيراد من المنح الحكومية</td>
                    <td class="list"> خسارة الهبوط (استرداد خسارة الهبوط) المعترف بها في الربح أو الخسارة، للعقارات، الآلات والمعدات</td>
                    <td class="list"> خسارة الهبوط (استرداد خسارة الهبوط) المعترف بها في الربح أو الخسارة، للموجودات غير المتداولة الأخرى</td>
                    <td class="list"> مصاريف إعادة هيكلة أنشطة المنشأة، معترف بها في الربح أو الخسارة</td>
                    <td class="list"> استرداد مخصصات تكاليف إعادة الهيكلة</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد العقارات، الآلات والمعدات</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد العقارات الاستثمارية</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد الاستثمارات</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد الموجودات الحيوية</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد موجودات استكشاف وتقويم</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد موجودات نفط وغاز</td>
                    <td class="list"> صافي الأرباح (الخسائر) من استبعاد موجودات غير متداولة أخرى</td>
                    <td class="list"> صافي الأرباح (الخسائر) من التسويات القضائية</td>
                    <td class="list"> مصروف الزكاة، العمليات المستمرة</td>
                    <td class="list"> مصروف ضريبة الدخل، العمليات المستمرة</td>
                    <td class="list"> الربح (الخسارة) قبل الزكاة وضريبة الدخل، العمليات المتوقفة </td>
                    <td class="list"> مصروف الزكاة، العمليات المتوقفة </td>
                    <td class="list"> مصروف ضريبة الدخل، العمليات المتوقفة </td>
                    <td class="list"> الربح (الخسارة) الأساسي للسهم من العمليات المستمرة </td>
                    <td class="list"> الربح (الخسارة) الأساسي للسهم من العمليات المتوقفة </td>
                    <td class="list"> الربح (الخسارة) المخفض للسهم من العمليات المستمرة </td>
                    <td class="list"> الربح (الخسارة) المخفض للسهم من العمليات المتوقفة </td>
                    <td class="list"> المتوسط المرجح لعدد الأسهم القائمة </td>
                    <td class="list"> عدد أسهم حقوق الملكية المتداولة في نهاية الفترة</td>
                </tr>
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
                    <tr>
                        <td class="list">قائمة الدخل الشامل الآخر, صافي بعد الضريبة، غير الموحدة </td>
                        <td class="list">أرباح (خسائر) إعادة تقييم عقارات، ممتلكات ومعدات، صافي بعد الضريبة </td>
                        <td class="list">أرباح (خسائر) إعادة تقييم أخرى، صافي بعد الضريبة </td>
                        <td class="list"> أرباح (خسائر) إعادة تقييم برامج المزايا المحددة، صافي بعد الضريبة</td>
                        <td class="list"> حصة الدخل الشامل الآخر من شركات زميلة ومشاريع مشتركة تمت المحاسبة عنها باستخدام طريقة حقوق الملكية التي لن يعاد تصنيفها إلى الربح أو الخسارة، صافي بعد الضريبة</td>
                        <td class="list"> دخل شامل آخر من بنود متفرقة لن يعاد تصنيفها إلى الربح أو الخسارة، صافي بعد الضريبة</td>
                        <td class="list"> أرباح (خسائر) فروقات الترجمة، صافي بعد الضريبة</td>
                        <td class="list"> تعديلات إعادة تصنيف فروقات الترجمة، صافي بعد الضريبة</td>
                        <td class="list">  أرباح (خسائر) إعادة قياس موجودات مالية متاحة للبيع، صافي بعد الضريبة</td>
                        <td class="list"> تعديل إعادة تصنيف موجودات مالية متاحة للبيع بسبب البيع، صافي بعد الضريبة</td>
                        <td class="list"> تعديل إعادة تصنيف موجودات مالية متاحة للبيع بسبب الهبوط في القيمة، صافي بعد الضريبة </td>
                        <td class="list"> أرباح (خسائر) تغطية مخاطر تدفقات نقدية، صافي بعد الضريبة</td>
                        <td class="list"> إعادة تصنيف تغطية مخاطر تدفقات نقدية، صافي بعد الضريبة</td>
                        <td class="list"> أرباح (خسائر) تغطية مخاطر صافي استثمارات في عمليات خارجية، صافي بعد الضريبة</td>
                        <td class="list"> تعديل إعادة تصنيف تغطية مخاطر صافي استثمارات في عمليات خارجية، صافي بعد الضريبة</td>
                        <td class="list"> حصة الدخل الشامل الآخر من شركات زميلة ومشاريع مشتركة تمت المحاسبة عنها باستخدام طريقة حقوق الملكية والتي سيعاد تصنيفها إلى الربح أو الخسارة، صافي بعد الضريبة</td>
                        <td class="list">دخل شامل آخر من بنود متفرقة سيتم إعادة تصنيفها إلى الربح أو الخسارة، صافي بعد الضريبة</td>
                    </tr>
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
                        <tr>
                            <td class="list">قائمة التدفقات النقدية، الطريقة الغير مباشرة، غير الموحدة </td>
                            <td class="list">الربح (الخسارة) قبل الزكاة وضريبة الدخل، العمليات المتوقفة</td>
                            <td class="list"> التعديلات على الاستهلاك والهبوط في قيمة (عكس قيد الهبوط في قيمة) موجودات ملموسة أخرى</td>
                            <td class="list"> التعديلات على الاستهلاك والهبوط في قيمة (عكس قيد الهبوط في قيمة) موجودات غير ملموسة</td>
                            <td class="list"> التعديلات على الاستهلاك والاطفاء، أخرى</td>
                            <td class="list"> التعديلات على خسائر (أرباح) بيع/استبعاد موجودات ملموسة</td>
                            <td class="list"> التعديلات على خسائر (أرباح) بيع/استبعاد موجودات غير ملموسة</td>
                            <td class="list"> التعديلات على خسائر (أرباح) بيع/استبعاد موجودات غير متداولة، أخرى</td>
                            <td class="list"> التعديلات على خسارة الهبوط (عكس خسارة االهبوط) معترف بها في الأرباح أو الخسائر، موجودات ملموسة</td>
                            <td class="list">  التعديلات على خسارة الهبوط (عكس خسارة الهبوط) معترف بها في الأرباح أو الخسائر، موجودات غير ملموسة</td>
                            <td class="list">  التعديلات على خسارة الهبوط (عكس خسارة الهبوط) معترف بها في الأرباح أو الخسائر، أخرى</td>
                            <td class="list">  التعديل على مخصصات، أخرى</td>
                            <td class="list">  التعديلات على فروقات الترجمة</td>
                            <td class="list">  التعديلات على مصروف الفوائد</td>
                            <td class="list">  التعديلات على دخل الفوائد</td>
                            <td class="list">  التعديلات على مصاريف غير نقدية أخرى</td>
                            <td class="list">  التعديلات على دخل غير نقدي آخر</td>
                            <td class="list">  التعديلات الأخرى على بنود غير نقدية</td>
                            <td class="list">  التعديلات الأخرى لتسوية الربح (الخسارة)</td>
                            <td class="list">  التعديلات على النقص (الزيادة) في المخزون</td>
                            <td class="list">  التعديلات على النقص (الزيادة) في المدينين التجاريين و غيرهم</td>
                            <td class="list">  التعديلات على الزيادة (النقص) في الدائنون التجاريين و غيرهم</td>
                            <td class="list">  التعديلات على النقص (الزيادة) في موجودات متداولة أخرى</td>
                            <td class="list">  التعديلات على الزيادة (النقص) في مطلويات متداولة أخرى</td>
                            <td class="list">  توزيعات أرباح مدفوعة، مصنفة كأنشطة تشغيلية</td>
                            <td class="list">  توزيعات أرباح مقبوضة، مصنفة كأنشطة تشغيلية</td>
                            <td class="list">  فوائد مدفوعة، مصنفة كأنشطة تشغيلية</td>
                            <td class="list">  فوائد مقبوضة، مصنفة كأنشطة تشغيلية</td>
                            <td class="list">  مصاريف زكاة مدفوعة ( مستردة) مصنفة كأنشطة تشغيلية</td>
                            <td class="list">  ضرائب دخل مدفوعة ( مستردة) مصنفة كأنشطة تشغيلية</td>
                            <td class="list">  التدفقات النقدية الواردة (الصادرة) الأخرى، المصنفة كأنشطة تشغيلية</td>
                            <td class="list">  التدفقات النقدية الناتجة عن فقدان السيطرة على المنشآت التابعة أو منشآت الأعمال الاخرى</td>
                            <td class="list">  التدفقات النقدية المستخدمة في الحصول على السيطرة على المنشآت التابعة أو منشآت الأعمال الاخرى</td>
                            <td class="list">  المقبوضات النقدية من بيع أدوات حقوق ملكية أو أدوات دين للمنشآت الأخرى</td>
                            <td class="list">  المدفوعات النقدية لاقتناء أدوات حقوق ملكية أو أدوات دين للمنشآت الأخرى</td>
                            <td class="list">  المقبوضات النقدية من بيع الحصص في المشروعات المشتركة</td>
                            <td class="list">  المدفوعات النقدية لشراء الحصص في المشروعات المشتركة</td>
                            <td class="list">  متحصلات من بيع عقارات وآلات ومعدات</td>
                            <td class="list">  شراء عقارات وآلات ومعدات</td>
                            <td class="list">  المقبوضات النقدية من بيع موجودات غير ملموسة</td>
                            <td class="list">  المدفوعات النقدية لشراء موجودات غير ملموسة</td>
                            <td class="list">  المقبوضات النقدية من بيع أو استحقاق أدوات مالية أخرى</td>
                            <td class="list">  المدفوعات النقدية لشراء أدوات مالية أخرى</td>
                            <td class="list">  المقبوضات النقدية من بيع موجودات أخرى طويلة الأجل</td>
                            <td class="list">  شراء موجودات أخرى طويلة الأجل</td>
                            <td class="list">  متحصلات من بيع عقارات استثمارية</td>
                            <td class="list">  شراء عقارات استثمارية</td>
                            <td class="list">  السلف والقروض النقدية المقدمة لأطراف أخرى</td>
                            <td class="list">  المقبوضات النقدية من تسديد السلف والقروض النقدية المقدمة لأطراف أخرى</td>
                            <td class="list">  توزيعات أرباح مستلمة، مصنفة كأنشطة استثمارية</td>
                            <td class="list">  فوائد مستلمة، مصنفة كأنشطة استثمارية</td>
                            <td class="list">  مصاريف زكاة مدفوعة ( مستردة) مصنفة كأنشطة استثمارية</td>
                            <td class="list">  ضرائب دخل مدفوعة ( مستردة) مصنفة كأنشطة استثمارية</td>
                            <td class="list">  التدفقات النقدية الواردة (الصادرة) الأخرى، المصنفة كأنشطة استثمارية</td>
                            <td class="list">  متحصلات من التغير في ملكية الحصص في الشركات التابعة والتي لا تؤدي الى فقدان السيطرة</td>
                            <td class="list">  المدفوعات النقدية من التغير في ملكية الحصص في الشركات التابعة والتي لا تؤدي الى فقدان السيطرة</td>
                            <td class="list">  متحصلات من إصدار أسهم</td>
                            <td class="list">  متحصلات من بيع أو إصدار أسهم خزينة</td>
                            <td class="list">  دفعات لشراء أو استبدال أسهم خزينة</td>
                            <td class="list">  متحصلات من إصدار أدوات حقوق ملكية أخرى</td>
                            <td class="list">  دفعات أدوات حقوق ملكية أخرى</td>
                            <td class="list">  متحصلات من ممارسة خيارات أسهم</td>
                            <td class="list">  متحصلات من سندات دين وقروض لأجل وقروض وصكوك ومرابحات</td>
                            <td class="list">  سداد سندات دين وقروض لأجل وقروض وصكوك ومرابحات</td>
                            <td class="list">  متحصلات من قروض حكومية</td>
                            <td class="list">  دفعات لسداد قروض حكومية</td>
                            <td class="list">  سداد مطلوبات عقود إيجار تمويلية</td>
                            <td class="list">  توزيعات الأرباح المدفوعة لملاك الشركة الأم، مصنفة كأنشطة تمويلية</td>
                            <td class="list">  فوائد مدفوعة، مصنفة كأنشطة تمويلية</td>
                            <td class="list">  مصاريف زكاة مدفوعة ( مستردة) مصنفة كأنشطة تمويلية</td>
                            <td class="list">  ضرائب دخل مدفوعة ( مستردة) مصنفة كأنشطة تمويلية</td>
                            <td class="list">  التدفقات النقدية الواردة (الصادرة) الأخرى، المصنفة كأنشطة تمويلية</td>

                            <td class="list"> أثر تبادل أسعار العملات الأجنبية على التغير في النقد ومعادلاته</td>

                            <td class="list "> النقد ومعادلاته في بداية الفترة</td>
                        </tr>
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

