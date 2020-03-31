Redsys Messages
=====

Ficheros de apoyo que contienen los mensajes remitidos por el TPV en la respuesta a través de "MerchantURL".

Los ficheros de `Messages` contienen:

 * `01-SIS.php`: Contiene los errores detallados comunes para todos los sistemas de plataformas TPV (Ds_ErrorCode).
 * `02-MSG.php`: Contiene los mensajes genéricos asociados a la respuesta SIS del sistema. Se utiliza como respuesta al usuario.
 * `03-Common.php`: Contiene todas las respuestas comunes a todas las entidades (Ds_Response).
 * `04-Sabadell.php`: Contiene todas las respuestas propias de la plataforma de Sabadell (Ds_Response).

## Uso:

```php
include ('/path/to/redsys-Messages/autoload.php');

use Redsys\Messages\Messages;

$all = Messages::getAll(); // Devuelve todos los mensajes
$message = Messages::getByCode('0001'); // Devuelve el mensaje con código
$messages = Messages::getByExp('^SIS'); // Devuelve todos los mensajes que contentan esa expresión
```
