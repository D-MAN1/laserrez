<!DOCTYPE html>

<html lang="ru">
  <meta name="language" content="Russian">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="img/logo.jpg">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:description" content="">

  <title>КАЛЬКУЛЯТОР ЛАЗЕРНОЙ РЕЗКИ</title>
 

  <link href="{{ asset('/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css">
 <link href="{{ asset('/css/style.css') }} " rel="stylesheet" type="text/css">
  <link href="img/favicon.ico" rel="icon">
</head>
<body>
 <style type="text/css">
     .header-image:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,.57);
  z-index: 2;
}
 </style>
    <!-- Responsive navbar-->
    
    @include('layouts.menu')
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full header-image" style="background-image: url('/images/layout/i.webp')">
        <noindex>
            <div class="header-text">
                <div class="pb-4 mx-5 d-flex flex-wrap align-items-baseline">
                    <div><span class="h5 text-primary">Tелефоны:</span></div>          
                    <div><a class="m-4"  rel="nofollow" title="Телефон компании «LazerSrez»" style="text-decoration: none; color:#fff" href="tel:+79956582606">7 (995) 658-26-06</a></div> 
                    <div>            
                        <a class="m-4 me-0" rel="nofollow" title="Телефон компании «LazerSrez»" style="text-decoration: none; color:#fff" href="tel:+79299173173"> 7 (929) 9-173-173 </a>
                        <a rel="nofollow" title="Viber компании «LazerSrez»" href="viber://chat?number=%2B79299173173"><img class="mb-3" src="/images/layout/viber.png" alt="Viber компании «LazerSrez»"></a>
                    </div>   
                    <div>      
                        <a rel="nofollow" class="m-4 me-0" title="Телефон компании «LazerSrez»" style="text-decoration: none; color:#fff" href="tel:+79252416535"> 7 (925) 241-65-35 </a> 
                        <a rel="nofollow" title="Whatsapp компании «LazerSrez»" href="https://api.whatsapp.com/send?phone=79689151230"><img class="mb-3" src="/images/layout/whatsapp.png" alt="Whatsapp компании «LazerSrez»"></a>
                    </div>
                </div>
            </div>
        </noindex>    
        <div class="text-center my-5 header-text">
            <h1 class="text-white fs-3 fw-bolder">Калькулятор лазерной резки / Цены на лазерную резку</h1>
            <p class="mb-0 mx-5 text-end text-info">Дорогие друзья!<br> Если Вы находитесь на этой странице– значит, Вам необходима лазерная резка!<br> Поздравляем Вас: Вы нашли то, что искали!</p>
            
        </div>
        <p class="text-white-50 mb-0 mx-5 header-text">Лазерная резка ткани, фетра, кожи, фанеры, картона, оргстекла и акрила</p>
    </header>
    <!-- Content section-->
    <div class="container my-5">
        <div class="alert">
            <h2>Лазерная резка</h2>
            <p class="lead">Уважаемые коллеги! Ниже Вы найдёте специальный калькулятор по лазерной резке, который поможет Вам определиться с расчетами нашей услуги. При помощи этого калькулятора по лазерной резке Вы сможете с достаточно высокой точностью рассчитать стоимость конечного изделия. Стоимость лазерной резки будет зависеть как от самого выбранного Вами материала, его толщины, так и от необходимого Вам количества. Использовать калькулятор лазерной резки очень просто. Выбираете длину реза- это длина линии, которую будет прожигать лазер; далее в поле площадь вводите размеры Вашей детали и выбирайте тот материал для лазерной резки, который соответствует Вашим запросам.</p>
            <p class="mb-0">Если у Вас появятся дополнительные вопросы– наши менеджеры всегда с готовностью на них ответят. Компания LazerSrez – всегда к Вашим услугам!</p>
        </div>
        <div class="alert mb-0">
            <h3>Калькулятор стоимости лазерной резки</h3>
            <p>Для удобства можете указывать длину в сантиметрах или метрах, размеры - в миллиметрах или сантиметрах, величины автоматически будут конвертироваться в соседних столбцах.</p>
        </div>
    </div>    
    <div class="container">
        <table style="display: none;">
            <tr class='n'>
                <td>Материал</td>
                <td>thickness</td>
                <td>Стоимость кв.мм, руб.</td>
                <td>Скорость реза мм/мин</td>
                <td>Стоимость метра реза</td>
            </tr>

            @php 
            $i = 0 
            @endphp
            @foreach ($materials as $materials_)
            <tr class='n'>
                <td>{{(array_keys($materials)[$i])}}
                    <input type='hidden' id='delmat0' value='2250000'>
                </td>
                <td>152×152 см</td>
                <td>мм/мин</td>
            </tr>
            
                @foreach ($materials_ as $material)
            <tr id='mat0-0'>
                <td>{{$material->name}}</td>
                <td>
                    <input type=number min=0 value='{{$material->thickness}}'>
                </td>
                <td>
                    <input type=number min=0 value='{{$material->price_material}}'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='{{$material->speed}}'>
                </td>
        
                <td>
                    <input type=number min=0 class='mprice' value='{{$material->price_rez}}'>
                </td>
            </tr>
               
           
                @endforeach
               
            @php 
            $i++ 
            @endphp
            @endforeach
        </table>

         
