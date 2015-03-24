<?php
return array(
    '0000' => array(
        'code' => '0000',
        'message' => 'TRANSACCION APROBADA',
        'detail' => 'Transacción autorizada por el banco emisor de la tarjeta'
    ),
    '0001' => array(
        'code' => '0001',
        'message' => 'TRANSACCION APROBADA PREVIA IDENTIFICACION DE TITULAR',
        'detail' => 'Código exclusivo para transacciones Verified by Visa o MasterCard SecureCode. La transacción ha sido autorizada y, además, el banco emisor nos informa que ha autenticado correctamente la identidad del titular de la tarjeta.'
    ),
    '0002-0099' => array(
        'code' => '0002-0099',
        'message' => 'TRANSACCION APROBADA',
        'detail' => 'Transacción autorizada por el banco emisor.'
    ),
    '0101' => array(
        'code' => '0101',
        'message' => 'TARJETA CADUCADA',
        'detail' => 'Transacción denegada porque la fecha de caducidad de la tarjeta que se ha informado en el pago, es anterior a la actualmente vigente.'
    ),
    '0102' => array(
        'code' => '0102',
        'message' => 'TARJETA BLOQUEDA TRANSITORIAMENTE O BAJO SOSPECHA DE FRAUDE',
        'detail' => 'Tarjeta bloqueada transitoriamente por el banco emisor o bajo sospecha de fraude.'
    ),
    '0104' => array(
        'code' => '0104',
        'message' => 'OPERACIÓN NO PERMITIDA',
        'detail' => 'Operación no permitida para ese tipo de tarjeta.'
    ),
    '0106' => array(
        'code' => '0106',
        'message' => 'NUM. INTENTOS EXCEDIDO',
        'detail' => 'Excedido el número de intentos con PIN erróneo.'
    ),
    '0107' => array(
        'code' => '0107',
        'message' => 'CONTACTAR CON EL EMISOR',
        'detail' => 'El banco emisor no permite una autorización automática. Es necesario contactar telefónicamente con su centro autorizador para obtener una aprobación manual.'
    ),
    '0109' => array(
        'code' => '0109',
        'message' => 'IDENTIFICACIÓN INVALIDA DEL COMERCIO O TERMINAL',
        'detail' => 'Denegada porque el comercio no está correctamente dado de alta en los sistemas internacionales de tarjetas.'
    ),
    '0110' => array(
        'code' => '0110',
        'message' => 'IMPORTE INVALIDO',
        'detail' => 'El importe de la transacción es inusual para el tipo de comercio que solicita la autorización de pago.'
    ),
    '0114' => array(
        'code' => '0114',
        'message' => 'TARJETA NO SOPORTA EL TIPO DE OPERACIÓN SOLICITADO',
        'detail' => 'Operación no permitida para ese tipo de tarjeta.'
    ),
    '0116' => array(
        'code' => '0116',
        'message' => 'DISPONIBLE INSUFICIENTE',
        'detail' => 'El titular de la tarjeta no dispone de suficiente crédito para atender el pago.'
    ),
    '0118' => array(
        'code' => '0118',
        'message' => 'TARJETA NO REGISTRADA',
        'detail' => 'Tarjeta inexistente o no dada de alta por banco emisor.'
    ),
    '0125' => array(
        'code' => '0125',
        'message' => 'TARJETA NO EFECTIVA',
        'detail' => 'Tarjeta inexistente o no dada de alta por banco emisor.'
    ),
    '0129' => array(
        'code' => '0129',
        'message' => 'ERROR CVV2/CVC2',
        'detail' => 'El código CVV2/CVC2 (los tres dígitos del reverso de la tarjeta) informado por el comprador es erróneo.'
    ),
    '0167' => array(
        'code' => '0167',
        'message' => 'CONTACTAR CON EL EMISOR: SOSPECHA DE FRAUDE',
        'detail' => 'Debido a una sospecha de que la transacción es fraudulenta el banco emisor no permite una autorización automática. Es necesario contactar telefónicamente con su centro autorizador para obtener una aprobación manual.'
    ),
    '0180' => array(
        'code' => '0180',
        'message' => 'TARJETA AJENA AL SERVICIO',
        'detail' => 'Operación no permitida para ese tipo de tarjeta.'
    ),
    '0181-182' => array(
        'code' => '0181-0182',
        'message' => 'TARJETA CON RESTRICCIONES DE DEBITO O CREDITO',
        'detail' => 'Tarjeta bloqueada transitoriamente por el banco emisor.'
    ),
    '0184' => array(
        'code' => '0184',
        'message' => 'ERROR EN AUTENTICACION',
        'detail' => 'Código exclusivo para transacciones Verified by Visa o MasterCard SecureCode. La transacción ha sido denegada porque el banco emisor no pudo autenticar debidamente al titular de la tarjeta.'
    ),
    '0190' => array(
        'code' => '0190',
        'message' => 'DENEGACION SIN ESPECIFICAR EL MOTIVO',
        'detail' => 'Transacción denegada por el banco emisor pero sin que este dé detalles acerca del motivo.'
    ),
    '0191' => array(
        'code' => '0191',
        'message' => 'FECHA DE CADUCIDAD ERRONEA',
        'detail' => 'Transacción denegada porque la fecha de caducidad de la tarjeta que se ha informado en el pago, no se corresponde con la actualmente vigente.'
    ),
    '0201' => array(
        'code' => '0201',
        'message' => 'TARJETA CADUCADA',
        'detail' => 'Transacción denegada porque la fecha de caducidad de la tarjeta que se ha informado en el pago, es anterior a la actualmente vigente. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0202' => array(
        'code' => '0202',
        'message' => 'TARJETA BLOQUEDA TRANSITORIAMENTE O BAJO SOSPECHA DE FRAUDE',
        'detail' => 'Tarjeta bloqueada transitoriamente por el banco emisor o bajo sospecha de fraude. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0204' => array(
        'code' => '0204',
        'message' => 'OPERACION NO PERMITIDA',
        'detail' => 'Operación no permitida para ese tipo de tarjeta. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0207' => array(
        'code' => '0207',
        'message' => 'CONTACTAR CON EL EMISOR',
        'detail' => 'El banco emisor no permite una autorización automática. Es necesario contactar telefónicamente con su centro autorizador para obtener una aprobación manual. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0208-0209' => array(
        'code' => '0208-0209',
        'message' => 'TARJETA PERDIDA O ROBADA',
        'detail' => 'Tarjeta bloqueada por el banco emisor debido a que el titular le ha manifestado que le ha sido robada o perdida. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0280' => array(
        'code' => '0280',
        'message' => 'ERROR CVV2/CVC2',
        'detail' => 'Código exclusivo para transacciones en las que se solicita el código de 3 dígitos CVV2 (tarj.Visa) o CVC2 (tarj.MasterCard) del reverso de la tarjeta. El código CVV2/CVC2 informado por el comprador es erróneo. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0290' => array(
        'code' => '0290',
        'message' => 'DENEGACION SIN ESPECIFICAR EL MOTIVO',
        'detail' => 'Transacción denegada por el banco emisor pero sin que este dé detalles acerca del motivo. Además, el banco emisor considera que la tarjeta está en una situación de posible fraude.'
    ),
    '0400' => array(
        'code' => '0400',
        'message' => 'ANULACION ACEPTADA',
        'detail' => 'Transacción de anulación o retrocesión parcial aceptada por el banco emisor.'
    ),
    '0480' => array(
        'code' => '0480',
        'message' => 'NO SE ENCUENTRA LA OPERACIÓN ORIGINAL O TIME-OUT EXCEDIDO',
        'detail' => 'La anulación o retrocesión parcial no ha sido aceptada porque no se ha localizado la operación original, o bien, porque el banco emisor no ha dado respuesta dentro del time-out predefinido.'
    ),
    '0481' => array(
        'code' => '0481',
        'message' => 'ANULACION ACEPTADA',
        'detail' => 'Transacción de anulación o retrocesión parcial aceptada por el banco emisor. No obstante, la respuesta del banco emisor se ha recibido con mucha demora, fuera del time-out predefinido.'
    ),
    '0500' => array(
        'code' => '0500',
        'message' => 'CONCILIACION ACEPTADA',
        'detail' => 'La transacción de conciliación ha sido aceptada por el banco emisor.'
    ),
    '0501-503' => array(
        'code' => '0501-0503',
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
