<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	   <title>Login</title>
        
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            
            <div class="row">
                <div class="col col-md-4">
                </div>
                <div class="col col-md-4">
                    <form method="post" action="<?php echo base_url('Seguridad/login'); ?>">
                        <div class="text-center">
                        <h3>Login</h3>
                        </div>
                        </br>
                        <div class="input-group form-gorup">
                        <span class="input-group-addon"><img src="<?php echo base_url("/img/icon.png");?>" width="20" height="20"></span>
                        <input type="text" name="usuario" autofocus class="form-control" />
                        </div>
                            </br>
                        <div class="input-group form-gorup">
                        <span class="input-group-addon"><img src="<?php echo base_url("/img/iconpass.png");?>" width="20" height="20">
</span>
                        <input type="password" name="clave" class="form-control" />
                        </div>
                            </br>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-info">Ingresar</button>
                            <br>
                            <br>
                            <a href="<?php echo base_url('seguridad/registrate'); ?>" >Registrate</a>
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>
