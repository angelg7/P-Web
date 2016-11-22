<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	   <title>Animales</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
                
        </div>
        <div class="container">
            <h3>Registro de Animales</h3>
            <div class="row">
            <form method="post" action="<?php echo base_url('animal/guardar'); ?>">
                <div class="col-md-6">
                    
            <div class="form-group input-group">
                <span class="input-group-addon">ID:</span>
                <input type="text" readonly class="form-control" name="id" value="<?php echo $ani->id ?>"/>
                  
            </div>
               
            <div class="form-group input-group">
                <span class="input-group-addon">Nombre:</span>
                <input type="text" class="form-control"  name="Nombre" value="<?php echo $ani->Nombre ?>"/>
            </div>
                    
                    
            <div class="form-group input-group">
                <span class="input-group-addon">Fecha de Nacimiento:</span>
                <input type="date" class="form-control"  name="Nacimiento" value="<?php echo $ani->Nacimiento ?>"/>
            </div>
                    
            <div class="form-group input-group">
                <span class="input-group-addon">Tipo:</span>
                <select type="text" class="form-control"  name="Tipo" value="<?php echo $ani->Tipo ?>">
                <option>Felino</option>
                <option>Canino</option>
                <option>Ave</option>
                <option>Acuatico</option>
                <option>Otros</option>
                </select>
                
            </div>
                    
            <div class="form-group input-group">
                <span class="input-group-addon">Raza:</span>
                <input type="text" class="form-control" name="Raza" value="<?php echo $ani->Raza ?>" >
            </div>
                    
            <div class="form-group input-group">
                <span class="input-group-addon">Peso:</span>
                <input type="text" class="form-control"  name="Peso" value="<?php echo $ani->Peso ?>"/>
            </div>
                    
            <div class="form-group input-group">
                <span class="input-group-addon">Color:</span>
                <input type="text" class="form-control"  name="Color" value="<?php echo $ani->Color ?>"/>
            </div>
                
            <div class="form-group input-group">
                <span class="input-group-addon">Foto:</span>
                <input type="text" class="form-control"  name="Foto" value="<?php echo $ani->Foto ?>"/>
            </div>
            
                
            <div class="form-group input-group">
                <span class="input-group-addon">Comentario:</span>
                <input type="text" class="form-control"  name="Comentario" value="<?php echo $ani->Comentario ?>"/>
            </div>
            
            
           <div class="text-left">
              <button class="btn btn-success" type="submit">Guardar</button>
            <div class="text-right">
              <a class="btn btn-warning" href="<?php echo base_url().'/animal'; ?>"> Limpiar</a>
            </div>
            </div>
                  
                </div> 
            </form>
            </div>
            
            <div>
            <h3>Resultado</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Nacimiento</th>
                        <th>Tipo</th>
                        <th>Raza</th>
                        <th>Peso</th>
                        <th>Color</th>                        
                        <th>Foto</th>                        
                        <th>Comentario</th>                        
                        <td>
                            --
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach($anis as $ani){
                        
                        $linkEdit = base_url("/animal/?id={$ani->id}");
                        $linkDelete = base_url("/animal/delete/?id={$ani->id}");
                        
                        echo "<tr>
                        <td>{$ani->id}</td>
                        <td>{$ani->Nombre}</td>
                        <td>{$ani->Nacimiento}</td>
                        <td>{$ani->Tipo}</td>
                        <td>{$ani->Raza}</td>
                        <td>{$ani->Peso}</td>
                        <td>{$ani->Color}</td>
                        <td>{$ani->Foto}</td>
                        <td>{$ani->Comentario}</td>
                        
                        <td>
                            <a href='{$linkEdit}' class='btn btn-info btn-sm'>Edit</a>
                            <a href='{$linkDelete}' onclick='return validarBorrar();' class='btn btn-danger btn-sm'>Del</a>
                        </td>
                        </tr>";
                    }
                    
                    ?>
                </tbody>
            </table>
            </div>
            
            <div class="text-right">
                <a href="<?php echo base_url('seguridad/salir'); ?>" class="btn btn-warning">Salir de Sesion</a>
            </div>
            
        </div>
        
        <script>
        function validarBorrar(){
           return confirm("Seguro que desea borrar esta fila, esta operacion no se puede cancelar"); 
        }
        </script>
        </font>
    </body>
</html>