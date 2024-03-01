<?php

namespace JuanchoSL\HttpHeaders;

use JuanchoSL\HttpHeaders\Constants\Status\Codes;
use JuanchoSL\HttpHeaders\Constants\Status\Messages;

class Headers
{

    protected static string $httpVersion = 'HTTP/1.1';

    /**
     * @var array<int,string> $messages
     */
    protected static array $messages = array(
            //Informational 1xx
        Codes::CONTINUE => Messages::CONTINUE ,
        Codes::SWITCHING_PROTOCOLS => Messages::SWITCHING_PROTOCOLS,
        Codes::PROCESSING => Messages::PROCESSING,
            //Successful 2xx
        Codes::OK => Messages::OK,
        Codes::CREATED => Messages::CREATED,
        Codes::ACCEPTED => Messages::ACCEPTED,
        Codes::NON_AUTHORITATIVE_INFORMATION => Messages::NON_AUTHORITATIVE_INFORMATION,
        Codes::NO_CONTENT => Messages::NO_CONTENT,
        Codes::RESET_CONTENT => Messages::RESET_CONTENT,
        Codes::PARTIAL_CONTENT => Messages::PARTIAL_CONTENT,
        Codes::MULTI_STATUS => Messages::MULTI_STATUS,
        Codes::ALREADY_REPORTED => Messages::ALREADY_REPORTED,
        Codes::IM_USED => Messages::IM_USED,
            //Redirection 3xx
        Codes::MULTIPLE_CHOICES => Messages::MULTIPLE_CHOICES,
        Codes::MOVED_PERMANENTLY => Messages::MOVED_PERMANENTLY,
        Codes::FOUND => Messages::FOUND,
        Codes::SEE_OTHER => Messages::SEE_OTHER,
        Codes::NOT_MODIFIED => Messages::NOT_MODIFIED,
        Codes::USE_PROXY => Messages::USE_PROXY,
            //        306 => '306 (Unused)',
        Codes::TEMPORARY_REDIRECT => Messages::TEMPORARY_REDIRECT,
        Codes::PERMANENT_REDIRECT => Messages::PERMANENT_REDIRECT,
            //Client Error 4xx
        Codes::BAD_REQUEST => Messages::BAD_REQUEST,
        Codes::UNAUTHORIZED => Messages::UNAUTHORIZED,
        Codes::PAYMENT_REQUIRED => Messages::PAYMENT_REQUIRED,
        Codes::FORBIDDEN => Messages::FORBIDDEN,
        Codes::NOT_FOUND => Messages::NOT_FOUND,
        Codes::METHOD_NOT_ALLOWED => Messages::METHOD_NOT_ALLOWED,
        Codes::NOT_ACCEPTABLE => Messages::NOT_ACCEPTABLE,
        Codes::PROXY_AUTHENTICATION_REQUIRED => Messages::PROXY_AUTHENTICATION_REQUIRED,
        Codes::REQUEST_TIMEOUT => Messages::REQUEST_TIMEOUT,
        Codes::CONFLICT => Messages::CONFLICT,
        Codes::GONE => Messages::GONE,
        Codes::LENGTH_REQUIRED => Messages::LENGTH_REQUIRED,
        Codes::PRECONDITION_FAILED => Messages::PRECONDITION_FAILED,
        Codes::PAYLOAD_TOO_LARGE => Messages::PAYLOAD_TOO_LARGE,
            //'413 Request Entity Too Large',
        Codes::URI_TOO_LONG => Messages::URI_TOO_LONG,
            //'414 Request-URI Too Long',
        Codes::UNSUPPORTED_MEDIA_TYPE => Messages::UNSUPPORTED_MEDIA_TYPE,
        Codes::RANGE_NOT_SATISFIABLE => Messages::RANGE_NOT_SATISFIABLE,
            //'416 Requested Range Not Satisfiable',
        Codes::EXPECTATION_FAILED => Messages::EXPECTATION_FAILED,
        Codes::IM_A_TEAPOT => Messages::IM_A_TEAPOT,
        Codes::MISDIRECT_REQUEST => Messages::MISDIRECT_REQUEST,
        Codes::UNPROCESSABLE_ENTITY => Messages::UNPROCESSABLE_ENTITY,
        Codes::LOCKED => Messages::LOCKED,
        Codes::PRECONDITION_REQUIRED => Messages::PRECONDITION_REQUIRED,
            //Server Error 5xx
        Codes::INTERNAL_SERVER_ERROR => Messages::INTERNAL_SERVER_ERROR,
        Codes::NOT_IMPLEMENTED => Messages::NOT_IMPLEMENTED,
        Codes::BAD_GATEWAY => Messages::BAD_GATEWAY,
        Codes::SERVICE_UNAVAILABLE => Messages::SERVICE_UNAVAILABLE,
        Codes::GATEWAY_TIMEOUT => Messages::GATEWAY_TIMEOUT,
        Codes::HTTP_VERSION_NOT_SUPPORTED => Messages::HTTP_VERSION_NOT_SUPPORTED
    );

