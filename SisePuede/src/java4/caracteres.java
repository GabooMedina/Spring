/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package java4;

import java.text.DecimalFormat;
import javax.swing.JTextField;

/**
 *
 * @author Gabo
 */
public class caracteres extends JTextField{

    public caracteres() {
        
           this.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusLost(java.awt.event.FocusEvent evt) {
                caracteres1FocusLost(evt);
            }
        });
        this.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                caracteres1KeyTyped(evt);
            }
        });

        
        
    }
    
       
    
    
    private void caracteres1KeyTyped(java.awt.event.KeyEvent evt) {                                     
          char caracter = evt.getKeyChar();

        if (caracter <'.' || caracter >'9' || caracter=='/') {
            // Devuelve el caracter aplastado
            evt.consume();
        }
     
    }   
      private void caracteres1FocusLost(java.awt.event.FocusEvent evt) {  
          
           double val = Double.parseDouble(this.getText().toString());
        if (val % 1 == 0 && !this.getText().matches("^[a-zA-Z]*$")) {
            this.setText(String.valueOf(val) + "0");
            //javax.swing.border.Border borde= BorderFactory.createLineBorder(Color.RED);
        } else {
            DecimalFormat formato1 = new DecimalFormat("#.0");
            this.setText(String.valueOf(formato1.format(val)));

        }
    }                                     

}
