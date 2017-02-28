<?php
return array(
    '0904' => array(
        'code' => '0904',
        'message' => 'COMERCIO NO REGISTRADO EN EL FUC',
        'detail' => 'Hay un problema en la configuración del código de comercio. Contactar con Banco Sabadell para solucionarlo.'
    ),
    '0909' => array(
        'code' => '0909',
        'message' => 'ERROR DE SISTEMA',
        'detail' => 'Error en la estabilidad de la plataforma de pagos de Banco Sabadell o en la de los sistemas de intercambio de Visa o MasterCard.'
    ),
    '0912' => array(
        'code' => '0912',
        'message' => 'EMISOR NO DISPONIBLE',
        'detail' => 'El centro autorizador del banco emisor no está operativo en estos momentos.'
    ),
    '0913' => array(
        'code' => '0913',
        'message' => 'TRANSMISION DUPLICADA',
        'detail' => 'Se ha procesado recientemente una transacción con el mismo número de pedido (Ds_Merchant_Order).'
    ),
    '0916' => array(
        'code' => '0916',
        'message' => 'IMPORTE DEMASIADO PEQUEÑO',
        'detail' => 'No es posible operar con este importe.'
    ),
    '0928' => array(
        'code' => '0928',
        'message' => 'TIME-OUT EXCEDIDO',
        'detail' => 'El banco emisor no da respuesta a la petición de autorización dentro del time-out predefinido.'
    ),
    '0940' => array(
        'code' => '0940',
        'message' => 'TRANSACCION ANULADA ANTERIORMENTE',
        'detail' => 'Se está solicitando una anulación o retrocesión parcial de una transacción que con anterioridad ya fue anulada.'
    ),
    '0941' => array(
        'code' => '0941',
        'message' => 'TRANSACCION DE AUTORIZACION YA ANULADA POR UNA ANULACION ANTERIOR',
        'detail' => 'Se está solicitando la confirmación de una transacción con un número de pedido (Ds_Merchant_Order) que se corresponde a una operación anulada anteriormente.'
    ),
    '0942' => array(
        'code' => '0942',
        'message' => 'TRANSACCION DE AUTORIZACION ORIGINAL DENEGADA',
        'detail' => 'Se está solicitando la confirmación de una transacción con un número de pedido (Ds_Merchant_Order) que se corresponde a una operación denegada.'
    ),
    '0943' => array(
        'code' => '0943',
        'message' => 'DATOS DE LA TRANSACCION ORIGINAL DISTINTOS',
        'detail' => 'Se está solicitando una confirmación errónea.'
    ),
    '0944' => array(
        'code' => '0944',
        'message' => 'SESION ERRONEA',
        'detail' => 'Se está solicitando la apertura de una tercera sesión. En el proceso de pago solo está permitido tener abiertas dos sesiones (la actual y la anterior pendiente de cierre).'
    ),
    '0945' => array(
        'code' => '0945',
        'message' => 'TRANSMISION DUPLICADA',
        'detail' => 'Se ha procesado recientemente una transacción con el mismo número de pedido (Ds_Merchant_Order).'
    ),
    '0946' => array(
        'code' => '0946',
        'message' => 'OPERACION A ANULAR EN PROCESO',
        'detail' => 'Se ha solicitada la anulación o retrocesión parcial de una transacción original que todavía está en proceso y pendiente de respuesta.'
    ),
    '0947' => array(
        'code' => '0947',
        'message' => 'TRANSMISION DUPLICADA EN PROCESO',
        'detail' => 'Se está intentando procesar una transacción con el mismo número de pedido (Ds_Merchant_Order) de otra que todavía está pendiente de respuesta.'
    ),
    '0949' => array(
        'code' => '0949',
        'message' => 'TERMINAL INOPERATIVO',
        'detail' => 'El número de comercio (Ds_Merchant_MerchantCode) o el de terminal (Ds_Merchant_Terminal) no están dados de alta o no son operativos.'
    ),
    '0950' => array(
        'code' => '0950',
        'message' => 'DEVOLUCION NO PERMITIDA',
        'detail' => 'La devolución no está permitida por regulación.'
    ),
    '0965' => array(
        'code' => '0965',
        'message' => 'VIOLACIÓN NORMATIVA',
        'detail' => 'Violación de la Normativa de Visa o Mastercard'
    ),
    '9051' => array(
        'code' => '9051',
        'message' => 'NO SE PUEDE REALIZAR LA OPERACIÓN',
        'detail' => 'Número de pedido repetido'
    ),    
    '9064' => array(
        'code' => '9064',
        'message' => 'LONGITUD TARJETA INCORRECTA',
        'detail' => 'Nº posiciones de la tarjeta incorrecta'
    ),
    '9078' => array(
        'code' => '9078',
        'message' => 'NO EXISTE METODO DE PAGO',
        'detail' => 'Los tipos de pago definidos para el terminal (Ds_Merchant_Terminal) por el que se procesa la transacción, no permiten pagar con el tipo de tarjeta informado.'
    ),
    '9093' => array(
        'code' => '9093',
        'message' => 'TARJETA NO EXISTE',
        'detail' => 'Tarjeta inexistente.'
    ),
    '9094' => array(
        'code' => '9094',
        'message' => 'DENEGACION DE LOS EMISORES',
        'detail' => 'Operación denegada por parte de los emisoras internacionales'
    ),
    '9104' => array(
        'code' => '9104',
        'message' => 'OPER. SEGURA NO ES POSIBLE',
        'detail' => 'Comercio con autenticación obligatoria y titular sin clave de compra segura'
    ),
    '9142' => array(
        'code' => '9142',
        'message' => 'TIEMPO LÍMITE DE PAGO SUPERADO',
        'detail' => 'El titular de la tarjeta no se ha autenticado durante el tiempo máximo permitido.'
    ),
    '9218' => array(
        'code' => '9218',
        'message' => 'NO SE PUEDEN HACER OPERACIONES SEGURAS',
        'detail' => 'La entrada Operaciones no permite operaciones Seguras'
    ),
    '9253' => array(
        'code' => '9253',
        'message' => 'CHECK-DIGIT ERRONEO',
        'detail' => 'Tarjeta no cumple con el check-digit (posición 16 del número de tarjeta calculada según algoritmo de Luhn).'
    ),
    '9256' => array(
        'code' => '9256',
        'message' => 'PREAUTORITZACIONES NO HABILITADAS',
        'detail' => 'La tarjeta no puede hacer Preautorizaciones'
    ),
    '9261' => array(
        'code' => '9261',
        'message' => 'LÍMITE OPERATIVO EXCEDIDO',
        'detail' => 'La transacción excede el límite operativo establecido por Banco Sabadell'
    ),
    '9283' => array(
        'code' => '9283',
        'message' => 'SUPERA ALERTAS BLOQUANTES',
        'detail' => 'La operación excede las alertas bloqueantes, no se puede procesar'
    ),
    '9281' => array(
        'code' => '9281',
        'message' => 'SUPERA ALERTAS BLOQUEANTES',
        'detail' => 'La operación excede las alertas bloqueantes, no se puede procesar'
    ),
    '9912' => array(
        'code' => '9912',
        'message' => 'EMISOR NO DISPONIBLE',
        'detail' => 'El centro autorizador del banco emisor no está operativo en estos momentos.'
    ),
    '9913' => array(
        'code' => '9913',
        'message' => 'ERROR EN CONFIRMACION',
        'detail' => 'Error en la confirmación que el comercio envía al TPV Virtual (solo aplicable en la opción de sincronización SOAP)'
    ),
    '9914' => array(
        'code' => '9914',
        'message' => 'CONFIRMACION “KO”',
        'detail' => 'Confirmación “KO” del comercio (solo aplicable en la opción de sincronización SOAP)'
    ),
    '9915' => array(
        'code' => '9915',
        'message' => 'PAGO CANCELADO',
        'detail' => 'El usuario ha cancelado el pago'
    ),
    '9928' => array(
        'code' => '9928',
        'message' => 'AUTORIZACIÓN EN DIFERIDO ANULADA',
        'detail' => 'Anulación de autorización en diferido realizada por el SIS (proceso batch)'
    ),
    '9929' => array(
        'code' => '9929',
        'message' => 'AUTORIZACIÓN EN DIFERIDO ANULADA',
        'detail' => 'Anulación de autorización en diferido realizada por el comercio'
    ),
    '9997' => array(
        'code' => '9997',
        'message' => 'TRANSACCIÓN SIMULTÁNEA',
        'detail' => 'En el TPV Virtual se está procesando de forma simultánea otra operación con la misma tarjeta.'
    ),
    '9998' => array(
        'code' => '9998',
        'message' => 'ESTADO OPERACIÓN: SOLICITADA',
        'detail' => 'Estado temporal mientras la operación se procesa. Cuando la operación termine este código cambiará.'
    ),
    '9999' => array(
        'code' => '9999',
        'message' => 'ESTADO OPERACIÓN: AUTENTICANDO',
        'detail' => 'Estado temporal mientras el TPV realiza la autenticación del titular. Una vez finalizado este proceso el TPV asignará un nuevo código a la operación.'
    )
);
