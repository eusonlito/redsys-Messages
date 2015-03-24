Redsys Messages
=====

Ficheros de apoyo que contienen los mensajes remitidos por el TPV en la respuesta a través de "MerchantURL".

Los ficheros de `Messages` contienen:

 * `MSG.php`: Contiene los mensajes genéricos asociados a la respuesta SIS del sistema. Se utiliza como respuesta al usuario.
 * `ErrorCode.php`: Contiene los errores detallados comunes para todos los sistemas de plataformas TPV (Ds_ErrorCode).
 * `Response-common.php`: Contiene todas las respuestas comunes a todas las entidades (Ds_Response).
 * `Response-sabadell.php`: Contiene todas las respuestas propias de la plataforma de Sabadell (Ds_Response).

## Uso:

```php
include ('/path/to/redsys-Messages/autoload.php');

$all = new Redsys\Messages\Messages::getAll(); // Devuelve todos los mensajes
$message = new Redsys\Messages\Messages::getByCode('0001'); // Devuelve el mensaje con código
$messages = new Redsys\Messages\Messages::getByExp('^SIS'); // Devuelve todos los mensajes que contentan esa expresión
```
