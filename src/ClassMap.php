<?php

namespace CorreosSdk;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Pesos' => '\\CorreosSdk\\StructType\\Pesos',
            'DescAduanera' => '\\CorreosSdk\\StructType\\DescAduanera',
            'Envios' => '\\CorreosSdk\\StructType\\Envios',
            'Bultos' => '\\CorreosSdk\\StructType\\Bultos',
            'BultosSimples' => '\\CorreosSdk\\StructType\\BultosSimples',
            'BultosError' => '\\CorreosSdk\\StructType\\BultosError',
            'Destinatarios' => '\\CorreosSdk\\StructType\\Destinatarios',
            'DATOSBULTOERRORTYPE' => '\\CorreosSdk\\StructType\\DATOSBULTOERRORTYPE',
            'DATOSREMITENTEETIQUETATYPE' => '\\CorreosSdk\\StructType\\DATOSREMITENTEETIQUETATYPE',
            'DATOSDESTINATARIOETIQUETATYPE' => '\\CorreosSdk\\StructType\\DATOSDESTINATARIOETIQUETATYPE',
            'VAETIQUETATYPE' => '\\CorreosSdk\\StructType\\VAETIQUETATYPE',
            'FICHEROADJUNTOTYPE' => '\\CorreosSdk\\StructType\\FICHEROADJUNTOTYPE',
            'DATOSETIQUETAXMLTYPE' => '\\CorreosSdk\\StructType\\DATOSETIQUETAXMLTYPE',
            'ETIQUETATYPE' => '\\CorreosSdk\\StructType\\ETIQUETATYPE',
            'DATOSBULTOTYPE' => '\\CorreosSdk\\StructType\\DATOSBULTOTYPE',
            'DATOSBULTOSIMPLETYPE' => '\\CorreosSdk\\StructType\\DATOSBULTOSIMPLETYPE',
            'REEMBOLSOTYPE' => '\\CorreosSdk\\StructType\\REEMBOLSOTYPE',
            'PRUEBAENTREGAREDUCIDOTYPE' => '\\CorreosSdk\\StructType\\PRUEBAENTREGAREDUCIDOTYPE',
            'PRUEBAENTREGATYPE' => '\\CorreosSdk\\StructType\\PRUEBAENTREGATYPE',
            'VATYPE' => '\\CorreosSdk\\StructType\\VATYPE',
            'VACNTYPE' => '\\CorreosSdk\\StructType\\VACNTYPE',
            'PESOTYPE' => '\\CorreosSdk\\StructType\\PESOTYPE',
            'DATOSADUANATYPE' => '\\CorreosSdk\\StructType\\DATOSADUANATYPE',
            'ADUANATYPE' => '\\CorreosSdk\\StructType\\ADUANATYPE',
            'DATOSENVIOREDUCIDOTYPE' => '\\CorreosSdk\\StructType\\DATOSENVIOREDUCIDOTYPE',
            'DATOSENVIOCNTYPE' => '\\CorreosSdk\\StructType\\DATOSENVIOCNTYPE',
            'DATOSENVIOCNCODENVIOTYPE' => '\\CorreosSdk\\StructType\\DATOSENVIOCNCODENVIOTYPE',
            'DATOSENVIOTYPE' => '\\CorreosSdk\\StructType\\DATOSENVIOTYPE',
            'DATOSENVIOMULTIBULTOTYPE' => '\\CorreosSdk\\StructType\\DATOSENVIOMULTIBULTOTYPE',
            'DATOSENVIOMODIFTYPE' => '\\CorreosSdk\\StructType\\DATOSENVIOMODIFTYPE',
            'DATOSDESTINATARIOTYPE' => '\\CorreosSdk\\StructType\\DATOSDESTINATARIOTYPE',
            'DATOSDESTINATARIOMODIFTYPE' => '\\CorreosSdk\\StructType\\DATOSDESTINATARIOMODIFTYPE',
            'DATOSDESTINATARIOREEXPTYPE' => '\\CorreosSdk\\StructType\\DATOSDESTINATARIOREEXPTYPE',
            'DATOSDESTINATARIOCNTYPE' => '\\CorreosSdk\\StructType\\DATOSDESTINATARIOCNTYPE',
            'DATOSDESTINATARIOCNENVIOTYPE' => '\\CorreosSdk\\StructType\\DATOSDESTINATARIOCNENVIOTYPE',
            'IDENTIFICACIONREDUCIDOTYPE' => '\\CorreosSdk\\StructType\\IDENTIFICACIONREDUCIDOTYPE',
            'IDENTIFICACIONTYPE' => '\\CorreosSdk\\StructType\\IDENTIFICACIONTYPE',
            'DIRECCIONTYPE' => '\\CorreosSdk\\StructType\\DIRECCIONTYPE',
            'SMSTYPE' => '\\CorreosSdk\\StructType\\SMSTYPE',
            'DATOSREMITENTETYPE' => '\\CorreosSdk\\StructType\\DATOSREMITENTETYPE',
            'DATOSREMITENTECNTYPE' => '\\CorreosSdk\\StructType\\DATOSREMITENTECNTYPE',
            'DATOSREMITENTEMODIFTYPE' => '\\CorreosSdk\\StructType\\DATOSREMITENTEMODIFTYPE',
            'ERRORVALTYPE' => '\\CorreosSdk\\StructType\\ERRORVALTYPE',
            'LISTAERRORESVALIDACIONTYPE' => '\\CorreosSdk\\StructType\\LISTAERRORESVALIDACIONTYPE',
            'DATOSLOGISTICAINVERSATYPE' => '\\CorreosSdk\\StructType\\DATOSLOGISTICAINVERSATYPE',
            'DIRECCIONIPCTYPE' => '\\CorreosSdk\\StructType\\DIRECCIONIPCTYPE',
            'DIRECCIONADICIPCTYPE' => '\\CorreosSdk\\StructType\\DIRECCIONADICIPCTYPE',
            'PERSONALIZADOSTYPE' => '\\CorreosSdk\\StructType\\PERSONALIZADOSTYPE',
            'PERSONALIZADOTYPE' => '\\CorreosSdk\\StructType\\PERSONALIZADOTYPE',
            'ADUANAIPCTYPE' => '\\CorreosSdk\\StructType\\ADUANAIPCTYPE',
            'PIEZASDELCONTENIDOTYPE' => '\\CorreosSdk\\StructType\\PIEZASDELCONTENIDOTYPE',
            'PIEZADELCONTENIDOTYPE' => '\\CorreosSdk\\StructType\\PIEZADELCONTENIDOTYPE',
            'ITEMSORIGINALESTYPE' => '\\CorreosSdk\\StructType\\ITEMSORIGINALESTYPE',
            'ITEMORIGINALTYPE' => '\\CorreosSdk\\StructType\\ITEMORIGINALTYPE',
            'DOCUMENTOSADJUNTOSTYPE' => '\\CorreosSdk\\StructType\\DOCUMENTOSADJUNTOSTYPE',
            'DOCUMENTOADJUNTOTYPE' => '\\CorreosSdk\\StructType\\DOCUMENTOADJUNTOTYPE',
            'FACTURASORIGINALESTYPE' => '\\CorreosSdk\\StructType\\FACTURASORIGINALESTYPE',
            'FACTURAORIGINALTYPE' => '\\CorreosSdk\\StructType\\FACTURAORIGINALTYPE',
            'PreregistroEnvio' => '\\CorreosSdk\\StructType\\PreregistroEnvio',
            'RespuestaPreregistroEnvio' => '\\CorreosSdk\\StructType\\RespuestaPreregistroEnvio',
            'PreregistroEnvioMultibulto' => '\\CorreosSdk\\StructType\\PreregistroEnvioMultibulto',
            'RespuestaPreregistroEnvioMultibulto' => '\\CorreosSdk\\StructType\\RespuestaPreregistroEnvioMultibulto',
            'PreregistroCodExpedicion' => '\\CorreosSdk\\StructType\\PreregistroCodExpedicion',
            'RespuestaPreregistroCodExpedicion' => '\\CorreosSdk\\StructType\\RespuestaPreregistroCodExpedicion',
            'PreregistroCodEnvio' => '\\CorreosSdk\\StructType\\PreregistroCodEnvio',
            'RespuestaPreregistroCodEnvio' => '\\CorreosSdk\\StructType\\RespuestaPreregistroCodEnvio',
            'SolicitudEtiquetaRefCli' => '\\CorreosSdk\\StructType\\SolicitudEtiquetaRefCli',
            'RespuestaSolicitudEtiquetaRefCli' => '\\CorreosSdk\\StructType\\RespuestaSolicitudEtiquetaRefCli',
            'SolicitudEtiquetaExp' => '\\CorreosSdk\\StructType\\SolicitudEtiquetaExp',
            'RespuestaSolicitudEtiquetaExp' => '\\CorreosSdk\\StructType\\RespuestaSolicitudEtiquetaExp',
            'SolicitudEtiqueta' => '\\CorreosSdk\\StructType\\SolicitudEtiqueta',
            'RespuestaSolicitudEtiqueta' => '\\CorreosSdk\\StructType\\RespuestaSolicitudEtiqueta',
            'ValidarDatos' => '\\CorreosSdk\\StructType\\ValidarDatos',
            'RespuestaValidarDatos' => '\\CorreosSdk\\StructType\\RespuestaValidarDatos',
            'PeticionAnular' => '\\CorreosSdk\\StructType\\PeticionAnular',
            'RespuestaAnular' => '\\CorreosSdk\\StructType\\RespuestaAnular',
            'PeticionModificar' => '\\CorreosSdk\\StructType\\PeticionModificar',
            'RespuestaModificar' => '\\CorreosSdk\\StructType\\RespuestaModificar',
            'SolicitudDocumentacionAduanera' => '\\CorreosSdk\\StructType\\SolicitudDocumentacionAduanera',
            'RespuestaSolicitudDocumentacionAduanera' => '\\CorreosSdk\\StructType\\RespuestaSolicitudDocumentacionAduanera',
            'PeticionBaja' => '\\CorreosSdk\\StructType\\PeticionBaja',
            'RespuestaBaja' => '\\CorreosSdk\\StructType\\RespuestaBaja',
            'SolicitudDocumentacionAduaneraCN23CP71' => '\\CorreosSdk\\StructType\\SolicitudDocumentacionAduaneraCN23CP71',
            'RespuestaSolicitudDocumentacionAduaneraCN23CP71' => '\\CorreosSdk\\StructType\\RespuestaSolicitudDocumentacionAduaneraCN23CP71',
            'PeticionGenerarCodigoExpedicion' => '\\CorreosSdk\\StructType\\PeticionGenerarCodigoExpedicion',
            'RespuestaGenerarCodigoExpedicion' => '\\CorreosSdk\\StructType\\RespuestaGenerarCodigoExpedicion',
            'PeticionPreRegistroIdaVta' => '\\CorreosSdk\\StructType\\PeticionPreRegistroIdaVta',
            'RespuestaPreRegistroIdaVta' => '\\CorreosSdk\\StructType\\RespuestaPreRegistroIdaVta',
            'PeticionReexpedicion' => '\\CorreosSdk\\StructType\\PeticionReexpedicion',
            'RespuestaReexpedicion' => '\\CorreosSdk\\StructType\\RespuestaReexpedicion',
            'PeticionModificarAutorizacionPreviaEntrega' => '\\CorreosSdk\\StructType\\PeticionModificarAutorizacionPreviaEntrega',
            'RespuestaModificarAutorizacionPreviaEntrega' => '\\CorreosSdk\\StructType\\RespuestaModificarAutorizacionPreviaEntrega',
            'PeticionPreRegistroCN' => '\\CorreosSdk\\StructType\\PeticionPreRegistroCN',
            'PeticionPreRegistroCNCodEnvio' => '\\CorreosSdk\\StructType\\PeticionPreRegistroCNCodEnvio',
            'RespuestaPreRegistroCN' => '\\CorreosSdk\\StructType\\RespuestaPreRegistroCN',
            'RespuestaPreRegistroCNCodEnvio' => '\\CorreosSdk\\StructType\\RespuestaPreRegistroCNCodEnvio',
            'CalculaTarifa' => '\\CorreosSdk\\StructType\\CalculaTarifa',
            'RespuestaCalculaTarifa' => '\\CorreosSdk\\StructType\\RespuestaCalculaTarifa',
        );
    }
}
