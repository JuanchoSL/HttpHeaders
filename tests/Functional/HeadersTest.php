<?php

namespace JuanchoSL\HttpHeaders\Tests\Functional;

use JuanchoSL\HttpHeaders\HeaderCode;
use PHPUnit\Framework\TestCase;
use JuanchoSL\HttpHeaders\Headers;

class HeadersTest extends TestCase
{

    public function testExtensionCONTINUE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::CONTINUE));
    }

    public function testExtensionSWITCHING_PROTOCOLS()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::SWITCHING_PROTOCOLS));
    }

    public function testExtensionPROCESSING()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PROCESSING));
    }

    public function testExtensionOK()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::OK));
    }

    public function testExtensionCREATED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::CREATED));
    }

    public function testExtensionACCEPTED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::ACCEPTED));
    }

    public function testExtensionNON_AUTHORITATIVE_INFORMATION()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::NON_AUTHORITATIVE_INFORMATION));
    }

    public function testExtensionNO_CONTENT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::NO_CONTENT));
    }

    public function testExtensionRESET_CONTENT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::RESET_CONTENT));
    }

    public function testExtensionPARTIAL_CONTENT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PARTIAL_CONTENT));
    }

    public function testExtensionMULTI_STATUS()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::MULTI_STATUS));
    }

    public function testExtensionALREADY_REPORTED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::ALREADY_REPORTED));
    }

    public function testExtensionIM_USED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::IM_USED));
    }

    //Redirection 3xx
    public function testExtensionMULTIPLE_CHOICES()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::MULTIPLE_CHOICES));
    }

    public function testExtensionMOVED_PERMANENTLY()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::MOVED_PERMANENTLY));
    }

    public function testExtensionFOUND()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::FOUND));
    }

    public function testExtensionSEE_OTHER()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::SEE_OTHER));
    }

    public function testExtensionNOT_MODIFIED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::NOT_MODIFIED));
    }

    public function testExtensionUSE_PROXY()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::USE_PROXY));
    }

    public function testExtensionTEMPORARY_REDIRECT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::TEMPORARY_REDIRECT));
    }

    public function testExtensionPERMANENT_REDIRECT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PERMANENT_REDIRECT));
    }

    public function testExtensionBAD_REQUEST()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::BAD_REQUEST));
    }

    public function testExtensionUNAUTHORIZED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::UNAUTHORIZED));
    }

    public function testExtensionPAYMENT_REQUIRED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PAYMENT_REQUIRED));
    }

    public function testExtensionFORBIDDEN()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::FORBIDDEN));
    }

    public function testExtensionNOT_FOUND()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::NOT_FOUND));
    }

    public function testExtensionMETHOHD_NOT_ALLOWED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::METHOHD_NOT_ALLOWED));
    }

    public function testExtensionNOT_ACCEPTABLE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::NOT_ACCEPTABLE));
    }

    public function testExtensionPROXY_AUTHENTICATION_REQUIRED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PROXY_AUTHENTICATION_REQUIRED));
    }

    public function testExtensionREQUEST_TIMEOUT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::REQUEST_TIMEOUT));
    }

    public function testExtensionCONFLICT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::CONFLICT));
    }

    public function testExtensionGONE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::GONE));
    }

    public function testExtensionLENGTH_REQUIRED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::LENGTH_REQUIRED));
    }

    public function testExtensionPRECONDITION_FAILED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PRECONDITION_FAILED));
    }

    public function testExtensionPAYLOAD_TOO_LARGE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PAYLOAD_TOO_LARGE));
    }

    public function testExtensionURI_TOO_LONG()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::URI_TOO_LONG));
    }

    public function testExtensionUNSUPPORTED_MEDIA_TYPE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::UNSUPPORTED_MEDIA_TYPE));
    }

    public function testExtensionRANGE_NOT_SATISFIABLE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::RANGE_NOT_SATISFIABLE));
    }

    public function testExtensionEXPECTATION_FAILED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::EXPECTATION_FAILED));
    }

    public function testExtensionIM_A_TEAPOT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::IM_A_TEAPOT));
    }

    public function testExtensionMISDIRECT_REQUEST()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::MISDIRECT_REQUEST));
    }

    public function testExtensionUNPROCESSABLE_ENTITY()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::UNPROCESSABLE_ENTITY));
    }

    public function testExtensionLOCKED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::LOCKED));
    }

    public function testExtensionPRECONDITION_REQUIRED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::PRECONDITION_REQUIRED));
    }

    public function testExtensionINTERNAL_SERVER_ERROR()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::INTERNAL_SERVER_ERROR));
    }
    public function testExtensionNOT_IMPLEMENTED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::NOT_IMPLEMENTED));
    }
    public function testExtensionBAD_GATEWAY()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::BAD_GATEWAY));
    }
    public function testExtensionSERVICE_UNAVAILABLE()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::SERVICE_UNAVAILABLE));
    }
    public function testExtensionGATEWAY_TIMEOUT()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::GATEWAY_TIMEOUT));
    }
    public function testExtensionHTTP_VERSION_NOT_SUPPORTED()
    {
        $this->assertIsString(Headers::getMessage(HeaderCode::HTTP_VERSION_NOT_SUPPORTED));
    }
}
