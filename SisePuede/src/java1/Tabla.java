/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package java1;

import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author Gabo
 */
public class Tabla extends javax.swing.JFrame {
    
    DefaultTableModel tabla1 = new DefaultTableModel();

    /**
     * Creates new form Tabla
     */
    public Tabla() {
        initComponents();
        llenarTabla1();
    }
    
    public void llenarTabla1() {
        
        String[] columnas = {"PARES", "IMPARES"};
        tabla1.setColumnIdentifiers(columnas);
        jtblParesImpares.setModel(tabla1);
        
    }
    
    public void ingresoTabla1() {
        
        if (Integer.parseInt(jtxtIngresoTabla.getText()) % 2 == 0) {
            
            for (int i = 0; i < jtblParesImpares.getRowCount(); i++) {
                
                if (jtblParesImpares.getValueAt(i, 0).toString().isEmpty()) {
                    jtblParesImpares.setValueAt(jtxtIngresoTabla.getText(), i, 0);
                    return;
                }
            }
            String[] pares = new String[2];
              pares[0] = jtxtIngresoTabla.getText(); 
            pares[1] = "";
            tabla1.addRow(pares);
            
        } else {
            
            for (int i = 0; i < jtblParesImpares.getRowCount(); i++) {
                   if (jtblParesImpares.getValueAt(i, 1).toString().isEmpty()) {
                    jtblParesImpares.setValueAt(jtxtIngresoTabla.getText(), i, 1);
                    return;
                }
            }
            String[] impares =  new String[2];
            impares[0]= "";
            impares[1]= jtxtIngresoTabla.getText();
            tabla1.addRow(impares);
        }
        
    }
    
    public void sumarTabla(){
        
        int sumaPar=0;
        int sumaImpar=0;
        
        for (int i = 0; i < jtblParesImpares.getRowCount(); i++) {
            if (!tabla1.getValueAt(i, 0).toString().isEmpty()) {
                
                sumaPar += Integer.parseInt(tabla1.getValueAt(i, 0).toString());
                
            }
            
        }
        
        for (int i = 0; i < jtblParesImpares.getRowCount(); i++) {
            if (!tabla1.getValueAt(i, 1).toString().isEmpty()) {
                
                sumaImpar += Integer.parseInt(tabla1.getValueAt(i, 1).toString());
                
            }
        
        }
        JOptionPane.showMessageDialog(null, "PARES ="+sumaPar+"\n"+"IMPARES = "+sumaImpar);
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jtxtIngresoTabla = new javax.swing.JTextField();
        jbtnIngresoNumeros = new javax.swing.JButton();
        jbtnResultadoTabla = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        jtblParesImpares = new javax.swing.JTable();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jtxtIngresoTabla.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jtxtIngresoTablaActionPerformed(evt);
            }
        });

        jbtnIngresoNumeros.setText("INGRESO");
        jbtnIngresoNumeros.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnIngresoNumerosActionPerformed(evt);
            }
        });

        jbtnResultadoTabla.setText("RESULTADO");
        jbtnResultadoTabla.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jbtnResultadoTablaActionPerformed(evt);
            }
        });

        jtblParesImpares.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {},
                {},
                {},
                {}
            },
            new String [] {

            }
        ));
        jScrollPane1.setViewportView(jtblParesImpares);

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(19, 19, 19)
                        .addComponent(jtxtIngresoTabla, javax.swing.GroupLayout.PREFERRED_SIZE, 77, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jbtnIngresoNumeros)
                        .addGap(12, 12, 12)
                        .addComponent(jbtnResultadoTabla))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(71, 71, 71)
                        .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 177, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(326, Short.MAX_VALUE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(48, 48, 48)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jtxtIngresoTabla, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jbtnIngresoNumeros)
                    .addComponent(jbtnResultadoTabla))
                .addGap(82, 82, 82)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 156, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(73, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jbtnResultadoTablaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnResultadoTablaActionPerformed
        // TODO add your handling code here:
        sumarTabla();
    }//GEN-LAST:event_jbtnResultadoTablaActionPerformed

    private void jtxtIngresoTablaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jtxtIngresoTablaActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jtxtIngresoTablaActionPerformed

    private void jbtnIngresoNumerosActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jbtnIngresoNumerosActionPerformed
        // TODO add your handling code here:
        ingresoTabla1();
    }//GEN-LAST:event_jbtnIngresoNumerosActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Tabla.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Tabla.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Tabla.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Tabla.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Tabla().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JPanel jPanel1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JButton jbtnIngresoNumeros;
    private javax.swing.JButton jbtnResultadoTabla;
    private javax.swing.JTable jtblParesImpares;
    private javax.swing.JTextField jtxtIngresoTabla;
    // End of variables declaration//GEN-END:variables
}
