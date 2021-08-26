<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="./css/estilos.css">
	<title>Texto Animado - HTML, CSS y JS</title>

<script language="javascript">


//shift elimina el primer numero
//pop elimina el ultimo numero

var carta_total = ["1", "2", "3", "4","5"];


carta_total.sort(     //hacer que las cartas salgan aleatoriamente
			function() 
					 { 
					  return Math.random() - 0.5
					 }
		 	 );
			
			//document.write(carta_total+"<br>");//numeros aleatorios
			
		var carta1=carta_total.shift();
			//document.write(carta1+"<br>"); //primer numero
		var	carta2=carta_total.shift();
		    //document.write(carta2+"<br>");//segundo numero
		var	carta3=carta_total.shift();
		    //document.write(carta3+"<br>");//tercer numero
		var	carta4=carta_total.shift();
		    //document.write(carta4+"<br>");//cuarto numero			   
		var	carta5=carta_total.shift();
		   // document.write(carta5+"<br>");//quinto numero	 
		   
		   
		   
// FUNCION BORRAR CARTA ************************************************************	
	   
//FILA 1
	
function borrar_fila_1_carta_1()
			{
			var elige_carta=document.getElementById('fila1_image_1')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_1_carta_2()
			{
			var elige_carta=document.getElementById('fila1_image_2')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_1_carta_3()
			{
			var elige_carta=document.getElementById('fila1_image_3')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_1_carta_4()
			{
			var elige_carta=document.getElementById('fila1_image_4')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_1_carta_5()
			{
			var elige_carta=document.getElementById('fila1_image_5')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}							
		
//FILA 2

function borrar_fila_2_carta_1()
			{
			var elige_carta=document.getElementById('fila2_image_1')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_2_carta_2()
			{
			var elige_carta=document.getElementById('fila2_image_2')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_2_carta_3()
			{
			var elige_carta=document.getElementById('fila2_image_3')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_2_carta_4()
			{
			var elige_carta=document.getElementById('fila2_image_4')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_2_carta_5()
			{
			var elige_carta=document.getElementById('fila2_image_5')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
//FILA 3

function borrar_fila_3_carta_1()
			{
			var elige_carta=document.getElementById('fila3_image_1')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_3_carta_2()
			{
			var elige_carta=document.getElementById('fila3_image_2')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_3_carta_3()
			{
			var elige_carta=document.getElementById('fila3_image_3')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_3_carta_4()
			{
			var elige_carta=document.getElementById('fila3_image_4')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_3_carta_5()
			{
			var elige_carta=document.getElementById('fila3_image_5')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}			

//FILA 4

function borrar_fila_4_carta_1()
			{
			var elige_carta=document.getElementById('fila4_image_1')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_4_carta_2()
			{
			var elige_carta=document.getElementById('fila4_image_2')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_4_carta_3()
			{
			var elige_carta=document.getElementById('fila4_image_3')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_4_carta_4()
			{
			var elige_carta=document.getElementById('fila4_image_4')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_4_carta_5()
			{
			var elige_carta=document.getElementById('fila4_image_5')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}	

//FILA 5

function borrar_fila_5_carta_1()
			{
			var elige_carta=document.getElementById('fila5_image_1')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_5_carta_2()
			{
			var elige_carta=document.getElementById('fila5_image_2')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_5_carta_3()
			{
			var elige_carta=document.getElementById('fila5_image_3')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_5_carta_4()
			{
			var elige_carta=document.getElementById('fila5_image_4')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}
			
function borrar_fila_5_carta_5()
			{
			var elige_carta=document.getElementById('fila5_image_5')	  
	 		elige_carta.style.display=(elige_carta.style.display=='none')?'inline':'none' 
			}					
		 
						
//*******************************************************************************************	

//ALMACENAMIENTO DE IMAGENES PARA LAS CARTAS
		
var cartas_fila_1= 
	[
		'',
		"../IMAG/winner.png",
		"../IMAG/game_over.png",
		"../IMAG/winner.png",
		"../IMAG/game_over.png",
		"../IMAG/winner.png"
		
	]	

var cartas_fila_2= 
	[
		'',
		"../IMAG/winner.png",
		"../IMAG/winner.png",
		"../IMAG/winner.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png"
	]	
	
var cartas_fila_3= 
	[
		'',
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/winner.png",
		"../IMAG/winner.png"
	]
	
var cartas_fila_4= 
	[
		'',
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/winner.png",
		"../IMAG/winner.png"
	]
	
var cartas_fila_5= 
	[
		'',
		"../IMAG/winner.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png",
		"../IMAG/game_over.png"
	]	

    // FILA 1 CODIGO COMPLETO
	
	//FILA1 carta 1
	function fila_1_carta_1()
    {
				
    
	document.getElementById("fila1_cartaHidden_1").value =carta1; //5 es la cantidad de numeros y +1 es que comienze del numero 1
	
	
	var variable1=document.getElementById("fila1_cartaHidden_1").value; //Esto me permite pasar el valor del número random a una variable	
    var salida=document.getElementById("fila1_image_1"); 
	
    salida.setAttribute("src", ""+cartas_fila_1[variable1]); // en vez de crear, le asignamos el attr src a la imagen ya existente.
    salida.style.display = "block";
	}
	
	//FILA1 carta 2
	function fila_1_carta_2()
    {
			
    
	document.getElementById("fila1_cartaHidden_2").value =carta2; 
	
	
	var variable1=document.getElementById("fila1_cartaHidden_2").value;
    var salida=document.getElementById("fila1_image_2"); 
	
    salida.setAttribute("src", ""+cartas_fila_1[variable1]); 
    salida.style.display = "block";
	}
	
	//FILA1 carta 3
	function fila_1_carta_3()
    {
		
    
	document.getElementById("fila1_cartaHidden_3").value =carta3; 
	
	
	var variable1=document.getElementById("fila1_cartaHidden_3").value;
    var salida=document.getElementById("fila1_image_3"); 
	
    salida.setAttribute("src", ""+cartas_fila_1[variable1]); 
    salida.style.display = "block";
	}
		
	//FILA1 carta 4
	function fila_1_carta_4()
    {
		
    
	document.getElementById("fila1_cartaHidden_4").value =carta4; 
	
	
	var variable1=document.getElementById("fila1_cartaHidden_4").value;
    var salida=document.getElementById("fila1_image_4"); 
	
    salida.setAttribute("src", ""+cartas_fila_1[variable1]); 
    salida.style.display = "block";
	}	
	
	//FILA1 carta 5
	function fila_1_carta_5()
    {
		
    
	document.getElementById("fila1_cartaHidden_5").value =carta5; 
	
	
	var variable1=document.getElementById("fila1_cartaHidden_5").value;
    var salida=document.getElementById("fila1_image_5"); 
	
    salida.setAttribute("src", ""+cartas_fila_1[variable1]); 
    salida.style.display = "block";
	}	
	
	
	// FILA 2 CODIGO COMPLETO	
	//FILA2 carta 1
	function fila_2_carta_1()
    {
				
    
	document.getElementById("fila2_cartaHidden_1").value =carta1; //5 es la cantidad de numeros y +1 es que comienze del numero 1
	
	
	var variable1=document.getElementById("fila2_cartaHidden_1").value; //Esto me permite pasar el valor del número random a una variable	
    var salida=document.getElementById("fila2_image_1"); 
	
    salida.setAttribute("src", ""+cartas_fila_2[variable1]); // en vez de crear, le asignamos el attr src a la imagen ya existente.
    salida.style.display = "block";
	}	
	
	//FILA2 carta 2
	function fila_2_carta_2()
    {
			
    
	document.getElementById("fila2_cartaHidden_2").value =carta2; 
	
	
	var variable1=document.getElementById("fila2_cartaHidden_2").value;
    var salida=document.getElementById("fila2_image_2"); 
	
    salida.setAttribute("src", ""+cartas_fila_2[variable1]); 
    salida.style.display = "block";
	}
	
	//FILA2 carta 3
	function fila_2_carta_3()
    {
		
    
	document.getElementById("fila2_cartaHidden_3").value =carta3; 
	
	
	var variable1=document.getElementById("fila2_cartaHidden_3").value;
    var salida=document.getElementById("fila2_image_3"); 
	
    salida.setAttribute("src", ""+cartas_fila_2[variable1]); 
    salida.style.display = "block";
	}
		
	//FILA2 carta 4
	function fila_2_carta_4()
    {
		
    
	document.getElementById("fila2_cartaHidden_4").value =carta4; 
	
	
	var variable1=document.getElementById("fila2_cartaHidden_4").value; 
    var salida=document.getElementById("fila2_image_4"); 
	
    salida.setAttribute("src", ""+cartas_fila_2[variable1]); 
    salida.style.display = "block";
	}	
	
	//FILA2 carta 5
	function fila_2_carta_5()
    {
		
    
	document.getElementById("fila2_cartaHidden_5").value =carta5; 
	
	
	var variable1=document.getElementById("fila2_cartaHidden_5").value; 
    var salida=document.getElementById("fila2_image_5"); 
	
    salida.setAttribute("src", ""+cartas_fila_2[variable1]); 
    salida.style.display = "block";
	}	
	
	// FILA 3 CODIGO COMPLETO**********************************************************************	
	//FILA3 carta 1
	function fila_3_carta_1()
    {
				
    
	document.getElementById("fila3_cartaHidden_1").value =carta1; //5 es la cantidad de numeros y +1 es que comienze del numero 1
	
	
	var variable1=document.getElementById("fila3_cartaHidden_1").value; //Esto me permite pasar el valor del número random a una variable	
    var salida=document.getElementById("fila3_image_1"); 
	
    salida.setAttribute("src", ""+cartas_fila_3[variable1]); // en vez de crear, le asignamos el attr src a la imagen ya existente.
    salida.style.display = "block";
	}	
	
	//FILA3 carta 2
	function fila_3_carta_2()
    {
			
    
	document.getElementById("fila3_cartaHidden_2").value =carta2; 
	
	
	var variable1=document.getElementById("fila3_cartaHidden_2").value;
    var salida=document.getElementById("fila3_image_2"); 
	
    salida.setAttribute("src", ""+cartas_fila_3[variable1]); 
    salida.style.display = "block";
	}
	
	//FILA3 carta 3
	function fila_3_carta_3()
    {
		
    
	document.getElementById("fila3_cartaHidden_3").value =carta3; 
	
	
	var variable1=document.getElementById("fila3_cartaHidden_3").value;
    var salida=document.getElementById("fila3_image_3"); 
	
    salida.setAttribute("src", ""+cartas_fila_3[variable1]); 
    salida.style.display = "block";
	}
		
	//FILA3 carta 4
	function fila_3_carta_4()
    {
		
    
	document.getElementById("fila3_cartaHidden_4").value =carta4; 
	
	
	var variable1=document.getElementById("fila3_cartaHidden_4").value; 
    var salida=document.getElementById("fila3_image_4"); 
	
    salida.setAttribute("src", ""+cartas_fila_3[variable1]); 
    salida.style.display = "block";
	}	
	
	//FILA3 carta 5
	function fila_3_carta_5()
    {
		
    
	document.getElementById("fila3_cartaHidden_5").value =carta5; 
	
	
	var variable1=document.getElementById("fila3_cartaHidden_5").value; 
    var salida=document.getElementById("fila3_image_5"); 
	
    salida.setAttribute("src", ""+cartas_fila_3[variable1]); 
    salida.style.display = "block";
	}	
	  
// FILA 4 CODIGO COMPLETO**********************************************************************	
	//FILA4 carta 1
	function fila_4_carta_1()
    {
				
    
	document.getElementById("fila4_cartaHidden_1").value =carta1; //5 es la cantidad de numeros y +1 es que comienze del numero 1
	
	
	var variable1=document.getElementById("fila4_cartaHidden_1").value; //Esto me permite pasar el valor del número random a una variable	
    var salida=document.getElementById("fila4_image_1"); 
	
    salida.setAttribute("src", ""+cartas_fila_4[variable1]); // en vez de crear, le asignamos el attr src a la imagen ya existente.
    salida.style.display = "block";
	}	
	
	//FILA4 carta 2
	function fila_4_carta_2()
    {
			
    
	document.getElementById("fila4_cartaHidden_2").value =carta2; 
	
	
	var variable1=document.getElementById("fila4_cartaHidden_2").value;
    var salida=document.getElementById("fila4_image_2"); 
	
    salida.setAttribute("src", ""+cartas_fila_4[variable1]); 
    salida.style.display = "block";
	}
	
	//FILA4 carta 3
	function fila_4_carta_3()
    {
		
    
	document.getElementById("fila4_cartaHidden_3").value =carta3; 
	
	
	var variable1=document.getElementById("fila4_cartaHidden_3").value;
    var salida=document.getElementById("fila4_image_3"); 
	
    salida.setAttribute("src", ""+cartas_fila_4[variable1]); 
    salida.style.display = "block";
	}
		
	//FILA4 carta 4
	function fila_4_carta_4()
    {
		
    
	document.getElementById("fila4_cartaHidden_4").value =carta4; 
	
	
	var variable1=document.getElementById("fila4_cartaHidden_4").value; 
    var salida=document.getElementById("fila4_image_4"); 
	
    salida.setAttribute("src", ""+cartas_fila_4[variable1]); 
    salida.style.display = "block";
	}	
	
	//FILA4 carta 5
	function fila_4_carta_5()
    {
		
    
	document.getElementById("fila4_cartaHidden_5").value =carta5; 
	
	
	var variable1=document.getElementById("fila4_cartaHidden_5").value; 
    var salida=document.getElementById("fila4_image_5"); 
	
    salida.setAttribute("src", ""+cartas_fila_4[variable1]); 
    salida.style.display = "block";
	}	
	
	// FILA 5 CODIGO COMPLETO**********************************************************************	
	//FILA5 carta 1
	function fila_5_carta_1()
    {
				
    
	document.getElementById("fila5_cartaHidden_1").value =carta1; //5 es la cantidad de numeros y +1 es que comienze del numero 1
	
	
	var variable1=document.getElementById("fila5_cartaHidden_1").value; //Esto me permite pasar el valor del número random a una variable	
    var salida=document.getElementById("fila5_image_1"); 
	
    salida.setAttribute("src", ""+cartas_fila_5[variable1]); // en vez de crear, le asignamos el attr src a la imagen ya existente.
    salida.style.display = "block";
	}	
	
	//FILA5 carta 2
	function fila_5_carta_2()
    {
			
    
	document.getElementById("fila5_cartaHidden_2").value =carta2; 
	
	
	var variable1=document.getElementById("fila5_cartaHidden_2").value;
    var salida=document.getElementById("fila5_image_2"); 
	
    salida.setAttribute("src", ""+cartas_fila_5[variable1]); 
    salida.style.display = "block";
	}
	
	//FILA5 carta 3
	function fila_5_carta_3()
    {
		
    
	document.getElementById("fila5_cartaHidden_3").value =carta3; 
	
	
	var variable1=document.getElementById("fila5_cartaHidden_3").value;
    var salida=document.getElementById("fila5_image_3"); 
	
    salida.setAttribute("src", ""+cartas_fila_5[variable1]); 
    salida.style.display = "block";
	}
		
	//FILA5 carta 4
	function fila_5_carta_4()
    {
		
    
	document.getElementById("fila5_cartaHidden_4").value =carta4; 
	
	
	var variable1=document.getElementById("fila5_cartaHidden_4").value; 
    var salida=document.getElementById("fila5_image_4"); 
	
    salida.setAttribute("src", ""+cartas_fila_5[variable1]); 
    salida.style.display = "block";
	}	
	
	//FILA5 carta 5
	function fila_5_carta_5()
    {
		
    
	document.getElementById("fila5_cartaHidden_5").value =carta5; 
	
	
	var variable1=document.getElementById("fila5_cartaHidden_5").value; 
    var salida=document.getElementById("fila5_image_5"); 
	
    salida.setAttribute("src", ""+cartas_fila_5[variable1]); 
    salida.style.display = "block";
	}	  
	  
</script>



<style type="text/css">

.celda
{
	
	 width:100px;
	 height:150px;
	
}
.button
{
	width:200px;
	
	display:inline;
	font-weight: bold;
	text-align: center;
}
.button_estado
{
	width:270px;
	height:33px;
	display:inline;
	font-weight: bold;
	text-align:left;
}

	
.flex-center 
	{ display:flex;
	font-size-adjust:inherit;
	
	}
#fondo
     { 
	 width:200px;
	 height:276px;
	 background-image: url(../IMAG/baraja.png);
	 background-size: cover;
	 font-size-adjust:inherit;
	 }

#imagen_carta
     { 
	 width:100px;
	 height: 150px;
	 
	 background-size: cover;
	 }

.FONT_STYLE {
	font-family:Tiktok;
	font-size: 24px;
}
.TITULO {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
	
.ENCABEZADO1 
		{
			font-size: 36px;
			font-family: Georgia;
			font-weight: bold;
			color: #FFF;
		}
.TAMAÑO {
	font-size: 16px;
	font-family: Georgia;
	font-weight: bold;
	color: #FFF;
}
.TAMAÑO2 {
	font-size: 15px;
	font-family: Georgia;
	font-weight: bold;
	color: #FFF;
}


body {
	background-color: #000;
}
.subtitulo_central {
	font-family:Monotype Corsiva;
}
</style>

</head>

<body >
<table  style="border: hidden" width="41%"  align="center" cellpadding="1" cellspacing="0" >
    	<tr align="center">
            <th  colspan="6" class="TITULO"> <span class="TAMAÑO">&nbsp;</span></th>
       </tr>
	<tr align="center">
    	<a href="#" class="logotipo" id="logotipo">        
        
	    <div class="texto-animado" id="logo" >"StarLucky"</div>
			<p class="subtitulo"><span class="subtitulo_central" onClick="location.href=location.href">»♥Juega y Gana.♥« </span>;</p>
        </a>
       
	  <script src="js/app.js">/* onClick="location.href=location.href"  refresca la pagina como si fuera un F5 */</script>
        
        
        
   </tr>
  
   
   
    <tr align="center">
    <td><input style=" width:270px; height:276px;" type="image" src="../IMAG/pikachu.png"/td>

    <td class="celda" >
        <div class="flex-center">  
           	<div id="fondo">
                    
    			<input type="image" onClick="fila_1_carta_1();" src="../IMAG/baraja.png" style=" width:200px; height:276px;" id="fila1_image_1" />
                <input  type="hidden" id="fila1_cartaHidden_1" / >
            </div> 
                    
             
      </div>
     </td>
   <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                                   
                <input type="image" onClick="fila_1_carta_2();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila1_image_2" />
                 <input type="hidden" id="fila1_cartaHidden_2" / >  
                </div> 
                    
             
      </div>
     </td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                     
                      <input type="image" onClick="fila_1_carta_3();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila1_image_3" />
                     <input type="hidden" id="fila1_cartaHidden_3" / >  
                     
                </div> 
                    
             
      </div>
     </td>
      <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_1_carta_4();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila1_image_4" />
                     <input type="hidden" id="fila1_cartaHidden_4" / >    
          </div> 
                    
             
        </div>
     </td>
     <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_1_carta_5();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila1_image_5" />
                     <input type="hidden" id="fila1_cartaHidden_5" / >  
                </div> 
                    
             
       </div>
     </td>
  </tr>
  <tr>
  <tr>
    <td><input  type="image" src="../IMAG/nivel_completado.png" class="button_estado" ></button></td>
    <td><button class="button" onClick="borrar_fila_1_carta_1();">(*¤°•♥<span class="FONT_STYLE">AMOR</span>♥•°¤*) </button></td>
    <td><button class="button" onClick="borrar_fila_1_carta_2();">(*♥¤<span class="FONT_STYLE">DINERO</span>¤♥*) </button></td>
    <td><button class="button" onClick="borrar_fila_1_carta_3();">(*¤°•♥<span class="FONT_STYLE">SEXO</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_1_carta_4();">(*¤°•♥<span class="FONT_STYLE">SALUD</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_1_carta_5();">(*♥¤<span class="FONT_STYLE">TRABAJO</span>¤♥*)</button></td>
  </tr>
  
  <tr align="center">
  <td><input style=" width:270px; height:276px;" type="image" src="../IMAG/charmander.png"/td></td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_2_carta_1();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila2_image_1" />
                <input  type="hidden" id="fila2_cartaHidden_1" / >
                </div> 
                    
             
      </div>
    </td>
   <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                    <input type="image" onClick="fila_2_carta_2();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila2_image_2" />
                <input  type="hidden" id="fila2_cartaHidden_2" / >
          </div> 
                    
             
      </div>
    </td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_2_carta_3();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila2_image_3" />
                <input  type="hidden" id="fila2_cartaHidden_3" / >
          </div> 
                    
             
      </div>
    </td>
      <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_2_carta_4();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila2_image_4" />
                <input  type="hidden" id="fila2_cartaHidden_4" / >
          </div> 
                    
             
        </div>
     </td>
     <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_2_carta_5();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila2_image_5" />
                <input  type="hidden" id="fila2_cartaHidden_5" / >
          </div> 
                    
             
       </div>
     </td>
  </tr>
                                                  
  <tr>
    <td><input  type="image" src="../IMAG/nivel_completado.png" class="button_estado" ></button></td>
    <td><button class="button" onClick="borrar_fila_2_carta_1();">(*¤°•♥<span class="FONT_STYLE">AMOR</span>♥•°¤*) </button></td>
    <td><button class="button" onClick="borrar_fila_2_carta_2();">(*♥¤<span class="FONT_STYLE">DINERO</span>¤♥*) </button></td>
    <td><button class="button" onClick="borrar_fila_2_carta_3();">(*¤°•♥<span class="FONT_STYLE">SEXO</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_2_carta_4();">(*¤°•♥<span class="FONT_STYLE">SALUD</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_2_carta_5();">(*♥¤<span class="FONT_STYLE">TRABAJO</span>¤♥*)</button></td>
  </tr>
  <tr align="center">
  <td><input style=" width:270px; height:276px;" type="image" src="../IMAG/cyndaquil.png"/td></td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_3_carta_1();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila3_image_1" />
                <input  type="hidden" id="fila3_cartaHidden_1" / >  
                </div> 
                    
             
      </div>
    </td>
   <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                    <input type="image" onClick="fila_3_carta_2();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila3_image_2" />
                <input  type="hidden" id="fila3_cartaHidden_2" / >  
                </div> 
                    
             
      </div>
    </td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_3_carta_3();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila3_image_3" />
                <input  type="hidden" id="fila3_cartaHidden_3" / >  
                </div> 
                    
             
      </div>
    </td>
      <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_3_carta_4();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila3_image_4" />
                <input  type="hidden" id="fila3_cartaHidden_4" / >  
                </div> 
                    
             
        </div>
     </td>
     <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_3_carta_5();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila3_image_5" />
                <input  type="hidden" id="fila3_cartaHidden_5" / > 
          </div> 
                    
             
       </div>
     </td>
  </tr>
<tr>
    <td><input  type="image" src="../IMAG/nivel_completado.png" class="button_estado" ></button></td>
    <td><button class="button" onClick="borrar_fila_3_carta_1();">(*¤°•♥<span class="FONT_STYLE">AMOR</span>♥•°¤*) </button></td>
    <td><button class="button" onClick="borrar_fila_3_carta_2();">(*♥¤<span class="FONT_STYLE">DINERO</span>¤♥*) </button></td>
    <td><button class="button" onClick="borrar_fila_3_carta_3();">(*¤°•♥<span class="FONT_STYLE">SEXO</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_3_carta_4();">(*¤°•♥<span class="FONT_STYLE">SALUD</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_3_carta_5();">(*♥¤<span class="FONT_STYLE">TRABAJO</span>¤♥*)</button></td>
  </tr>
  <tr align="center">
    <td><input style=" width:270px; height:276px;" type="image" src="../IMAG/squirtle.png"/td></td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_4_carta_1();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila4_image_1" />
                <input  type="hidden" id="fila4_cartaHidden_1" / >  
                </div> 
                    
             
      </div>
    </td>
   <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_4_carta_2();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila4_image_2" />
                <input  type="hidden" id="fila4_cartaHidden_2" / >  
                </div> 
                    
             
      </div>
    </td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_4_carta_3();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila4_image_3" />
                <input  type="hidden" id="fila4_cartaHidden_3" / >  
                </div> 
                    
             
      </div>
    </td>
      <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_4_carta_4();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila4_image_4" />
                <input  type="hidden" id="fila4_cartaHidden_4" / >  
                </div> 
                    
             
        </div>
     </td>
     <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                     <input type="image" onClick="fila_4_carta_5();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila4_image_5" />
                <input  type="hidden" id="fila4_cartaHidden_5" / > 
          </div> 
                    
             
       </div>
     </td>
  </tr>
  <tr>
    <td><input  type="image" src="../IMAG/nivel_completado.png" class="button_estado" ></button></td>
    <td><button class="button" onClick="borrar_fila_4_carta_1();">(*¤°•♥<span class="FONT_STYLE">AMOR</span>♥•°¤*) </button></td>
    <td><button class="button" onClick="borrar_fila_4_carta_2();">(*♥¤<span class="FONT_STYLE">DINERO</span>¤♥*) </button></td>
    <td><button class="button" onClick="borrar_fila_4_carta_3();">(*¤°•♥<span class="FONT_STYLE">SEXO</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_4_carta_4();">(*¤°•♥<span class="FONT_STYLE">SALUD</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_4_carta_5();">(*♥¤<span class="FONT_STYLE">TRABAJO</span>¤♥*)</button></td>
  </tr>
  <tr align="center">
    <td><input style=" width:270px; height:276px;" type="image" src="../IMAG/totodile.png"/td></td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_5_carta_1();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila5_image_1" />
                <input  type="hidden" id="fila5_cartaHidden_1" / >  
                </div> 
                    
             
      </div>
    </td>
   <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_5_carta_2();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila5_image_2" />
                <input  type="hidden" id="fila5_cartaHidden_2" / >  
                </div> 
                    
             
      </div>
    </td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_5_carta_3();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila5_image_3" />
                <input  type="hidden" id="fila5_cartaHidden_3" / >  
                </div> 
                    
             
      </div>
    </td>
      <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_5_carta_4();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila5_image_4" />
                <input  type="hidden" id="fila5_cartaHidden_4" / >  
                </div> 
                    
             
        </div>
     </td>
    <td class="celda" >
        <div class="flex-center">  
           		<div id="fondo">
                    
                  <input type="image" onClick="fila_5_carta_5();" src="../IMAG/baraja.png" style="display:block; width:200px; height:276px;" id="fila5_image_5" />
                <input  type="hidden" id="fila5_cartaHidden_5" / > 
                </div> 
                    
             
       </div>
    </td>
  </tr>
  <tr>
  <tr>
    <td><input  type="image" src="../IMAG/nivel_completado.png" class="button_estado" ></button></td>
    <td><button class="button" onClick="borrar_fila_5_carta_1();">(*¤°•♥<span class="FONT_STYLE">AMOR</span>♥•°¤*) </button></td>
    <td><button class="button" onClick="borrar_fila_5_carta_2();">(*♥¤<span class="FONT_STYLE">DINERO</span>¤♥*) </button></td>
    <td><button class="button" onClick="borrar_fila_5_carta_3();">(*¤°•♥<span class="FONT_STYLE">SEXO</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_5_carta_4();">(*¤°•♥<span class="FONT_STYLE">SALUD</span>♥•°¤*)</button></td>
    <td><button class="button" onClick="borrar_fila_5_carta_5();">(*♥¤<span class="FONT_STYLE">TRABAJO</span>¤♥*)</button></td>
  </tr>
</table>
</body>
</html>




