<!DOCTYPE html>
<html>
<body>

<?php
function validarSenha($senha) {
    return preg_match('/[A-Z]/', $senha)  
     && preg_match('/[@$%#!]/', $senha)
     && preg_match('/[a-zA-Z]{1,10}/', $senha); 
}

var_dump(validarSenha ('A@a1hJ'));  
?>

</body>
</html>
