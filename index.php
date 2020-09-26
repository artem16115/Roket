<?php session_start(); ?>
<?php header ("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8">
		<title>Roket</title>
		<link href="fontawesome/css/all.css" rel="stylesheet">
		<link href="css.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="jquery-3.5.1.min.js"></script>
    	<script src="js.js"></script>
</head>

<body>


<div class="MenuMobile">
	<div class="WhiteBlock">
		<a id="closeA" href="#"><i id="close" class="fas fa-times"></i></a>
	<ul class="spisMobile">
		<li><a class="HeadA" href="#">Услуги</a></li>
		<li><a class="HeadA" href="#">Портфолио</a></li>
		<li><a class="HeadA" href="#">Отзывы</a></li>
		<li><a class="HeadA" href="#">Вакансии</a></li>
		<li><a class="HeadA" href="#">Контакты</a></li>
	</ul>
	</div>

	<div class="BlackBlock">
		<div class="BlackBlockAdres">
		Ростов-на-Дону,<br>
		Ленина, 21<br><br>

		<p><b>8(863)243-15-10</b></p>
	</div>
	</div>
</div>


<div class="head">

	<div class="container-fluid">

	<div class="row align-items-center" style= "height: 74px;">
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-2 col-2" style="text-align: center;"><a class="HeadAA" href="#"><i id="hrr" class="fas fa-bars"></i> </a></div>
			<div id="logo" class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1" style="text-align: center;"><img class="logo" src="img/icon.png"></div>
<div id="SpisLine" class="col-xl-7 col-lg-7 col-md-6 col-sm-2 col-2" style="padding-top: 10px;">
	<ul class="spis">
		<li><a class="HeadA" href="#">Услуги</a></li>
		<li><a class="HeadA" href="#">Портфолио</a></li>
		<li><a class="HeadA" href="#">Отзывы</a></li>
		<li><a class="HeadA" href="#">Вакансии</a></li>
		<li><a class="HeadA" href="#">Контакты</a></li>
	</ul>
			<!--<div class="row">
				<div class="col-md-1">Услуги</div>
				<div class="col-md-1">Портфолио</div>
				<div class="col-md-1">Отзывы</div>
				<div class="col-md-1">Вакансии</div>
				<div class="col-md-1">Контакты</div>
			</div>-->
</div>
			<div id="HeadNumber" class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6" style="text-align: right;"><b>8(863)243-15-10</b><br> Ростов-на-Дону</div>
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
	</div>
	
</div>

</div>






<div class="content">
	<div class="content2">
	<p id="PZag" style="font-size: 40px; line-height: 1;"> <b>Рекламно-информационное<br>
	агенство</b></p>
	<p style="line-height: 1.2;">
	Будем рады, если Вы обратитесь в наше Агенство. Мы готовы<br>
	предложить Вам передовые решения для продвижения<br>
	Вашего бизнеса.<br><br></p>

	<input class="InputNumber" name="" placeholder="Номер телефона">
	<button class="ButtonNumber">Обратный звонок</button>
</div>
</div>
<br><br><br>

<div class="container-fluid">
<div class="news">
	
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: center;"><h1><b>Новости</b></h1></div>
</div>
<br><br><br>

<div class="row">
	<div class="col-xl-2"></div>
	<div class="col-xl-8">


		<div class="row">
<div  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
	<div class="first">
		


<? 
require_once("dbconnect.php");
$ID=0;
$schet=3;
$mysql =("SELECT id,date,heading FROM news ORDER BY Date DESC ;");
            $result=$dbcon->query($mysql);


             while ($row=$result->fetch_array()){
                  $id=$row['id'];
                  $date=$row['date'];
                  $heading=$row['heading'];
            
    			if ($schet==3){
    				$ID=$ID+1;
    				echo '
          <div style="display: none;" class="new I'.$ID.' "><p class="date">'.$date.'</p><p class="heading">'.$heading.'</p><br> 
          <a href="#"><button class="ButNews">Подробнее</button>	</a>		</div>
        '   ; $schet=1; 
    }else{
    	$schet=$schet+1;
    }


        }
			
?>









	</div>

</div>







<div  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
	<div>
		<? 
require_once("dbconnect.php");
$ID=0;
$schet=2;
$mysql =("SELECT id,date,heading FROM news ORDER BY Date DESC ;");
            $result=$dbcon->query($mysql);


             while ($row=$result->fetch_array()){
                  $id=$row['id'];
                  $date=$row['date'];
                  $heading=$row['heading'];
            
    			if ($schet==3){
    				$ID=$ID+1;
    				echo '
          <div style="display: none;" class="new I'.$ID.' "><p class="date">'.$date.'</p><p class="heading">'.$heading.'</p><br> 
          <a href="#"><button class="ButNews">Подробнее</button>	</a>		</div>
        '   ; $schet=1; 
    }else{
    	$schet=$schet+1;
    }


        }
			
?>

	</div>

</div>










<div  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
	<div class="last">
		
<? 
require_once("dbconnect.php");
$ID=0;
$schet=1;
$mysql =("SELECT id,date,heading FROM news ORDER BY Date DESC ;");
            $result=$dbcon->query($mysql);


             while ($row=$result->fetch_array()){
                  $id=$row['id'];
                  $date=$row['date'];
                  $heading=$row['heading'];
            
    			if ($schet==3){
    				$ID=$ID+1;
    				echo '
          <div style="display: none;" class="new I'.$ID.' "><p class="date">'.$date.'</p><p class="heading">'.$heading.'</p><br> 
          <a href="#"><button class="ButNews">Подробнее</button>	</a>		</div>
        '   ; $schet=1; 
    }else{
    	$schet=$schet+1;
    }


        }
			
?>

	</div>

</div>

















			




		</div>
	

	</div>
	<div class="col-xl-2"></div>


</div>



<div class="row justify-content-center" style="text-align: center;">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ButLine">
	<div id="ButNew1" class="ButR"></div>
	<div id="ButNew2" class="ButR"></div>
	<div id="ButNew3" class="ButR"></div>

</div></div>


</div>
</div>

<br><br><br><br><br><br><br><br>
  <footer>
	<div class="container-fluid">
		<div class="row align-items-center" style="padding-top: 50px; padding-bottom: 50px;">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style="text-align: center;"><img class="logo2" src="img/icon.png"></div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: center;">
				<ul class="spis2" style="padding-left: 0px; margin-bottom: 0px;">
					<li style="margin-left: 0px;"><a class="FootA" href="#">Услуги</a></li>
					<li><a class="FootA" href="#">Портфолио</a></li>
					<li><a class="FootA" href="#">Отзывы</a></li>
					<li><a class="FootA" href="#">Вакансии</a></li>
					<li><a class="FootA" href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3"></div>
		</div>

	</div>
</footer>
</body>



</html>