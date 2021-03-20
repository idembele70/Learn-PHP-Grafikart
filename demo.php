<?php
function repondre_oui_non($phrase)
{
    while (true) {
        $reponse = readline("Ecrivez oui ou non : ");
        return $reponse === 'oui' ? "true" : "false";
    }
}

echo repondre_oui_non("no");