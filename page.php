<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<!-- затемняющий элемент -->
<style type="text/css">
#mask {
    background-color:rgba(0,0,0,.4);
    height:100%;
    position:fixed;
    width:100%;
    top:0;
    left:0;
    z-index: 2;
    display: none;
}
</style>

<div id="mask"></div>
<!-- модульные окна -->
	<form action="" class="form1 form">
    <a href="#" class="close close_1"></a>
    	<h3>Индивидуальный заказ</h3>
<div class="left">
	<input type="text" placeholder="Имя">
	<input type="text" placeholder="Телефон">
	<input type="text" placeholder="Email">
</div>
<input type="submit" value="Заказать">
    </form>
    <form action="" class="form2 form" >
    <a href="#" class="close close_2"></a>
    	<h3>Оформление заказа</h3>
    	<div class="info_pay">
    		<p>Оплата через <span class="pay_met"></span></p> <p class="pay_price"><span> </span>&nbsp;₽</p>
    	</div>
    	<div>
    		<input type="text" placeholder="Email">
    		<input type="submit" value="Оплатить">
    	</div>
		<div>
			<label for=""><input type="checkbox"> Я согласен <a href="">с условиями работы</a></label>
		</div>
    </form>
    <form action="" class="form3 form">
    <a href="#" class="close close_3"></a>
    	<h3>Быстрый заказ</h3>
    	<p>Выбор голоса и музыки на усмотрение компании, работа
будет выполнена и выслана вам на почту в течение 24 часов.</p>
<div class="leftanright">
<div class="left">
		<input type="text" placeholder="Телефон">
	<input type="text" placeholder="Email">
</div>
<div class="right">
<label for="">Диктор</label>
	<a href="" class="male"></a><a href="" class="female"></a>
</div>
</div>
<textarea placeholder="Текст"></textarea>
<span>Лимит слов 240</span>
<div class="pay_now_one">
	<p><span>890</span>&nbsp;₽</p><input type="submit" value="Оплатить">
</div>
    </form>
	<div class="row1 rows">
<div class="block1">
	<div class="header"></div>
		<div class="logoall">
			<div class="logo"><span>Audio Lego</span></div>
			<div class="logotext">Конструктор аудироликов</div>
		</div>

		<div class="menu">
			<div data-rel="#row2">Диктор / музыка</div>
			<div data-rel="#row3">Текст</div>
			<div data-rel="#row4">Оплата</div>

		</div>

		<div class="zakazz">
		<div class="zakaz btn-zak">Индивидуальный заказ</div>
			<div class="tel"><span>8 800 123 45 67</span></div>
		</div>

		<div class="left">
		<div class="text1">Собери свой <span class="texta"> аудиоролик</span><span class="textb"> в 3 шага за 890</span><span class="textc"> ₽</span>  </div>
		<div class="text2">Получи рельузьтат в течение 24 часов или мы вернем деньги </div>
		<div class="btn1"><div class="btn">Быстрый заказ</div></div>
		<div class="text3">Пример аудиоролика</div>
		<div class="play">
		<div class='buts'>
		<a href="#" class="p_now p_top">II</a><a href="#" class="pa_now pa_top">></a>
		<a href="#" class="pa_now pa_top2">></a>
				<?
		$posts = get_posts( array(
			'post_type'       => 'preview',
			'orderby'=>'date',
			'order' => 'ASC'
		) );
		foreach($posts as $post){ setup_postdata($post);?>
		  <?
		  $links = get_field('changeaudio');

		  	$names = get_field('name1');
		  ?>
		  <input type="hidden" data-src="<? echo $links?>" class="src">
		 		<?}
		wp_reset_postdata();
				?>

		</div>
		<span class="time">

		</span>
		<p class="dur1">0:0</p>
		<p class="dur"></p>
		</div>
		<div> </div>
		</div>

		<div class="right">
		<div class="text4">01<span class="text4a">Диктор / музыка</span ></div>
		<div class="text4">02<span class="text4a">Текст</span ></div>
		<div class="text4">03<span class="text4a">Оплата</span ></div>
		<div class="youtube"><a href="http://youtube.com" target="_blank">Видео-инструкция</a></div>

	</div>

