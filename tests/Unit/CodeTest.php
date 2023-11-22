<?php

namespace JuanchoSL\HttpHeaders\Tests\Unit;

use JuanchoSL\HttpHeaders\HeaderCode;
use PHPUnit\Framework\TestCase;


class CodeTest extends TestCase
{

    public function testExtensionCONTINUE()
    {
        $this->assertEquals(100, HeaderCode::CONTINUE );
    }

    public function testExtensionSWITCHING_PROTOCOLS()
    {
        $this->assertEquals(101, HeaderCode::SWITCHING_PROTOCOLS);
    }

    public function testExtensionPROCESSING()
    {
        $this->assertEquals(102, HeaderCode::PROCESSING);
    }

    public function testExtensionOK()
    {
        $this->assertEquals(200, HeaderCode::OK);
    }

    public function testExtensionCREATED()
    {
        $this->assertEquals(201, HeaderCode::CREATED);
    }

    public function testExtensionACCEPTED()
    {
        $this->assertEquals(202, HeaderCode::ACCEPTED);
    }

    public function testExtensionNON_AUTHORITATIVE_INFORMATION()
    {
        $this->assertEquals(203, HeaderCode::NON_AUTHORITATIVE_INFORMATION);
    }

    public function testExtensionNO_CONTENT()
    {
        $this->assertEquals(204, HeaderCode::NO_CONTENT);
    }

    public function testExtensionRESET_CONTENT()
    {
        $this->assertEquals(205, HeaderCode::RESET_CONTENT);
    }

    public function testExtensionPARTIAL_CONTENT()
    {
        $this->assertEquals(206, HeaderCode::PARTIAL_CONTENT);
    }

    public function testExtensionMULTI_STATUS()
    {
        $this->assertEquals(207, HeaderCode::MULTI_STATUS);
    }

    public function testExtensionALREADY_REPORTED()
    {
        $this->assertEquals(208, HeaderCode::ALREADY_REPORTED);
    }

    public function testExtensionIM_USED()
    {
        $this->assertEquals(226, HeaderCode::IM_USED);
    }

    //Redirection 3xx
    public function testExtensionMULTIPLE_CHOICES()
    {
        $this->assertEquals(300, HeaderCode::MULTIPLE_CHOICES);
    }

    public function testExtensionMOVED_PERMANENTLY()
    {
        $this->assertEquals(301, HeaderCode::MOVED_PERMANENTLY);
    }

    public function testExtensionFOUND()
    {
        $this->assertEquals(302, HeaderCode::FOUND);
    }

    public function testExtensionSEE_OTHER()
    {
        $this->assertEquals(303, HeaderCode::SEE_OTHER);
    }

    public function testExtensionNOT_MODIFIED()
    {
        $this->assertEquals(304, HeaderCode::NOT_MODIFIED);
    }

    public function testExtensionUSE_PROXY()
    {
        $this->assertEquals(305, HeaderCode::USE_PROXY);
    }

    public function testExtensionTEMPORARY_REDIRECT()
    {
        $this->assertEquals(307, HeaderCode::TEMPORARY_REDIRECT);
    }

    public function testExtensionPERMANENT_REDIRECT()
    {
        $this->assertEquals(308, HeaderCode::PERMANENT_REDIRECT);
    }

    public function testExtensionBAD_REQUEST()
    {
        $this->assertEquals(400, HeaderCode::BAD_REQUEST);
    }

    public function testExtensionUNAUTHORIZED()
    {
        $this->assertEquals(401, HeaderCode::UNAUTHORIZED);
    }

    public function testExtensionPAYMENT_REQUIRED()
    {
        $this->assertEquals(402, HeaderCode::PAYMENT_REQUIRED);
    }

    public function testExtensionFORBIDDEN()
    {
        $this->assertEquals(403, HeaderCode::FORBIDDEN);
    }

    public function testExtensionNOT_FOUND()
    {
        $this->assertEquals(404, HeaderCode::NOT_FOUND);
    }

