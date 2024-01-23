/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package java4;

import javax.swing.JTextField;


/**
 *
 * @author Gabo
 */
public class letras extends JTextField{

    public letras() {
        
         this.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                letras1KeyTyped(evt);
            }
        });
    }
    
    
    
    
        private void letras1KeyTyped(java.awt.event.KeyEvent evt) {                                 
       
            
             String letra =  String.valueOf(evt.getKeyChar())   ;
         
         if (!letra.matches("^[a-z]*$") && !letra.matches("^[a-zA-Z]+$") ) {
             
             evt.consume();
             
         }
            
    }                                

    
}
