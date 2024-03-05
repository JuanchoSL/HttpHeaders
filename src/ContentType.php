<?php

namespace JuanchoSL\HttpHeaders;

use JuanchoSL\HttpHeaders\Constants\Types\Extensions;
use JuanchoSL\HttpHeaders\Constants\Types\MimeTypes;

class ContentType
{
    /**
     * Detecta el tipo de fichero para insertar en la cabecera de tipo de contenido
     * @param string $downloadFileName Fichero a comprobar
     * @return string Tipo de contenido del fichero
     */
    public static function get(?string $downloadFileName): string
    {
        $downloadFileName = isset($downloadFileName) ? $downloadFileName : basename($_SERVER['SCRIPT_NAME']);
        if (is_file($downloadFileName) && file_exists($downloadFileName)) {
            $ext = pathinfo($downloadFileName, PATHINFO_EXTENSION);
        } elseif (is_string($downloadFileName)) {
            $ext = $downloadFileName;
        }
        switch ($ext) {
            case Extensions::JS:
                return MimeTypes::JS;

            case Extensions::XLS:
                return MimeTypes::EXCEL;

            case Extensions::XLSX:
                return MimeTypes::EXCEL;

            case Extensions::DOC:
                return MimeTypes::WORD;

            case Extensions::DOCX:
                return MimeTypes::WORD;

            case Extensions::PPT:
                return MimeTypes::POWERPOINT;

            case Extensions::PPTX:
                return MimeTypes::POWERPOINT;

            case Extensions::CSV:
                return MimeTypes::CSV;

            case Extensions::PDF:
                return MimeTypes::PDF;

            case Extensions::JSON:
                return MimeTypes::JSON;

            case Extensions::XML:
                return MimeTypes::XML;

            case Extensions::HTM:
                return MimeTypes::HTML;

            case Extensions::HTML:
                return MimeTypes::HTML;

            case Extensions::TXT:
                return MimeTypes::PLAIN;

            case Extensions::PLAIN:
                return MimeTypes::PLAIN;

            case Extensions::CSS:
                return MimeTypes::CSS;

            case Extensions::JPG:
                return MimeTypes::JPEG;

            case Extensions::JPEG:
                return MimeTypes::JPEG;

            case Extensions::GIF:
                return MimeTypes::GIF;

            case Extensions::PNG:
                return MimeTypes::PNG;

            case Extensions::WEBP:
                return MimeTypes::WEBP;

            case Extensions::BMP:
                return MimeTypes::BMP;

            case Extensions::ICO:
                return MimeTypes::ICO;

            case Extensions::MPG:
                return MimeTypes::MPEG;

            case Extensions::MPEG:
                return MimeTypes::MPEG;

            case Extensions::AVI:
                return MimeTypes::MPEG;

            case Extensions::MP4:
                return MimeTypes::MPEG;

            case Extensions::APK:
                return MimeTypes::APK;

            case Extensions::EOT:
                return MimeTypes::EOT;

            case Extensions::TTF:
                return MimeTypes::TTF;

            case Extensions::OTF:
                return MimeTypes::OTF;

            case Extensions::WOFF:
                return MimeTypes::WOFF;

            case Extensions::WOFF2:
                return MimeTypes::WOFF2;

            case Extensions::SVG:
                return MimeTypes::SVG;

            case Extensions::ZIP:
                return MimeTypes::OCTET;

            case Extensions::RAR:
                return MimeTypes::OCTET;

            case Extensions::EXE:
                return MimeTypes::OCTET;

            case Extensions::MD:
                return MimeTypes::MARKDOWN;

            default:
                return MimeTypes::OCTET;

        }
    }
}