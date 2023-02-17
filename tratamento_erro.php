<?php

//tenha uma logica
try {
    //um potencial erro
    echo '<h3>Try</h3>';

    $sql = 'Select * from clientes';
    //mysql_query($sql); erro
} catch (Error $err) {
    echo 'ocorreu um erro';
} finally {
    echo '<h3>Finally</h3>';
}






?><!-->