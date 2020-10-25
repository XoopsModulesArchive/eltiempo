<?php

function disp_block_eltiempo($options)
{
    global $xoopsConfig;

    $block = [];

    $block['title'] = 'El tiempo';

    $block['content'] = '';

    $block['content'] .= "<div align='center'>
<a href='" . XOOPS_URL . "/modules/eltiempo'>
<img border='0' src='" . XOOPS_URL . "/modules/eltiempo/mapahoy.gif'>
<SCRIPT language=JavaScript>
</SCRIPT>
<SCRIPT language=JavaScript>function andalucia(){window.open('http://www.meteored.com/buscador/buscadorandalucia.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function aragon(){window.open('http://www.meteored.com/buscador/buscadoraragon.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function asturias(){window.open('http://www.meteored.com/buscador/buscadorasturias.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function baleares(){window.open('http://www.meteored.com/buscador/buscadorbaleares.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function canarias(){window.open('http://www.meteored.com/buscador/buscadorcanarias.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function cantabria(){window.open('http://www.meteored.com/buscador/buscadorcantabria.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function castillaleon(){window.open('http://www.meteored.com/buscador/buscadorcastillaleon.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function castillamancha(){window.open('http://www.meteored.com/buscador/buscadorcastillalamancha.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function catalunya(){window.open('http://www.meteored.com/buscador/buscadorcatalunya.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function extremadura(){window.open('http://www.meteored.com/buscador/buscadorextremadura.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function galicia(){window.open('http://www.meteored.com/buscador/buscadorgalicia.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function rioja(){window.open('http://www.meteored.com/buscador/buscadorlarioja.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function madrid(){window.open('http://www.meteored.com/buscador/buscadormadrid.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function murcia(){window.open('http://www.meteored.com/buscador/buscadormurcia.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function navarra(){window.open('http://www.meteored.com/buscador/buscadornavarra.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function paisvasco(){window.open('http://www.meteored.com/buscador/buscadorpaisvasco.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<SCRIPT language=JavaScript>function valencia(){window.open('http://www.meteored.com/buscador/buscadorvalencia.htm','FORM_1','toolbar=no,scrollbars=no,left=1,top=1,width=472,height=400')} </SCRIPT>
<script>
<!-- Begin
function leapto(form) {
var myindex=form.dest.selectedIndex
parent.top.location.href=(form.dest.options[myindex].value);
}
// End -->
</script>
<form name='form1' >
<select NAME='dest' SIZE='1' onChange='leapto(this.form)'>
<option>Elige CC.AA</option>
<option value='javascript:andalucia()'>Andalucia</option>
<option value='javascript:aragon()'>Aragon</option>
<option value='javascript:asturias()'>Asturias</option>
<option value='javascript:baleares()'>Baleares</option>
<option value='javascript:canarias()'>Canarias</option>
<option value='javascript:cantabria()'>Cantabria</option>
<option value='javascript:castillaleon()'>Castilla y Leon</option>
<option value='javascript:castillamancha()'>Cast. La Mancha</option>
<option value='javascript:catalunya()'>Cataluña</option>
<option value='javascript:extremadura()'>Extremadura</option>
<option value='javascript:galicia()'>Galicia</option>
<option value='javascript:rioja()'>La Rioja</option>
<option value='javascript:madrid()'>Madrid</option>
<option value='javascript:murcia()'>Murcia</option>
<option value='javascript:navarra()'>Navarra</option>
<option value='javascript:paisvasco()'>Pais Vasco </option>
<option value='javascript:valencia()'>Valencia</option>
</select>
</form>
<a href='http://www.meteored.com' target='_blank'>Meteored.com</a>
</div>";

    return $block;
}
