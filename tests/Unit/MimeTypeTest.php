<?php

namespace JuanchoSL\HttpHeaders\Tests\Unit;

use JuanchoSL\HttpHeaders\Constants\Types\MimeTypes;
use PHPUnit\Framework\TestCase;


class MimeTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $this->assertEquals('text/javascript', MimeTypes::JS);
    }

    public function testExtensionExcel()
    {
        $this->assertEquals('application/vnd.ms-excel', MimeTypes::EXCEL);
    }
    public function testExtensionWord()
    {
        $this->assertEquals('application/vnd.ms-word', MimeTypes::WORD);
    }
    public function testExtensionPowerpoint()
    {
        $this->assertEquals('application/vnd.mspowerpoint', MimeTypes::POWERPOINT);
    }
    public function testExtensionCsv()
    {
        $this->assertEquals('text/csv', MimeTypes::CSV);
    }
    public function testExtensionPdf()
    {
        $this->assertEquals('application/pdf', MimeTypes::PDF);
    }
    public function testExtensionJson()
    {
        $this->assertEquals('application/json', MimeTypes::JSON);
    }
    public function testExtensionXml()
    {
        $this->assertEquals('application/xml', MimeTypes::XML);
    }
    public function testExtensionHtml()
    {
        $this->assertEquals('text/html', MimeTypes::HTML);
    }
    public function testExtensionPlain()
    {
        $this->assertEquals('text/plain', MimeTypes::PLAIN);
    }
    public function testExtensionCss()
    {
        $this->assertEquals('text/css', MimeTypes::CSS);
    }
    public function testExtensionJpeg()
    {
        $this->assertEquals('image/jpeg', MimeTypes::JPEG);
    }
    public function testExtensionPng()
    {
        $this->assertEquals('image/png', MimeTypes::PNG);
    }
    public function testExtensionBmp()
    {
        $this->assertEquals('image/bmp', MimeTypes::BMP);
    }
    public function testExtensionWebp()
    {
        $this->assertEquals('image/webp', MimeTypes::WEBP);
    }
    public function testExtensionGif()
    {
        $this->assertEquals('image/gif', MimeTypes::GIF);
    }
    public function testExtensionIco()
    {
        $this->assertEquals('image/x-icon', MimeTypes::ICO);
    }
    public function testExtensionMpeg()
    {
        $this->assertEquals('video/mpeg', MimeTypes::MPEG);
    }
    public function testExtensionEot()
    {
        $this->assertEquals('application/vnd.ms-fontobject', MimeTypes::EOT);
    }
    public function testExtensionTtf()
    {
        $this->assertEquals('font/ttf', MimeTypes::TTF);
    }
    public function testExtensionWoff()
    {
        $this->assertEquals('font/woff', MimeTypes::WOFF);
    }
    public function testExtensionWoff2()
    {
        $this->assertEquals('font/woff2', MimeTypes::WOFF2);
    }
    public function testExtensionOtf()
    {
        $this->assertEquals('font/otf', MimeTypes::OTF);
    }
    public function testExtensionApk()
    {
        $this->assertEquals('application/vnd.android.package-archive', MimeTypes::APK);
    }
    public function testExtensionOctet()
    {
        $this->assertEquals('application/octet-stream', MimeTypes::OCTET);
    }
    public function testExtensionZip()
    {
        $this->assertEquals('application/zip', MimeTypes::ZIP);
    }
    public function testExtensionSvg()
    {
        $this->assertEquals('image/svg+xml', MimeTypes::SVG);
    }
}