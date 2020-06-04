<?php 
/**
 * Este arquivo realiza o controle
 * sobre qual keyword deverá ser usada
 * para exibicao do conteudo. 
 * 
 */

/**
 * Idiomas suportados
 * 
 */
$supported_languages = array("pt-br", "en-us");

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
else if(in_array($_GET['language'], $supported_languages))
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