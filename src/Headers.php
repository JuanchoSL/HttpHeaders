<?php

namespace JuanchoSL\HttpHeaders;

class Headers
{

    protected static string $httpVersion = 'HTTP/1.1';

    protected static array $messages = array(
            //Informational 1xx
        HeaderCode::CONTINUE_ => 'Continue',
        HeaderCode::SWITCHING_PROTOCOLS => 'Switching Protocols',
        HeaderCode::PROCESSING => 'Processing',
            //Successful 2xx
        HeaderCode::OK => 'OK',
        HeaderCode::CREATED => 'Created',
        HeaderCode::ACCEPTED => 'Accepted',
        HeaderCode::NON_AUTHORITATIVE_INFORMATION => 'Non-Authoritative Information',
        HeaderCode::NO_CONTENT => 'No Content',
        HeaderCode::RESET_CONTENT => 'Reset Content',
        HeaderCode::PARTIAL_CONTENT => 'Partial Content',
        HeaderCode::MULTI_STATUS => 'Multi-Status',
        HeaderCode::ALREADY_REPORTED => 'Already Reported',
        HeaderCode::IM_USED => 'IM Used',
            //Redirection 3xx
        HeaderCode::MULTIPLE_CHOICES => 'Multiple Choices',
        HeaderCode::MOVED_PERMANENTLY => 'Moved Permanently',
        HeaderCode::FOUND => 'Found',
        HeaderCode::SEE_OTHER => 'See Other',
        HeaderCode::NOT_MODIFIED => 'Not Modified',
        HeaderCode::USE_PROXY => 'Use Proxy',
            //        306 => '306 (Unused)',
        HeaderCode::TEMPORARY_REDIRECT => 'Temporary Redirect',
        HeaderCode::PERMANENT_REDIRECT => 'Permanent Redirect',
            //Client Error 4xx
        HeaderCode::BAD_REQUEST => 'Bad Request',
        HeaderCode::UNAUTHORIZED => 'Unauthorized',
        HeaderCode::PAYMENT_REQUIRED => 'Payment Required',
        HeaderCode::FORBIDDEN => 'Forbidden',
        HeaderCode::NOT_FOUND => 'Not Found',
        HeaderCode::METHOHD_NOT_ALLOWED => 'Method Not Allowed',
        HeaderCode::NOT_ACCEPTABLE => 'Not Acceptable',
        HeaderCode::PROXY_AUTHENTICATION_REQUIRED => 'Proxy Authentication Required',
        HeaderCode::REQUEST_TIMEOUT => 'Request Timeout',
        HeaderCode::CONFLICT => 'Conflict',
        HeaderCode::GONE => 'Gone',
        HeaderCode::LENGTH_REQUIRED => 'Length Required',
        HeaderCode::PRECONDITION_FAILED => 'Precondition Failed',
        HeaderCode::PAYLOAD_TOO_LARGE => 'Payload Too Large',
            //'413 Request Entity Too Large',
        HeaderCode::URI_TOO_LONG => 'URI Too Long',
            //'414 Request-URI Too Long',
        HeaderCode::UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
        HeaderCode::RANGE_NOT_SATISFIABLE => 'Range Not Satisfiable',
            //'416 Requested Range Not Satisfiable',
        HeaderCode::EXPECTATION_FAILED => 'Expectation Failed',
        HeaderCode::IM_A_TEAPOT => "I'm a teapot",
        HeaderCode::MISDIRECT_REQUEST => 'Misdirected Request',
        HeaderCode::UNPROCESSABLE_ENTITY => 'Unprocessable Entity',
        HeaderCode::LOCKED => 'Locked',
        HeaderCode::PRECONDITION_REQUIRED => 'Precondition Required',
            //Server Error 5xx
        HeaderCode::INTERNAL_SERVER_ERROR => 'Internal Server Error',
        HeaderCode::NOT_IMPLEMENTED => 'Not Implemented',
        HeaderCode::BAD_GATEWAY => 'Bad Gateway',
        HeaderCode::SERVICE_UNAVAILABLE => 'Service Unavailable',
        HeaderCode::GATEWAY_TIMEOUT => 'Gateway Timeout',
        HeaderCode::HTTP_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported'
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
        self::header(HeaderCode::OK);
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
                self::header(HeaderCode::PERMANENT_REDIRECT);
            } else {
                self::send('HTTP/1.0 301 Moved Permanently');
            }
        } else {
            if ($server_protocol == self::$httpVersion) {
                self::header(HeaderCode::TEMPORARY_REDIRECT);
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
        self::header(HeaderCode::BAD_REQUEST);
    }

    /**
     * Cabecera de falta de autorización
     */
    public static function unauthorized(): void
    {
        self::header(HeaderCode::UNAUTHORIZED);
    }

    /**
     * Cabecera de error 404
     * @param string $location URL Location para hacer redirect
     */
    public static function notFound(string $location = ''): void
    {
        if ($location == "")
            self::header(HeaderCode::NOT_FOUND);
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