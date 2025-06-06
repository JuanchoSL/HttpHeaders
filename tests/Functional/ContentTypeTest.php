<?php

namespace JuanchoSL\HttpHeaders\Tests\Functional;

use JuanchoSL\HttpHeaders\ContentType;
use JuanchoSL\HttpHeaders\Constants\Types\Extensions;
use PHPUnit\Framework\TestCase;


class ContentTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $response = ContentType::get(Extensions::JS);
        $this->assertEquals('text/javascript', $response);
    }
    public function testExtensionXls()
    {
        $response = ContentType::get(Extensions::XLS);
        $this->assertEquals('application/vnd.ms-excel', $response);
    }
    public function testExtensionXlsx()
    {
        $response = ContentType::get(Extensions::XLSX);
        $this->assertEquals('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', $response);
    }
    public function testExtensionDoc()
    {
        $response = ContentType::get(Extensions::DOC);
        $this->assertEquals('application/vnd.ms-word', $response);
    }
    public function testExtensionDocx()
    {
        $response = ContentType::get(Extensions::DOCX);
        $this->assertEquals('application/vnd.openxmlformats-officedocument.wordprocessingml.document', $response);
    }
    public function testExtensionPpt()
    {
        $response = ContentType::get(Extensions::PPT);
        $this->assertEquals('application/vnd.mspowerpoint', $response);
    }
    public function testExtensionPptx()
    {
        $response = ContentType::get(Extensions::PPTX);
        $this->assertEquals('application/vnd.mspowerpoint', $response);
    }
    public function testExtensionCsv()
    {
        $response = ContentType::get(Extensions::CSV);
        $this->assertEquals('text/csv', $response);
    }
    public function testExtensionPdf()
    {
        $response = ContentType::get(Extensions::PDF);
        $this->assertEquals('application/pdf', $response);
    }
    public function testExtensionJson()
    {
        $response = ContentType::get(Extensions::JSON);
        $this->assertEquals('application/json', $response);
    }
    public function testExtensionXml()
    {
        $response = ContentType::get(Extensions::XML);
        $this->assertEquals('application/xml', $response);
    }
    public function testExtensionHtm()
    {
        $response = ContentType::get(Extensions::HTM);
        $this->assertEquals('text/html', $response);
    }
    public function testExtensionHtml()
    {
        $response = ContentType::get(Extensions::HTML);
        $this->assertEquals('text/html', $response);
    }
    public function testExtensionTxt()
    {
        $response = ContentType::get(Extensions::TXT);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionPlain()
    {
        $response = ContentType::get(Extensions::PLAIN);
        $this->assertEquals('text/plain', $response);
    }
    public function testExtensionCss()
    {
        $response = ContentType::get(Extensions::CSS);
        $this->assertEquals('text/css', $response);
    }
    public function testExtensionJpg()
    {
        $response = ContentType::get(Extensions::JPG);
        $this->assertEquals('image/jpeg', $response);
    }
    public function testExtensionJpeg()
    {
        $response = ContentType::get(Extensions::JPEG);
        $this->assertEquals('image/jpeg', $response);
    }
    public function testExtensionPng()
    {
        $response = ContentType::get(Extensions::PNG);
        $this->assertEquals('image/png', $response);
    }
    public function testExtensionBmp()
    {
        $response = ContentType::get(Extensions::BMP);
        $this->assertEquals('image/bmp', $response);
    }
    public function testExtensionWebp()
    {
        $response = ContentType::get(Extensions::WEBP);
        $this->assertEquals('image/webp', $response);
    }
    public function testExtensionGif()
    {
        $response = ContentType::get(Extensions::GIF);
        $this->assertEquals('image/gif', $response);
    }
    public function testExtensionIco()
    {
        $response = ContentType::get(Extensions::ICO);
        $this->assertEquals('image/x-icon', $response);
    }
    public function testExtensionMpg()
    {
        $response = ContentType::get(Extensions::MPG);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionMpeg()
    {
        $response = ContentType::get(Extensions::MPEG);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionAvi()
    {
        $response = ContentType::get(Extensions::AVI);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionMp4()
    {
        $response = ContentType::get(Extensions::MP4);
        $this->assertEquals('video/mpeg', $response);
    }
    public function testExtensionEot()
    {
        $response = ContentType::get(Extensions::EOT);
        $this->assertEquals('application/vnd.ms-fontobject', $response);
    }
    public function testExtensionTtf()
    {
        $response = ContentType::get(Extensions::TTF);
        $this->assertEquals('font/ttf', $response);
    }
    public function testExtensionWoff()
    {
        $response = ContentType::get(Extensions::WOFF);
        $this->assertEquals('font/woff', $response);
    }
    public function testExtensionWoff2()
    {
        $response = ContentType::get(Extensions::WOFF2);
        $this->assertEquals('font/woff2', $response);
    }
    public function testExtensionOtf()
    {
        $response = ContentType::get(Extensions::OTF);
        $this->assertEquals('font/otf', $response);
    }
    public function testExtensionApk()
    {
        $response = ContentType::get(Extensions::APK);
        $this->assertEquals('application/vnd.android.package-archive', $response);
    }
    public function testExtensionExe()
    {
        $response = ContentType::get(Extensions::EXE);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionZip()
    {
        $response = ContentType::get(Extensions::ZIP);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionRar()
    {
        $response = ContentType::get(Extensions::RAR);
        $this->assertEquals('application/octet-stream', $response);
    }
    public function testExtensionSvg()
    {
        $response = ContentType::get(Extensions::SVG);
        $this->assertEquals('image/svg+xml', $response);
    }
}