<?php
    $valor = isset($_GET["logado"]) ? '(Logado)' : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="WR Kits">
<title>Small Arm</title>

<script src="jquery.js"></script>

<script>

$.ajaxSetup({timeout:1000});


function mouseUpSr1(angle)
{
    TextVar = myform2.inputbox.value;
    ArduinoVar = "http://" + TextVar + ":80";
    $.get( ArduinoVar, { "sr1": angle })    ;
    {Connection: close};
}
function mouseUpSr2(angle)
{
    TextVar = myform2.inputbox.value;
    ArduinoVar = "http://" + TextVar + ":80";
    $.get( ArduinoVar, { "sr2": angle })    ;
    {Connection: close};
}
function mouseUpSr3(angle)
{
    TextVar = myform2.inputbox.value;
    ArduinoVar = "http://" + TextVar + ":80";
    $.get( ArduinoVar, { "sr3": angle })    ;
    {Connection: close};
}
function mouseUpSr4(angle)
{
    TextVar = myform2.inputbox.value;
    ArduinoVar = "http://" + TextVar + ":80";
    $.get( ArduinoVar, { "sr4": angle })    ;
    {Connection: close};
}
</script>
</head>



<body>
    <center>

<h1> <b> Controle de Servos por WiFi</b> </h1>

<div style="margin: 0; width:600px; height:90px;">
    <FORM NAME="myform2" ACTION="" METHOD="GET">
        <h2> IP do ESP: </h2>
        <INPUT TYPE="text" NAME="inputbox" VALUE="192.168.43.69">
    </FORM>
</div>


<h2>     Servo da Base </h2> 
<input type="range" min="15" max="175" onmouseup="mouseUpSr1(this.value)" />
<h2>     Servo Esquerdo </h2>
<input type="range" min="15" max="175" onmouseup="mouseUpSr2(this.value)" />
<h2>     Servo Direito </h2>
<input type="range" min="15" max="175" onmouseup="mouseUpSr3(this.value)" />
<h2>     Servo da Garra </h2>
<input type="range" min="15" max="175" onmouseup="mouseUpSr4(this.value)" />

    </center>
    <br><br>
    <center><a href='PaginaDoProjeto<?php echo($valor); ?>.php?projeto=1'<button type='submit'>Voltar para o projeto</button></a></center>
</body>
</html>
