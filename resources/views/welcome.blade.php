<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Лазерная резка</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
         <link href="{{ asset('/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css">
         <link href="{{ asset('/css/style.css') }} " rel="stylesheet" type="text/css">
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
     .header-images {
  background-size: cover;
    width: 100%;
    position: relative;
    outline: 1px solid red;
    background-attachment: scroll;
    /* height: 100%; */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
            <h1 class="text-white fs-3 fw-bolder">ЛАЗЕРНАЯ РЕЗКА</h1>
            <p class="mb-0 mx-5 text-end text-light">Дорогие друзья!<br> Если Вы находитесь на этой странице– значит, Вам необходима лазерная резка!<br> Поздравляем Вас: Вы нашли то, что искали!</p>
            
        </div>
        <div class="text-center my-5 header-text">
        <p class=" mb-0 mx-5 text-light text-start">Лазерная резка ткани, фетра, кожи, фанеры, картона, оргстекла и акрила</p>
    </div>
    </header>
        <!-- Content section-->
        <section class="py-5">

            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Материалы для лазерной резки</h2>
                        <p class="lead">Мы используем высокоточные станки с числовым программным управлением. Эти станки обеспечивают очень высокую точность резки того или иного материала – доли миллиметра.</p>
                        <p class="mb-0">Наша компания LazerSrez специализируется на лазерной резке различных материалов. Для Вас мы предлагаем лазерную резку ткани, фетра, кожи, фанеры, картона, оргстекла и акрила. Толщина материала для лазерной резки - до 6 мм. Максимальная ширина полотна, листа фанеры, картона, акрила или оргстекла -  2 метра.</p>
                        <p class="mb-0">Наши специалисты максимально эффективно используют материал заказчика, а компьютер и станки с ЧПУ позволяют изготовить наибольшее количество необходимых изделий с одного листа какого - либо материала.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full header-images"  style="background-image: url('/images/layout/files.jpg')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Форматы файлов для лазерной резки</h2>
                        <p class="lead">Мы принимаем исходники в форматах PDF, TIF, JPEG и т.д. Если Вам необходимо создать исходник с «нуля», то есть Вам хочется, чего–то такого, но Вы пока сами не знаете, чего, то наш дизайнер поможет Вам сделать эскизы, наброски,- одним словом, поможет Вам определиться с Вашей идеей или подскажет свою.</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <div class="py-5 bg-image-full header-image" style="background-image: url('/images/layout/laser-measuring.jpg')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Время и сроки лазерной резки</h2>
                        <p class="lead">Ни для кого не секрет, что лазерная резка позволяет в разы сократить время по раскрою материала, вырезки каких-то очень специфичных и сложных деталей, а самое главное – вручную никогда не добиться такой точности в резке, как при использовании станков с ЧПУ для лазерной резки. А вырезать какие-то детали руками из листа картона, фанеры, акрила или оргстекла вообще не представляется возможным, если речь идет не о единичном изделии. Срок выполнения заказа по лазерной резке обычно составляет 2-3 дня. По выполнении заказа, уже нарезанный лазером товар упаковывается в полиэтилен или картонные коробки (по согласованию с заказчиком) и отправляется к Вам транспортными компаниями или курьерскими службами по Вашему выбору. Самовывоз также доступен.</p>
                    </div>
                </div>
            </div>
        </section> 
        <!-- Content section-->
        <!-- <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>КАЛЬКУЛЯТОР ЛАЗЕРНОЙ РЕЗКИ</h2>
                        <p class="lead">КАЛЬКУЛЯТОР ЛАЗЕРНОЙ РЕЗКИ Уважаемые коллеги! Ниже Вы найдёте специальный калькулятор по лазерной резке, который поможет Вам определиться с расчетами нашей услуги. При помощи этого калькулятора по лазерной резке Вы сможете с достаточно высокой точностью рассчитать стоимость конечного изделия. Стоимость лазерной резки будет зависеть как от самого выбранного Вами материала, его толщины, так и от необходимого Вам количества. Использовать калькулятор лазерной резки очень просто. Сначала выберите тот материал, который соответствует Вашим запросам, после чего используйте подсказки, которые указаны ниже.</p>
                    </div>
                </div>
            </div>
        </section> -->        
        <!-- Footer-->
        @include('layouts.footer')
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
<!-- Bootstrap core JS-->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> -->

<!-- Core theme JS-->

    </body>
</html>
