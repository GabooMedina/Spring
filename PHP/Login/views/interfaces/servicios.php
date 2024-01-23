<?php
$usuario = $_SESSION['usuario'];
if (isset($_SESSION['usuario'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/themes/color.css">
        <link rel="stylesheet" type="text/css" href="jquery-easyui-1.10.16/demo/demo.css">
        <script type="text/javascript" src="jquery-easyui-1.10.16/jquery.min.js"></script>
        <script type="text/javascript" src="jquery-easyui-1.10.16/jquery.easyui.min.js"></script>
        <link rel="stylesheet" href="/css/stylelogin.css" type="text/css">
        <title>Servicios</title>
    </head>

    <body>

        <h2>REPORTES DE ESTUDIANTES (JQUERY) </h2>
        <div class=centrar>
            <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:700px;height:250px" url="models/seleccionar.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                    <tr>
                        <th field="cedula" width="50">Cedula</th>
                        <th field="nombre" width="50">Nombre</th>
                        <th field="apellido" width="50">Apellido</th>
                        <th field="direccion" width="50">Direccion</th>
                        <th field="telefono" width="50">Telefóno</th>
                    </tr>
                </thead>
            </table>

            <div id="toolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo Estudiante</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Est</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar Estudiante</a>
                <a href="fpdf/PruebaV1.php" target="_blank" iconCls="icon-print" class="easyui-linkbutton" plain="true">Reporte</a>
                <a href="phpjasperxml/examples/databasesample.php" class="easyui-linkbutton" iconCls="icon-ok" plain="true">iReport</a>
            </div>

            <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
                <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
                    <h3>Informacion Estudiante</h3>
                    <div style="margin-bottom:10px">
                        <input name="cedula" class="easyui-textbox" required="true" label="cedula" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="nombre" class="easyui-textbox" required="true" label="nombre" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="apellido" class="easyui-textbox" required="true" label="apellido" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="direccion" class="easyui-textbox" required="true" label="direccion" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="telefono" class="easyui-textbox" required="true" label="telefono" style="width:100%">
                    </div>

                </form>
            </div>
            <div id="dlg-buttons">
                <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
            </div>

        </div>
        <script type="text/javascript">
            var url;

            function newUser() {
                var cedula = $('#cedula').val();
                $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Nevo Estudiante');
                $('#fm').form('clear');
                url = 'models/insertar.php';
            }

            function editUser() {
                var row = $('#dg').datagrid('getSelected');
                if (row) {
                    $('#dlg').dialog('open').dialog('center').dialog('setTitle', 'Editar Estudiante');
                    $('#fm').form('load', row);
                    url = 'models/editar.php?id=' + row.cedula;
                }
            }


            function saveUser() {
                $('#fm').form('submit', {
                    url: url,
                    iframe: false,
                    onSubmit: function() {
                        return $(this).form('validate');
                    },
                    success: function(result) {
                        var result = eval('(' + result + ')');
                        if (result.errorMsg) {
                            $.messager.show({
                                title: 'Error',
                                msg: result.errorMsg
                            });
                        } else {
                            $('#dlg').dialog('close');
                            $('#dg').datagrid('reload');
                        }
                    }
                });
            }

            function destroyUser() {
                var row = $('#dg').datagrid('getSelected');
                if (row) {
                    $.messager.confirm('Confirmar', 'Estas seguro que vas a eliminar el Estudiante?', function(r) {
                        if (r) {
                            $.post('models/eliminar.php', {
                                cedula: row.cedula
                            }, function(result) {
                                if (result.success) {
                                    $('#dg').datagrid('reload');
                                } else {
                                    $.messager.show({
                                        title: 'Correcto',
                                        msg: 'Se elimino'
                                    });
                                    $('#dg').datagrid('reload');
                                }
                            }, 'json');
                        }
                    });
                }
            }
        </script>
    </body>

    <section>
        <p>
            <h2>REPORTE ESTUDIANTES BOOTSTRAP</h2>
        </p>
        <div>
            <br><br>
            <?php
            include "models/deleteB.php";
            ?>
            <div class="container-fluid row">
                <form class="col-4 p-3" method="post">
                    <h2 class="text-center">REGISTRO</h2>
                    <?php
                    include "models/RegistroB.php";

                    ?>
                    <div class="mb-3">
                        <input type="hidden" id="accion" name="accion" value="insertar">
                        <label for="cedula" class="form-label">Cedula</label>
                        <input type="text" class="form-control" name="cedula" id="cedula">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono">
                    </div>
                    <button type="submit" class="btn btn-primary" value="insertar" name="btnRegistro">INGRESO</button>
                    <button type="submit" class="btn btn-primary" value="editar" name="btnRegistro">CAMBIOS</button>
                </form>

                <div>
                    <h3>BUSCADOR</h3>
                    
                     <form method="POST">

                     INGRESE CEDULA DEL ESTUDIANTE <br>
                     <input type="text" id="valor" name="valor">
                     <input type="submit" name="buscar" id="buscar" value="BUSCAR">
                     <a href="fpdf/PruebaV.php" target="_blank" iconCls="icon-print" class="easyui-linkbutton" plain="true">Reporte</a>

                     </form>

                     <br>
                     <br>
                     
                     <p>
                         ******************************************************************************************************
                     </p>
                     <br>
                     <?php
                     if (isset($_POST["buscar"])) {
                         $buscar=$_POST["valor"];
                         $sql ="SELECT * from estudiante WHERE cedula = '$buscar'";
                         $resultado=$conn->query($sql);
                         while ($row=$resultado->fetch_array()) {
                             echo"<table border='1'>";
                             echo"<tr> <th>CEDULA</th>  <th>NOMBRE</th>  <th>APELLIDO</th>  <th>DIRECCION</th>  <th>TELEFONO</th>  </tr>";
                             echo"<td>".$row["cedula"]."</td>";
                             echo"<td>".$row["nombre"]."</td>";
                             echo"<td>".$row["apellido"]."</td>";
                             echo"<td>".$row["direccion"]."</td>";
                             echo"<td>".$row["telefono"]."</td>";
                             echo"</table>";
                         }
                     }
                     ?>
                
                </div>
                
                <div class="col-8 p-4">
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                        
                            <?php
                            include("models/conexion.php");
                            $sql = $conn->query("SELECT * FROM estudiante");
                            
                            while ($datos = $sql->fetch_object()) { ?>
                                <tr>
                                    <td><?= $datos->cedula ?></td>
                                    <td><?= $datos->nombre ?></td>
                                    <td><?= $datos->apellido ?></td>
                                    <td><?= $datos->direccion ?></td>
                                    <td><?= $datos->telefono ?></td>
                                    <td>
                                        <!-- Asocia la función de JavaScript a los botones -->
                                        <button onclick="editarFila(this)" class="btn btn-primary">EDITAR</button>
                                        <a href="index.php?action=servicios&cedula=<?= $datos->cedula ?>" class="btn btn-danger">ELIMINAR</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                function editarFila(btn) {
                    const row = btn.closest('tr');
                    const cedula = row.cells[0].innerText;
                    const nombre = row.cells[1].innerText;
                    const apellido = row.cells[2].innerText;
                    const direccion = row.cells[3].innerText;
                    const telefono = row.cells[4].innerText;

                    document.getElementById('cedula').value = cedula;
                    document.getElementById('cedula').disabled = true;
                    document.getElementById('nombre').value = nombre;
                    document.getElementById('apellido').value = apellido;
                    document.getElementById('direccion').value = direccion;
                    document.getElementById('telefono').value = telefono;
                    document.getElementById('accion').value = 'editar';

                    // Agregar evento al botón de cambios para habilitar el campo de cédula
                    document.querySelector('button[value="editar"]').addEventListener('click', function() {
                        document.getElementById('cedula').disabled = false;
                    });
                }
            </script>
        </div>
    </section>

    </html>
<?php
} else {
    header("location:../index.php");
    exit;
}
?>