<div class="row">        
    <div id='calc' class="mb-2 col-md-12 col-lg-6 alert-info  px-4">
        <div class='mt-2 border border-light'>
            <div class='d-flex align-items-center ms-lg-3 ms-md-2'>
                <div class='h5 w-25'>Длина реза</div>
                <div class='align-items-center d-flex flex-column s'>
                    <div class="">см &nbsp;</div>
                    <div class="text-center">
                        <input style="width: 45%;min-width:50px;border: none;" class="text-center" type=number min=0 value='100' id='sm'>
                    </div>
                    <div class="text-white">.</div>
                </div>    
                <div class='align-items-center d-flex flex-column w-50 s'>
                    <div class="">м&nbsp; </div>
                    <div class="text-center">
                        <input style="width: 45%;min-width:50px;border: none;" class="text-center" type=number min=0 value='' id='m'>
                    </div>    
                    <div class="text-white">.</div>
                </div>
            </div>
        </div>
        <div class='mt-2 border border-light'>
        
            <div class='d-flex align-items-center ms-lg-3 ms-md-2'>
                <div class='text-center h5'>Площадь</div>
                <div class='align-items-center d-flex flex-column s'>
                    <div class="">мм</div>
                    <div class="text-center">
                        <input style="width: 35%;min-width:50px;border: none;" class="text-center" type=number min=0 value='300' id='mm1'>×<input style="width: 35%;min-width:50px;border: none;" class="text-center" type=number min=0 value='400' id='mm2'>
                    </div>
                    <div id='sqr1'  class='w-100 text-center'></div>
                </div>
                <div class='align-items-center d-flex flex-column s'>
                    <div class="">cм</div>
                    <div class="text-center">
                         <input style="width: 35%;min-width:50px;border: none;" class="text-center" type=number min=0 value='' id='sm1'>×<input style="width: 35%;min-width:50px;border: none;" class="text-center" type=number min=0 value='' id='sm2'>
                    </div>
                     <div id='sqr2'  class='w-100 text-center'></div>     
                </div>
            </div>           
        </div>

        <div class='dl'>
            <div ></div>
            
        </div>

        <div id='mat'  class="row p-2">
            <div class="col-6 border border-light pb-2">
            <div class='h5'>Материал</div>
            
            @php 
            $i = 0 
            @endphp

            @foreach ($materials as $materials_)
                <div class='d-flex flex-row justify-content-between line border alert-success @if ($i == 0 ) bg-info @endif'>
                   

                    <input class="m-2" type="radio" name="materials" value='0' id='mat{{$i}}'
                     @if ($i == 0 ) checked @endif>
                   
            
                    <label style="line-height: 2;" for='mat{{$i}}'>{{(array_keys($materials)[$i])}}</label>
                    <select class='mat2 w-50 alert-success @if ($i == 0 ) bg-info @endif border-0' id='mat{{$i}}h'>
                        @foreach ($materials_ as $material)
                        <option value=0 
                        data-h="{{$material->thickness}}"
                        data-price_mat="{{$material->price_material}}"
                        data-speed="{{$material->speed}}"
                        data-price_rez="{{$material->price_rez}}">{{$material->thickness}} мм</option>
                         @endforeach
               
             
                    </select>
                </div>
                @php 
            $i++ 
            @endphp
            @endforeach
            </div>
            <div class="col-6 border border-light pb-2 d-flex flex-column  justify-content-center">
                Скорость реза
                <b id='r1'>
                </b> мм/мин.<hr>
                Цена
                <b id='r2'>
                </b> руб. за метр  реза<hr>
                Время реза
                <b id='r3'>
                </b>
                мин
            </div>
        </div>
        <div class='check' style="display: none;">
            <div class='n'>Покраска</div>
            <div>
                <input type='checkbox' name='' id='kras'>
            </div>
        </div>
        <div class='check' style="display: none;">
            <div class='n'>Мелкие детали</div>
            <div>
                <input type='checkbox' name='' id='melk'>
            </div>
        </div>
    </div> 
     
    <div class="mb-2 col-md-12 col-lg-6 alert-dark px-4 d-flex flex-column justify-content-center"> 
        <div class="h5 border">
             <div class="p-4 text-center h3">Результат</div>
            <div class="d-flex justify-content-between p-4  mt-2 border m-auto">
                <div class="d-inline-block">Стоимость материала / руб</div>
                <div class="d-inline-block  bg-light p-2" id="res1"></div>
            </div>
            <div class="d-flex justify-content-between p-4 mt-2 border m-auto">
                <div class="d-inline-block">Стоимость реза / руб</div>
                <div class="d-inline-block text-light bg-secondary p-2"  id="res2"></div>
            </div>
            <div class="d-flex justify-content-between p-4 mt-2 border m-auto">
                <div class="d-inline-block">Материал + резка / руб</div>
                <div class="d-inline-block bg-primary p-2" id="res4"></div>
            </div>
            
        </div>    
    </div>