    public static function send(string $headerValue, bool $replace = true): void
    {
        if (!empty($headerValue) && is_string($headerValue)) {
            header($headerValue, $replace);
        }
    }

    public static function header(int $code): void
    {
        if (array_key_exists($code, self::$messages)) {
            self::send(self::$httpVersion . " " . $code . " " . self::getMessage($code));
        }
    }

    public static function getMessage(int $code): ?string
    {
        if (array_key_exists($code, self::$messages)) {
            return self::$messages[$code];
        }
        return null;
    }

    public static function ok(): void
    {
        self::header(Codes::OK);
    }

    /**
     * Cabecera de error por fichero movido
     * @param bool $permanent True para indicar que se ha movido permanentemente
     * y asi traspasar los pagerank y los backlinks
     */
    public static function moved(bool $permanent = true): void
    {
        $server_protocol = filter_input(INPUT_SERVER, 'SERVER_PROTOCOL');
        if ($permanent == true) {
            if ($server_protocol == self::$httpVersion) {
                self::header(Codes::PERMANENT_REDIRECT);
            } else {
                self::send('HTTP/1.0 301 Moved Permanently');
            }
        } else {
            if ($server_protocol == self::$httpVersion) {
                self::header(Codes::TEMPORARY_REDIRECT);
            } else {
                self::send('HTTP/1.0 302 Moved Temporarily');
            }
        }
    }

    /**
     * Cabecera de error de sintaxis
     */
    public static function badRequest(): void
    {
        self::header(Codes::BAD_REQUEST);
    }

    /**
     * Cabecera de falta de autorización
     */
    public static function unauthorized(): void
    {
        self::header(Codes::UNAUTHORIZED);
    }

    /**
     * Cabecera de error 404
     * @param string $location URL Location para hacer redirect
     */
    public static function notFound(string $location = ''): void
    {
        if ($location == "")
            self::header(Codes::NOT_FOUND);
        else
            header("Location: {$location}", true, 404);
    }

    public static function unavailable(int $retry_after = 3600): void
    {
        self::send("HTTP/1.1 503 Service Temporarily Unavailable");
        self::send("Status 503 Service Temporarily Unavailable");
        self::send("Retry-After: {$retry_after}");
    }

    /**
     * Redirige la página a la url pasada por parámetro
     * @param string $url URL de destino
     */
    public static function redirect(string $url): void
    {
        self::send("Location: " . $url);
    }

    /**
     * Cabecera del tipo de contenido de la página
     * @param string $content Cabecera Content-type
     * @param string $charset Charset
     */
    public static function content(string $content, $charset = null): void
    {
        if (!is_null($charset)) {
            $content .= "; charset={$charset}";
        }
        self::send('Content-type: ' . $content);
    }

    /**
     * Cabecera de descarga de ficheros
     * @param string $filename Nombre del fichero a descargar
     */
    public static function attach(string $filename): void
    {
        self::send('Content-Disposition: attachment; filename="' . $filename . '"');
    }

    /**
     * Cabecera de apertura de ficheros en navegador sin descarga
     * @param string $filename Ruta del fichero
     */
    public static function view(string $filename): void
    {
        self::send('Content-Disposition: inline; filename="' . $filename . '"');
    }

