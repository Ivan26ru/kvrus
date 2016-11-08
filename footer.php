<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		
 <script>
 (function($){
    	$('.divs a').click(function(e){
    		e.preventDefault();
    		$('.divs a').removeClass('active-opt-tab');
    		$(this).addClass('active-opt-tab');
    		var tab = $(this).attr('href');
    		console.log(tab);
    		$('.pl >div').removeClass('acitve').addClass('none');
    		$('.pl .'+tab+'').addClass('acitve').removeClass('none');
    	})
    	$('.dic').click(function(e){
    		e.preventDefault()
    		$('.option12').removeClass('rep');
    		$('.option12').removeClass('rep2');
    		var data = $(this).attr('data-rel');
    		if(data == '1'){
    			$('.option12').addClass('rep');
    		}
    		if(data == '2'){
    			$('.option12').addClass('rep2');
    		}
    	})
    	$(document).ready(function(){
    $(".menu").on("click","div", function (event) {
       //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
            //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('data-rel'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
    	$('.textotext').on("click", function (event) {
    		 event.preventDefault();
            //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('data-hr'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 800);
    	})
 })(jQuery);
    </script>
    	<script>
    	(function($){
	$(document).ready(function(){

		$('.audio input[type=radio]').prop("disabled", true);
		var audio = new Audio();
  		var audio2 = new Audio();
  		var audio3 = new Audio();
  		var sr = $('.src').attr('data-src');
		audio3.src = sr;
					   	    					    audio3.onloadedmetadata = function() {
				    	var dur = this.duration;
				    	var ep = Math.floor(dur / 60);
				    	var p = Math.floor(dur % 60);
				    	var l = ep+':'+p;
				    	var g = Math.round(ep).toFixed(2);
				        $('.dur').text('- '+l);
				    };
  		$('.p_now').hide();
		$('.pa_top2').hide();
  			audio.src = "";
			audio2.src = ""; 
			   	    $('.voice input[type=radio]').data('counter', 0).change(function() {
					var name = $(this).attr('name');
					var val = $(this).val();			   	    
					var type = $(this).attr('data-name');
					var voice = $(this).attr('data-par');
					audio.pause();
  					audio.src = name+"_"+val+".mp3";
  					audio.play();
  					$('.audio input[type=radio]').prop("disabled", false);
  					var counter = $('.voice input[type=radio]').data('counter');    // Получаем значение
				    $('.voice input[type=radio]').data('counter', counter + 1);        // Увеличиваем значение на 1
				    $('.i').val(($('.voice input[type=radio]').data('counter'))); 
				    $('.wh').text(type);
				    $('.who').text(voice);
      			  	})
			   	    $('.pa_top').click(function(e){
			   	    	e.preventDefault();

			   	    	audio3.play();
			   	    	$(this).hide();
			   	    	$('.p_top').show();
			   	    	$('.p_top').click(function(e){
			   	    	e.preventDefault();
			   	    	audio3.pause();
			   	    	$(this).hide();
			   	    	$('.pa_top').hide();
			   	    	$('.pa_top2').show();
			   	    })
			   	    	$('.pa_top2').click(function(e){
			   	    	e.preventDefault();
			   	    	audio3.play();
			   	    	$(this).hide();
			   	    	$('.p_top').show();
			   	    })

			   	    })
			   	    


				    $('.audio a').data('counter', 0).click(function(e) {
				    	e.preventDefault();
				    	$('.pa_now').hide();
				    	$('.p_now').show();
				    audio2.src = "";
					var name = $(this).attr('name');
					var name1 = $(this).attr('data-name');
					var val = $(this).attr('data-val');			   	    
					audio2.pause();
				    audio2.onloadedmetadata = function() {
				    	var dur = this.duration;
				    	var ep = Math.floor(dur / 60);
				    	var p = Math.floor(dur % 60);
				    	var l = ep+':'+p;
				    	var g = Math.round(ep).toFixed(2);
				        $('.dur2').text('- '+l);
				    };
  					audio2.src = name;
  					audio2.play();
  					$('.play_w').text(name1);
  					var counter = $('.audio a').data('counter');    // Получаем значение
				    $('.audio a').data('counter', counter + 1);        // Увеличиваем значение на 1
				    $('.i2').val(($('.audio a').data('counter'))); 
				    var re = audio2.length;
				    console.log(re);
				    $('.p_now').click(function(e){
				    	e.preventDefault();
				    	audio2.pause();
				    $('.p_now').hide();
				    $('.pa_now').show();
				    })
				    $('.pa_now').click(function(e){
				    	e.preventDefault();
				    	audio2.play();
				  	$('.pa_now').hide();
				    $('.p_now').show();
				    })
      			  	})
      			  	$('input[type=radio]').change(function() {
      			  	var alert = $('.i').val();
      			  	var alert2 = $('.i2').val();
				    if(alert >= '15' && alert2 >= '6' && $('.overlay').hasClass('active')){
				    $('.overlay').show();
				    }
				    $('.no').click(function(e){
				    	e.preventDefault();
				    $('.overlay').removeClass('active');
				    $('.overlay').hide();
				    })
				    $('.yep').click(function(e){
				    	e.preventDefault();
				    $('.first').hide();
				    $('.second').show();
				    })
				});
      		$('.textar').click(function(){
      			audio2.pause();
      			audio.pause();
      		});
	})
	})(jQuery);
	</script>
	<script type="text/javascript">
	(function($){
function countWords(textarea) {

	if (textarea.value != 0 ) {

		var stringText = textarea.value.replace(/\n/," ").replace(/\W/gi," ").replace(/\s{2,}/gi," ").replace(/ $/,"").replace(/^ /,"");

		var text_array = stringText.split(" ");
		document.getElementById("word_amount").value = text_array.length;
			var price = text_array.length;
			if(price < '70'){
			$('.price p').text('890');
			$('.order').show();
			}
			if(price > '70'){
			$('.price p').text('1390');
			$('.order').show();
			}
			if(price > '140'){
			$('.price p').text('1990');
			$('.order').show();
			}
			if(price >= '251'){
			$('.price p').text('1990');
			$('.overlay').show();
			$('.overlay .fin_order').show();
			$('.overlay .first').hide();
			$('.overlay .second').hide();
			$('.order').hide();
			}
			


	} else {

		document.getElementById("word_amount").value = 0;
		$('.price p').text('890');

	}



}
$('.textar').keyup(function(){
	var tar = $("#word_amount").val();
	var textov = $(".textar").val();
	var pricec = $('.option48.price').text();
$("#ost").text(250-tar); 
$('.info .info3 .info5').text(textov);
$('.info .info6 .info8').text(pricec);
})
$('.order').click(function(e){
		e.preventDefault();
		var style = $('.voice input[type=radio]:checked').attr('data-name');
		var type = $('.voice input[type=radio]:checked').attr('data-par');
		var text = $('.textar').val();
		var price_fin = $('.price p').text();
	if($('.voice input[type=radio]').is(':checked') && $('.audio input[type=radio]').is(':checked') && price_fin != '0'){
		$('.type').text('Тип голоса : '+type);
		$('.style').text('Стиль голоса : '+style);
		$('.symbols').text('Введенный вами текст : '+text);
		$('.fin_price').text('Стоимость вашего заказа : '+price_fin);
		$('.fin_order input[type=submit]').prop("disabled", true);
		$('.overlay').show();
		$('.overlay .fin_order').show();
		$('.overlay .first').hide();
		$('.overlay .second').hide();
		$('.mess').text(' ');
	}else{
		$('.mess').text('Выберите стиль голоса, трек и введите текст')
	}
})
$('.fin_order input[type=checkbox]').change(function(){
	if(document.getElementById('ag').checked){
		$('.fin_order input[type=submit]').prop("disabled", false);	
	}else{
		$('.fin_order input[type=submit]').prop("disabled", true);	
	}

})
$('.form .close').click(function(e){
	e.preventDefault();
	$('.form').hide();
})
$('.btn-zak').click(function(e){
	e.preventDefault();
	$('.form1').show();
})
$('.info11 div a').click(function(e){
	e.preventDefault();
	$('.info11 div a').removeClass('active-pay');
	$(this).addClass('active-pay');
	
})
$('.block4 .btn4 .text').click(function(e){
	e.preventDefault();
var pay_met = $('.active-pay').attr('data-pay');
	var info = $('.info .info8').text();
	$('.form2').show();
	$('.pay_met').text(pay_met);
	$('.pay_price span').text(info);
})
$('.block1 .btn').click(function(e){
	e.preventDefault();
	$('.form3').show();
})
})(jQuery);
</script>
	<?php wp_footer(); ?>
</body>
</html>