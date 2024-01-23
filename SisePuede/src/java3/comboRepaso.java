/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package java3;
import java.sql.*;
import java.util.ArrayList;
import javax.swing.DefaultComboBoxModel;
import javax.swing.JComboBox;

/**
 *
 * @author Gabo
 */
public class comboRepaso extends JComboBox {
    
    DefaultComboBoxModel modelo = new DefaultComboBoxModel();
    Conexion cn = new Conexion();
    
    public void cargarCombo(String base, String tabla, String columna){
        
        Connection con = cn.conectar(base);
        try {
             String sql = "SELECT "+columna+" FROM "+tabla;
             Statement st;
              st = con.createStatement();
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
