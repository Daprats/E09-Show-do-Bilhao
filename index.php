<?php 
    session_start();
    require("user.php");
    require("login.inc");
    require("menu.inc");
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title> Show do Bilhão </title>
        <meta charset="UTF-8">
    </head>

    <body>
        <div style="<?php
            if(isset($_SESSION['user'])){
                echo "display:none;";
            }
            ?>">
            <form method="POST" id="login">
                <label>LOGIN :<br></label>
                <input type="text" name="login">
                <label><br><br> SENHA :<br></label>
                <input type="password" name="senha"><br><br>
                <input type="submit" name="logar" value="Login">
            </form>  
            <form method="POST" id="registrar" style='display:none;'>
                <label><h3>Cadastro</h3></label>
                <label><br> NOME :<br></label>
                <input required type="text" name="nome">
                <label><br><br> LOGIN :<br></label>
                <input required type="text" name="login">
                <label><br><br> EMAIL :<br></label>
                <input required type="text" name="email">
                <label><br><br> SENHA :<br></label>
                <input required type="password" name="senha"><br><br>
                <input required type="submit" name="registrar" value="Resgistrar">
            </form> 
            <div id="registrar-botao">
                <br><h4><strong>Se ainda não tiver conta:</strong></h4>
                <button onclick="abrirRegistrar()">Cadastrar</button><br><br>
            </div>
            <div id="login-botao" style="display:none;">
                <br><h4><strong>Se já tiver conta:</strong></h4>
                <button onclick="abrirLogin()">Logar</button><br><br>
            </div>
        </div>
        <div style="<?php
            if(!isset($_SESSION['user'])){
                echo "display:none;";
            }
            ?>">
            <p><strong>Esse é Show do Bilhão do Pratudo</strong>, onde se você acerta tudo, ganha <strong>nada!</strong> <br>E se vc acerta nada, ganha <strong>nada</strong> também :)</p>
            
            <form action="perguntas.php" method="POST">
                <input type="submit" value="Jogar">
                <br><br>
                <input type="hidden" name="numQuestao" value="0">
            </form>            
            <form method="POST">
                <input type="submit" name="logOut" value="Deslogar"><br><br>
            </form>
        </div>
        <script>
            function abrirLogin(){
                document.querySelector('#login').style.display = 'block';
                document.querySelector('#registrar-botao').style.display = 'block';
                document.querySelector('#registrar').style.display = 'none';
                document.querySelector('#login-botao').style.display = 'none';
            }

            function abrirRegistrar(){
                document.querySelector('#login').style.display = 'none';
                document.querySelector('#registrar-botao').style.display = 'none';
                document.querySelector('#registrar').style.display = 'block';
                document.querySelector('#login-botao').style.display = 'block';
            }
        </script>
    </body>
    <?php 
        require("rodape.inc");
    ?>
</html>