    /**
     * Cabecera para evitar el cacheado de páginas en el cliente
     */
    public static function noCache(): void
    {
        self::send("Expires: " . gmdate("D, d M Y H:i:s", 1) . " GMT");
        self::send("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        self::send("Cache-Control: no-store, no-cache, must-revalidate");
        //        self::send("Cache-Control: post-check=0, pre-check=0", false);
        self::send("Pragma: no-cache");
    }

    public static function length(int|string $length): void
    {
        if (!is_numeric($length)) {
            $length = mb_strlen($length);
        }
        self::send('Content-length: ' . $length);
    }

    /**
     * Establece la cabecera de la última modificación del fichero
     * @param  $date Date Fecha en formato string que establece la última modifiación del fichero
     */
    public static function lastModified(int $date, bool $replace = true): void
    {
        self::send("Last-Modified: " . gmdate("D, d M Y H:i:s", $date) . " GMT", $replace);
    }

    /**
     * Establece una cabecera ETag usada para comprobar validez de caches mediante if-none-match
     * antes de descargar de nuevo una página
     */
    public static function etag(string $etag, bool $replace = true): void
    {
        if (!empty($etag) && is_string($etag)) {
            self::send('ETag: "' . $etag . '"', $replace);
        }
    }

    /**
     * Permite establecer las cabeceras con el tiempo de vida que tendrá en
     * cache una respuesta del servidor
     * @param integer $lifetime Número de segundos de vida en cache del fichero
     */
    public static function cache(int $lifetime): void
    {
        $expires = gmdate("D, d M Y H:i:s", time() + $lifetime) . " GMT";
        self::send("Expires: {$expires}");
        self::send("Cache-control: max-age={$lifetime}, private");
        self::send("Pragma: cache");
        self::send("User-Cache-Control: max-age={$lifetime}");
    }

    public static function revalidateCache(int $lifetime): void
    {
        $expires = gmdate("D, d M Y H:i:s", time() + $lifetime) . " GMT";
        self::send("Expires: {$expires}");
        self::send("Cache-control: max-age={$lifetime}, private, must-revalidate");
        self::send("Pragma: private, must-revalidate");
        self::send("User-Cache-Control: max-age={$lifetime}");
    }

    /**
     * Cabecera de autenticación web
     * Requiere modificar htacces para validar credenciales
     *
     * AuthUserFile RUTA_AL_FICHERO_DE_CLAVES/.htpasswd
     * AuthName "Se requiere validación de credenciales"
     * AuthType Basic
     * require valid-user
     *
     * @param string $message Mensaje de la ventana de logueo
     * @param string $ifCancel Mensage o acción a realizar si se cancela la ventana
     */
    public static function authenticate(string $message, string $ifCancel, bool $basic = true): void
    {
        if ($basic)
            self::send('WWW-Authenticate: Basic realm="' . $message . '"');
        else
            self::send('WWW-Authenticate: Digest realm="' . $message . '",qop="auth",nonce="' . uniqid() . '",opaque="' . md5($message) . '"');
        self::unauthorized();
        echo $ifCancel;
        exit;
    }

    public static function sendAuthenticate(string $user, string $password, bool $basic = true): void
    {
        if ($basic)
            self::send("Authorization: Basic " . base64_encode($user . ":" . $password));
    }

    /**
     * Concatena varias cabeceras para ser devueltas
     * @param array<int,string> $headers Cabeceras a concatenar
     * @return string Cabeceras
     */
    public static function mountArray(array $headers): ?string
    {
        $return = null;
        foreach ($headers as $header) {
            $return .= $header . PHP_EOL;
        }
        return $return;
    }

    /**
     * Comprueba si se han enviado ya las cabeceras
     * @return boolean True si has sido enviadas las cabeceras
     */
    public static function isSent(): bool
    {
        return headers_sent();
    }

    /**
     * Lista de cabeceras enviadas
     * @return array<int,string> Cabeceras enviadas
     */
    public static function enum(): array
    {
        return headers_list();
    }


}