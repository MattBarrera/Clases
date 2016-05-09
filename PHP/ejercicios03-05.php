<?PHP
$_titulo = "Tutorial PHP";
define ("DEBUG", true);
if (DEBUG == true) {
  var_dump ($_GET);
  var_dump ($_POST);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
</head>
<body>
  <h1 style="text-decoration: underline;"><?php echo $_titulo; ?></h1>
  <p><?php echo "PHP ​es un lenguaje de programación de uso general de código del lado del servidor
originalmente diseñado para el desarrollo web de contenido dinámico."; ?></p>

    <!-- Form Code Start -->
    <div id='fg_membersite'>
        <form id='register' action='' method='post' accept-charset='UTF-8'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='Nombre'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='nombre' id='nombre' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='mail'>
                    <label for='email' >Email:</label><br/>
                    <input type='email' name='mail' id='mail' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='usuario'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='contraseña'>
                    <label for='password' >Contaseña*:</label>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php if(!isset ($_GET["versionCorta"])) { ?>
                  <div class='contraseña' style='height:80px;'>
                      <label for='password' >Confirma Contaseña*:</label><br/>
                      <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                      <input type='password' name='password' id='password' maxlength="50" />
                      <div id='register_password_errorloc' class='error' style='clear:both'></div>
                  </div>
                <?php } ?>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>
        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->


    </body>
</html>
