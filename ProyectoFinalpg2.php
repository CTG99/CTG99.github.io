<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mipaginajajaja</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="ProyectoFinalpg2css.css">
     <link rel="icon" href="./Img/Rayo.png">
</head>
<body>
<div class="ContenedorArriba w-100 " id="Arriba">
        <nav class="navbar navbar-expand-lg navbar-light  bg-black">
            <div class="container-fluid">
                <div class="me-5 ms-5">
                    <a class="navbar-brand text-light" href="http://localhost/DAM/ProyectoFinal/index.html" target="_blank"><img height="30" src="./Img/Rayo.png"><i>MIPAGINA</i></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="w-50"></div>
                <div class="collapse navbar-collapse w-50 " id="navbarNav">
                    <div class="w-50"></div>
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active text-light ms-3" aria-current="page" href="http://localhost/DAM/ProyectoFinal/index.html" target="_blank">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light ms-3" aria-current="page" href="http://localhost/DAM/ProyectoFinal/ProyectoFinalpg2.php" target="_blank">Pg1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light ms-3" aria-current="page" href="http://localhost/DAM/ProyectoFinal/ProyectoFinalpg3.html" target="_blank">Pg2</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="ms-5"></div>
            </div>
        </nav>
    </div>
<div class="titulo my-5">
    <div class="texto_arriba">Hobbies</div>
    <div class="texto_abajo"><p><i>"Buscate algo para hacer y deja ya de molestar" -Mi madre</i></p></div>
</div>


<div class="Banner"><img src="./Img/Sonic.PNG" class="Banner_sonic" height="170"></div>

<main>
<?php
            // <?php levanta interprete de php.

            require('conexion_pagina.php');
            // echo sirve para mostrar info por pantalla.
            // 1.- Conexion.
            if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
                // Entramos por aqui...
                mysqli_query($conexion, "SET NAMES 'UTF8'");
                // 2.- Seleccionamos la base de datos.
                if(mysqli_select_db($conexion, $bbdd)){
                    // 3.- Definimos la query.
                    $consulta="SELECT * FROM videojuegos ORDER BY nombre;";
                    $consulta2="SELECT * FROM peliculas ORDER BY titulo;";
                    // 4.- Ejecutar la query.
                    $resultado=mysqli_query($conexion, $consulta);
                    $resultado2=mysqli_query($conexion,$consulta2);
                    // 5.- Comprobar.
                    //Si hay algun error, lo muestro.En caso contrario, continuo y sigo con el while
                        if(mysqli_errno($conexion)!=0){
                            //Quiere decir que hay algun error
                            echo "<p>Nº error :". mysqli_errno($conexion)."</p>";
                            echo "<p>Mensaje :" .mysqli_error($conexion)."</p>";
                        }else{
                            //No hay error
                            // 6.- Mostrar datos por pantalla (Si es un query SELECT)
                            ;
                            echo "<div class='HH'>";
                    while($dato=mysqli_fetch_array($resultado)){
                        
                        echo "<div class='Contenedor_general'>";
                        echo"<div class='Primer_contenedor'>";
                        
                            echo"<div class='grupo'>";
                                echo"<img src='img/Base_de_datos/$dato[caratula]' alt='Imagen de $dato[nombre]'>";
                                echo "<div class='Texto'>";
                                echo"<p class='centrado gris margen-arriba'>$dato[nombre]</p>";
                                echo"<p class='centrado gris '>$dato[desarrolladora]</p>";

                                echo "</div>";
                                echo"<p>$dato[datos]</p>";
                            echo"</div>";
                          
                            echo"</div>";
                            echo"</div>";



                            

                            
                            
                            
                                    




                        }

                        echo"</div>";
                        
                            
                            
                             echo "<div class='Banner'><img src='./Img/Pelicula_banner.PNG' class='Banner_pelicula' height='170'></div>";       
                                         
                                  echo "<div class='HH'>";
                    while($dato=mysqli_fetch_array($resultado2)){
                        
                        echo "<div class='Contenedor_general'>";
                        echo"<div class='Primer_contenedor'>";
                        
                            echo"<div class='grupo'>";
                                echo"<img src='img/Base_de_datos/$dato[Foto]' alt='Imagen de $dato[titulo]'>";
                                echo "<div class='Texto'>";
                                echo"<p class='centrado gris margen-arriba'>$dato[titulo]</p>";
                                echo"<p class='centrado gris '>$dato[director]</p>";

                                echo "</div>";
                                echo"<p>$dato[descripcion]</p>";
                            echo"</div>";
                          
                            echo"</div>";
                            echo"</div>";



                            

                            
                            
                            
                                    




                        }

                        echo"</div>";


                      
                            
                            
                            
                                           





                        }






                    
                   } 
                
            //7-.Cerramos la conexión
                mysqli_close($conexion);}
            
                /* ?> cierra el interprete.*/
            ?>
            </main>


<div class="footer d-flex flex-row w-100">
        <div class="w-100 d-flex flex-row mt-3 mb-3">
            <div class="mx-2"><a href="#Arriba">Volver Arriba</a></div>

            <div class="w-50"></div>
            <div class="mx-5"></div>
            <div class="mx-5"></div>
            <div class="mx-4"></div>
            <div class="text-light">Contactanos en: </div>
            <div class="ms-3 me-3"></div>
            <div class="me-2 ms-2 rounded"><a href="https://www.youtube.com/channel/UCuKUNoIFkxxLtsUOmc2Ii-w/featured"><img src="./Img/Youtube.jpg" width="20" height="22"></a></div>
            <div class="me-2 ms-2 rounded"><a href="https://twitter.com/Microsoft?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="./Img/Twitter.png" width="20" height="22"></a></div>
            <div class="me-2 ms-2 rounded"><a href="https://github.com/CTG99"><img src="./Img/Github.png" width="20" height="22"></a></div>
            <div class="me-2 ms-2 rounded"><a href="https://es.stackoverflow.com/users/274321/stunt99"><img src="./Img/Stack_overflow.png" width="20" height="22"></a></div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>