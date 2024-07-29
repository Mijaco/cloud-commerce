<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_TITLE', 'Pago exprés de PayPal');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_PUBLIC_TITLE', 'PayPal (incluyendo tarjetas de crédito y débito)');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout" target="_blank" style="text-decoration: underline; font-weight: bold;">Documentación Ver Online</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visita PayPal Sitio web</a>');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CURL', 'Este módulo requiere CURL para ser habilitadas en PHP y no se cargará hasta que se ha habilitado en este servidor web.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CONFIGURATION', 'Este módulo no se cargará hasta que se hayan configurado los parámetros de cuenta del vendedor o de credenciales API. Por favor, editar y configurar los parámetros de este módulo.');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_BUTTON', 'Hora de salida con PayPal');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_COMMENTS', 'Comentarios:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_EMAIL_PASSWORD', 'Una cuenta de forma automática se ha creado para usted con la siguiente dirección de correo electrónico y su contraseña:' . "\n\n" . 'Almacene cuenta Dirección E-Mail: %s' . "\n" . 'Tienda cuenta Contraseña: %s' . "\n\n");

//  define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');
 define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', 'https://www.paypal.com/es_ES/ES/i/btn/btn_xpressCheckout.gif');
//  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'es_ES');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'ES');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_LINK_TITLE', 'Prueba de conexión Server API');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TITLE', 'API Prueba de conexión del servidor');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_GENERAL_TEXT', 'Prueba de la conexión con el servidor ..');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_BUTTON_CLOSE', 'Cerrar');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TIME', 'Tiempo de conexion:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_SUCCESS', 'Éxito!');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_FAILED', 'No se pudo! Por favor, revise la configuración de certificados SSL Verifique y vuelva a intentarlo.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_ERROR', 'Ha ocurrido un error. Por favor, actualice la página, revise la configuración y vuelva a intentarlo.');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Actualmente Envío no está disponible para la dirección de envío seleccionado. Por favor seleccione o crear una nueva dirección de envío para utilizar con su compra.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_WARNING_LOCAL_LOGIN_REQUIRED', 'Por favor, ingrese a su cuenta para verificar el orden.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_NOTICE_CHECKOUT_CONFIRMATION', 'Por favor, revisar y confirmar su pedido a continuación. Su pedido no se tramitará hasta que se haya confirmado.');
?>
