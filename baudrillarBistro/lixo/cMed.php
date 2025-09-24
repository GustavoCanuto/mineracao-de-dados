<?php
 echo "<h2>Total de Gorjetas e Média</h2>";
 $CAM = "/var/www/html/baudrillarBistro/cMed.sh";
 $VAR = shell_exec("$CAM");
 echo "<pre>$VAR</pre>";
?>
