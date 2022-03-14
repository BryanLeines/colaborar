<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body{width:100%;text-align:center;}
#form-calc{margin:100px auto 100px auto;}
#resultado{margin-top:50px;}
label{display:block;}
input[type="button"]{margin-top:20px;}
</style>
<script>
function calc2grad(a,b,c){
discriminante=Math.pow(b,2)-4*a*c;
  if(discriminante<0){
    document.getElementById("info").innerHTML="No tiene soluciones [dis<0]"
  }else if(discriminante==0){
    document.getElementById("info").innerHTML="Tiene una sola solución [dis==0]"
    document.getElementById("x1").value=parseFloat((-b)/(2*a));
  }else{
    document.getElementById("info").innerHTML="Tiene dos solución [dis>0]"
    document.getElementById("x1").value=parseFloat(((-b)+Math.sqrt(discriminante))/(2*a));
    document.getElementById("x2").value=parseFloat(((-b)-Math.sqrt(discriminante))/(2*a));
  }
}
window.onload = function(){
var but = document.getElementById("calc");
but.addEventListener('click',function(){
    var a=parseFloat(document.getElementById("a").value);
    var b=parseFloat(document.getElementById("b").value);
    var c=parseFloat(document.getElementById("c").value);
    calc2grad(a,b,c);
},false);
}
</script>
</head>

<body>
<div id="form-calc">
<h2>Zona de Datos</h2>
<label for="a">Ingrese A:</label>
<input type="number" id="a"/>
<label for="b">Ingrese B:</label>
<input type="number" id="b"/>
<label for="c">Ingrese C:</label>
<input type="number" id="c"/>
<br />
<input type="button" id="calc" value="Calcular"/>

<div id="resultado">
<h2>Zona de Resultados</h2>
<p id="info"></p>
<label>x1</label>
<input type="number" id="x1" disabled/>
<label>x2</label>
<input type="number" id="x2" disabled/>

</div>
</div>
</body>
</html> 



