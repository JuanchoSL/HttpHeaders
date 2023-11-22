<?php

namespace JuanchoSL\HttpHeaders;

class ContentType
{
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
            case ExtensionTypes::TYPE_EXTENSION_JS:
                return MimeTypes::TYPE_MIME_JS;

            case ExtensionTypes::TYPE_EXTENSION_XLS:
                return MimeTypes::TYPE_MIME_EXCEL;

            case ExtensionTypes::TYPE_EXTENSION_XLSX:
                return MimeTypes::TYPE_MIME_EXCEL;

            case ExtensionTypes::TYPE_EXTENSION_DOC:
                return MimeTypes::TYPE_MIME_WORD;

            case ExtensionTypes::TYPE_EXTENSION_DOCX:
                return MimeTypes::TYPE_MIME_WORD;

            case ExtensionTypes::TYPE_EXTENSION_PPT:
                return MimeTypes::TYPE_MIME_POWERPOINT;

            case ExtensionTypes::TYPE_EXTENSION_PPTX:
                return MimeTypes::TYPE_MIME_POWERPOINT;

            case ExtensionTypes::TYPE_EXTENSION_CSV:
                return MimeTypes::TYPE_MIME_CSV;

            case ExtensionTypes::TYPE_EXTENSION_PDF:
                return MimeTypes::TYPE_MIME_PDF;

            case ExtensionTypes::TYPE_EXTENSION_JSON:
                return MimeTypes::TYPE_MIME_JSON;

            case ExtensionTypes::TYPE_EXTENSION_XML:
                return MimeTypes::TYPE_MIME_XML;

            case ExtensionTypes::TYPE_EXTENSION_HTM:
                return MimeTypes::TYPE_MIME_HTML;

            case ExtensionTypes::TYPE_EXTENSION_HTML:
                return MimeTypes::TYPE_MIME_HTML;

            case ExtensionTypes::TYPE_EXTENSION_TXT:
                return MimeTypes::TYPE_MIME_PLAIN;

            case ExtensionTypes::TYPE_EXTENSION_PLAIN:
                return MimeTypes::TYPE_MIME_PLAIN;

            case ExtensionTypes::TYPE_EXTENSION_CSS:
                return MimeTypes::TYPE_MIME_CSS;

            case ExtensionTypes::TYPE_EXTENSION_JPG:
                return MimeTypes::TYPE_MIME_JPEG;

            case ExtensionTypes::TYPE_EXTENSION_JPEG:
                return MimeTypes::TYPE_MIME_JPEG;

            case ExtensionTypes::TYPE_EXTENSION_GIF:
                return MimeTypes::TYPE_MIME_GIF;

            case ExtensionTypes::TYPE_EXTENSION_PNG:
                return MimeTypes::TYPE_MIME_PNG;

            case ExtensionTypes::TYPE_EXTENSION_WEBP:
                return MimeTypes::TYPE_MIME_WEBP;

            case ExtensionTypes::TYPE_EXTENSION_BMP:
                return MimeTypes::TYPE_MIME_BMP;

            case ExtensionTypes::TYPE_EXTENSION_ICO:
                return MimeTypes::TYPE_MIME_ICO;

            case ExtensionTypes::TYPE_EXTENSION_MPG:
                return MimeTypes::TYPE_MIME_MPEG;

            case ExtensionTypes::TYPE_EXTENSION_MPEG:
                return MimeTypes::TYPE_MIME_MPEG;

            case ExtensionTypes::TYPE_EXTENSION_AVI:
                return MimeTypes::TYPE_MIME_MPEG;

            case ExtensionTypes::TYPE_EXTENSION_MP4:
                return MimeTypes::TYPE_MIME_MPEG;

            case ExtensionTypes::TYPE_EXTENSION_APK:
                return MimeTypes::TYPE_MIME_APK;

            case ExtensionTypes::TYPE_EXTENSION_EOT:
                return MimeTypes::TYPE_MIME_EOT;

            case ExtensionTypes::TYPE_EXTENSION_TTF:
                return MimeTypes::TYPE_MIME_TTF;

            case ExtensionTypes::TYPE_EXTENSION_OTF:
                return MimeTypes::TYPE_MIME_OTF;

            case ExtensionTypes::TYPE_EXTENSION_WOFF:
                return MimeTypes::TYPE_MIME_WOFF;

            case ExtensionTypes::TYPE_EXTENSION_WOFF2:
                return MimeTypes::TYPE_MIME_WOFF2;

            case ExtensionTypes::TYPE_EXTENSION_SVG:
                return MimeTypes::TYPE_MIME_SVG;

            case ExtensionTypes::TYPE_EXTENSION_ZIP:
                return MimeTypes::TYPE_MIME_OCTET;

            case ExtensionTypes::TYPE_EXTENSION_RAR:
                return MimeTypes::TYPE_MIME_OCTET;

            case ExtensionTypes::TYPE_EXTENSION_EXE:
                return MimeTypes::TYPE_MIME_OCTET;

            case ExtensionTypes::TYPE_EXTENSION_MD:
                return MimeTypes::TYPE_MIME_MARKDOWN;

            default:
                return MimeTypes::TYPE_MIME_OCTET;

        }
    }
}