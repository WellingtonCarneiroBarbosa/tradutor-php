<?php 
/**
 * Este arquivo realiza o controle
 * sobre qual keyword deverá ser usada
 * para exibicao do conteudo. 
 * 
 */

if( ! isset($_GET['language']) )
{
    /**
     * Usa as keywords em portugues
     * 
     */
    include_once __DIR__ . '/pt-br.php';
}
/**
 * Verifica se o idioma solicitado
 * é suportado pela aplicacao
 * 
 */
else if($_GET['language'] == 'pt-br' || $_GET['language'] == 'en-us')
{
    /**
     * Se for valido, muda
     * 
     */
    include_once __DIR__ . '/'.$_GET['language'].'.php';
}
else
{
    /**
     * Do contrario, usa como padrao
     * o portugues
     * 
     */
    include_once __DIR__ . '/pt-br.php';
}
?>