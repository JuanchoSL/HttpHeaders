<?php

namespace JuanchoSL\HttpHeaders\Tests;

use JuanchoSL\HttpHeaders\MimeTypes;
use PHPUnit\Framework\TestCase;


class MimeTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $this->assertEquals('text/javascript', MimeTypes::TYPE_MIME_JS);
    }

    public function testExtensionExcel()
    {
        $this->assertEquals('application/vnd.ms-excel', MimeTypes::TYPE_MIME_EXCEL);
    }
    public function testExtensionWord()
    {
        $this->assertEquals('application/vnd.ms-word', MimeTypes::TYPE_MIME_WORD);
    }
    public function testExtensionPowerpoint()
    {
        $this->assertEquals('application/vnd.mspowerpoint', MimeTypes::TYPE_MIME_POWERPOINT);
    }
    public function testExtensionCsv()
    {
        $this->assertEquals('text/csv', MimeTypes::TYPE_MIME_CSV);
    }
    public function testExtensionPdf()
    {
        $this->assertEquals('application/pdf', MimeTypes::TYPE_MIME_PDF);
    }
    public function testExtensionJson()
    {
        $this->assertEquals('application/json', MimeTypes::TYPE_MIME_JSON);
    }
    public function testExtensionXml()
    {
        $this->assertEquals('application/xml', MimeTypes::TYPE_MIME_XML);
    }
    public function testExtensionHtml()
    {
        $this->assertEquals('text/html', MimeTypes::TYPE_MIME_HTML);
    }
    public function testExtensionPlain()
    {
        $this->assertEquals('text/plain', MimeTypes::TYPE_MIME_PLAIN);
    }
    public function testExtensionCss()
    {
        $this->assertEquals('text/css', MimeTypes::TYPE_MIME_CSS);
    }
    public function testExtensionJpeg()
    {
        $this->assertEquals('image/jpeg', MimeTypes::TYPE_MIME_JPEG);
    }
    public function testExtensionPng()
    {
        $this->assertEquals('image/png', MimeTypes::TYPE_MIME_PNG);
    }
    public function testExtensionBmp()
    {
        $this->assertEquals('image/bmp', MimeTypes::TYPE_MIME_BMP);
    }
    public function testExtensionWebp()
    {
        $this->assertEquals('image/webp', MimeTypes::TYPE_MIME_WEBP);
    }
    public function testExtensionGif()
    {
        $this->assertEquals('image/gif', MimeTypes::TYPE_MIME_GIF);
    }
    public function testExtensionIco()
    {
        $this->assertEquals('image/x-icon', MimeTypes::TYPE_MIME_ICO);
    }
    public function testExtensionMpeg()
    {
        $this->assertEquals('video/mpeg', MimeTypes::TYPE_MIME_MPEG);
    }
    public function testExtensionEot()
    {
        $this->assertEquals('application/vnd.ms-fontobject', MimeTypes::TYPE_MIME_EOT);
    }
    public function testExtensionTtf()
    {
        $this->assertEquals('font/ttf', MimeTypes::TYPE_MIME_TTF);
    }
    public function testExtensionWoff()
    {
        $this->assertEquals('font/woff', MimeTypes::TYPE_MIME_WOFF);
    }
    public function testExtensionWoff2()
    {
        $this->assertEquals('font/woff2', MimeTypes::TYPE_MIME_WOFF2);
    }
    public function testExtensionOtf()
    {
        $this->assertEquals('font/otf', MimeTypes::TYPE_MIME_OTF);
    }
    public function testExtensionApk()
    {
        $this->assertEquals('application/vnd.android.package-archive', MimeTypes::TYPE_MIME_APK);
    }
    public function testExtensionOctet()
    {
        $this->assertEquals('application/octet-stream', MimeTypes::TYPE_MIME_OCTET);
    }
    public function testExtensionZip()
    {
        $this->assertEquals('application/zip', MimeTypes::TYPE_MIME_ZIP);
    }
    public function testExtensionSvg()
    {
        $this->assertEquals('image/svg+xml', MimeTypes::TYPE_MIME_SVG);
    }
}