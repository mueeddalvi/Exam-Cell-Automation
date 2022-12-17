package com.login;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import java.sql.*;

/**
 * Servlet implementation class log
 */
@WebServlet("/log")
public class log extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor. 
     */
    public log() {
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
		// TODO Auto-generated method stub
		res.setContentType("text/html");
		res.getWriter().append("Served at: ").append(req.getContextPath());
		PrintWriter out =res.getWriter();
		String username= req.getParameter("username");
		String password=req.getParameter("password");
		System.out.println("IN");
		out.print("<html><body>");
		boolean f=false;
		connect c= new connect();
		String sql="select * from login where uname=? and pass=?";
		try {
			Connection con = c.initializeDatabase();
			PreparedStatement st=con.prepareStatement(sql);
			st.setString(1, username);
			st.setString(2, password); 
			ResultSet rs=st.executeQuery();
			if(rs.next())
			{
				System.out.println("Exists!!");
				f=true;
			}
			
			else
				System.out.println("Invalid username or password!!");
		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		if(f)
		{
			HttpSession session =req.getSession();
			session.setAttribute("username",username);
			res.sendRedirect("home.jsp");
		}else {
		    	   out.println("<meta http-equiv='refresh' content='3';URL=login.html'>");//redirects after 3 seconds
		    	   out.println("<h2 style='color:red;'>Username or password incorrect!</h2>");
		    	   out.println("<p style='color:black;'>Please wait while you are being redirected...</p>");
		    	}
		out.print("</body></html>");
	}

}