    public function testExtensionMETHOHD_NOT_ALLOWED()
    {
        $this->assertEquals(405, HeaderCode::METHOHD_NOT_ALLOWED);
    }

    public function testExtensionNOT_ACCEPTABLE()
    {
        $this->assertEquals(406, HeaderCode::NOT_ACCEPTABLE);
    }

    public function testExtensionPROXY_AUTHENTICATION_REQUIRED()
    {
        $this->assertEquals(407, HeaderCode::PROXY_AUTHENTICATION_REQUIRED);
    }

    public function testExtensionREQUEST_TIMEOUT()
    {
        $this->assertEquals(408, HeaderCode::REQUEST_TIMEOUT);
    }

    public function testExtensionCONFLICT()
    {
        $this->assertEquals(409, HeaderCode::CONFLICT);
    }

    public function testExtensionGONE()
    {
        $this->assertEquals(410, HeaderCode::GONE);
    }

    public function testExtensionLENGTH_REQUIRED()
    {
        $this->assertEquals(411, HeaderCode::LENGTH_REQUIRED);
    }

    public function testExtensionPRECONDITION_FAILED()
    {
        $this->assertEquals(412, HeaderCode::PRECONDITION_FAILED);
    }

    public function testExtensionPAYLOAD_TOO_LARGE()
    {
        $this->assertEquals(413, HeaderCode::PAYLOAD_TOO_LARGE);
    }

    public function testExtensionURI_TOO_LONG()
    {
        $this->assertEquals(414, HeaderCode::URI_TOO_LONG);
    }

    public function testExtensionUNSUPPORTED_MEDIA_TYPE()
    {
        $this->assertEquals(415, HeaderCode::UNSUPPORTED_MEDIA_TYPE);
    }

    public function testExtensionRANGE_NOT_SATISFIABLE()
    {
        $this->assertEquals(416, HeaderCode::RANGE_NOT_SATISFIABLE);
    }

    public function testExtensionEXPECTATION_FAILED()
    {
        $this->assertEquals(417, HeaderCode::EXPECTATION_FAILED);
    }

    public function testExtensionIM_A_TEAPOT()
    {
        $this->assertEquals(418, HeaderCode::IM_A_TEAPOT);
    }

    public function testExtensionMISDIRECT_REQUEST()
    {
        $this->assertEquals(421, HeaderCode::MISDIRECT_REQUEST);
    }

    public function testExtensionUNPROCESSABLE_ENTITY()
    {
        $this->assertEquals(422, HeaderCode::UNPROCESSABLE_ENTITY);
    }

    public function testExtensionLOCKED()
    {
        $this->assertEquals(423, HeaderCode::LOCKED);
    }

    public function testExtensionPRECONDITION_REQUIRED()
    {
        $this->assertEquals(428, HeaderCode::PRECONDITION_REQUIRED);
    }

    public function testExtensionINTERNAL_SERVER_ERROR()
    {
        $this->assertEquals(500, HeaderCode::INTERNAL_SERVER_ERROR);
    }
    public function testExtensionNOT_IMPLEMENTED()
    {
        $this->assertEquals(501, HeaderCode::NOT_IMPLEMENTED);
    }
    public function testExtensionBAD_GATEWAY()
    {
        $this->assertEquals(502, HeaderCode::BAD_GATEWAY);
    }
    public function testExtensionSERVICE_UNAVAILABLE()
    {
        $this->assertEquals(503, HeaderCode::SERVICE_UNAVAILABLE);
    }
    public function testExtensionGATEWAY_TIMEOUT()
    {
        $this->assertEquals(504, HeaderCode::GATEWAY_TIMEOUT);
    }
    public function testExtensionHTTP_VERSION_NOT_SUPPORTED()
    {
        $this->assertEquals(505, HeaderCode::HTTP_VERSION_NOT_SUPPORTED);
    }
}
