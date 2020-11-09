<?php
            if(isset($_POST['enviar'])){
                alert("sfsdfsdf");
                if(empty($_POST['nombre'])!==""&&empty($_POST['asunto'])!==""&&empty($_POST['msg'])!==""){
                    alert("sfsdfsdf");
                    $name=$_POST['nombre'];
                    $asunto=$_POST['asunto'];
                    $msg=$_POST['msg'];
                    //$email='ronaldeyesky@gmail.com';
                    $email='estefannygarcia@upeu.edu.pe';
                    $email2=$_POST['email'];
                    $cadena='From: '.trim($email2);
                    $header=$cadena."\r\n";
                    $ms2='Nombre:'.$name.'
'.$msg;
                    
                    $mail=mail($email,$asunto,$ms2,$header);
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
            ?>