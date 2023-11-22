<?php

namespace JuanchoSL\HttpHeaders;

class HeaderMessage
{

    //Informational 1xx
    const CONTINUE = 'Continue';
    const SWITCHING_PROTOCOLS = 'Switching Protocols';
    const PROCESSING = 'Processing';
    //Successful 2xx
    const OK = 'OK';
    const CREATED = 'Created';
    const ACCEPTED = 'Accepted';
    const NON_AUTHORITATIVE_INFORMATION = 'Non-Authoritative Information';
    const NO_CONTENT = 'No Content';
    const RESET_CONTENT = 'Reset Content';
    const PARTIAL_CONTENT = 'Partial Content';
    const MULTI_STATUS = 'Multi-Status';
    const ALREADY_REPORTED = 'Already Reported';
    const IM_USED = 'IM Used';
    //Redirection 3xx
    const MULTIPLE_CHOICES = 'Multiple Choices';
    const MOVED_PERMANENTLY = 'Moved Permanently';
    const FOUND = 'Found';
    const SEE_OTHER = 'See Other';
    const NOT_MODIFIED = 'Not Modified';
    const USE_PROXY = 'Use Proxy';
    //        306 = '306 (Unused)';
    const TEMPORARY_REDIRECT = 'Temporary Redirect';
    const PERMANENT_REDIRECT = 'Permanent Redirect';
    //Client Error 4xx
    const BAD_REQUEST = 'Bad Request';
    const UNAUTHORIZED = 'Unauthorized';
    const PAYMENT_REQUIRED = 'Payment Required';
    const FORBIDDEN = 'Forbidden';
    const NOT_FOUND = 'Not Found';
    const METHOHD_NOT_ALLOWED = 'Method Not Allowed';
    const NOT_ACCEPTABLE = 'Not Acceptable';
    const PROXY_AUTHENTICATION_REQUIRED = 'Proxy Authentication Required';
    const REQUEST_TIMEOUT = 'Request Timeout';
    const CONFLICT = 'Conflict';
    const GONE = 'Gone';
    const LENGTH_REQUIRED = 'Length Required';
    const PRECONDITION_FAILED = 'Precondition Failed';
    const PAYLOAD_TOO_LARGE = 'Payload Too Large';
    //'413 Request Entity Too Large';
    const URI_TOO_LONG = 'URI Too Long';
    //'414 Request-URI Too Long';
    const UNSUPPORTED_MEDIA_TYPE = 'Unsupported Media Type';
    const RANGE_NOT_SATISFIABLE = 'Range Not Satisfiable';
    //'416 Requested Range Not Satisfiable';
    const EXPECTATION_FAILED = 'Expectation Failed';
    const IM_A_TEAPOT = "I'm a teapot";
    const MISDIRECT_REQUEST = 'Misdirected Request';
    const UNPROCESSABLE_ENTITY = 'Unprocessable Entity';
    const LOCKED = 'Locked';
    const PRECONDITION_REQUIRED = 'Precondition Required';
    //Server Error 5xx
    const INTERNAL_SERVER_ERROR = 'Internal Server Error';
    const NOT_IMPLEMENTED = 'Not Implemented';
    const BAD_GATEWAY = 'Bad Gateway';
    const SERVICE_UNAVAILABLE = 'Service Unavailable';
    const GATEWAY_TIMEOUT = 'Gateway Timeout';
    const HTTP_VERSION_NOT_SUPPORTED = 'HTTP Version Not Supported';

}