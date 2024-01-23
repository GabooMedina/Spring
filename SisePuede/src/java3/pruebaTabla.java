/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package java3;

import javax.swing.JTable;
import java.sql.*;
import javax.swing.table.DefaultTableModel;
/**
 *
 * @author Gabo
 */
public class pruebaTabla extends JTable {
    
    DefaultTableModel modelo= new DefaultTableModel();
    Conexion con = new Conexion();
    
    public void llenarTabla(String base, String tabla, String columna){
        
        Connection cn = con.conectar(base);
        String[] nombre = {columna};
        String [] datos = new String[1];
        modelo.setColumnIdentifiers(nombre);
        try {
            Statement st;
            String sql = " SELECT "+columna+" FROM "+tabla;
            st = cn.createStatement();
            ResultSet rst = st.executeQuery(sql);
            
            while (rst.next()) {                
                datos[0]=rst.getString(columna);
                modelo.addRow(datos);
            }
            this.setModel(modelo);
        } catch (SQLException e) {
            System.out.println(e);
        }
        
    }
    
}
