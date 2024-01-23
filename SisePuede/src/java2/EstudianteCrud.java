
package java2;

import java.sql.*;
import java.util.ArrayList;

/**
 *
 * @author Gabo
 */
public class EstudianteCrud {

    private Conexion conexion = new Conexion();
    private Connection cn = conexion.conectar();
    private String select = "SELECT * FROM estudiante";
    private String ingreso = "INSERT INTO estudiante VALUES (?,?,?,?,?)";
    private String editar = "UPDATE estudiante SET nombre=?,apellido=?,direccion=?,telefono=? WHERE cedula =?";
    private String borrar = "DELETE FROM estudiante WHERE cedula =?";

    public ArrayList<Estudiante> cargar() {
        ArrayList<Estudiante> est = new ArrayList<>();
        try {
            Statement st;
            st = cn.createStatement();
            ResultSet rst = st.executeQuery(select);
            while (rst.next()) {
                String cedula = rst.getString("cedula");
                String nombre = rst.getString("nombre");
                String apellido = rst.getString("apellido");
                String direccion = rst.getString("direccion");
                String telefono = rst.getString("telefono");
                est.add(new Estudiante(cedula, nombre, apellido, direccion, telefono));
            }
        } catch (SQLException e) {
            System.out.println(e);
        }
        return est;
    }
    
    public int ingreso(Estudiante est){
        int n =0;
        
        try {
            PreparedStatement pst = cn.prepareStatement(ingreso);
            
            pst.setString(1, est.getCedula());
            pst.setString(2, est.getNombre());
            pst.setString(3, est.getApellido());
            pst.setString(4, est.getDireccion());
            pst.setString(5, est.getTelefono());
            
            n = pst.executeUpdate();
        } catch (SQLException e) {
            System.out.println(e);
        }
        
        return n;
    }
    
    
    public int editar (Estudiante est){
        
        int n = 0;
        
        try {
            PreparedStatement pst = cn.prepareStatement(editar);
            
            pst.setString(1, est.getNombre());
            pst.setString(2, est.getApellido());
            pst.setString(3, est.getDireccion());
            pst.setString(4, est.getTelefono());
            pst.setString(5, est.getCedula());
            
            n = pst.executeUpdate();
            
        } catch (SQLException e) {
            System.out.println(e);
        }
        return n;
    }
    
    public int eliminar (Estudiante est){
        
        int num = 0;
        
        try {
            PreparedStatement pst = cn.prepareStatement(borrar);
            pst.setString(1, est.getCedula());
            num = pst.executeUpdate();
        } catch (SQLException e) {
            System.out.println(e);
        }
        return num;
    }

}
