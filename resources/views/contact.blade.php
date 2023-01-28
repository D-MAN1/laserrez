<!DOCTYPE html>

<html lang="ru">
  <meta name="language" content="Russian">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="{{ $title }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="img/logo.jpg">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:description" content="">

  <title>{{ $title }}</title>
 

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
            <h1 class="text-white fs-3 fw-bolder"> LazerSrez / Контакты</h1>
            <p class="mb-0 mx-5 text-end text-info">Дорогие друзья!<br> Если Вы находитесь на этой странице– значит, Вам необходима лазерная резка!<br> Поздравляем Вас: Вы нашли то, что искали!</p>
            
        </div>
        <p class="text-white-50 mb-0 mx-5 header-text">Лазерная резка ткани, фетра, кожи, фанеры, картона, оргстекла и акрила</p>
    </header>
    <!-- Content section-->
<main class="container">
  <div class="row">
    <div class="col-md-8 border-end">
      <div class="blog-post mt-md-4">
        <h2 class="blog-post-title">УСЛОВИЯ РАБОТЫ:</h2>
        <ul>
            <li>Работаем с физическими и юридическими лицами.</li>
            <li>Предоплата 100%. Оплатой считается дата поступления денежных средств на расчетный счет поставщика.</li>
        </ul>    
        <p>Минимальная сумма заказа - 5’000 рублей.</p>
        <hr>
        <h2 class="blog-post-title">ДОСТАВКА:</h2>
        <ul>
            <li>До терминалов ТК «ПЭК» и «СДЭК» в Москве - бесплатно.</li>
            <li>До терминалов ТК «Деловые Линии», «Байкал Сервис» и «КИТ» («GTD») - 500 руб.</li>
            <li>До терминалов других ТК в Москве - 1’000 руб.</li>
            <li>Курьером в пределах МКАД - 1’000 руб. (внутрь Садового кольца - по согласованию).</li>
            <li>Доставка до пунктов выдачи «СДЭК» - по тарифам этой компании (уточняйте у менеджера).</li>
            <li>Отгрузка товара производится ежедневно по рабочим дням.</li>
            <li>Доставляем заказы во все регионы России, а также в Белоруссию и Казахстан.</li>
       </ul>
      </div><!-- /.blog-post -->
    </div>
    <aside class="col-md-4">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">О компании</h4>
        <p class="mb-0">Прием заказов на сайте <em> КРУГЛОСУТОЧНО.</em> Наша компания LazerSrez специализируется на лазерной резке различных материалов. Для Вас мы предлагаем лазерную резку ткани, фетра, кожи, фанеры, картона, оргстекла и акрила.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">РЕЖИМ РАБОТЫ:</h4>
        <h5 class="font-italic">Режим работы офиса и склада</h5>
        <ol class="list-unstyled mb-0">
           <li>Пн-Пт</li>
           <li>с 9.00 до 18.00</li>
        </ol>
        <h5 class="font-italic">Телефоны:</h5>
        <ol class="list-unstyled mb-0">
            <li>7 (995) 658-26-06</li>
            <li>7 (929) 9-173-173</li>
            <li>7 (925) 241-65-35</li>
        </ol>
        <h5 class="font-italic">Viber компании </h5>
        <ol class="list-unstyled mb-0">
            <li>7 (929) 9-173-173</li>
        </ol>
        <h5 class="font-italic">Email:</h5>
        <ol class="list-unstyled mb-0">
            <li></li>
        </ol>
      </div>
    </aside>
   
  </div><!-- /.row -->
  <hr>
   <h3 class="pb-4 mb-4 font-italic border-bottom">
        Организация находится в Московской области г. Щелково
      </h3>
</main><!-- /.container -->

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
