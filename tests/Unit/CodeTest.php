<?php

namespace JuanchoSL\HttpHeaders\Tests\Unit;

use JuanchoSL\HttpHeaders\Constants\Status\Codes;
use PHPUnit\Framework\TestCase;


class CodeTest extends TestCase
{

    public function testCodeCONTINUE()
    {
        $this->assertEquals(100, Codes::CONTINUE );
    }

    public function testCodeSWITCHING_PROTOCOLS()
    {
        $this->assertEquals(101, Codes::SWITCHING_PROTOCOLS);
    }

    public function testCodePROCESSING()
    {
        $this->assertEquals(102, Codes::PROCESSING);
    }

    public function testCodeOK()
    {
        $this->assertEquals(200, Codes::OK);
    }

    public function testCodeCREATED()
    {
        $this->assertEquals(201, Codes::CREATED);
    }

    public function testCodeACCEPTED()
    {
        $this->assertEquals(202, Codes::ACCEPTED);
    }

    public function testCodeNON_AUTHORITATIVE_INFORMATION()
    {
        $this->assertEquals(203, Codes::NON_AUTHORITATIVE_INFORMATION);
    }

    public function testCodeNO_CONTENT()
    {
        $this->assertEquals(204, Codes::NO_CONTENT);
    }

    public function testCodeRESET_CONTENT()
    {
        $this->assertEquals(205, Codes::RESET_CONTENT);
    }

    public function testCodePARTIAL_CONTENT()
    {
        $this->assertEquals(206, Codes::PARTIAL_CONTENT);
    }

    public function testCodeMULTI_STATUS()
    {
        $this->assertEquals(207, Codes::MULTI_STATUS);
    }

    public function testCodeALREADY_REPORTED()
    {
        $this->assertEquals(208, Codes::ALREADY_REPORTED);
    }

    public function testCodeIM_USED()
    {
        $this->assertEquals(226, Codes::IM_USED);
    }

    //Redirection 3xx
    public function testCodeMULTIPLE_CHOICES()
    {
        $this->assertEquals(300, Codes::MULTIPLE_CHOICES);
    }

    public function testCodeMOVED_PERMANENTLY()
    {
        $this->assertEquals(301, Codes::MOVED_PERMANENTLY);
    }

    public function testCodeFOUND()
    {
        $this->assertEquals(302, Codes::FOUND);
    }

    public function testCodeSEE_OTHER()
    {
        $this->assertEquals(303, Codes::SEE_OTHER);
    }

    public function testCodeNOT_MODIFIED()
    {
        $this->assertEquals(304, Codes::NOT_MODIFIED);
    }

    public function testCodeUSE_PROXY()
    {
        $this->assertEquals(305, Codes::USE_PROXY);
    }

    public function testCodeTEMPORARY_REDIRECT()
    {
        $this->assertEquals(307, Codes::TEMPORARY_REDIRECT);
    }

    public function testCodePERMANENT_REDIRECT()
    {
        $this->assertEquals(308, Codes::PERMANENT_REDIRECT);
    }

    public function testCodeBAD_REQUEST()
    {
        $this->assertEquals(400, Codes::BAD_REQUEST);
    }

    public function testCodeUNAUTHORIZED()
    {
        $this->assertEquals(401, Codes::UNAUTHORIZED);
    }

    public function testCodePAYMENT_REQUIRED()
    {
        $this->assertEquals(402, Codes::PAYMENT_REQUIRED);
    }

    public function testCodeFORBIDDEN()
    {
        $this->assertEquals(403, Codes::FORBIDDEN);
    }

    public function testCodeNOT_FOUND()
    {
        $this->assertEquals(404, Codes::NOT_FOUND);
    }

    public function testCodeMETHOD_NOT_ALLOWED()
    {
        $this->assertEquals(405, Codes::METHOD_NOT_ALLOWED);
    }

    public function testCodeNOT_ACCEPTABLE()
    {
        $this->assertEquals(406, Codes::NOT_ACCEPTABLE);
    }

    public function testCodePROXY_AUTHENTICATION_REQUIRED()
    {
        $this->assertEquals(407, Codes::PROXY_AUTHENTICATION_REQUIRED);
    }

    public function testCodeREQUEST_TIMEOUT()
    {
        $this->assertEquals(408, Codes::REQUEST_TIMEOUT);
    }

    public function testCodeCONFLICT()
    {
        $this->assertEquals(409, Codes::CONFLICT);
    }

    public function testCodeGONE()
    {
        $this->assertEquals(410, Codes::GONE);
    }

    public function testCodeLENGTH_REQUIRED()
    {
        $this->assertEquals(411, Codes::LENGTH_REQUIRED);
    }

    public function testCodePRECONDITION_FAILED()
    {
        $this->assertEquals(412, Codes::PRECONDITION_FAILED);
    }

    public function testCodePAYLOAD_TOO_LARGE()
    {
        $this->assertEquals(413, Codes::PAYLOAD_TOO_LARGE);
    }

    public function testCodeURI_TOO_LONG()
    {
        $this->assertEquals(414, Codes::URI_TOO_LONG);
    }

    public function testCodeUNSUPPORTED_MEDIA_TYPE()
    {
        $this->assertEquals(415, Codes::UNSUPPORTED_MEDIA_TYPE);
    }

    public function testCodeRANGE_NOT_SATISFIABLE()
    {
        $this->assertEquals(416, Codes::RANGE_NOT_SATISFIABLE);
    }

    public function testCodeEXPECTATION_FAILED()
    {
        $this->assertEquals(417, Codes::EXPECTATION_FAILED);
    }

    public function testCodeIM_A_TEAPOT()
    {
        $this->assertEquals(418, Codes::IM_A_TEAPOT);
    }

    public function testCodeMISDIRECT_REQUEST()
    {
        $this->assertEquals(421, Codes::MISDIRECT_REQUEST);
    }

    public function testCodeUNPROCESSABLE_ENTITY()
    {
        $this->assertEquals(422, Codes::UNPROCESSABLE_ENTITY);
    }

    public function testCodeLOCKED()
    {
        $this->assertEquals(423, Codes::LOCKED);
    }

    public function testCodePRECONDITION_REQUIRED()
    {
        $this->assertEquals(428, Codes::PRECONDITION_REQUIRED);
    }

    public function testCodeINTERNAL_SERVER_ERROR()
    {
        $this->assertEquals(500, Codes::INTERNAL_SERVER_ERROR);
    }
    public function testCodeNOT_IMPLEMENTED()
    {
        $this->assertEquals(501, Codes::NOT_IMPLEMENTED);
    }
    public function testCodeBAD_GATEWAY()
    {
        $this->assertEquals(502, Codes::BAD_GATEWAY);
    }
    public function testCodeSERVICE_UNAVAILABLE()
    {
        $this->assertEquals(503, Codes::SERVICE_UNAVAILABLE);
    }
    public function testCodeGATEWAY_TIMEOUT()
    {
        $this->assertEquals(504, Codes::GATEWAY_TIMEOUT);
    }
    public function testCodeHTTP_VERSION_NOT_SUPPORTED()
    {
        $this->assertEquals(505, Codes::HTTP_VERSION_NOT_SUPPORTED);
    }
}
