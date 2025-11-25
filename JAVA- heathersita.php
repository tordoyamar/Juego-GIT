<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    body{
background:beige;
    }

</style>

<body>



    <center>   <big> <h1> JAVA </h1><big> </center>
 
<h2>⭐Sintaxis de Java</h2>
<p> java usa una estructura donde todo va dentro de clases, y el programa inicia en el método main.

 <strong><ul><li>Estructura mínima de un programa</li> </ul>  </strong>
public class Main {
    public static void main(String[] args) {
        System.out.println("Hola");
    }
}

<strong><ul><li>Declaración de variables</li> </ul> </strong>   
int numero = 10; <br>
double precio = 5.99;<br>
String nombre = "Ana";<br>
 

  <strong><ul><li>Comentarios</li> </ul> </strong> 
// Comentario de una línea <br>

/*
Comentario de varias líneas
*/

 <strong><ul><li>Imprimir en pantalla</li> </ul></strong>  
<p>System.out.println("Texto");</p>





<h2>⭐ Estructuras Repetitivas</h2>
<p> Las estructuras repetitivas permiten ejecutar un bloque de código varias veces.

 <strong><ul><li> Bucle for</li> </ul>  </strong> 

 

 
Se usa cuando sabes cuántas veces quieres repetir algo. <br>


<em>Sintaxis</em><br>
for (inicialización; condición; actualización) {<br>
    // código
} <br>

Ejemplo<br>
for (int i = 1; i <= 5; i++) {<br>
    System.out.println(i);<br>
}<br>
* Imprime del 1 al 5.<br>

 <strong><ul><li> Bucle while</li> </ul>  </strong> 

Se usa cuando quieres repetir algo mientras una condición sea verdadera.<br>

Sintaxis<br>
while (condición) {<br>
    // código<br>
}<br>

Ejemplo<br>
int i = 1;<br>

while (i <= 5) {<br>
    System.out.println(i);<br>
    i++;<br>
}<br>

 <strong><ul><li> Bucle  do- while</li> </ul>  </strong> 

Es como el while, pero el bloque se ejecuta al menos una vez, incluso si la condición es falsa.<br>

Sintaxis<br>
do {<br>
    // código<br>
} while (condición);<br>

Ejemplo<br>
int i = 1;<br>

do {<br>
    System.out.println(i);<br>
    i++;<br>
}<br> while (i <= 5); 



















</p>






<h2>⭐POO (Atributos y Métodos)</h2>
<p>
<strong> <ul><li>Atributos</li> </ul></strong>

Los <strong>atributos</strong> son las características o datos que describen a un objeto.<br>
Representan su información interna, como por ejemplo: nombre, edad, color, tamaño, peso.<br>
Son variables dentro de una clase.<br>
 


<strong> <ul><li>Métodos</li></ul></strong>


Los <strong>métodos</strong> son las acciones que un objeto puede realizar. <br>
Indican su comportamiento, como: saludar(), correr(), calcularEdad(), mostrarDatos(). <br>

</p>
 
<h2>⭐ Herencia</h2>
<p>


<strong><ul> <li>Herencia</li></ul></strong>

 
La <strong>herencia</strong> en Java permite que una clase ( clase hija)<br>
pueda recibir los atributos y métodos de otra clase ( clase padre).<br><br>

Gracias a esto, la clase hija puede reutilizar código, ampliar funciones o modificar<br>
(como sobrescribir) el comportamiento heredado de la clase padre.<br><br>

Es una forma de crear clases nuevas basadas en otras ya existentes.
 
 
</p>
 
 
 
 
</body>
</html>