</div>
<hr>
    

        <div id='set1' style="display: none;">
          <table>
            <tr class='n'>
                <td>Дополнительные опции</td>
                <td>Увеличение стоимости, %</td>
            </tr>
            <tr>
                <td>Прибавление к стоимости материала</td>
                <td>
                    <input type=number min=0 max=100 value='30'>
                </td>
            </tr>
            <tr>
                <td>Покраска</td>
                <td>
                    <input type=number min=0 max=100 value='100'>
                </td>
            </tr>
            <tr>
                <td>Много мелких деталей</td>
                <td>
                    <input type=number min=0 max=100 value='20'>
                </td>
            </tr>
            <tr>
                <td>Оптовая скидка</td>
                <td>
                    <input type=number min=0 max=100 value='30'>
                </td>
            </tr>
            <tr class='n'>
                <td>Дополнительные опции</td>
                <td>Стоимость, руб</td>
            </tr>
            <tr>
                <td>Стекло</td>
                <td>
                    <input type=number min=0 value='30'>
                </td>
            </tr>
            <tr>
                <td>Оснастка для фоторамки</td>
                <td>
                    <input type=number min=0 value='70'>
                </td>
            </tr>
        </table>

        <table>
            <tr class='n'>
                <td>Материал</td>
                <td>Стоимость листа, руб.</td>
                <td colspan=2>Скорость реза</td>
                <td rowspan=2>Стоимость метра реза</td>
            </tr>
            <tr class='n'>
                <td>Фанера
                    <input type='hidden' id='delmat0' value='2250000'>
                </td>
                <td>152×152 см</td>
                <td>мм/мин</td>
                <td>мм/сек</td>
            </tr>
            <tr id='mat0-0'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='430'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2100'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='9.8'>
                </td>
            </tr>
            <tr id='mat0-1'>
                <td>4 мм</td>
                <td>
                    <input type=number min=0 value='470'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='13.4'>
                </td>
            </tr>
            <tr id='mat0-2'>
                <td>6 мм</td>
                <td>
                    <input type=number min=0 value='570'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='720'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='27.8'>
                </td>
            </tr>
            <tr id='mat0-3'>
                <td>8 мм</td>
                <td>
                    <input type=number min=0 value='750'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='480'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='41.8'>
                </td>
            </tr>
            <tr id='mat0-4'>
                <td>10 мм</td>
                <td>
                    <input type=number min=0 value='870'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='300'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='66.7'>
                </td>
            </tr>
            <tr id='mat0-5'>
                <td>12 мм</td>
                <td>
                    <input type=number min=0 value='1220'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='250'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='96'>
                </td>
            </tr>
            <tr id='mat0-6'>
                <td>Шпон</td>
                <td>
                    <input type=number min=0 value='300'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='10'>
                </td>
            </tr>
            <tr class='n'>
                <td>Доска<input type='hidden' id='delmat1' value='700000'>
                </td>
                <td>200×35 см</td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat1-0'>
                <td>10 мм</td>
                <td>
                    <input type=number min=0 value='890'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='380'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='49.8'>
                </td>
            </tr>
            <tr class='n'>
                <td>Акрил<input type='hidden' id='delmat2' value='2250000'>
                </td>
                <td>150×200 см</td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat2-0'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='1800'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='10'>
                </td>
            </tr>
            <tr id='mat2-1'>
                <td>1.5 мм</td>
                <td>
                    <input type=number min=0 value='2600'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1600'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='13.4'>
                </td>
            </tr>
            <tr id='mat2-2'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='3200'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1200'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='16.7'>
                </td>
            </tr>
            <tr id='mat2-3'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='2557'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1080'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='18.6'>
                </td>
            </tr>
            <tr id='mat2-4'>
                <td>4 мм</td>
                <td>
                    <input type=number min=0 value='4320'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='940'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='21.3'>
                </td>
            </tr>
            <tr id='mat2-5'>
                <td>5 мм</td>
                <td>
                    <input type=number min=0 value='6085'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='800'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='25'>
                </td>
            </tr>
            <tr id='mat2-6'>
                <td>6 мм</td>
                <td>
                    <input type=number min=0 value='7302'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='660'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='30.4'>
                </td>
            </tr>
            <tr id='mat2-7'>
                <td>7 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='350'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='57.2'>
                </td>
            </tr>
            <tr id='mat2-8'>
                <td>8 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='300'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='66.7'>
                </td>
            </tr>
            <tr id='mat2-9'>
                <td>9 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='280'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='71.4'>
                </td>
            </tr>
            <tr id='mat2-10'>
                <td>10 мм</td>
                <td>
                    <input type=number min=0 value='18250'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='250'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='80'>
                </td>
            </tr>
            <tr class='n'>
                <td>Фетр<input type='hidden' id='delmat3' value='3000000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat3-0'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='10'>
                </td>
            </tr>
            <tr id='mat3-1'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='12'>
                </td>
            </tr>
            <tr id='mat3-2'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='14'>
                </td>
            </tr>
            <tr class='n'>
                <td>Кожа<input type='hidden' id='delmat4' value='3000000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat4-0'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='15'>
                </td>
            </tr>
            <tr id='mat4-1'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='20'>
                </td>
            </tr>
            <tr id='mat4-2'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='30'>
                </td>
            </tr>
            <tr id='mat4-3'>
                <td>4 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='40'>
                </td>
            </tr>
            <tr class='n'>
                <td>Картон<input type='hidden' id='delmat5' value='3000000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat5-0'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='3000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='8'>
                </td>
            </tr>
            <tr id='mat5-1'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='12'>
                </td>
            </tr>
            <tr id='mat5-2'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='15'>
                </td>
            </tr>
            <tr id='mat5-3'>
                <td>Бумага</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='3000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='10'>
                </td>
            </tr>
            <tr class='n'>
                <td>Гофрокартон<input type='hidden' id='delmat6' value='3000000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat6-0'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='282'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='3000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='12'>
                </td>
            </tr>
            <tr id='mat6-1'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='220'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='3000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='12'>
                </td>
            </tr>
            <tr class='n'>
                <td>ПЭТ<input type='hidden' id='delmat7' value='2562500'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat7-0'>
                <td>0.5 мм</td>
                <td>
                    <input type=number min=0 value='484'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='10'>
                </td>
            </tr>
            <tr id='mat7-1'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='951'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='10'>
                </td>
            </tr>
            <tr id='mat7-2'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='2000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='15'>
                </td>
            </tr>
            <tr id='mat7-3'>
                <td>3 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='20'>
                </td>
            </tr>
            <tr id='mat7-4'>
                <td>4 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='30'>
                </td>
            </tr>
            <tr class='n'>
                <td>Всп.ПЭТ<input type='hidden' id='delmat8' value='1500000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat8-0'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='85'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='3000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='6.8'>
                </td>
            </tr>
            <tr id='mat8-1'>
                <td>8 мм</td>
                <td>
                    <input type=number min=0 value='390'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1440'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='13.9'>
                </td>
            </tr>
            <tr id='mat8-2'>
                <td>20 мм</td>
                <td>
                    <input type=number min=0 value='400'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='300'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='66.8'>
                </td>
            </tr>
            <tr class='n'>
                <td>Пенопласт<input type='hidden' id='delmat9' value='3000000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat9-0'>
                <td>10 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1000'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='20'>
                </td>
            </tr>
            <tr id='mat9-1'>
                <td>20 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='40'>
                </td>
            </tr>
            <tr id='mat9-2'>
                <td>30 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='300'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='66.8'>
                </td>
            </tr>
            <tr id='mat9-3'>
                <td>40 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='200'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='100'>
                </td>
            </tr>
            <tr id='mat9-4'>
                <td>50 мм</td>
                <td>
                    <input type=number min=0 value='0'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='100'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='200'>
                </td>
            </tr>
            <tr class='n'>
                <td>Текстолит<input type='hidden' id='delmat10' value='2000000'>
                </td>
                <td>
                </td>
                <td>мм/мин</td>
                <td>мм/сек</td>
                <td>Стоимость метра реза</td>
            </tr>
            <tr id='mat10-0'>
                <td>0.5 мм</td>
                <td>
                    <input type=number min=0 value='980'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='1500'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='16'>
                </td>
            </tr>
            <tr id='mat10-1'>
                <td>1 мм</td>
                <td>
                    <input type=number min=0 value='1800'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='750'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='32'>
                </td>
            </tr>
            <tr id='mat10-2'>
                <td>1.5 мм</td>
                <td>
                    <input type=number min=0 value='2580'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='550'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='48'>
                </td>
            </tr>
            <tr id='mat10-3'>
                <td>2 мм</td>
                <td>
                    <input type=number min=0 value='3420'>
                </td>
                <td>
                    <input type=number min=0 class='mmmin' value='450'>
                </td>
                <td>
                    <input type=number min=0 class='mmsec' value=''>
                </td>
                <td>
                    <input type=number min=0 class='mprice' value='55'>
                </td>
            </tr>
        </table>
    </div>

    <table id='calc1' style="display: none;">
        <tr class='n'>
            <td>
            </td>
            <td>см</td>
            <td>м</td>
        </tr>
        <tr>
            <td class='n'>Длина реза</td>
            <td>
                <input type=number min=0 value='100' id='sm'>
            </td>
            <td>
                <input type=number min=0 value='' id='m'>
            </td>
        </tr>
        <tr class='n'>
            <td>
            </td>
            <td>мм</td>
            <td>см</td>
        </tr>
        <tr>
            <td class='n' rowspan=2>Площадь</td>
            <td class='s'>
                <input type=number min=0 value='300' id='mm1'>×<input type=number min=0 value='400' id='mm2'>
            </td>
            <td class='s'>
                <input type=number min=0 value='' id='sm1'>×<input type=number min=0 value='' id='sm2'>
            </td>
        </tr>
        <tr class='n'>
            <td id='sqr1'>
            </td>
            <td id='sqr2'>
            </td>
        </tr>

        <tr class='dl'>
            <td colspan='3'>
            </td>
        </tr>

        <tr id='mat'>
            <td class='n'>Материал</td>
            <td>
                <div class='line cur'>
                    <input type=radio name='mat' value='0' id='mat0' checked>
                    <label for='mat0'>Фанера</label>
                    <select class='mat2' id='mat0h'>
                        <option value=0>3 мм</option>
                        <option value=1>4 мм</option>
                        <option value=2 selected>6 мм</option>
                        <option value=3>8 мм</option>
                        <option value=4>10 мм</option>
                        <option value=5>12 мм</option>
                        <option value=6>Шпон</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='1' id='mat1'>
                    <label for='mat1'>Доска</label>
                    <select class='mat2' id='mat1h'>
                        <option value=0>10 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='2' id='mat2'>
                    <label for='mat2'>Акрил</label>
                    <select class='mat2' id='mat2h'>
                        <option value=0>1 мм</option>
                        <option value=1>1.5 мм</option>
                        <option value=2>2 мм</option>
                        <option value=3>3 мм</option>
                        <option value=4>4 мм</option>
                        <option value=5 selected>5 мм</option>
                        <option value=6>6 мм</option>
                        <option value=7>7 мм</option>
                        <option value=8>8 мм</option>
                        <option value=9>9 мм</option>
                        <option value=10>10 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='3' id='mat3'>
                    <label for='mat3'>Фетр</label>
                    <select class='mat2' id='mat3h'>
                        <option value=0>1 мм</option>
                        <option value=1>2 мм</option>
                        <option value=2>3 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='4' id='mat4'>
                    <label for='mat4'>Кожа</label>
                    <select class='mat2' id='mat4h'>
                        <option value=0>1 мм</option>
                        <option value=1>2 мм</option>
                        <option value=2>3 мм</option>
                        <option value=3>4 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='5' id='mat5'>
                    <label for='mat5'>Картон</label>
                    <select class='mat2' id='mat5h'>
                        <option value=0>1 мм</option>
                        <option value=1>2 мм</option>
                        <option value=2>3 мм</option>
                        <option value=3>Бумага</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='6' id='mat6'>
                    <label for='mat6'>Гофрокартон</label>
                    <select class='mat2' id='mat6h'>
                        <option value=0>1 мм</option>
                        <option value=1>3 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='7' id='mat7'>
                    <label for='mat7'>ПЭТ</label>
                    <select class='mat2' id='mat7h'>
                        <option value=0>0.5 мм</option>
                        <option value=1>1 мм</option>
                        <option value=2>2 мм</option>
                        <option value=3>3 мм</option>
                        <option value=4>4 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='8' id='mat8'>
                    <label for='mat8'>Всп.ПЭТ</label>
                    <select class='mat2' id='mat8h'>
                        <option value=0>2 мм</option>
                        <option value=1>8 мм</option>
                        <option value=2>20 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='9' id='mat9'>
                    <label for='mat9'>Пенопласт</label>
                    <select class='mat2' id='mat9h'>
                        <option value=0>10 мм</option>
                        <option value=1>20 мм</option>
                        <option value=2>30 мм</option>
                        <option value=3>40 мм</option>
                        <option value=4>50 мм</option>
                    </select>
                </div>
                <div class='line'>
                    <input type=radio name='mat' value='10' id='mat10'>
                    <label for='mat10'>Текстолит</label>
                    <select class='mat2' id='mat10h'>
                        <option value=0>0.5 мм</option>
                        <option value=1>1 мм</option>
                        <option value=2>1.5 мм</option>
                        <option value=3>2 мм</option>
                    </select>
                </div>
            </td>
            <td rowspan=5 class='big'>
                Скорость реза<br>
                <b id='r1'>
                </b> мм/мин.<br>
                <b id='r2'>
                </b> руб. за метр<br>
                Время реза<br>
                <b id='r3'>
                </b>
                <br>
            </td>
        </tr>
        <tr class='check'>
            <td class='n'>Покраска</td>
            <td>
                <input type='checkbox' name='' id='kras'>
            </td>
        </tr>
        <tr class='check'>
            <td class='n'>Мелкие детали</td>
            <td>
                <input type='checkbox' name='' id='melk'>
            </td>
        </tr>
<!--<tr class='check'>
<td class='n'>Оптовая цена</td>
<td>
<input type='checkbox' name='' id='opt'>
</td>
</tr>-->
</table>

<div id='res1'style="display: none;">

  <table>
      <tr class='n'>
        <td>Стоимость материала</td>
        <td>Стоимость реза</td>
    </tr>
    <tr>
        <td id='res1'>
        </td>
        <td id='res2'>
        </td>
    </tr>
    <tr>
        <td class='n'>Материал + резка</td>
        <td id='res4'>
        </td>
    </tr>
    <tr>
        <td class='n'>Покраска</td>
        <td id='res6'>
        </td>
    </tr>
    <tr>
        <td class='n'>Доп.опции</td>
        <td id='res8'>
        </td>
    </tr>
    <tr>
        <td class='n'>Итого</td>
        <td id='res10'>
        </td>
    </tr>
</table>

</div>


</div>
   <!-- Footer-->
@include('layouts.footer')
<script src="js/jquery-3.6.0.min.js">
</script>
<script src="/js/lazernaya_rezka.js">
</script>
<!-- Bootstrap core JS-->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> -->
</script>
<!-- Core theme JS-->
<script src="js/bootstrap.min.js">
</script>
</body>
</html>
