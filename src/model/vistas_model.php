<?php
class vistaModelo
{
    protected static function obtener_vista($vista)
    {
        $palabras_permitidas_n1 = ['inicio','tokensApi','menu-cards','product-listing','orders','categories-listing','categories-add-edit','customers','reports','offers','locations','settings','todo','invoices','invoice-details','product-add-edit','pos'];

        if (in_array($vista, $palabras_permitidas_n1)) {

                if (is_file("./src/view/" . $vista . ".php")) {
                    $contenido = "./src/view/" . $vista . ".php";
                } else {
                    $contenido = "404";
                }
        } elseif ($vista == "inicio" || $vista == "index") {
            $contenido = "inicio.php";
        }else{
            $contenido = "404";
        }
        return $contenido;
    }

}
?>