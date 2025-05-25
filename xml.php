<?php

$xml_daten= "<?xml  version= '1.0' encoding= 'Utf-8' ?>
<furmuler>
<vorname>Abdeslam</vorname>
<nachname>Anssar</nachname>
<alt>25</alt>
<wohnene>El hajeb</wohnene>
</furmuler>";

$parsed= simplexml_load_string ($xml_daten);

if ($parsed === false) {

    echo "Error creating object from XML";

    foreach (libxml_get_errors() as $Error) {

        echo "<br /> $Error -> message <br />";
        
    }
}

else {
    
    
    print_r ($parsed);
    echo "<br /> $parsed->vorname  <br />$parsed->nachname <br /> $parsed->alt "; 
}





?>