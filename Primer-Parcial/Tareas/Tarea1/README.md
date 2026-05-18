# Tarea 1 - Análisis de caso real
 
Nombre: Sergio R. Canche León 
Caso 15 — Sistema de logs de un servidor  
Enlace al video: https://drive.google.com/drive/folders/1uJHHPmxkOV9GBlGGC14bwD9OTmiZ3NbV?usp=drive_link

 
## Descripción del caso
 
Un servidor web genera entradas de log de forma continua. Cada entrada contiene una marca de tiempo, un nivel de severidad (INFO, WARNING, ERROR, CRITICAL) y un mensaje de texto. El sistema debe permitir agregar entradas rápidamente, buscar entradas por rango de tiempo y mostrar el log completo ordenado por severidad.
 
### Operaciones que debe soportar
 
- Agregar una nueva entrada al log.
- Buscar todas las entradas con severidad ERROR o CRITICAL entre dos marcas de tiempo dadas.
- Mostrar el log completo ordenado por nivel de severidad (CRITICAL primero, INFO último).
### Comportamiento de los datos
 
- Se insertan constantemente y en tiempo real.
- Rara vez se eliminan.
- No necesitan estar ordenados durante la inserción, solo al momento de consultarlos.
 
## Estructura de datos elegida
 
**Lista enlazada simple**
 
Se eligió porque permite agregar nuevas entradas al final sin necesidad de reorganizar los elementos existentes. Cada nodo guarda su entrada y apunta al siguiente, lo que es ideal para un flujo continuo de datos donde la prioridad es insertar rápido.
 
### Alternativa descartada: Árbol
 
Un árbol binario de búsqueda permitiría búsquedas más rápidas por rango de tiempo, pero su implementación es más compleja y si no está balanceado puede degradar su rendimiento. Para el tipo de operaciones de este caso, esa complejidad no se justifica.
 
 
## Algoritmo de ordenamiento elegido
 
**Counting Sort**
 
El nivel de severidad solo tiene 4 valores posibles y fijos (INFO, WARNING, ERROR, CRITICAL). Counting Sort es perfecto para este escenario porque no compara elementos entre sí, sino que cuenta cuántos hay de cada categoría y los coloca directamente.
 
### Alternativa descartada: Quick Sort
 
Quick Sort tiene una complejidad promedio y funciona bien en general, pero está pensado para datos con muchos valores distintos. Usarlo aquí sería innecesariamente costoso comparado con Counting Sort para este caso específico.
 

 
## Escalabilidad y análisis técnico
 
Si el sistema creciera 10× o 100×, la inserción seguiría trabajando sin ningún problema. El cuello de botella aparecería en la búsqueda por rango de tiempo, ya que recorrer toda la lista se volvería lento debido a las millones de entradas que surgirían.
 
A gran escala convendría complementar la lista con un índice adicional o considerar una estructura que permita búsquedas por rango más eficientes. El Counting Sort seguiría funcionando igual de bien sin importar el volumen, ya que los niveles de severidad nunca cambian.
 
### Limitaciones de la propuesta
 
- La búsqueda por rango de tiempo sería el peor caso.
- Con volúmenes muy altos de entradas por segundo, recorrer toda la lista puede convertirse en un cuello de botella real.
 
## Conclusión
 
La lista enlazada simple es la estructura más adecuada para este sistema porque permite inserción continua sin reorganizar los datos existentes. Counting Sort es el algoritmo ideal para ordenar por severidad dado que los niveles son solo 4 valores fijos, haciéndolo más eficiente que cualquier algoritmo de comparación. La principal limitación es la búsqueda por rango de tiempo, que a gran escala podría volverse lenta, pero para el alcance actual del sistema la solución es funcional y eficiente.