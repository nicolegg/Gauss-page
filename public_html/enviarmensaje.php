<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombrealumno']) && !empty($_POST['nombredocente']) && !empty($_POST['nombrecurso']) && !empty($_POST['fichero1'])) {
        $nombrealumno = $_POST['nombrealumno'];
        $nombredocente = $_POST['nombredocente'];
        $nombrecurso = $_POST['nombrecurso'];
        $fichero1 = $_POST['fichero1'];
        $email='estefannygarcia@upeu.edu.pe';
                    $email2=$_POST['email'];
                    $cadena='From: '.trim($email2);
                    $header=$cadena."\r\n";
                    $ms2='nombrealumno:'.$nombrealumno.'
                            '.$nombredocente;
                    $mail=mail($email,$nombrecurso,$ms2,$fichero1,$header);
                    //echo $email2.$cadena.$name.$email; 
                    if($mail){ ?>
                        <script type="text/javascript" charset="utf-8">
                         alert("¡Tu Correo fue enviado exitosamente!");
                        </script>
                        <html>
                        <head>
                        <title>Redirigir al navegador a otra URL</title>
                        <META HTTP-EQUIV="REFRESH" CONTENT="0.1;URL=iniciar.html">
                        </head>
                        <body>
                        
                        </body>
                        </html>
                        <?php
                    }else{
                    ?>
                        <script type="text/javascript" charset="utf-8">
                        alert("¡Tu Correo no fue enviado exitosamente!");
                        </script>
                         <html>
                            <head>
                            <title>Redirigir al navegador a otra URL</title>
                            <META HTTP-EQUIV="REFRESH" CONTENT="0.1;URL=iniciar.html">
                            </head>
                            <body>
                            
                            </body>
                            </html>
                    <?php
                    }
                }
            }
//        $header = "From: noreply@example.com" . "\r\n";
//        $header = "Reply-to: noreply@example.com" . "\r\n";
//        $header = "X-Mailer: PHP/" . phpversion();
//        $mail = @mail($nombrealumno, $nombredocente, $nombrecurso,$header );
//        alert(data);
//        if($mail){
//            sprint("entraa");
//            echo "<h4>Mensaje enviado</h4>";
//        }
?>