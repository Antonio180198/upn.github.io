<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        

    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="estilo_Alumno_ini.css">
        <title>UPN</title>
    </head>
    <body>
    <div class="topbar">
        <div class="brand">Bienvenido:
        <?php
                echo $_SESSION["nombre"]." ".$_SESSION["apellido_p"]." ".$_SESSION["apellido_m"];
        ?>
        </div>
        <div class="menu">
            <a href="controlador_Alumno_CerrarSecion.php" class="menuItem">Salir</a>
            <a href="#" class="menuItem">Portfolio</a>
            <a href="#" class="menuItem"><i class="fab fa-github"></i> GitHub</a>
            <a href="#" class="menuItem"><i class="fab fa-discord"></i> Discord</a>
            <button class="ctaButton">Contact Us</button>
        </div>
    </div>

        
            
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Cursos</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li>Opitica, sus usos en la formación profesional y en el ambito educativo.</li>
                    <li>Habilidades docentes para educacion basica y obligatoria.</li>
                    <li>La escuela multigrado: un reto para los y las docentes de educacion básica.</li>
                    <li>Intervención temprana y educación inicial.</li>
                    <li>Estrategias docentes: Hacia la nueva escuela mexicana.</li>
                    <li>Guiar al educando para que construya su propio conocimiento.</li>
                    <li>Marco curricular 2022, metodologia por proyectos y epistemología del sur.</li>
                    <li>Propuesta curricular 2022, un desafio para la nueva escuela mexicana.</li>
                    <li>uso responsable de las redes sociales y consciencia de la huella digital.</li>
                    <li>Fundamentos del modelo educativo 2022.</li>
                </ul>
            </div>

            
                   
        
    </body>
    <script>
                //hola
                const dropdowns = document.querySelectorAll('.dropdown');
                dropdowns.forEach(dropdown => {
                const select = dropdown.querySelector('.select'); 
                const caret = dropdown.querySelector('.caret'); 
                const menu = dropdown.querySelector('.menu'); 
                const options = dropdown.querySelectorAll('.menu li'); 
                const selected = dropdown.querySelector('.selected');

                    select.addEventListener('click', () => {
                    select.classList.toggle('select-clicked');
                    caret.classList.toggle('caret-rotate');
                    menu.classList.toggle('menu-open');
                    });
                    options.forEach(option => {
                        option.addEventListener('click', () => {
                            selected.innerText = option.innerText;
                            select.classList.remove('select-clicked');
                            caret.classList.remove('caret-rotate');
                            menu.classList.remove('menu-open');
                            options.forEach(option => {
                                option.classList.remove('active');
                                
                            });
                            option.classList.add('active');
                        });
                    });
                });
        </script>
</html>