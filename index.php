<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html lang="bg" xml:lang="bg" xmlns="http://www.w3.org/1999/xhtml">
	     <head>
		     <title>Magma-cs.inFo :: Ела и се разгорещи!</title>
			 <meta http-equiv="Content-Type" content="text/html charset=uft-8" />
			 <meta name="keywords" content="магма, magma, server, servers, сървър, сървар, сарвар, server magma, magma server" />
		     <meta name="googlebot" content="index, follow" />
		     <meta name="description" content="Тук вие можете да намерите сървъри, да общувате в нашия форум..." />
			 <meta name="author" content="BurnToBeEviL" />
			 <meta name="design" content="BurnToBeEviL" />
			 <meta name="code" content="BurnToBeEviL" />
			 <link type="text/css" rel="stylesheet" href="css/style.css" />
			 <script type="text/javascript">var _siteRoot='index.php',_root='index.php';</script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
         <script type="text/javascript">

             @alert("Сайта изглежда най-добре под Google Chrome и Mozilla Firefox! Под Opera има малко размествания и не Ви я препоръчваме!");
         </script>
		 </head>

		 <body>
		 <div id="content">
		    <div class="border">
			     <!-- na4alo na login forma -->

				     <form method="get" action="index.php">



					<?php
session_start();
if( isset($_SESSION["logging"]) or isset($_SESSION["logged"]))
{
     print_secure_content();
}
else {
    if(!isset($_SESSION["logging"]))
    {
    $_SESSION["logging"]=true;
    loginform();
    }
       else if($_SESSION["logging"])
       {
         $number_of_rows=checkpass();
         if($number_of_rows==1)
            {

			die('here');
	         $_SESSION["user"]=$_GET["username"];
	         $_SESSION["logged"]=true;
	         print"<h1>you have logged in successfully</h1>";
	         print_secure_content();
            }
            else{
               	print "Wrong username or password, please try again";
                loginform();
            }
        }
     }
     function loginform()
{
print ("<div class='login'>Вашето име: <input type='text' maxlength='19' class='inputlogin' name='nickname' /></div>
		<div class='login2'>Вашата парола: <input type='password'  class='inputlogin' maxlength='17' name='password' /></div>");
print "<input type='submit' value='Влез!' id='login' />";
}


function checkpass()
{
$servername="localhost";
$username="root";
$conn=  mysql_connect($servername,$username)or die(mysql_error());
mysql_select_db("test",$conn);
$sql_username = isset($_GET['username']) ? $_GET['username'] : '';
$sql_password = isset($_GET['password']) ? $_GET['password'] : '';
$sql="select * from users where name='$sql_username' and password='$sql_password'";
$result=mysql_query($sql,$conn) or die(mysql_error());
return  mysql_num_rows($result);
}

function print_secure_content()
{
	print('hi,' . $_SESSION['username']);
    print "<br><a href='logout.php'>Logout</a><br>";

}
?>
</form>
					 <a href="#"><div class="forgot">Забравена парола?</div></a>
					 <a href="register.php"><div class="registration">Регистрация!</div></a>

				 <div class="borderlogin"><div class="borderlogin2"></div></div>

				 <!-- krai na login forma -->

				 <!-- na4alo na logo i reklama 468x60 -->

				 <div class="logo"></div>
				 <a href="#"><div class="reclame1"></div></a>

				 <!-- krai na logo i reklama 468x50 -->

				 <!-- na4alo na menu -->
				 <div class="menu">
				     <div class="menuukrasa"></div>
					     <div class="menuukrasa2"></div>
				         <a href="index.php"><div class="menu1" title="Върнете се в началото"><div class="menuborder1"><div class="menucontent1">Начало</div></div></div></a>
				         <a href="#"><div class="menu2" title="Посетете форума ни"><div class="menuborder2"><div class="menucontent2">Форум</div></div></div></a>
				         <a href="#"><div class="menu3" title="Вижте сървърите ни"><div class="menuborder3"><div class="menucontent3">Сървъри</div></div></div></a>
				         <a href="#"><div class="menu4" title="Вижте всички баннати хора"><div class="menuborder4"><div class="menucontent4">Бан лист</div></div></div></a>
				         <a href="#"><div class="menu5" title="Разгледайте услугите ни"><div class="menuborder5"><div class="menucontent5">SMS Услуги</div></div></div></a>
				         <a href="#"><div class="menu6" title="Нашите банери"><div class="menuborder6"><div class="menucontent6">Банери</div></div></div></a>
				         <a href="#"><div class="menu7" title="Запознайте се с нас"><div class="menuborder7"><div class="menucontent7">Екип</div></div></div></a>
				         <a href="#"><div class="menu8" title="Свържете се с нас"><div class="menuborder8"><div class="menucontent8">Контакти</div></div></div></a>
						 <div class="menuukrasa3"></div>
						 <div class="lentamenu"></div><div class="clear"></div>
				 </div>

				 <!-- krai na menu -->

				 <!-- na4alo na sudurjanie -->
				 <div class="content2head"></div>
				     <div class="content2">

					 	 <div id="left">
					 <!-- na4alo na serveri -->
					 <div class="containerheadleft"><div class="game"></div>Нашите сървъри</div><div class="clear"></div>
				     <br />
				         <div class="containerleft">
		                     <div class="map"></div>
							     <div class="servername">Magma | Dust2 Only</div>
								     <div class="serverline"></div>
						                 <div class="serverip">130.204.127.45:27015</div>
								     <div class="serverline"></div>
						         <div class="serverplayers">Играят 10 от <span>21</span></div>
						     <div class="serverline"></div>
						 <div class="map2"></div>
							     <div class="servername">Magma | Dust2 Only</div>
								     <div class="serverline"></div>
						                 <div class="serverip">130.204.127.45:27015</div>
								     <div class="serverline"></div>
						         <div class="serverplayers">Играят 10 от <span>21</span></div>
						     <div class="serverline"></div>
						 <div class="map2"></div>
							     <div class="servername">Magma | Dust2 Only</div>
								     <div class="serverline"></div>
						                 <div class="serverip">130.204.127.45:27015</div>
								     <div class="serverline"></div>
						         <div class="serverplayers">Играят 10 от <span>21</span></div>
						     <div class="serverline"></div>
						 <div class="map2"></div>
							     <div class="servername">Magma | Dust2 Only</div>
								     <div class="serverline"></div>
						                 <div class="serverip">130.204.127.45:27015</div>
								     <div class="serverline"></div>
						         <div class="serverplayers">Играят 10 от <span>21</span></div>
						     <div class="serverline"></div>

						     <a href="#"><div class="allservers" title="Виж всички сървъри">Виж всички сървъри!</div></a>
						 </div><div class="clear"></div>

						 <!-- krai na serveri -->

						 <!-- na4alo na chat -->

						 <div class="containerheadleft2"><div class="chat"></div>Чат</div><div class="clear"></div>
				     <br />
				         <div class="containerleft2">

						     <div class="chatbox">

							     <div class="chatauthor"><span style="color: #a33b3b; font-weight: 100;">BurnToBeEviL</span> каза:</div>
							         <div class="chatsay">Как сте?</div>
									     <div class="chatend"></div>

							     <div class="chatauthor"><span style="color: #a33b3b; font-weight: 100;">BurnToBeEviL</span> каза:</div>
							         <div class="chatsay">Как сте?</div>
									     <div class="chatend"></div>

							     <div class="chatauthor"><span style="color: #a33b3b; font-weight: 100;">BurnToBeEviL</span> каза:</div>
							         <div class="chatsay">Как сте?</div>
									     <div class="chatend"></div>

							     <div class="chatauthor"><span style="color: #a33b3b; font-weight: 100;">BurnToBeEviL</span> каза:</div>
							         <div class="chatsay">Как сте?</div>
									     <div class="chatend"></div>

							     <div class="chatauthor"><span style="color: #a33b3b; font-weight: 100;">BurnToBeEviL</span> каза:</div>
							         <div class="chatsay">Как сте?</div>
									     <div class="chatend"></div>

							 </div>

							 <div class="chattype">
							 <form action='' method='post'>
							 <div style="padding-left: 60px">Текст:</div>

							 <textarea name='chat' rows='2' id='styled' cols='18' style="border: 1px solid #ccc;" style="resize:vertical;"></textarea><br />

							 <input type='submit' name='submit' class='button' value='Прати' />
							 <input type='reset' name='submit' class='button' value='Изчисти' />
                             </form>
							     <div class="smiliesbutton">Усмивки</div>
						     </div>
						 </div><div class="clear"></div>
						 </div>
						 <!-- krai na chat -->
						 <div id="right">
					 <!-- na4alo na slider -->
				 <div class="containerheadright"><div class="camera"></div>Реклама</div><div class="clear"></div>
				 <div class="containerheadright2"></div><div class="clear"></div>

				 <br />
				     <div class="containerright">

                     <div id="header"><div class="wrap">
                         <div id="slide-holder">
                             <div id="slide-runner">
                                 <a href="#"><img id="slide-img-1" src="images/slide1.gif" class="slide" alt="" /></a>
                                 <a href="#"><img id="slide-img-2" src="images/slide2.png" class="slide" alt="" /></a>
                                 <a href="#"><img id="slide-img-3" src="images/slide3.png" class="slide" alt="" /></a>
                                 <a href="#"><img id="slide-img-4" src="images/slide4.png" class="slide" alt="" /></a>
                                 <a href="#"><img id="slide-img-5" src="images/slide5.png" class="slide" alt="" /></a>
                                 <a href="#"><img id="slide-img-6" src="images/468x60.png" class="slide" alt="" /></a>
                             	 <a href="#"><img id="slide-img-7" src="images/468x60.png" class="slide" alt="" /></a>
                         <div id="slide-controls">

                             <p id="slide-nav"></p>
                         </div>
                         </div>


                         </div>
                     <script type="text/javascript">
                     if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-5","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-6","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-7","client":"nature beauty","desc":"add your description here"}];
                     </script>
                 </div></div>
                 </div><div class="clear"></div>

                 <!-- krai na slider-->

				 <!-- na4alo na novini -->
				     <div class="containerheadright"><div class="world"></div>Новини</div><div class="clear"></div>
				     <div class="containerheadright2"></div><div class="clear"></div>
					     <div class="newshead">Заглавие на новината</div><div class="clear"></div>
						     <div class="newscontent">Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ipsum.
					             <div class="publicated">Добавил <span>BurnToBeEviL</span> на 18.03.24 / 03:43</div>
								 <div class="newsend1"><div class="newsend2"><div class="newsend3"></div></div></div>

							 </div><div class="clear"></div>
				 <!-- krai na novini -->

				 <!-- na4alo na posledno ot foruma -->
				     <div class="containerheadright"><div class="forum"></div>Последно от форума</div><div class="clear"></div>
				     <div class="containerheadright2"></div><div class="clear"></div>

					 <table width="100%" border="0" cellspacing="0" class="table">
							<tr>
								<td style="border-left: 1px solid #555; border-top: 1px solid #555;  border-bottom: 1px solid #555;font: 12px verdana; color: #555; background: #ccc; text-align: center; width: 250px;">Тема</td>
								<td style="border-left: 1px solid #555; border-top: 1px solid #555; border-bottom: 1px solid #555; padding: 0 4px; font: 11px verdana; color: #555; background: #ccc; text-align: center; width: 50px;">Видяна</td>
								<td style="border-left: 1px solid #555; border-top: 1px solid #555;  border-bottom: 1px solid #555;padding: 0 4px; font: 11px verdana; color: #555; background: #ccc; text-align: center; width: 50px;">Отговори</td>
								<td style="border-right: 1px solid #555; border-left: 1px solid #555; border-bottom: 1px solid #555; border-top: 1px solid #555;font: 11px verdana; color: #555; background: #ccc; text-align: center;">Последна публикация от</td>

							</tr>
							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><a href="#"><span style="color: #6e6c6c;">Как да направя?</span></a><br /><div style="font-size: 12px;">От: <span class="topic">BurnToBeEviL</span></div></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">2</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">0</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">BurnToBeEviL</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><a href="#"><span style="color: #6e6c6c;">Как да направя?</span></a><br /><div style="font-size: 12px;">От: <span class="topic">BurnToBeEviL</span></div></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">2</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">0</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">BurnToBeEviL</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><a href="#"><span style="color: #6e6c6c;">Как да направя?</span></a><br /><div style="font-size: 12px;">От: <span class="topic">BurnToBeEviL</span></div></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">2</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">0</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">BurnToBeEviL</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><a href="#"><span style="color: #6e6c6c;">Как да направя?</span></a><br /><div style="font-size: 12px;">От: <span class="topic">BurnToBeEviL</span></div></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">2</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">0</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">BurnToBeEviL</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><a href="#"><span style="color: #6e6c6c;">Как да направя?</span></a><br /><div style="font-size: 12px;">От: <span class="topic">BurnToBeEviL</span></div></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">2</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">0</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">BurnToBeEviL</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #555;"><img src="images/posts.png" alt="posts" /><a href="#"><span style="color: #6e6c6c;">Как да направя?</span></a><br /><div style="font-size: 12px;">От: <span class="topic">BurnToBeEviL</span></div></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #555;">2</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #555;">0</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #555;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">BurnToBeEviL</span></td>
							</tr>
					 </table><div class="clear"></div>

					 <!-- krai na posledno ot foruma -->

					 <!-- na4alo na posledni 5 bana -->
					 <div class="containerheadright"><div class="ban"></div>Последни банове от сървърите</div><div class="clear"></div>
				         <div class="containerheadright2"></div><div class="clear"></div>

				 <br />
				     <div class="containerright">
				         <table width="100%" border="0" cellspacing="0" class="bans">
							<tr>
								<td style="border-left: 1px solid #555; border-top: 1px solid #555;  border-bottom: 1px solid #555;font: 12px verdana; color: #555; background: #ccc; text-align: center; width: 200px;">Причина</td>
								<td style="border-left: 1px solid #555; border-top: 1px solid #555; border-bottom: 1px solid #555; padding: 0 4px; font: 11px verdana; color: #555; background: #ccc; text-align: center; width: 80px;">Време</td>
								<td style="border-left: 1px solid #555; border-top: 1px solid #555;  border-bottom: 1px solid #555;padding: 0 4px; font: 11px verdana; color: #555; background: #ccc; text-align: center; width: 120px;">Баннат от</td>
								<td style="border-right: 1px solid #555; border-left: 1px solid #555; border-bottom: 1px solid #555; border-top: 1px solid #555;font: 11px verdana; color: #555; background: #ccc; text-align: center;">Играч</td>

							</tr>
							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><span style="color: #6e6c6c;">Izpolzva wall hack</span><br /></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">5 days</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc; color: #5e80b3; font-size: 14px; ">BurnToBeEviL</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">HaKeR4o0</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><span style="color: #6e6c6c;">Izpolzva wall hack</span><br /></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">5 days</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc; color: #5e80b3; font-size: 14px; ">BurnToBeEviL</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">HaKeR4o0</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><span style="color: #6e6c6c;">Izpolzva wall hack</span><br /></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">5 days</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc; color: #5e80b3; font-size: 14px; ">BurnToBeEviL</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">HaKeR4o0</span></td>
							</tr>

							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #ccc;"><img src="images/posts.png" alt="posts" /><span style="color: #6e6c6c;">Izpolzva wall hack</span><br /></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;">5 days</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc; color: #5e80b3; font-size: 14px; ">BurnToBeEviL</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #ccc;  border-right: 1px solid #555;"><span style="text-align:center;" class="topic">HaKeR4o0</span></td>
							</tr>



							<tr  >
								<td class='m_tables_m' style="background: #f4f4f4; text-align: left; font-size: 16px; border-left: 1px solid #555; padding-left: 2px; border-bottom: 1px solid #555;"><img src="images/posts.png" alt="posts" /><span style="color: #6e6c6c;">Izpolzva wall hack</span><br /></td>

							    <td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #555;">5 days</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #555; color: #5e80b3; font-size: 14px; ">BurnToBeEviL</td>
								<td class='m_tables_m' style="background: #f4f4f4; text-align: center; font: 12px verdana; color: #555;  border-left: 1px solid #bbb; border-bottom: 1px solid #555;  border-right: 1px solid #555; "><span style="text-align:center;" class="topic">HaKeR4o0</span></td>
							</tr>
				         </table>
					 </div></div><div class="clear"></div>
					 <!-- krai na posledni 5 bana -->


						 <!-- na4alo na footer -->
						     <div class="footer">
							     <div class="logofooter"></div>
								 <p class="p1">Всички права запазени! &#169 magma-cs.info 2012/2012 </p><br />
								 <p class="p2">Дизайн и код: BurnToBeEviL </p>

							     <div class="footerukrasa"></div>

								     <div class="footercom">
									     Посети ни:
										 <a href="#"><div class="facebook" title="Посетете ни в Facebook"></div></a>
										 <a href="#"><div class="twitter" title="Последвайте ни в Twitter"></div></a>
									 </div>

								 <div class="footerukrasa"></div>

								 <div class="footernavigation">
								     Навигация:
									 <ul>
									    <li><a href="#"><span style="color: #5882b7;" title="Върнете се в началото">Начало</span></a></li>
									    <li><a href="#" title="Посетете форума ни">Форум</a></li>
									    <li><a href="#" title="Вижте сървърите ни">Сървъри</a></li>
									    <li><a href="#" title="Вижте всички баннати хора">Бан лист</a></li>
									    <li><a href="#" title="Разгледайте услугите ни">SMS Услуги</a></li>
									    <li><a href="#" title="Нашите банери">Банери</a></li>
									    <li><a href="#" title="Запознайте се с нас">Екип</a></li>
									    <li><a href="#" title="Свържете се с нас">Контакти</a></li>

									 </ul>

								 </div>

								 <div class="footerukrasa"></div>

								 <div class="footerlink">
								     Приятели:
								     <ul class="link">
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>
									    <li><a href="#">Вашият линк!</a></li>

									 </ul>
								 </div>

								 <div class="footerukrasa"></div>

								 <div class="reclame2">
								     <a href="#"><div class="rec"></div></a>
								     <a href="#"><div class="rec"></div></a>
								     <a href="#"><div class="rec"></div></a>
								     <a href="#"><div class="rec"></div></a>
								     <a href="#"><div class="rec"></div></a>

								 </div>
							 </div>

						 <!-- krai na footer -->
	 </div></div>
		 </body>
</html>























