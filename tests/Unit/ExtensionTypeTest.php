<?php

namespace JuanchoSL\HttpHeaders\Tests\Unit;

use JuanchoSL\HttpHeaders\ExtensionTypes;
use PHPUnit\Framework\TestCase;


class ExtensionTypeTest extends TestCase
{
    public function testExtensionJs()
    {
        $this->assertEquals('js', ExtensionTypes::TYPE_EXTENSION_JS);
    }
    public function testExtensionXls()
    {
        $this->assertEquals('xls', ExtensionTypes::TYPE_EXTENSION_XLS);
    }
    public function testExtensionXlsx()
    {
        $this->assertEquals('xlsx', ExtensionTypes::TYPE_EXTENSION_XLSX);
    }
    public function testExtensionDoc()
    {
        $this->assertEquals('doc', ExtensionTypes::TYPE_EXTENSION_DOC);
    }
    public function testExtensionDocx()
    {
        $this->assertEquals('docx', ExtensionTypes::TYPE_EXTENSION_DOCX);
    }
    public function testExtensionPpt()
    {
        $this->assertEquals('ppt', ExtensionTypes::TYPE_EXTENSION_PPT);
    }
    public function testExtensionPptx()
    {
        $this->assertEquals('pptx', ExtensionTypes::TYPE_EXTENSION_PPTX);
    }
    public function testExtensionCsv()
    {
        $this->assertEquals('csv', ExtensionTypes::TYPE_EXTENSION_CSV);
    }
    public function testExtensionPdf()
    {
        $this->assertEquals('pdf', ExtensionTypes::TYPE_EXTENSION_PDF);
    }
    public function testExtensionJson()
    {
        $this->assertEquals('json', ExtensionTypes::TYPE_EXTENSION_JSON);
    }
    public function testExtensionXml()
    {
        $this->assertEquals('xml', ExtensionTypes::TYPE_EXTENSION_XML);
    }
    public function testExtensionHtm()
    {
        $this->assertEquals('htm', ExtensionTypes::TYPE_EXTENSION_HTM);
    }
    public function testExtensionHtml()
    {
        $this->assertEquals('html', ExtensionTypes::TYPE_EXTENSION_HTML);
    }
    public function testExtensionTxt()
    {
        $this->assertEquals('txt', ExtensionTypes::TYPE_EXTENSION_TXT);
    }
    public function testExtensionPlain()
    {
        $this->assertEquals('plain', ExtensionTypes::TYPE_EXTENSION_PLAIN);
    }
    public function testExtensionCss()
    {
        $this->assertEquals('css', ExtensionTypes::TYPE_EXTENSION_CSS);
    }
    public function testExtensionJpg()
    {
        $this->assertEquals('jpg', ExtensionTypes::TYPE_EXTENSION_JPG);
    }
    public function testExtensionJpeg()
    {
        $this->assertEquals('jpeg', ExtensionTypes::TYPE_EXTENSION_JPEG);
    }
    public function testExtensionPng()
    {
        $this->assertEquals('png', ExtensionTypes::TYPE_EXTENSION_PNG);
    }
    public function testExtensionBmp()
    {
        $this->assertEquals('bmp', ExtensionTypes::TYPE_EXTENSION_BMP);
    }
    public function testExtensionWebp()
    {
        $this->assertEquals('webp', ExtensionTypes::TYPE_EXTENSION_WEBP);
    }
    public function testExtensionGif()
    {
        $this->assertEquals('gif', ExtensionTypes::TYPE_EXTENSION_GIF);
    }
    public function testExtensionIco()
    {
        $this->assertEquals('ico', ExtensionTypes::TYPE_EXTENSION_ICO);
    }
    public function testExtensionMpg()
    {
        $this->assertEquals('mpg', ExtensionTypes::TYPE_EXTENSION_MPG);
    }
    public function testExtensionMpeg()
    {
        $this->assertEquals('mpeg', ExtensionTypes::TYPE_EXTENSION_MPEG);
    }
    public function testExtensionAvi()
    {
        $this->assertEquals('avi', ExtensionTypes::TYPE_EXTENSION_AVI);
    }
    public function testExtensionMp4()
    {
        $this->assertEquals('mp4', ExtensionTypes::TYPE_EXTENSION_MP4);
    }
    public function testExtensionEot()
    {
        $this->assertEquals('eot', ExtensionTypes::TYPE_EXTENSION_EOT);
    }
    public function testExtensionTtf()
    {
        $this->assertEquals('ttf', ExtensionTypes::TYPE_EXTENSION_TTF);
    }
    public function testExtensionWoff()
    {
        $this->assertEquals('woff', ExtensionTypes::TYPE_EXTENSION_WOFF);
    }
    public function testExtensionWoff2()
    {
        $this->assertEquals('woff2', ExtensionTypes::TYPE_EXTENSION_WOFF2);
    }
    public function testExtensionOtf()
    {
        $this->assertEquals('otf', ExtensionTypes::TYPE_EXTENSION_OTF);
    }
    public function testExtensionApk()
    {
        $this->assertEquals('apk', ExtensionTypes::TYPE_EXTENSION_APK);
    }
    public function testExtensionExe()
    {
        $this->assertEquals('exe', ExtensionTypes::TYPE_EXTENSION_EXE);
    }
    public function testExtensionZip()
    {
        $this->assertEquals('zip', ExtensionTypes::TYPE_EXTENSION_ZIP);
    }
    public function testExtensionRar()
    {
        $this->assertEquals('rar', ExtensionTypes::TYPE_EXTENSION_RAR);
    }
    public function testExtensionSvg()
    {
        $this->assertEquals('svg', ExtensionTypes::TYPE_EXTENSION_SVG);
    }
}