</div>
</div>
</div>
<div class="row2 rows" id="row2">
<div class="block2">
	<div class="header"></div>


		<div class="left2">
		<div class="text5">1. Выберите голос диктора и фоновую музыку</div>
		<div class="option">
		<div class="option1">Диктор</div>
		<div class="option2 dic" data-rel="1"></div>
		<div class="option3 dic" data-rel="2"></div>
		<div class="divs">
		<div class="option4 options_tab"><a href="tab_1">Радостный</a></div>
		<div class="option5 options_tab"><a href="tab_2">Брутальный</a></div>
		<div class="option6 options_tab"><a href="tab_3">Сексуальный</a></div>
		<div class="option7 options_tab"><a href="tab_4">Официально-деловой</a></div>
		</div>
		<div class="playall pl">
		<div class="tab_1 acitve">
			<div class="playtext">01<a href="#" class="play1" type="radio" name="voice_style" value="1" data-name="Стиль 1" data-par="Мужской голос 1"></a></div>
		<div class="playtext">02<a href="#" class="play1"></a></div>
		<div class="playtext">03<a href="#" class="play1"></a></div>
		<div class="playtext">04<a href="#" class="play1"></a></div>
		<div class="playtext">05<a href="#" class="play1"></a></div>
		</div>
		<div class="tab_2 none">
			<div class="playtext">06<a href="#" class="play1"></a></div>
		<div class="playtext">07<a href="#" class="play1"></a></div>
		<div class="playtext">08<a href="#" class="play1"></a></div>
		<div class="playtext">09<a href="#" class="play1"></a></div>
		<div class="playtext">10<a href="#" class="play1"></a></div>
		</div>
		<div class="tab_3 none">
			<div class="playtext">11<a href="#" class="play1"></a></div>
		<div class="playtext">12<a href="#" class="play1"></a></div>
		<div class="playtext">13<a href="#" class="play1"></a></div>
		<div class="playtext">14<a href="#" class="play1"></a></div>
		<div class="playtext">15<a href="#" class="play1"></a></div>
		</div>
		<div class="tab_4 none">
			<div class="playtext">16<a href="#" class="play1"></a></div>
		<div class="playtext">17<a href="#" class="play1"></a></div>
		<div class="playtext">18<a href="#" class="play1"></a></div>
		<div class="playtext">19<a href="#" class="play1"></a></div>
		<div class="playtext">20<a href="#" class="play1"></a></div>
		</div>


		</div>
		<div class="option8">
		<div class="option9"></div>
		<div class="option10">Сейчас прослушивается</div>
		<div class="option11">Диктор:</div>
		<div class="option12"></div>
		<div class="option13">Радостный 01</div>

		</div>

		</div>

		<div class="option24">
		<div class="option14">Музыка</div>
		<div class="option15"></div>
		<div class="option16"></div>
		<div class="option17">Попробуйте прослушать одновременно с голосом:</div>


		<div class="playall audio">
		<?
		$posts = get_posts( array(
			'post_type'       => 'melody',
			'orderby'=>'date',
			'order' => 'ASC'
		) );
		$i = '0';
		foreach($posts as $post){ setup_postdata($post);?>
		  <?
		  $i = $i+1;
		  $link = get_field('melody1');

		  	$name = get_field('name1');
		  ?>
		  <div class="playtext"><? echo $i?><a href="#" class="play1" name="<? echo $link; ?>" data-val="<? echo $i?>" data-name="<? echo $name; ?>" disabled=""></a></div>
		<?}
		wp_reset_postdata();
				?>



		</div>
		<div class="option18">

		<div class="option19"><a href="#" class="p_now">II</a><a href="#" class="pa_now">></a>
	<span class="time">

		</span>
		<p class="dur3">0:0</p>
		<p class="dur2">0:0</p>
		</div>
		<div class="option20">Сейчас прослушивается</div>
		<div class="option21">Музыка: <span class="play_w"></span></div>


		</div>

		<div class="option22">
		<div class="option28">Выбрано</div>
		<div class="option30">Диктор:</div>
		<div class="option25"></div>
		<div class="option26">Радостный 01;</div>
		<div class="option27">Музыка:01</div>
		<div class="option29"></div>
		<div class="btn2"><div class='text textotext' data-hr="#row3">ВЫБРАТЬ И ПЕРЕЙТИ К ТЕКСТУ</div></div>

		</div>

		</div>
		</div>

		<div class="right2">
		<div class="text4b">01<span class="text4c">Диктор / музыка</span ></div>
		<div class="text4b">02<span class="text4c">Текст</span ></div>
		<div class="text4b">03<span class="text4c">Оплата</span ></div>
		<div class="zakaz1">
		<div class="zakaz2">Ничего не подошло?</div>
		<div class="zakaz3 btn-zak">Индивидуальный заказ</div>
		</div>

	</div>

