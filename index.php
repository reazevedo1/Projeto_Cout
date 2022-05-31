<?php 
include("include/sistema_protecao.php");



if(isset($_REQUEST['conteudo'])){

     $conteudo=anti_injection($_REQUEST['conteudo']);

}else{

     $conteudo="principal";

}



?>

<!DOCTYPE html>

     <html>

          <body>

               <?php

               if($conteudo == 'principal'){

                    include("include/conteudo_header.php");

                    $arquivo = "include/conteudo_" . $conteudo . ".php";

                    if(file_exists($arquivo)){

                         include($arquivo);

                    }

               }else{

                    include("include/conteudo_header.php");

                 

                    $arquivo = "include/conteudo_" . $conteudo . ".php";

                    if(file_exists($arquivo)){

                         include($arquivo);

                    }

                   

                    

               }

               include("include/conteudo_footer.php");

               ?>



  </body>
</html>



 