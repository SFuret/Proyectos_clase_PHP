<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/214.css" title="style" />
    <title>Maquetación</title>

    <style>
        :root{
    --color-head: #148a14;
    --color-aside:rgb(20, 124, 138);
    --color-main: rgb(138, 20, 132);
    --color-footer: rgb(211, 51, 23);
    --borde-elementos-exterior: rgb(228, 41, 8);
    --borde-elementos-interior: rgb(23, 8, 228);
    --color-texto:rgb(253, 253, 253);
}

/*General*/
*{
    margin: 0px;
    padding: 0px;
}

body{
    margin: 0 auto;
    width: 100vw; /* Ocupa el 100% del ancho de la pantalla */
    height: 100vh; /* Ocupa también el 100% de la altura */
    color:var(--color-texto);
    text-align: center;
    display: flex;
    flex-wrap: wrap;
}

/*Elementos pincipales*/

#header{
    background-color: var(--color-head);
    width: 100%;
    height: 10vh;
     display: flex;
     align-items: center;
}

#aside{
    background-color: var(--color-aside);
    width: 25%;
    height: 80vh;
    display: flex;
    justify-content: center;
}

#main{
    background-color: var(--color-main);
    width: 75%;
    height: 80vh;
}

#footer{
    background-color: var(--color-footer);
    width: 100%;
    height: 10vh;
}

/*Contenido*/

#contenido_superior{
width: 80%;
height: 40%;
display: flex;
}

#contenido_inferior{
    width: 80%;
    height: 40%;
    display: flex;
    
    }

.capa_externa{
border: 2px solid var(--borde-elementos-exterior);
margin-left:10%;
margin-top: 2%;
}


/*Capa interna superior*/

.capa_interna_superior{
    border: 2px solid var(--borde-elementos-interior);
    width: 40%;
    height: 80%;
    margin-top: 2%;
    margin-left: 6%;
}


/*Capa interna inferior*/

.capa_interna_inferior{
    border: 2px solid var(--borde-elementos-interior);
    width: 30%;
    height: 80%;
    margin-top: 2%;
    margin-left: 2%
}

/*MENÚ HORIZONTAL*/


#menuHoriz{
    display: flex;   
    justify-content:space-evenly;
    width: 50%;
}

.menu>li{
    text-decoration: none;
    list-style-type: none;
}

/*MENÚ VERICAL*/


#menuVert{
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

/*Texto*/

#texto_footer{
    padding-top: 1.5%;
}

.active{
    color: rgb(13, 13, 235);
}
    </style>
</head>
<body>
    
<div id="header" class="menuHorizontal">

<ul id="menuHoriz" class="menu">
    <li><a href="?action=inicio">Inicio</a></li>
    <li><a href="?action=productos">Productos</a></li>
    <li><a href="?action=sobreNosotros">Sobre Nosotros</a></li>       
</ul>
</div>