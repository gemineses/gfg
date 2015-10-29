# AFGS
# Es un sistema contable y administrativo
Basado en un mvc propio.
Con mvc propio me refiero a que la arquitectura al ser creada desde 0 permite tener acceso a editar las librerias y crear las necesarias para poder desarrollar, sin necesidad de importar librerias que en realidad no se utilicen en todo el sistema.

- V 0.1 
 - Ahora se valida si la sesion esta iniciada para poder entrar al sistema
 - Consultas de catalogos (catalogo de cuentas contables, empleados, puestos y departamentos)
 - Se agrego angularJs y css para manejar las vistas, independientemente se puede agregar cualquier framework para web desde el core/libs
 - Se creo la estructura del sistema donde todo redirije al controlador y este a su vez puede llamar el modelo y/o vista en caso de ser necesarios 
 - El nucleo del sistema se penso muy independiente del mvc, puesto que aqui se agregaran las librerias y rutas basicas del sistema, como librerias recae cualquier metodo que sera utilizado de modo estatico
 - Se creo el framework con un sistema de logs propios donde se imprime en una carpeta en la raiz (esto se penso para imprimir los querys)
