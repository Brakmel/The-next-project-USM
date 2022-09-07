<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USM.cl</title>
    <link rel="StyleSheet" href="../styles/index.css" type="text/css">
    <link rel="icon" href="../styles/img/Logo_UTFSM.ico">
</head>
<body>
    <!--Aqui esta nuestro logo de la USM-->
    <header>
        <a href="https://usm.cl/"><img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Logo_UTFSM.png"></a>
    </header>
    <header>
        <h3 class="h3_cv">Campus Vitacura.</h3>
    </header>
    <!--Aqui va el titulo y el boton para ir al panel de salas-->
    <main>
        <h1>¡Debes iniciar sesión para continuar!</h1>
        <form>
            <input type="text" id="usua" placeholder="Usuario">
            <input type="password" id="contra" placeholder="Contraseña">
        </form>
        <button onclick="login()" id="ingresar">Ingresar</button>
        <h2>Si no es parte del equipo, vuelta atras.</h2>
        <a href="../index.php"><input type="button" value="Regresar al inicio ↩️"></a>
    </main>
    <!--Esta es la parte inferior de la pagina web, aqui podran encontrar los dueños de la pagina web y la forma de contacto-->
    <footer>
        <div class="footer_img">
            <a href="https://www.linkedin.com/in/bran-marcelo-hern%C3%A1ndez-villalobos-2ab428241/"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png"></a>
            <a href="https://www.linkedin.com/in/eduardo-correa-vera-b805554a/"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png"></a>
        </div>
        <div class="footer_parrafo">
            <a href="https://www.linkedin.com/in/bran-marcelo-hern%C3%A1ndez-villalobos-2ab428241/"><p>Diseñador web</p></a>
            <a href="https://www.linkedin.com/in/eduardo-correa-vera-b805554a/"><p>Jefe de proyecto</p></a>
        </div>
    </footer>
    <script src="../javascript/panel.js"></script>
</body>
</html>