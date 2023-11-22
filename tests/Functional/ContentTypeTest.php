<?php

namespace JuanchoSL\HttpHeaders\Tests;

use JuanchoSL\HttpHeaders\ContentType;
use JuanchoSL\HttpHeaders\ExtensionTypes;
use PHPUnit\Framework\TestCase;


class ContentTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_JS);
        $this->assertEquals('text/javascript', $response);
    }
    public function testExtensionXls()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_XLS);
        $this->assertEquals('application/vnd.ms-excel', $response);
    }
    public function testExtensionXlsx()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_XLSX);
        $this->assertEquals('application/vnd.ms-excel', $response);
    }
    public function testExtensionDoc()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_DOC);
        $this->assertEquals('application/vnd.ms-word', $response);
    }
    public function testExtensionDocx()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_DOCX);
        $this->assertEquals('application/vnd.ms-word', $response);
    }
    public function testExtensionPpt()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_PPT);
        $this->assertEquals('application/vnd.mspowerpoint', $response);
    }
    public function testExtensionPptx()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_PPTX);
        $this->assertEquals('application/vnd.mspowerpoint', $response);
    }
    public function testExtensionCsv()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_CSV);
        $this->assertEquals('text/csv', $response);
    }
    public function testExtensionPdf()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_PDF);
        $this->assertEquals('application/pdf', $response);
    }
    public function testExtensionJson()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_JSON);
        $this->assertEquals('application/json', $response);
    }
    public function testExtensionXml()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_XML);
        $this->assertEquals('application/xml', $response);
    }
    public function testExtensionHtm()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_HTM);
        $this->assertEquals('text/html', $response);
    }
    public function testExtensionHtml()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_HTML);
        $this->assertEquals('text/html', $response);
    }
    public function testExtensionTxt()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_TXT);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionPlain()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_PLAIN);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionCss()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_CSS);
        $this->assertEquals('text/css', $response);
    }
    public function testExtensionJpg()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_JPG);
        $this->assertEquals('image/jpeg', $response);
    }
    public function testExtensionJpeg()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_JPEG);
        $this->assertEquals('image/jpeg', $response);
    }
    public function testExtensionPng()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_PNG);
        $this->assertEquals('image/png', $response);
    }
    public function testExtensionBmp()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_BMP);
        $this->assertEquals('image/bmp', $response);
    }
    public function testExtensionWebp()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_WEBP);
        $this->assertEquals('image/webp', $response);
    }
    public function testExtensionGif()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_GIF);
        $this->assertEquals('image/gif', $response);
    }
    public function testExtensionIco()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_ICO);
        $this->assertEquals('image/x-icon', $response);
    }
    public function testExtensionMpg()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_MPG);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionMpeg()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_MPEG);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionAvi()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_AVI);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionMp4()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_MP4);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionEot()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_EOT);
        $this->assertEquals('application/vnd.ms-fontobject', $response);
    }
    public function testExtensionTtf()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_TTF);
        $this->assertEquals('font/ttf', $response);
    }
    public function testExtensionWoff()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_WOFF);
        $this->assertEquals('font/woff', $response);
    }
    public function testExtensionWoff2()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_WOFF2);
        $this->assertEquals('font/woff2', $response);
    }
    public function testExtensionOtf()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_OTF);
        $this->assertEquals('font/otf', $response);
    }
    public function testExtensionApk()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_APK);
        $this->assertEquals('application/vnd.android.package-archive', $response);
    }
    public function testExtensionExe()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_EXE);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionZip()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_ZIP);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionRar()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_RAR);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionSvg()
    {
        $response = ContentType::get(ExtensionTypes::TYPE_EXTENSION_SVG);
        $this->assertEquals('image/svg+xml', $response);
    }
}