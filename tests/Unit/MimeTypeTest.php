<?php

namespace JuanchoSL\HttpHeaders\Tests;

use JuanchoSL\HttpHeaders\MimeTypes;
use PHPUnit\Framework\TestCase;


class MimeTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_JS);
        $this->assertEquals('text/javascript', $response);
    }
    public function testExtensionXls()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_XLS);
        $this->assertEquals('application/vnd.ms-excel', $response);
    }
    public function testExtensionXlsx()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_XLSX);
        $this->assertEquals('application/vnd.ms-excel', $response);
    }
    public function testExtensionDoc()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_DOC);
        $this->assertEquals('application/vnd.ms-word', $response);
    }
    public function testExtensionDocx()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_DOCX);
        $this->assertEquals('application/vnd.ms-word', $response);
    }
    public function testExtensionPpt()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_PPT);
        $this->assertEquals('application/vnd.mspowerpoint', $response);
    }
    public function testExtensionPptx()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_PPTX);
        $this->assertEquals('application/vnd.mspowerpoint', $response);
    }
    public function testExtensionCsv()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_CSV);
        $this->assertEquals('applicattion/csv', $response);
    }
    public function testExtensionPdf()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_PDF);
        $this->assertEquals('applicattion/pdf', $response);
    }
    public function testExtensionJson()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_JSON);
        $this->assertEquals('applicattion/json', $response);
    }
    public function testExtensionXml()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_XML);
        $this->assertEquals('applicattion/xml', $response);
    }
    public function testExtensionHtm()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_HTM);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionHtml()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_HTML);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionTxt()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_TXT);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionPlain()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_PLAIN);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionCss()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_CSS);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionJpg()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_JPG);
        $this->assertEquals('image/jpeg', $response);
    }
    public function testExtensionJpeg()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_JPEG);
        $this->assertEquals('image/jpeg', $response);
    }
    public function testExtensionPng()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_PNG);
        $this->assertEquals('image/png', $response);
    }
    public function testExtensionBmp()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_BMP);
        $this->assertEquals('image/bmp', $response);
    }
    public function testExtensionWebp()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_WEBP);
        $this->assertEquals('image/webp', $response);
    }
    public function testExtensionGif()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_GIF);
        $this->assertEquals('image/gif', $response);
    }
    public function testExtensionIco()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_ICO);
        $this->assertEquals('image/x-icon', $response);
    }
    public function testExtensionMpg()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_MPG);
        $this->assertEquals('"video/mpeg', $response);
    }
    public function testExtensionMpeg()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_MPEG);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionAvi()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_AVI);
        $this->assertEquals('"video/mpeg', $response);
    }
    public function testExtensionMp3()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_MP3);
        $this->assertEquals('"video/mpeg', $response);
    }
    public function testExtensionEot()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_EOT);
        $this->assertEquals('application/vnd.ms-fontobject', $response);
    }
    public function testExtensionTtf()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_TTF);
        $this->assertEquals('application/x-font-ttf', $response);
    }
    public function testExtensionWoff()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_WOFF);
        $this->assertEquals('application/font-woff', $response);
    }
    public function testExtensionWoff2()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_WOFF2);
        $this->assertEquals('application/font-woff2', $response);
    }
    public function testExtensionOtf()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_OTF);
        $this->assertEquals('font/opentype', $response);
    }
    public function testExtensionApk()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_APK);
        $this->assertEquals('application/vnd.android.package-archive', $response);
    }
    public function testExtensionExe()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_EXE);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionZip()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_ZIP);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionRar()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_RAR);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionSvg()
    {
        $response = MimeTypes::get(MimeTypes::TYPE_EXTENSION_SVG);
        $this->assertEquals('image/svg+xml', $response);
    }
}