<!DOCTYPE html>
<html>
<body>

<?php

function validarSenha($senha) {
    return preg_match('/[A-Z]/', $senha)  
     && preg_match('/[@$%#!]/', $senha)
     && preg_match('/^[\w@$%#!]+$/', $senha); 
}

var_dump(validarSenha ('Senha@'));  
?>

</body>
</html>
