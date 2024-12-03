# CRUD en php de una table de una base de datos
Aplicación de banco pokèmon

## Contenidos

-[Características](#características)  
-[Estructura de la Base de Datos](#estructura-de-la-base-de-datos)  
-[Estructura del Proyecto](#estructura-del-proyecto)  
-[Funcionalidades](#funcionalidades)  
-[Tipos de Pokémon Disponibles](#tipos-de-pokémon-disponibles)  
-[Seguridad](#seguridad)  

<br>

## Características

- Sistema de autenticación de usuarios
- Listado de Pokèmon con sus características
- Operaciones CRUD completas:
  - Crear nuevos Pokèmon
  - Ver detalles de Pokèmon existentes
  - Actualizar información de Pokémon
  - Eliminar Pokèmon
- Validación de datos

<br>

## Estructura de la Base de Datos

Tabla pokemon:
- id (int, auto_increment, primary key)
- name (varchar)
- weight (float) - en kilogramos
- height (float) - en metros
- type (enum) - tipo de Pokémon
- evolution (int) - número de evoluciones

<br>

## Estructura del Proyecto

pokemon/
- index.php: Listado principal de Pokèmon
- create.php: Formulario para crear Pokèmon
- store.php: Procesa la creación
- show.php: Muestra detalles de un Pokèmon
- edit.php: Formulario para editar Pokèmon
- update.php: Procesa la actualización
- destroy.php: Elimina Pokèmon
- js/script.js: JavaScript para confirmación de borrado

<br>

## Funcionalidades

### Usuarios No Autenticados
- Ver listado de Pokèmon
- Ver detalles de Pokèmon individual

### Usuarios Autenticados
- Todas las funcionalidades de usuarios no autenticados
- Crear nuevos Pokèmon
- Editar Pokèmon existentes
- Eliminar Pokèmon

<br>

## Tipos de Pokèmon Disponibles

- Bug
- Dark
- Dragon
- Electric
- Fairy
- Fighting
- Fire
- Flying
- Ghost
- Grass
- Ground
- Ice
- Normal
- Poison
- Psychic
- Rock
- Steel
- Water

<br>

## Seguridad

- Control de sesiones para acceso a operaciones CRUD
- Validación de datos en servidor
- Prevención de SQL injection usando PDO
- Confirmación JavaScript para eliminación
