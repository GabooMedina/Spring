/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package java3;

import java.sql.*;
import java.util.ArrayList;
import javax.swing.DefaultListModel;
import javax.swing.JList;

/**
 *
 * @author Gabo
 */
public class listaRepaso extends JList {
    DefaultListModel modelo = new DefaultListModel();
    Conexion cn = new Conexion();
    
    public void cargarLista (String base, String tabla, String columna){
        try {
            
        Connection con = cn.conectar(base);
        String sql = "SELECT "+columna+ " FROM "+tabla;
        Statement st = con.createStatement();
        ResultSet rst = st.executeQuery(sql);
        
            while (rst.next()) {                
                ArrayList datos = new ArrayList();
                datos.add(rst.getString(columna));
                modelo.addAll(datos);
            }
            this.setModel(modelo);
        
        } catch (SQLException e) {
            System.out.println(e);
        }
      
    }
    
}
