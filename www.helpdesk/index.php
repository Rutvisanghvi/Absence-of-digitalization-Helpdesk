<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
		<link rel="icon" type="image/png" sizes="16x16" href="images/download.jpg" >
		<title>HelpDesk</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="HomePage.css">
		<script src="https://unpkg.com/scrollreveal"></script>
		
		<style>
			
		</style>
		
		<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</head>
	<body>
        <div class="homepage" style="background: linear-gradient(rgba(255, 255, 255, 0.6),rgba(0,0,0,0.1)), url('images/bg2.jpg');background-size: cover; background-repeat: no-repeat; background-attachment: scroll;">
			<!-- <header >
				<section class="text-gray-600 body-font">
				<div class="container px-5 py-24 mx-auto flex flex-wrap" style="margin: -70px 0 0 10px;">
				<img id="img1" src="download.jpg" style="width: 60px; height: 50px;" alt="helpdesk">
				
				<img src="HelpDesk.png" style="width: 165px; height: 30px; margin-top: 10px; margin-left: 3.6px;" alt="helpdesk">
				</div>
				</section>
			</header> -->
			<div class="first">
				<div>
					<p id="p1" class="main-title">Welcome To HelpDesk</p>
				</div>
				<div id="choose" style="">
					<div class="text-box" style="">
						<p style="font-size: 1.35em; line-height: 1.35em; color: #020939; width: 400px; text-align: right; padding-top: 6px; ">Find The Necessary Information About
						Employee you desire to approach.</p>
					<p align="left" style="font-size: 1.35em; line-height: 1.35em; color: #020939; width: 400px; text-align: right;margin-bottom: -6px;"> Choose Your Primary Language Below.</p></div>
					
					<div id="lang" style="display: flex; font-family: 'Inter' Arial; margin-top: 30px;">
						<div class="btn">
							<button class="btn1" onclick="window.location.href='#three';" type="button" style="height: 45px; width: 210px; margin-right: 7px;">Choose Language</button>
							<div class="btn-bg1"></div>
						</div>
						<div class="btn">
							<button class="btn2" onclick="window.location.href = '#one';" type="button"  style="height: 45px; width: 210px; margin-left: 7px;">Learn More</button>
							<div class="btn-bg2"></div>
						</div>
					</div>
				</div>
			</div>
			<footer class="text-center bg-gray-900 text-white" style="margin-top: 8rem;">
				
				
				<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
				Collector Office Chhotaudepur
				</div>
			</footer>
		</div>
		
		<!-- One -->
		<section id="one" class="wrapper style2 special" style="text-align: center; box-sizing: inherit; padding-top: 48px; margin: 0 0 1em 0; letter-spacing: -0.0125em; font-weight: normal; color: #020939; font-size: 1.75em; line-height: 1.5em; ">
			<header class="major">
				<b><h2 style="">This is Helpdesk for Collector Office Chhotaudepur<br /></h2></b>
			</header>
			
		</section>
		
		<!-- Two -->
		<section id="two" class="wrapper" style="">
			<div class="container">
				<section class="spotlight spotlight1" style="border-top: solid 2px #eeeeee; margin-top: 48px; padding-top: 48px;">
					<div class="image" style="margin-right: 6px;"><img src="images/download (1).jpg" alt="" /></div>
					<div class="content 1" style="padding-left: 21px;">
						<h3 class="heading head1" style="">Introduction</h3>
						<p align="left" class="info info1" style="text-align: left;">A Helpdesk is a Customer service function that provides support to customers or users by answering their questions and addressing their problems.</p>
					</div>
				</section>
				<section class="spotlight spotlight2" style="margin-top: 0; padding-top: 48px; border-top: solid 2px #eeeeee;">
				<div class="content 2" style="text-align: right; padding-right: 21px;">
				<h3 class="heading head2" id="head2" style="">Location</h3>
				<p align="right" class="info info2" style="text-align: right;">You can find here the address of the employee you wish to contact, which includes the department building, floor number, and cabin number.</p>
				<!-- Here you will find the location of the employee you desire to reach out that includes department building,floor no,cabin no as well. -->
				</div>
				<div class="image"><img src="images/location1.png" alt="" style="height: 200px;" /></div>
				
				</section>
				<section class="spotlight spotlight3" style="margin-top: 0; padding-top: 48px; padding-bottom: 48px;  border-bottom : solid 2px #eeeeee;border-top: solid 2px #eeeeee;">
				<div class="image"><img src="images/rts.png" alt="" style="height: 200px;" /></div>
				<div class="content 3" style="margin-bottom: 0; padding-left: 21px;">
				<h3 class="heading head3" style="">Real Time Status</h3>
				<p align="left" class="info info3" style="text-align: left;">You can get real-time updates of the status of your employees here. For example, you will learn whether the employee is available or not, if he is busy, or if he is present or absent.</p>
				<!-- Here you will get real time status update of the employees.<br>You will get to know about information like if the employee is available or not , if he is busy ,or if he is present or absent today. -->
				</div>
				</section>
				</div>
				</section>
				
				<!-- Three -->
				<!-- <section id="three" class="wrapper style2 special">
				<header class="major">
				<h2 style="font-family: 'Alice';">Choose A Language.</h2>
				<p>Currently we provide only two languages Hindi and English<br />
				you can choose between them to proceed your search.</p>
				</header>
				<ul class="actions special">
				<li><button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='file:///D:/bootstrap/Templates/T1/second.html'">Englsih</button></li>
				<li><button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='file:///D:/bootstrap/Templates/T1/second.html'">Hindi</button></li>
				</ul>
				</section> -->
				
				<div id="three" style="margin-top: 60px; border-bottom: solid 2px #eeeeee; margin-left: auto;
				margin-right: auto;
				width: 50em;">
				<div class="CL">
				<p style="  color: #22284a; font-size: 30px; margin-bottom: 15px;">Choose a Language</p>
				<p style="color: #020939;	opacity: 0.6;	letter-spacing: -0.02em;	font-weight: normal;	line-height: 1.5em;	font-size: 1.35em;	 margin-bottom: 21px;">As of right now, we only provide two languages in our search system : Hindi and English.<br> You can choose between them to find the information you are seeking.</p>
				</div>
				
				
				<div id="lang" style="display: flex; font-family: 'Inter' Arial;">
				<div class="btn">
				<button class="btn3" onclick="window.location.href='demodeptcard.php?lang=english';" type="button" style="height: 45px; width: 210px; margin-top: 0px; margin-left: 172px; margin-right: 7px;">English</button>
				<div class="btn-bg3"></div>
				</div>
				<div class="btn">
				<button class="btn4" onclick="window.location.href = 'demodeptcard.php?lang=hindi';" type="button"  style="height: 45px; width: 210px; margin-top: 0px; margin-left: 7px;">हिन्दी</button>
				<div class="btn-bg4"></div>
				</div>
				<div class="btn" style="margin-left : 5px;">
					<button class="btn4" onclick="window.location.href = 'demodeptcard.php?lang=guj';" type="button"  style="height: 45px; width: 210px; margin-top: 0px; margin-left: 7px;">ગુજરાતી</button>
					<div class="btn-bg5"></div>
				</div>
				</div>
				</div>
				
				
				<audio controls autoplay src="Voice HindiEnglish.mp3" style="display: none;">				
				
				<!-- Scripts -->
				
				<script>
				ScrollReveal({
				//reset: true,
				distance: '60px',
				duration: 2000,
				// delay: 400,
				
				});
				
				
				ScrollReveal().reveal('.main-title', { delay: 50, origin: 'top',  rotate: {
				y: 20
				}
				});
				ScrollReveal().reveal('.text-box', { delay: 75, origin: 'top', rotate: {
				y: 20
				}
				});
				ScrollReveal().reveal('.btn1, .btn-bg1, .btn2, .btn-bg2', { delay: 100, origin: 'bottom', rotate: {
				y: 20
				}});
				ScrollReveal().reveal('.major', { delay: 75, origin: 'bottom', rotate: {
				y: 20
				}
				});
				ScrollReveal().reveal('.info2', { delay: 400, origin: 'left', rotate: {
				y: 100
				} });
				ScrollReveal().reveal('.info1 , .info3', { delay: 400, origin: 'right',rotate: {
				y: 100
				} });
				ScrollReveal().reveal('#head2', { delay: 300, origin: 'left', rotate: {
				y: 100
				}});
				ScrollReveal().reveal('.head1 , .head3', { delay: 300, origin: 'right', rotate: {
				y: 100
				} });
				ScrollReveal().reveal('.spotlight1 , .spotlight3', { delay: 300, origin: 'left', interval: 100 ,rotate: {
				y: 100
				}});
				ScrollReveal().reveal('.spotlight2', { delay: 300, origin: 'right', interval: 100 ,rotate: {
				y: 100
				}});
				ScrollReveal().reveal('.CL', { delay: 125, origin: 'bottom',  rotate: {y:20}
				});
				ScrollReveal().reveal('.btn3, .btn4, .btn-bg3, .btn-bg4, .btn-bg5', { delay: 145, origin: 'bottom', rotate: {
				y: 20
				} });
				
				</script>
				<!-- <script src="NewUi/assets/js/jquery.scrolly.min.js"></script>
				<script src="NewUi/assets/js/browser.min.js"></script>
				<script src="NewUi/assets/js/jquery.min.js"></script>
				<script src="NewUi/assets/js/breakpoints.min.js"></script>
				<script src="NewUi/assets/js/util.js"></script>
				<script src="NewUi/assets/js/main.js"></script> -->
				
	</body>
</html>		
				
								