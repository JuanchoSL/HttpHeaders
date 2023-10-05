<?php
namespace JuanchoSL\HttpHeaders;

class MimeTypes
{

    const TYPE_EXTENSION_JS = 'js';
    const TYPE_EXTENSION_XLS = 'xls';
    const TYPE_EXTENSION_XLSX = 'xlsx';
    const TYPE_EXTENSION_DOC = 'doc';
    const TYPE_EXTENSION_DOCX = 'docx';
    const TYPE_EXTENSION_PPT = 'ppt';
    const TYPE_EXTENSION_PPTX = 'pptx';
    const TYPE_EXTENSION_CSV = 'csv';
    const TYPE_EXTENSION_PDF = 'pdf';
    const TYPE_EXTENSION_TXT = 'txt';
    const TYPE_EXTENSION_JSON = 'json';
    const TYPE_EXTENSION_XML = 'xml';
    const TYPE_EXTENSION_PLAIN = 'plain';
    const TYPE_EXTENSION_HTM = 'htm';
    const TYPE_EXTENSION_HTML = 'html';
    const TYPE_EXTENSION_CSS = 'css';
    const TYPE_EXTENSION_JPG = 'jpg';
    const TYPE_EXTENSION_JPEG = 'jpeg';
    const TYPE_EXTENSION_GIF = 'gif';
    const TYPE_EXTENSION_PNG = 'png';
    const TYPE_EXTENSION_BMP = 'bmp';
    const TYPE_EXTENSION_WEBP = 'webp';
    const TYPE_EXTENSION_ICO = 'ico';
    const TYPE_EXTENSION_MP3 = 'mp3';
    const TYPE_EXTENSION_AVI = 'avi';
    const TYPE_EXTENSION_MPEG = 'mpeg';
    const TYPE_EXTENSION_MPG = 'mpg';
    const TYPE_EXTENSION_APK = 'apk';
    const TYPE_EXTENSION_EOT = 'eot';
    const TYPE_EXTENSION_OTF = 'otf';
    const TYPE_EXTENSION_TTF = 'ttf';
    const TYPE_EXTENSION_WOFF = 'woff';
    const TYPE_EXTENSION_WOFF2 = 'woff2';
    const TYPE_EXTENSION_SVG = 'svg';
    const TYPE_EXTENSION_EXE = 'exe';
    const TYPE_EXTENSION_RAR = 'rar';
    const TYPE_EXTENSION_ZIP = 'zip';
    /**
     * Detecta el tipo de fichero para insertar en la cabecera de tipo de contenido
     * @param string $downloadFileName Fichero a comprobar
     * @return string Tipo de contenido del fichero
     */
    public static function get(string $downloadFileName): string
    {
        $downloadFileName = isset($downloadFileName) ? $downloadFileName : basename($_SERVER['SCRIPT_NAME']);
        if (is_file($downloadFileName) && (file_exists($downloadFileName))) {
            $ext = pathinfo($downloadFileName, PATHINFO_EXTENSION);
        } elseif (is_string($downloadFileName)) {
            $ext = $downloadFileName;
        } else {
            exit();
        }
        switch ($ext) {
            case self::TYPE_EXTENSION_JS:
                //$type = "application/x-javascript";
                $type = "text/javascript";
                break;
            case self::TYPE_EXTENSION_XLS:
            case self::TYPE_EXTENSION_XLSX:
                $type = "application/vnd.ms-excel";
                break;
            case self::TYPE_EXTENSION_DOC:
            case self::TYPE_EXTENSION_DOCX:
                $type = "application/vnd.ms-word";
                break;
            case self::TYPE_EXTENSION_PPT:
            case self::TYPE_EXTENSION_PPTX:
                $type = "application/vnd.mspowerpoint";
                break;
            case self::TYPE_EXTENSION_CSV:
            case self::TYPE_EXTENSION_PDF:
            case self::TYPE_EXTENSION_JSON:
            case self::TYPE_EXTENSION_XML:
                $type = "application/" . $ext;
                break;
            case self::TYPE_EXTENSION_HTM:
                $ext = "html";
            case self::TYPE_EXTENSION_HTML:
            case self::TYPE_EXTENSION_TXT:
                $ext = 'plain';
            case self::TYPE_EXTENSION_PLAIN:
            case self::TYPE_EXTENSION_CSS:
                $type = "text/" . $ext;
                break;
            case self::TYPE_EXTENSION_JPG:
                $ext = "jpeg";
            case self::TYPE_EXTENSION_JPEG:
            case self::TYPE_EXTENSION_GIF:
            case self::TYPE_EXTENSION_PNG:
            case self::TYPE_EXTENSION_WEBP:
            case self::TYPE_EXTENSION_BMP:
                $type = "image/" . $ext;
                break;
            case self::TYPE_EXTENSION_ICO:
                $type = "image/x-icon";
                break;
            case self::TYPE_EXTENSION_MPG:
            case self::TYPE_EXTENSION_MPEG:
            case self::TYPE_EXTENSION_AVI:
            case self::TYPE_EXTENSION_MP3:
                $type = "video/mpeg";
                break;
            case self::TYPE_EXTENSION_APK:
                $type = "application/vnd.android.package-archive";
                break;
            case self::TYPE_EXTENSION_EOT:
                $type = "application/vnd.ms-fontobject";
                break;
            case self::TYPE_EXTENSION_TTF:
                $type = "application/x-font-ttf";
                break;
            case self::TYPE_EXTENSION_OTF:
                $type = "font/opentype";
                break;
            case self::TYPE_EXTENSION_WOFF:
                $type = "application/font-woff";
                break;
            case self::TYPE_EXTENSION_WOFF2:
                $type = "application/font-woff2";
                break;
            case self::TYPE_EXTENSION_SVG:
                $type = "image/svg+xml";
                break;
            case self::TYPE_EXTENSION_ZIP:
            case self::TYPE_EXTENSION_RAR:
            case self::TYPE_EXTENSION_EXE:
            default:
                $type = "application/octet-stream";
                break;
        }
        return $type;
    }
}