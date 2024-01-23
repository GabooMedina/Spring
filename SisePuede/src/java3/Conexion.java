/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package java3;
import java.sql.*;
/**
 *
 * @author Gabo
 */
public class Conexion {
    
    Connection cn = null;
    
    public Connection conectar(String base){
        
        String host ="jdbc:mysql://localhost/"+base;
        String user = "root";
        String psw ="";
        
        try {
            cn = DriverManager.getConnection(host,user,psw);
        } catch (SQLException e) {
            System.out.println(e);
        }
        return cn;
    }
}