</div>
</div>
</div>

<div class="row3 rows" id="row3">
<div class="block3">
	<div class="header"></div>
		<div class="left2">
		<div class="option31">2. Напишите текст для озвучки, расставьте ударения в спорных словах</div>
		<div class="option38">
		<div class="option35">Выбрано</div>
		<div class="option37">Диктор:</div>
		<div class="option32"></div>
		<div class="option33">Радостный 01;</div>
		<div class="option34">Музыка:01</div>
		<div class="option36"></div>
		</div>
 <div class="option45">
 <div class="option46">Введите текст</div>
 <div class="option39"><form name="textForm">
<textarea class="textar" maxlength="3000" rows="12" cols="30" style="" onkeyup="countWords(this)"></textarea>
<input type="hidden" size="5" id="word_amount" readonly="" value="0">
</form>
</div>
 <div class="option40">Ударения указываются заглавной буквой</div>
 <div class="option41">Осталось <span id="ost">250</span> слов</div>
</div>

 <div class="option42">
 <div class="option43">Комментарий</div>
 <div class="option44" style="height: 325px;"><textarea></textarea></div>
</div>
				<div class="option22">
		<div class="option47 ">Стоимость </div>
		<div class="option48 price" > <p style="    float: left;
    margin: 0;">0 </p>&nbsp;₽</div>
		<div class="option49">Длительность</div>
		<div class="option50">  28 секунд</div>
		<div class="btn3"><div class='text textotext'  data-hr="#row4">ВЫБРАТЬ И ПЕРЕЙТИ К ОПЛАТЕ</div></div>

		</div>
	</div>


	<div class="right3">
		<div class="text4b">01<span class="text4c">Диктор / музыка</span ></div>
		<div class="text4b">02<span class="text4c">Текст</span ></div>
		<div class="text4b">03<span class="text4c">Оплата</span ></div>
		<div class="zakaz4">
		<div class="zakaz5">Ничего не подошло?</div>
		<div class="zakaz6 btn-zak">Индивидуальный заказ</div>
		</div>
</div>
</div>
</div>

<div class="row4 rows" id="row4">
<div class="block4">
	<div class="header"></div>
	<div class="left2">
		<div class="option31">3. Оплата</div>

		<div class="oplata">
		<div class="info">
		<div class="info1">Вы выбрали:</div>
		<div class="info2">
		<div class="option37">Диктор:</div>
		<div class="option32"></div>
		<div class="option33">Радостный 01;</div>
		<div class="option34">Музыка:01</div>
		<div class="option36"></div>
		</div>

		<div class="info3">
		<div class="info4">Текст</div>
		<div class="info5"></div>
		</div>




		<div class="info6">
		<div class="info7">Стоимость</div>
		<div class="info8">  <span>₽</span></div>
		<div class="info9">Длительность</div>
		<div class="info10">  28 секунд</div>
		</div>


		</div>
		</div>
		<div class="info11">
		<div class="info12"><a href="#" data-pay="VISA"></a></div>
		<div class="info13"><a href="#" data-pay="MasterCard"></a></div>
		<div class="info14"><a href="#" data-pay="Яндекс Деньги"></a></div>
		<div class="info15"><a href="#" data-pay="WebMoney"></a></div>
		</div>
		<div class="btn4"><div class='text'>ЗАКАЗАТЬ АУДИОРОЛИК</div></div>
	</div>

		<div class="right4">
		<div class="text4b">01<span class="text4c">Диктор / музыка</span ></div>
		<div class="text4b">02<span class="text4c">Текст</span ></div>
		<div class="text4b">03<span class="text4c">Оплата</span ></div>
		<div class="zakaz7">
		<div class="zakaz8">Ничего не подошло?</div>
		<div class="zakaz9 btn-zak">Индивидуальный заказ</div>
		</div>

	</div>
	<div class="footer">
		<div class="logoall">
			<div class="logo"><span>Audio Lego</span></div>
			<div class="logotext">Конструктор аудироликов</div>
		</div>
		<div class="us">
			<a href="#">Условия работы</a>
		</div>
		<div class="soc">
			<a href="#" class="vib"></a>
			<a href="#" class="skype"></a>
			<a href="#" class="whats"></a>
			<a href="#" class="phone">8 800 123 45 67</a>
		</div>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>