	<!DOCTYPE HTML>
	<html>
		<head>
			<title>Contact Us</title>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600|Source+Code+Pro" rel="stylesheet" />
			<!--[if lte IE 8]><script src="js/html5shiv.js" type="text/javascript"></script><![endif]-->
			<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
			<link href="default.css" rel="stylesheet" type="text/css" media="all" />
			<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
					
			
			
		</head>
		<body>
			<div id="header-wrapper">	
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="index.html">Southfield Properties</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li><a href="GP.html">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>	
		<div id="featured">&nbsp;</div>

			<div id="site_content">		
				<div class="container">			
					
				<!-- Features -->
					<div class="row">

						<section class="4u">
							<div id="sidebar">
								<ul class="style1">
									<li class="first">
										<h3>Gallery</h3>
											<img src="images/3_sm.jpg" width="500" height="200"*/ alt="" class="image image-full" />
											<img src="images/4_sm.jpg" width="500" height="200"*/ alt="" class="image image-full" />
											<img src="images/5_sm.jpg" width="500" height="200"*/ alt="" class="image image-full" />
											<p><a href="gallery.html"> More..</a></p>
									</li>
									<li>
											<h3>Extra Info</h3>
										<p><a href="#">...</a></p>
									</li>
								</ul>
							</div>
						</section>
						
						<section class="8u">						
							<h1>Contact Us</h1>
							
							<?PHP
 
require_once("fgcontactform.php");
 
$formproc = new FGContactForm();
 

$formproc->AddRecipient('kerine.wint@gmail.com'); 
 

$formproc->SetFormRandomKey('gkEFthfv6gvGAuL');
 
if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thanks.html");
   }
}
 
?>
						

    <form id='contactus' method='post'>
<fieldset>
<legend>Contact us</legend>
 
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name'  maxlength="50" /><br/>
 
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' maxlength="50" /><br/>
 
    <label for='phone' >Phone Number:</label><br/>
    <input type='text' name='phone' id='phone' maxlength="15" /><br/>
 
    <label for='message' >Message:</label><br/>
    <textarea rows="10" cols="50" name='message' id='message'> </textarea>
 
    <input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>
						</section>					
						
					</div>
				</div>
			</div>		
			<div id="footer" class="container">
		<div>
			<header class="title">
				<h2>Get in touch</h2>
				<span class="byline"><hr></span> </header>
			<p class="contact">
				<!-- Footer -->
					<footer>
						<h4 align="center"><b>Contact Atlantic Motors Ltd.<br>
								10 Holborn Road.<br>
								Kingston 5.<br>
								Tel: (876) 926-7613 or (876) 772-6777 <br>
								Fax: (876) 926-7943<br>
								Email: 
			<script language="JavaScript">
			<!--

				var lhs = "brenton1";
				var rhs = "kasnet.com";

				document.write("<A HREF=\"mailto");
				document.write(":" + lhs + "@");
				document.write(rhs + "\">" + lhs + "@" + rhs + "<\/a>");


			//-->
			</script><a href="mailto:brenton1@kasnet.com"></a>
			</b></h4>
					</footer>	
			</p>
		</div>
	</div>		
		</body>
	</html>
