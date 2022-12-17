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
			response.sendRedirect("../sr1.html");
		}
		
		else
		{
			out.print("<h2 style='color:red;'>You are already registered!! Only one registration allowed!!</h2>");
			out.println("<meta http-equiv='refresh' content='3;URL=../home.jsp'>");
		}
	
	%>
</body>
</html>