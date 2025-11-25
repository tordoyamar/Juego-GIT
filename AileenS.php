<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><big> <h1><u>JAVA</u></h1><big></center>

<h2>SINTAXIS DE JAVA</h2>
<p>Es el conjunto de reglas que rigen la escritura y estructura del código, permitiendo que el compilador lo interprete correctamente. Incluye elementos como la declaración de variables, el uso de llaves {} para bloques de código, puntos y comas ; al final de las instrucciones y la creación de clases y objetos, que son fundamentales para la programación orientada a objetos en Java. </p>

<p>  <h3> Estructura general</h3>
    <p>La estructura general de un programa en Java se basa en clases, donde al menos una de ellas debe contener el método main que sirve como punto de entrada. Cada clase puede incluir variables (miembros de datos) y métodos (funciones que operan sobre los datos). Dentro del método main, las sentencias se ejecutan secuencialmente o se controlan con estructuras de control como if o for. </p>
public class Main {<br>
    public static void main(String[] args) {<br>
        System.out.println("Hola, profe!");<br>
    }<br>
}

<h3>Caracteristicas de JAVA</h3> 
- Todo programa tiene una clase y un método main.<br>
- Las llaves {} delimitan bloques de código.<br>
- Las líneas terminan con ;.<br>

<h3>Estructuras de control </h3>
<p>Ramas condicionales, que se utilizan para elegir entre dos o más rutas. Existen tres tipos en Java: if/else/else if, operador ternario y switch . Bucles que se utilizan para iterar sobre múltiples valores/objetos y ejecutar repetidamente bloques de código específicos.</p>
if (x > 0) { ... } else { ... }<br>
for (int i = 0; i < 5; i++) { ... }<br>
while (condición) { ... }<br>
- Controlan el flujo del programa.<br>

<h3> Métodos</h3>
<p>Son bloques de código que realizan una tarea específica y se definen dentro de una clase para reutilizar funcionalidad. Están compuestos por una firma (nombre y parámetros) y un cuerpo que contiene las instrucciones. Para usarlos, se llaman invocando el nombre del método seguido de paréntesis, a veces con argumentos si el método los requiere. </p>
void saludar() {<br>
    System.out.println("Hola!");<br>
}<br>
- Bloques de código reutilizables.<br>
- Se pueden recibir parámetros y devolver valores.<br>
 
<h3>Clases y Objetos</h3>
<p>Una clase es un modelo o plantilla que define la estructura (variables o atributos) y el comportamiento (métodos) de un tipo de objeto. Un objeto es una instancia concreta de una clase, creada a partir de su modelo, que tiene sus propios valores de estado y se puede usar para interactuar con la información definida en la clase.</p>
class Persona {<br>
    String nombre;<br>
    void saludar() {<br>
        System.out.println("Hola " + nombre);<br>
    }
}
<br>
- Java es orientado a objetos.<br>
- Las clases definen estructuras y los objetos son instancias<br> </p>

<h3>POO (ATRIBUTOS Y METODOS )</h3>
<p><strong>Atributo:</strong> Es una característica fundamental de cada objeto de una clase. Son los datos o la información que describen las características esenciales de los objetos o instancias de la clase.<br>
- Un objeto puede tener varios atributos.<br>
- Todos los atributos tienen un valor.<br>
<strong>Método:</strong>Es una acción que se realiza sobre un objeto para consultar o modificar su estado. Son las operaciones que pueden realizar las instancias, sus acciones. <br>
Que una clase nos ayuda a describir a un nuevo grupo de objetos que comparten características dentro de un programa. Para poder definir estas clases se usan dos tipos de elementos o miembros de elementos.</p>

<h3>HERENCIA</h3>
<p>La herencia en JavaScript permite que una clase o un objeto herede propiedades 
 y métodos de otro, promoviendo la reutilización de código mediante la cadena de 
 prototipos o la sintaxis moderna de clases con extends y super, fundamental para  
 la Programación Orientada a Objetos (POO) en JS, creando relaciones padre-hijo donde  
 los hijos pueden extender o sobrescribir funcionalidades de los padres. </p>

</body>
</html>