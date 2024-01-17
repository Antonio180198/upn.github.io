<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="estilo_Alumno_log.css">
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">

			<div class="topbar">
				<div class="menu">
            		<a href="Index.html" class="menuItem">Home</a>
        		</div>
			</div>


				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>

						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
								
										<div class="section text-center">
			<form method="post" action="">
			<?php
            include("conexion_Alumno.php");
			include("controlador_Alumno.php");
			
            ?>
										<img src="../images/283px-Logo_Upn_Oficial.svg.png" alt="" class="container-icono">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" class="form-style" name="email" placeholder="Correo">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" name="password" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input name="btningresar" class="btn mt-4" type="submit" value="INICIAR SESION">
			</form>
										</div>
			      					</div>
			      				</div>
							

								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
			<form method="post" action="">
			<?php
			include("conexion_Alumno.php");
			include("registro_DB.php");
			?>
											<h4 class="mb-3 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" class="form-style" name="nombre" placeholder="Nombres" >
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group">
												<input type="text" class="form-style" name="Apellido_Paterno" placeholder="Apellido Paterno">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group">
												<input type="text" class="form-style" name="Apellido_Materno" placeholder="Apellido Materno">
												<i class="input-icon uil uil-user"></i>
											</div>

											<div class="form-group mt-2">
												<input class="form-style" name="titulo_curso" placeholder="Curso" list="curso">
												<datalist id="curso">
													<option value="Opitica, sus usos en la formación profesional y en el ambito educativo"></option>
													<option value="Habilidades docentes para educacion basica y obligatoria."></option>
													<option value="La escuela multigrado: un reto para los y las docentes de educacion básica."></option>
													<option value="Intervención temprana y educación inicial."></option>
													<option value="Estrategias docentes: Hacia la nueva escuela mexicana."></option>
													<option value="Guiar al educando para que construya su propio conocimiento."></option>
													<option value="Marco curricular 2022, metodologia por proyectos y epistemología del sur."></option>
													<option value="Propuesta curricular 2022, un desafio para la nueva escuela mexicana."></option>
													<option value="uso responsable de las redes sociales y consciencia de la huella digital."></option>
													<option value="Fundamentos del modelo educativo 2022."></option>
												</datalist>
												<i class="input-icon uil uil-graduation-cap"></i>
											</div>	

											<div class="form-group mt-2">
												<input type="tel" class="form-style" name="Phone_Number" placeholder="Telefono">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      						<div class="form-group mt-2">
												<input type="email" class="form-style" name="email" placeholder="Correo">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" name="password" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											
											<input name="Registrar" class="btn mt-4" type="submit" value="Registrar">
			
											
			</form>
										</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>

                
</html>
