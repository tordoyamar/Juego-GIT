<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>   <big> <h1> JAVA </h1><big> </center>
    <P>JAVA es un lenguaje de proramacion que hace que las paginas web sean mas dinamicas </P>
    <h2>SINTAXIS DE JAVA</h2>
    <P>public class Hola {
    public static void main(String[] args) {
        System.out.println("AFHBNAJD");
    }
}
</P>
<H3>ESTRUCTURAS REPETITIAS</H3>
<P>for (int i = 0; i < 5; i++) {
    System.out.println(i);
}

int[] arr = {1,2,3};
for (int v : arr) {
    System.out.println(v);
}        </P>

<H4> POO </H4>
<P>Clase: Es como un molde o plantilla que sirve para crear objetos. Dentro de una clase se define qué cosas tendrá  y qué puede hacer .

Atributos:Son las variables que están dentro de la clase. Representan las características del objeto.
Pueden tener niveles de acceso como private, protected o public, y también pueden ser static o final según cómo se vayan a usar.

Métodos:Son las funciones que están dentro de la clase. Representan las acciones o comportamientos del objeto.
Pueden ser de dos tipos:

static → pertenecen directamente a la clase

de instancia → son de cada objeto que se cree

Constructores:Son funciones especiales que se ejecutan cuando creas un objeto.
Sirven para darle valores iniciales a los atributos.
Siempre se llaman igual que la clase.

Abstracción e interfaces: La abstracción permite definir ideas generales sin entrar en detalles.
Las interfaces funcionan como un contrato: una clase que implemente una interfaz está obligada a crear los métodos que la interfaz declara.</P>
<H5>HERENCIA</H5>
<P>Se usa extends para heredar: class Hija extends Madre.

La clase padre aporta atributos y métodos que la hija reutiliza.

super llama al constructor de la clase padre.

Sobrescritura (overriding): una subclase puede redefinir un método de la superclase.

Polimorfismo: se puede usar una referencia del tipo de la superclase para referirse a objetos de subclases.

Java sólo soporta herencia simple de clases, pero permite múltiples interfaces.</P>
    




































</body>
</html>