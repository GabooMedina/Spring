package java2;
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Gabo
 */
public class Conexion {
  
 Connection cn = null;
 
 public Connection conectar(){
     
     String host = "jdbc:mysql://localhost/quinto";
     String user ="root";
     String psw = "";
     
     try {
         cn = DriverManager.getConnection(host,user,psw);
     } catch (SQLException ex) {
         System.out.println(ex);
     }
     
     return cn;
 }
    
}
