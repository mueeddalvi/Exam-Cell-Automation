package com.login;
import java.sql.*;
public class connect {
	
	public Connection initializeDatabase() throws SQLException
	{
		
		String dbDriver="com.mysql.jdbc.Driver";
		String dbURL="jdbc:mysql://localhost:3306/";
		String dbName="login";
		String dbUsername="root";
		String dbPassword="amueed99";
		
		Connection con= DriverManager.getConnection(dbURL+dbName,dbUsername,dbPassword);
		
		return con;
		
	}
}
