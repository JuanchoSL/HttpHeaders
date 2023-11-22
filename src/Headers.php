<?php

namespace JuanchoSL\HttpHeaders;

class Headers
{

    protected static string $httpVersion = 'HTTP/1.1';

    const CONTINUE_ = 100;
    const SWITCHING_PROTOCOLS = 101;
    const PROCESSING = 102;
    //Successful 2xx
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NON_AUTHORITATIVE_INFORMATION = 203;
    const NO_CONTENT = 204;
    const RESET_CONTENT = 205;
    const PARTIAL_CONTENT = 206;
    const MULTI_STATUS = 207;
    const ALREADY_REPORTED = 208;
    const IM_USED = 226;
    //Redirection 3xx
    const MULTIPLE_CHOICES = 300;
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;
    const USE_PROXY = 305;
    //const '306 (Unused)';
    const TEMPORARY_REDIRECT = 307;
    const PERMANENT_REDIRECT = 308;
    //Client Error 4xx
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOHD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const PROXY_AUTHENTICATION_REQUIRED = 407;
    const REQUEST_TIMEOUT = 408;
    const CONFLICT = 409;
    const GONE = 410;
    const LENGTH_REQUIRED = 411;
    const PRECONDITION_FAILED = 412;
    const PAYLOAD_TOO_LARGE = 413; //'413 Request Entity Too Large';
    const URI_TOO_LONG = 414; //'414 Request-URI Too Long';
    const UNSUPPORTED_MEDIA_TYPE = 415;
    const RANGE_NOT_SATISFIABLE = 416; //'416 Requested Range Not Satisfiable';
    const EXPECTATION_FAILED = 417;
    const IM_A_TEAPOT = 418;
    const MISDIRECT_REQUEST = 421;
    const UNPROCESSABLE_ENTITY = 422;
    const LOCKED = 423;
    const PRECONDITION_REQUIRED = 428;
    //Server Error 5xx
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const BAD_GATEWAY = 502;
    const SERVICE_UNAVAILABLE = 503;
    const GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;

    protected static array $messages = array(
            //Informational 1xx
        self::CONTINUE_ => 'Continue',
        self::SWITCHING_PROTOCOLS => 'Switching Protocols',
        self::PROCESSING => 'Processing',
            //Successful 2xx
        self::OK => 'OK',
        self::CREATED => 'Created',
        self::ACCEPTED => 'Accepted',
        self::NON_AUTHORITATIVE_INFORMATION => 'Non-Authoritative Information',
        self::NO_CONTENT => 'No Content',
        self::RESET_CONTENT => 'Reset Content',
        self::PARTIAL_CONTENT => 'Partial Content',
        self::MULTI_STATUS => 'Multi-Status',
        self::ALREADY_REPORTED => 'Already Reported',
        self::IM_USED => 'IM Used',
            //Redirection 3xx
        self::MULTIPLE_CHOICES => 'Multiple Choices',
        self::MOVED_PERMANENTLY => 'Moved Permanently',
        self::FOUND => 'Found',
        self::SEE_OTHER => 'See Other',
        self::NOT_MODIFIED => 'Not Modified',
        self::USE_PROXY => 'Use Proxy',
            //        306 => '306 (Unused)',
        self::TEMPORARY_REDIRECT => 'Temporary Redirect',
        self::PERMANENT_REDIRECT => 'Permanent Redirect',
            //Client Error 4xx
        self::BAD_REQUEST => 'Bad Request',
        self::UNAUTHORIZED => 'Unauthorized',
        self::PAYMENT_REQUIRED => 'Payment Required',
        self::FORBIDDEN => 'Forbidden',
        self::NOT_FOUND => 'Not Found',
        self::METHOHD_NOT_ALLOWED => 'Method Not Allowed',
        self::NOT_ACCEPTABLE => 'Not Acceptable',
        self::PROXY_AUTHENTICATION_REQUIRED => 'Proxy Authentication Required',
        self::REQUEST_TIMEOUT => 'Request Timeout',
        self::CONFLICT => 'Conflict',
        self::GONE => 'Gone',
        self::LENGTH_REQUIRED => 'Length Required',
        self::PRECONDITION_FAILED => 'Precondition Failed',
        self::PAYLOAD_TOO_LARGE => 'Payload Too Large',
            //'413 Request Entity Too Large',
        self::URI_TOO_LONG => 'URI Too Long',
            //'414 Request-URI Too Long',
        self::UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
        self::RANGE_NOT_SATISFIABLE => 'Range Not Satisfiable',
            //'416 Requested Range Not Satisfiable',
        self::EXPECTATION_FAILED => 'Expectation Failed',
        self::IM_A_TEAPOT => "I'm a teapot",
        self::MISDIRECT_REQUEST => 'Misdirected Request',
        self::UNPROCESSABLE_ENTITY => 'Unprocessable Entity',
        self::LOCKED => 'Locked',
        self::PRECONDITION_REQUIRED => 'Precondition Required',
            //Server Error 5xx
        self::INTERNAL_SERVER_ERROR => 'Internal Server Error',
        self::NOT_IMPLEMENTED => 'Not Implemented',
        self::BAD_GATEWAY => 'Bad Gateway',
        self::SERVICE_UNAVAILABLE => 'Service Unavailable',
        self::GATEWAY_TIMEOUT => 'Gateway Timeout',
        self::HTTP_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported'
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
        self::header(self::OK);
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
                self::header(self::PERMANENT_REDIRECT);
            } else {
                self::send('HTTP/1.0 301 Moved Permanently');
            }
        } else {
            if ($server_protocol == self::$httpVersion) {
                self::header(self::TEMPORARY_REDIRECT);
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
        self::header(self::BAD_REQUEST);
    }

    /**
     * Cabecera de falta de autorización
     */
    public static function unauthorized(): void
    {
        self::header(self::UNAUTHORIZED);
    }

    /**
     * Cabecera de error 404
     * @param string $location URL Location para hacer redirect
     */
    public static function notFound(string $location = ''): void
    {
        if ($location == "")
            self::header(self::NOT_FOUND);
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
     * @param array $headers Cabeceras a concatenar
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
     * @return array Cabeceras enviadas
     */
    public static function enum(): array
    {
        return headers_list();
    }


}