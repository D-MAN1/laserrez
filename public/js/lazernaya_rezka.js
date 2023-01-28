var sugg_count = 0;
var input_value = '';
var sugg_selected = 0;


var sq=0;//square in mm
var len=100;//length
var price=1;//price
var price_rez = 1;
var speed=0;//speed
$(window).on('load',function(){
    $('#sm').on('change input', function() {
        len=$(this).val();
        if(len>0){
            $("#m").val(Math.round(len)/100);
            ch_mat();
        }
    });

    $('#m').on('change input', function() {
        len=$(this).val()*100;
        if(len>0){
            $("#sm").val(Math.round(len*100)/100);
            ch_mat();
        }
    });
    $('#mm1').on('change input', function() {
        $('#sm1').val(Math.round($(this).val()/10*100)/100);
        sqr();
    });

    $('#mm2').on('change input', function() {
        $('#sm2').val(Math.round($(this).val()/10*100)/100);
        sqr();
    });


    $('#sm1').on('change input', function() {
        $('#mm1').val(Math.round($(this).val()*10*100)/100);
        sqr();
    });

    $('#sm2').on('change input', function() {
        $('#mm2').val(Math.round($(this).val()*10*100)/100);
        sqr();
    });
    $('#m').val(Math.round($("#sm").val())/100);

    $('#sm1').val(Math.round($("#mm1").val()*10)/100);
    $('#sm2').val(Math.round($("#mm2").val()*10)/100);
    ch_mat();
    sqr();

});
$('input[type=checkbox]').on('click', function() {
        ch_mat();
    });

$('#glass').on('click', function() {
        ch_mat();
    });

//radio change
    $(".line").click(function(){
        $(".line.bg-info").removeClass('bg-info');
        $('select').removeClass('bg-info');
        $(this).addClass('bg-info');
        $(this).find('input[type=radio]').prop('checked',true);
        $(this).find('select').addClass('bg-info');
        //console.log( 'oooo');
        //fmat=1;
        ch_mat();
    });

function sqr(){
    sq=$("#mm1").val()*$("#mm2").val();
    $('#sqr1').html('<b>'+Math.round(sq)+'</b> мм<sup>2<sup>');
    $('#sqr2').html('<b>'+Math.round(sq/100*100)/100+'</b> см<sup>2<sup>');

   count_price();
}
var price_mat = 0;
function count_price(){
    price_m = price_mat * sq/1000000;
    price_r = price_rez * len/100;
    if (price_m==0) {
        $('#res1').text('уточняйте');
        $('#res4').text(Math.round(price_r)+' р + материал');
    }else {
        $('#res1').text(Math.round(price_m));
        $('#res4').text(Math.round(price_r)+Math.round(price_m));
    }
    $('#res2').text(Math.round(price_r));
    
    console.log(price);
   

}
function ch_mat(){

    mat=$('#mat').find('input:checked').attr('id');// id = mat0
    select = $('#'+mat+"h option:selected");
    h = select.data('h');
    price_mat = select.data('price_mat');
    speed = select.data('speed');
    price_rez = select.data('price_rez');
    $('#r1').text(speed);
    $('#r2').text(price_rez);
    $('#r3').text(parseFloat(len*10/speed).toFixed(2));
    
    count_price();
    //console.log(h);
 
}
