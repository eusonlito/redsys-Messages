<?php
return array(
    '000' => array(
        'code' => '000',
        'message' => 'TRANSACCION APROBADA',
        'detail' => 'Transacción autorizada por el banco emisor de la tarjeta'
    ),
    '001' => array(
        'code' => '001',
        'message' => 'TRANSACCION APROBADA PREVIA IDENTIFICACION DE TITULAR',
        'detail' => 'Código exclusivo para transacciones Verified by Visa o MasterCard SecureCode. La transacción ha sido autorizada y, además, el banco emisor nos informa que ha autenticado correctamente la identidad del titular de la tarjeta.'
    ),
    '002 - 099' => array(
        'code' => '002 - 099',
        'message' => 'TRANSACCION APROBADA',
        'detail' => 'Transacción autorizada por el banco emisor.'
    ),
    '101' => array(
        'code' => '101',
        'message' => 'TARJETA CADUCADA',
        'detail' => 'Transacción denegada porque la fecha de caducidad de la tarjeta que se ha informado en el pago, es anterior a la actualmente vigente.'
    ),
    '102' => array(
        'code' => '102',
        'message' => 'TARJETA BLOQUEDA TRANSITORIAMENTE O BAJO SOSPECHA DE FRAUDE',
        'detail' => 'Tarjeta bloqueada transitoriamente por el banco emisor o bajo sospecha de fraude.'
    ),
    '104' => array(
        'code' => '104',
        'message' => 'OPERACIÓN NO PERMITIDA',
        'detail' => 'Operación no permitida para ese tipo de tarjeta.'
    ),
    '106' => array(
        'code' => '106',
        'message' => 'NUM. INTENTOS EXCEDIDO',
        'detail' => 'Excedido el número de intentos con PIN erróneo.'
    ),
    '107' => array(
        'code' => '107',
        'message' => 'CONTACTAR CON EL EMISOR',
        'detail' => 'El banco emisor no permite una autorización automática. Es necesario contactar telefónicamente con su centro autorizador para obtener una aprobación manual.'
    ),
    '109' => array(
        'code' => '109',
        'message' => 'IDENTIFICACIÓN INVALIDA DEL COMERCIO O TERMINAL',
        'detail' => 'Denegada porque el comercio no está correctamente dado de alta en los sistemas internacionales de tarjetas.'
    ),
    '110' => array(
        'code' => '110',
        'message' => 'IMPORTE INVALIDO',
        'detail' => 'El importe de la transacción es inusual para el tipo de comercio que solicita la autorización de pago.'
    ),
    '114' => array(
        'code' => '114',
        'message' => 'TARJETA NO SOPORTA EL TIPO DE OPERACIÓN SOLICITADO',
        'detail' => 'Operación no permitida para ese tipo de tarjeta.'
    ),
    '116' => array(
        'code' => '116',
        'message' => 'DISPONIBLE INSUFICIENTE',
        'detail' => 'El titular de la tarjeta no dispone de suficiente crédito para atender el pago.'
    ),
    '118' => array(
        'code' => '118',
        'message' => 'TARJETA NO REGISTRADA',
        'detail' => 'Tarjeta inexistente o no dada de alta por banco emisor.'
    ),
    '125' => array(
        'code' => '125',
        'message' => 'TARJETA NO EFECTIVA',
        'detail' => 'Tarjeta inexistente o no dada de alta por banco emisor.'
    ),
    '129' => array(
        'code' => '129',
        'message' => 'ERROR CVV2/CVC2',
        'detail' => 'El código CVV2/CVC2 (los tres dígitos del reverso de la tarjeta) informado por el comprador es erróneo.'
    ),
    '167' => array(
        'code' => '167',
        'message' => 'CONTACTAR CON EL EMISOR: SOSPECHA DE FRAUDE',
        'detail' => 'Debido a una sospecha de que la transacción es fraudulenta el banco emisor no permite una autorización automática. Es necesario contactar telefónicamente con su centro autorizador para obtener una aprobación manual.'
    ),
    '180' => array(
        'code' => '180',
        'message' => 'TARJETA AJENA AL SERVICIO',
        'detail' => 'Operación no permitida para ese tipo de tarjeta.'
    ),
    '181-182' => array(
        'code' => '181-182',
        'message' => 'TARJETA CON RESTRICCIONES DE DEBITO O CREDITO',
        'detail' => 'Tarjeta bloqueada transitoriamente por el banco emisor.'
    ),
    '184' => array(
        'code' => '184',
        'message' => 'ERROR EN AUTENTICACION',
        'detail' => 'Código exclusivo para transacciones Verified by Visa o MasterCard SecureCode. La transacción ha sido denegada porque el banco emisor no pudo autenticar debidamente al titular de la tarjeta.'
    ),
    '190' => array(
        'code' => '190',
        'message' => 'DENEGACION SIN ESPECIFICAR EL MOTIVO',
        'detail' => 'Transacción denegada por el banco emisor pero sin que este dé detalles acerca del motivo.'
    ),
    '191' => array(
        'code' => '191',
        'message' => 'FECHA DE CADUCIDAD ERRONEA',
        'detail' => 'Transacción denegada porque la fecha de caducidad de la tarjeta que se ha informado en el pago, no se corresponde con la actualmente vigente.'
    ),
    '201' => array(
        'code' => '201',
        'message' => 'TARJETA CADUCADA',
        'detail' => 'Transacción denegada porque la fecha de caducidad de la tarjeta que se ha informado en el pago, es anterior a la actualmente vigente. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '202' => array(
        'code' => '202',
        'message' => 'TARJETA BLOQUEDA TRANSITORIAMENTE O BAJO SOSPECHA DE FRAUDE',
        'detail' => 'Tarjeta bloqueada transitoriamente por el banco emisor o bajo sospecha de fraude. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '204' => array(
        'code' => '204',
        'message' => 'OPERACION NO PERMITIDA',
        'detail' => 'Operación no permitida para ese tipo de tarjeta. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '207' => array(
        'code' => '207',
        'message' => 'CONTACTAR CON EL EMISOR',
        'detail' => 'El banco emisor no permite una autorización automática. Es necesario contactar telefónicamente con su centro autorizador para obtener una aprobación manual. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '208 - 209' => array(
        'code' => '208 - 209',
        'message' => 'TARJETA PERDIDA O ROBADA',
        'detail' => 'Tarjeta bloqueada por el banco emisor debido a que el titular le ha manifestado que le ha sido robada o perdida. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '280' => array(
        'code' => '280',
        'message' => 'ERROR CVV2/CVC2',
        'detail' => 'Código exclusivo para transacciones en las que se solicita el código de 3 dígitos CVV2 (tarj.Visa) o CVC2 (tarj.MasterCard) del reverso de la tarjeta. El código CVV2/CVC2 informado por el comprador es erróneo. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '290' => array(
        'code' => '290',
        'message' => 'DENEGACION SIN ESPECIFICAR EL MOTIVO',
        'detail' => 'Transacción denegada por el banco emisor pero sin que este dé detalles acerca del motivo. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '400' => array(
        'code' => '400',
        'message' => 'ANULACION ACEPTADA',
        'detail' => 'Transacción de anulación o retrocesión parcial aceptada por el banco emisor.'
    ),
    '480' => array(
        'code' => '480',
        'message' => 'NO SE ENCUENTRA LA OPERACIÓN ORIGINAL O TIME-OUT EXCEDIDO',
        'detail' => 'La anulación o retrocesión parcial no ha sido aceptada porque no se ha localizado la operación original, o bien, porque el banco emisor no ha dado respuesta dentro del time-out predefinido.'
    ),
    '481' => array(
        'code' => '481',
        'message' => 'ANULACION ACEPTADA',
        'detail' => 'Transacción de anulación o retrocesión parcial aceptada por el banco emisor. No obstante, la respuesta del banco emisor se ha recibido con mucha demora, fuera del time-out predefinido.'
    ),
    '500' => array(
        'code' => '500',
        'message' => 'CONCILIACION ACEPTADA',
        'detail' => 'La transacción de conciliación ha sido aceptada por el banco emisor.'
    ),
    '501 - 503' => array(
        'code' => '501 - 503',
        'message' => 'NO ENCONTRADA LA OPERACION ORIGINAL O TIME-OUT EXCEDIDO',
        'detail' => 'La conciliación no ha sido aceptada porque no se ha localizado la operación original, o bien, porque el banco emisor no ha dado respuesta dentro del time-out predefinido.'
    ),
    '9928' => array(
        'code' => '9928',
        'message' => 'ANULACIÓN DE PREAUTORITZACIÓN REALIZADA POR EL SISTEMA',
        'detail' => 'El sistema ha anulado la preautorización diferida al haber pasado más de 72 horas.'
    ),
    '9929' => array(
        'code' => '9929',
        'message' => 'ANULACIÓN DE PREAUTORITZACIÓN REALIZADA POR EL COMERCIO',
        'detail' => 'La anulación de la preautorización ha sido aceptada'
    )
);
