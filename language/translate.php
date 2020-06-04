<?php 
session_start();
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

/**
 * Idioma padrao
 * 
 */
$default_language = "pt-br";

/**
 * Caso seja solicitado a troca
 * e o idioma for valido, salva em
 * secao e muda o idioma
 * 
 */
if(isset($_GET["language"]) && in_array($_GET["language"], $supported_languages))
{
    $_SESSION["language"] = $_GET["language"];
    include_once __DIR__ . '/'.$_SESSION["language"].'.php';
}else {
    /**
     * Do contrario, verifica se ha 
     * algum idioma em secao
     * 
     */
    if(isset($_SESSION["language"]))
    {
        include_once __DIR__ . '/'.$_SESSION["language"].'.php';
    }else{
        /**
         * Do contrario, seta o idioma padrao
         * e usa o idioma padrao
         * 
         */
        $_SESSION["language"] = $default_language;
        include_once __DIR__ . '/'.$_SESSION["language"].'.php';
    }
}

?>