<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Home Page</title>
	<link rel="stylesheet"  href="./css/homec.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>University of <span class="highlight">Pune</span></h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="home.jsp">Home</a></li>
					<%
					response.setHeader("Cache-Control","no-cache,no-store,must-revalidate");
						if(session.getAttribute("username")==null)
						{
							out.print("<li id='log-btn'><a href='login.html'>Login</a></li>");
						}
					
						else
						{
							out.print("<li id='log-btn'><a href='./jsp/logout.jsp'>Logout</a></li>");
						}
					
					
					
					%>
					<li><a href="s.html">Services</a></li>
				</ul>
			</nav>
		</div>

	</header>

<section id="showcase">
      <div class="container">
        <h1>University of <span class="highlight">Pune</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
      </div>
    </section>

<section id="boxes">
    	<div  class="container">
    		<div class="box">
    			<img src="./img/logo1.png">
    			<h3><a href="jsp/sr.jsp">Student registration</a></h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
    		</div>

    		<div class="box">
    			<img src="./img/logo2.png">
    			<h3><a href="./jsp/htg.jsp">Hall Ticket Generation</a></h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
    		</div>

    		<div class="box">
    			<img src="./img/logo3.png">
    			<h3><a href="uc.html">Time Table Generation</a></h3>
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
    		</div>

    	</div>
    </section>

	<footer>
        <nav id="fnav">
                <ul>
                    <li><a href="xml/about.xml">About us</a></li>
                    <li><a href="uc.html">Contact Us</a></li>
                </ul>
            </nav>
		<p>University of Pune , Copyright &copy; 2020</p>
	</footer>
</body>
</html>