<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%
		if(session.getAttribute("username")==null)
		{
			 out.println("<meta http-equiv='refresh' content='5;URL=../login.html'>");//redirects after 3 seconds
	    	   out.println("<h2 style='color:red;'>You must login first!</h2>");
	    	   out.println("<p style='color:black;'>Please wait while you are being redirected...</p>");
		}
	
		else
		{
			response.sendRedirect("../uc.html");
		}
	
	%>
</body>
</html>