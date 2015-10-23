# AFGS
# Es un sistema contable y administrativo
Basado en un mvc propio.
Con mvc propio me refiero a que la arquitectura al ser creada desde 0 permite tener acceso a editar las librerias y crear las necesarias para poder desarrollar, sin necesidad de importar librerias que en realidad no se utilicen en todo el sistema.

- V 0.4 Modulos
 - Actualmente se esta trabajando en los modulos de contabilidad y nomina

- V 0.3 FrameWorks Locales
 - Se agrego angularJs y css para manejar las vistas, independientemente se puede agregar cualquier framework para web desde el core/libs

- V 0.2 MVC
 - Se creo la estructura del sistema donde todo redirije al controlador y este a su vez puede llamar el modelo y/o vista en caso de ser necesarios 

- V 0.1.2 Core
 - El nucleo del sistema se penso muy independiente del mvc, puesto que aqui se agregaran las librerias y rutas basicas del sistema, como librerias recae cualquier metodo que sera utilizado de modo estatico

- V 0.1.1 Logs
 - Se creo el framework con un sistema de logs propios donde se imprime en una carpeta en la raiz (esto se penso para imprimir los querys)
