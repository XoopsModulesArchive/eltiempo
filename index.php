<?php

include '../../mainfile.php';
include '../../header.php';
include 'header.php';
//OpenTable();
?>
    <div style='padding: 5px;'>
        <fieldset>
            <legend><p>El Tiempo</p></legend>
            <div class='blockContent'>
                <div><br>
                    Desde los enlaces inferiores puedes acceder a las previsones clim&aacute;ticas,
                    la fotograf&iacute;a sat&eacute;lite de la peninsula y el mapa isob&aacute;rico.
                    Tanto en las previsiones para hoy como para ma&ntilde;ana bastar&aacute;
                    con clickear en las distintas comunidades aut&oacute;nomas para ver en detalle
                    la previsi&oacute;n de cada una de ellas.
                </div>
                <br>
                <p align="center">&nbsp;<a href="uno.htm" target="uno">
                        <script language="JavaScript">
                            <!--
                            var weekdays = new Array(6);
                            var today = new Date();
                            var hora = today.getHours();
                            var weekday = today.getDay();

                            weekdays[-1] = "Sábado";
                            weekdays[0] = "Domingo";
                            weekdays[1] = "Lunes";
                            weekdays[2] = "Martes";
                            weekdays[3] = "Miércoles";
                            weekdays[4] = "Jueves";
                            weekdays[5] = "Viernes";
                            weekdays[6] = "Sábado";
                            weekdays[7] = "Domingo";
                            weekdays[8] = "Lunes";
                            weekdays[9] = "Martes";
                            if (hora <= 7) {
                                var weekday0 = weekday - 1;
                                var weekday1 = weekday;
                                var weekday2 = weekday + 1;
                                var weekday3 = weekday + 2;
                            } else {
                                var weekday0 = weekday;
                                var weekday1 = weekday + 1;
                                var weekday2 = weekday + 2;
                                var weekday3 = weekday + 3;
                            }
                            document.write(weekdays[weekday0]);
                            // -->
                        </script>
                    </a>&nbsp; |&nbsp; <a href="previsiones1.htm" target="uno">
                        <script language="JavaScript">
                            document.write(weekdays[weekday1]);
                        </script>
                    </a>&nbsp; |&nbsp; <a href="previsiones2.htm" target="uno">
                        <script language="JavaScript">
                            document.write(weekdays[weekday2]);
                        </script>
                    </a>&nbsp; |&nbsp;<a href="isobaras.htm" target="uno">Isobaras</a>&nbsp; |&nbsp;<a href="satelites.htm" target="uno">Satelite</a><br>
                    <br><br>
                    <iframe SRC="uno.htm" name="uno" WIDTH="100%" HEIGHT="350" FRAMESPACING=0 FRAMEBORDER=no BORDER=0 SCROLLING=no></iframe>
                    <br>
                <div align="center">Servicio ofrecido por <a href="http://www.meteored.com" target="_blank">MeteoRed.com</a><br>
                    M&oacute;dulo programado por <a href="http://www.ayamonte.org" target="_blank">Ayamonte.org</a></div>
            </div>
        </fieldset>
    </div>
<?php
//CloseTable();
include '../../footer.php';
?>
