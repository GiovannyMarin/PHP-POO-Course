<?php

//tenha uma logica
try {
    //um potencial erro
    echo '<h3>Try</h3>';

    if (!file_exists('require_arquivo_a.php')) {
        throw new Exception('O arquivo em questao deveria estar disponivel, mas n esta');
    }; // caso existe true, se nao false
} catch (Error $err) {
    echo 'ocorreu um erro';
} catch (Exception $e) {

    echo $e;
} finally {
    echo '<h3>Finally</h3>';
}






?><!-->