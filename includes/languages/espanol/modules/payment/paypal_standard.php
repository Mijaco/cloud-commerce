<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE', 'PayPal Pago estándar');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE', 'PayPal (incluyendo tarjetas de crédito y débito)');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&payments_standard" target="_blank" style="text-decoration: underline; font-weight: bold;">Documentación Ver Online</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visita PayPal Sitio web</a>');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CURL', 'Este módulo requiere CURL para ser habilitadas en PHP y no se cargará hasta que se ha habilitado en este servidor web.');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION', 'Este módulo no se cargará hasta que el parámetro Dirección E-Mail vendedor se ha configurado. Por favor, editar y configurar los parámetros de este módulo.');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PAYPAL_RETURN_BUTTON', 'Volver ' . STORE_NAME); // Maximum length 60 characters, otherwise it is ignored.
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_INVALID_TRANSACTION', 'No se pudo verificar la transacción de PayPal. Por favor, inténtelo de nuevo.');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TITLE', 'Prueba de conexión Server API');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE', 'API Prueba de conexión del servidor');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT', 'Prueba de la conexión con el servidor ..');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_BUTTON_CLOSE', 'Cerrar');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME', 'Tiempo de conexion:');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS', 'Éxito!');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED', 'No se pudo! Por favor, revise la configuración de certificados SSL Verifique y vuelva a intentarlo.');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR', 'Ha ocurrido un error. Por favor, actualice la página, revise la configuración y vuelva a intentarlo.');
?>
