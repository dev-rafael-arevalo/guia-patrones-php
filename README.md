# Guía de Ejercicios - Patrones de Diseño en PHP

Este proyecto contiene una serie de ejercicios realizados en PHP que aplican diferentes patrones de diseño según las instrucciones proporcionadas. Cada ejercicio está enfocado en un caso de uso práctico para entender y aplicar los conceptos de los patrones de diseño.

## Contenido del Proyecto

El proyecto está organizado de la siguiente manera:

- **factory.php: Patrón Factory**
  - Implementación de un programa que crea dos personajes, "Esqueleto" y "Zombi", según el nivel del juego.

- **adapter.php: Patrón Adapter**
  - Solución para compatibilidad entre versiones de archivos en Windows 7 y Windows 10.

- **decorator.php: Patrón Decorator**
  - Implementación de la funcionalidad para añadir diferentes armas a personajes de videojuegos.

- **strategy.php: Patrón Strategy**
  - Programa que permite mostrar mensajes en diferentes formatos: consola, JSON y archivo TXT.

## Requisitos del Sistema

Para ejecutar los ejercicios, asegúrate de tener lo siguiente instalado:

- **PHP 7.4 o superior**
- **Git** (opcional para clonar el repositorio)
- Un servidor local como [XAMPP](https://www.apachefriends.org/) o [Laragon](https://laragon.org/), o acceso a línea de comandos con PHP configurado.

## Instalación

Sigue estos pasos para descargar y ejecutar el proyecto:

1. Clona este repositorio en tu máquina local:
   ```bash
   git clone https://github.com/dev-rafael-arevalo/guia-patrones-php.git
   ```

2. Navega al directorio del proyecto:
   ```bash
   cd guia-patrones-php
   ```

3. Asegúrate de que tu entorno de PHP esté configurado correctamente.

## Ejecución de los Ejercicios

Cada ejercicio está contenido en un archivo independiente. Para ejecutarlos:

1. Abre una terminal o línea de comandos.
2. Navega al directorio del ejercicio correspondiente (por ejemplo, `factory.php`).
3. Ejecuta el archivo con el comando:
   ```bash
   php factory.php
   ```
4. Sigue las instrucciones en pantalla según el ejercicio.

## Descripción de los Ejercicios

### **Ejercicio 1: Patrón Factory**
- Archivo: `factory.php`
- Este ejercicio implementa un Factory para crear los personajes "Esqueleto" o "Zombi" según el nivel del juego.

### **Ejercicio 2: Patrón Adapter**
- Archivo: `adapter.php`
- Se utiliza el patrón Adapter para garantizar la compatibilidad de archivos entre diferentes versiones de sistemas operativos.

### **Ejercicio 3: Patrón Decorator**
- Archivo: `decorator.php`
- Implementación de un sistema donde se pueden añadir armas a los personajes utilizando el patrón Decorator.

### **Ejercicio 4: Patrón Strategy**
- Archivo: `strategy.php`
- Solución que permite cambiar el formato de salida de mensajes mediante el patrón Strategy.

## Estructura del Proyecto

```
├── factory.php  # Código del Ejercicio de patrón Factory
├── adapter.php  # Código del Ejercicio de patrón Adapter
├── decorator.php  # Código del Ejercicio de patrón Decorator
├── strategy.php  # Código del Ejercicio de patrón Strategy
└── README.md       # Descripción del Proyecto
```

## Contribuciones

Este proyecto es individual y está orientado a fines académicos. Sin embargo, si tienes sugerencias o mejoras, no dudes en abrir un issue o enviar un pull request.

## Autor

Este proyecto fue desarrollado por:
- **Rafael Edgardo Arévalo**
- **Correo Electrónico:** rafael.edgardo.arevalo@gmail.com
- **GitHub:** [https://github.com/dev-rafael-arevalo](https://github.com/dev-rafael-arevalo)

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.
