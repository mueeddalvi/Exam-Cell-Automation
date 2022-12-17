<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<head>
				<title>About Us</title>
				<link rel="stylesheet" type="text/css" href="../css/about.css"></link>
			</head>
			<body>
			<header>
				<div>
					<div id="branding">
						<h1>University of <span class="highlight">Pune</span></h1>
					</div>
					<nav>
						<ul>
							<li class="current"><a href="../home.php">Home</a></li>
							<li><a href="../login.html">Login</a></li>
							<li><a href="../sr1.html">Services</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<br/>
			<!-- <input type="button" id="back" onclick="history.back()" value="Go back!"/> -->
			<div class="container">
				<h1 id="title">ABOUT</h1>
				<h2 id="text"><strong><u>Mission:</u></strong></h2>
				<div class="content">
				<xsl:for-each select="about">
					<p><xsl:value-of select="mission"/></p>
				</xsl:for-each>
				</div>
				<table>
					<tr>
						<th>Dev</th>
						<th>Info</th>
					</tr>
					<xsl:for-each select="about/developers/developer">
						<tr>
							<td><xsl:value-of select="name"/></td>
							<td><xsl:value-of select="information"/></td>
						</tr>
					</xsl:for-each>
				</table>
				<br />
			</div>
			<footer>
			<nav id="fnav">
				<ul>
					<li><a href="about.xml">About us</a></li>
					<li><a href="../uc.html">Contact Us</a></li>
				</ul>
			</nav>
			<p>University of Pune , Copyright © 2020</p>
			</footer>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
