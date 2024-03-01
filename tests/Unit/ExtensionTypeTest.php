<?php

namespace JuanchoSL\HttpHeaders\Tests\Unit;

use JuanchoSL\HttpHeaders\Constants\Types\Extensions;
use PHPUnit\Framework\TestCase;


class ExtensionTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $this->assertEquals('js', Extensions::JS);
    }
    public function testExtensionXls()
    {
        $this->assertEquals('xls', Extensions::XLS);
    }
    public function testExtensionXlsx()
    {
        $this->assertEquals('xlsx', Extensions::XLSX);
    }
    public function testExtensionDoc()
    {
        $this->assertEquals('doc', Extensions::DOC);
    }
    public function testExtensionDocx()
    {
        $this->assertEquals('docx', Extensions::DOCX);
    }
    public function testExtensionPpt()
    {
        $this->assertEquals('ppt', Extensions::PPT);
    }
    public function testExtensionPptx()
    {
        $this->assertEquals('pptx', Extensions::PPTX);
    }
    public function testExtensionCsv()
    {
        $this->assertEquals('csv', Extensions::CSV);
    }
    public function testExtensionPdf()
    {
        $this->assertEquals('pdf', Extensions::PDF);
    }
    public function testExtensionJson()
    {
        $this->assertEquals('json', Extensions::JSON);
    }
    public function testExtensionXml()
    {
        $this->assertEquals('xml', Extensions::XML);
    }
    public function testExtensionHtm()
    {
        $this->assertEquals('htm', Extensions::HTM);
    }
    public function testExtensionHtml()
    {
        $this->assertEquals('html', Extensions::HTML);
    }
    public function testExtensionTxt()
    {
        $this->assertEquals('txt', Extensions::TXT);
    }
    public function testExtensionPlain()
    {
        $this->assertEquals('plain', Extensions::PLAIN);
    }
    public function testExtensionCss()
    {
        $this->assertEquals('css', Extensions::CSS);
    }
    public function testExtensionJpg()
    {
        $this->assertEquals('jpg', Extensions::JPG);
    }
    public function testExtensionJpeg()
    {
        $this->assertEquals('jpeg', Extensions::JPEG);
    }
    public function testExtensionPng()
    {
        $this->assertEquals('png', Extensions::PNG);
    }
    public function testExtensionBmp()
    {
        $this->assertEquals('bmp', Extensions::BMP);
    }
    public function testExtensionWebp()
    {
        $this->assertEquals('webp', Extensions::WEBP);
    }
    public function testExtensionGif()
    {
        $this->assertEquals('gif', Extensions::GIF);
    }
    public function testExtensionIco()
    {
        $this->assertEquals('ico', Extensions::ICO);
    }
    public function testExtensionMpg()
    {
        $this->assertEquals('mpg', Extensions::MPG);
    }
    public function testExtensionMpeg()
    {
        $this->assertEquals('mpeg', Extensions::MPEG);
    }
    public function testExtensionAvi()
    {
        $this->assertEquals('avi', Extensions::AVI);
    }
    public function testExtensionMp4()
    {
        $this->assertEquals('mp4', Extensions::MP4);
    }
    public function testExtensionEot()
    {
        $this->assertEquals('eot', Extensions::EOT);
    }
    public function testExtensionTtf()
    {
        $this->assertEquals('ttf', Extensions::TTF);
    }
    public function testExtensionWoff()
    {
        $this->assertEquals('woff', Extensions::WOFF);
    }
    public function testExtensionWoff2()
    {
        $this->assertEquals('woff2', Extensions::WOFF2);
    }
    public function testExtensionOtf()
    {
        $this->assertEquals('otf', Extensions::OTF);
    }
    public function testExtensionApk()
    {
        $this->assertEquals('apk', Extensions::APK);
    }
    public function testExtensionExe()
    {
        $this->assertEquals('exe', Extensions::EXE);
    }
    public function testExtensionZip()
    {
        $this->assertEquals('zip', Extensions::ZIP);
    }
    public function testExtensionRar()
    {
        $this->assertEquals('rar', Extensions::RAR);
    }
    public function testExtensionSvg()
    {
        $this->assertEquals('svg', Extensions::SVG);
    }
}