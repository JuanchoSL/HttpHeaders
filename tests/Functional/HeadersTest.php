<?php

namespace JuanchoSL\HttpHeaders\Tests\Functional;

use JuanchoSL\HttpHeaders\Constants\Status\Codes;
use JuanchoSL\HttpHeaders\Constants\Status\Messages;
use PHPUnit\Framework\TestCase;
use JuanchoSL\HttpHeaders\Headers;

class HeadersTest extends TestCase
{

    public function testMessageCONTINUE()
    {
        $message = Headers::getMessage(Codes::CONTINUE );
        $this->assertIsString($message);
        $this->assertEquals(Messages::CONTINUE , $message);
    }

    public function testMessageSWITCHING_PROTOCOLS()
    {
        $message = Headers::getMessage(Codes::SWITCHING_PROTOCOLS);
        $this->assertIsString($message);
        $this->assertEquals(Messages::SWITCHING_PROTOCOLS, $message);
    }

    public function testMessagePROCESSING()
    {
        $message = Headers::getMessage(Codes::PROCESSING);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PROCESSING, $message);
    }

    public function testMessageOK()
    {
        $message = Headers::getMessage(Codes::OK);
        $this->assertIsString($message);
        $this->assertEquals(Messages::OK, $message);
    }

    public function testMessageCREATED()
    {
        $message = Headers::getMessage(Codes::CREATED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::CREATED, $message);
    }

    public function testMessageACCEPTED()
    {
        $message = Headers::getMessage(Codes::ACCEPTED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::ACCEPTED, $message);
    }

    public function testMessageNON_AUTHORITATIVE_INFORMATION()
    {
        $message = Headers::getMessage(Codes::NON_AUTHORITATIVE_INFORMATION);
        $this->assertIsString($message);
        $this->assertEquals(Messages::NON_AUTHORITATIVE_INFORMATION, $message);
    }

    public function testMessageNO_CONTENT()
    {
        $message = Headers::getMessage(Codes::NO_CONTENT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::NO_CONTENT, $message);
    }

    public function testMessageRESET_CONTENT()
    {
        $message = Headers::getMessage(Codes::RESET_CONTENT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::RESET_CONTENT, $message);
    }

    public function testMessagePARTIAL_CONTENT()
    {
        $message = Headers::getMessage(Codes::PARTIAL_CONTENT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PARTIAL_CONTENT, $message);
    }

    public function testMessageMULTI_STATUS()
    {
        $message = Headers::getMessage(Codes::MULTI_STATUS);
        $this->assertIsString($message);
        $this->assertEquals(Messages::MULTI_STATUS, $message);
    }

    public function testMessageALREADY_REPORTED()
    {
        $message = Headers::getMessage(Codes::ALREADY_REPORTED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::ALREADY_REPORTED, $message);
    }

    public function testMessageIM_USED()
    {
        $message = Headers::getMessage(Codes::IM_USED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::IM_USED, $message);
    }

    //Redirection 3xx
    public function testMessageMULTIPLE_CHOICES()
    {
        $message = Headers::getMessage(Codes::MULTIPLE_CHOICES);
        $this->assertIsString($message);
        $this->assertEquals(Messages::MULTIPLE_CHOICES, $message);
    }

    public function testMessageMOVED_PERMANENTLY()
    {
        $message = Headers::getMessage(Codes::MOVED_PERMANENTLY);
        $this->assertIsString($message);
        $this->assertEquals(Messages::MOVED_PERMANENTLY, $message);
    }

    public function testMessageFOUND()
    {
        $message = Headers::getMessage(Codes::FOUND);
        $this->assertIsString($message);
        $this->assertEquals(Messages::FOUND, $message);
    }

    public function testMessageSEE_OTHER()
    {
        $message = Headers::getMessage(Codes::SEE_OTHER);
        $this->assertIsString($message);
        $this->assertEquals(Messages::SEE_OTHER, $message);
    }

    public function testMessageNOT_MODIFIED()
    {
        $message = Headers::getMessage(Codes::NOT_MODIFIED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::NOT_MODIFIED, $message);
    }

    public function testMessageUSE_PROXY()
    {
        $message = Headers::getMessage(Codes::USE_PROXY);
        $this->assertIsString($message);
        $this->assertEquals(Messages::USE_PROXY, $message);
    }

    public function testMessageTEMPORARY_REDIRECT()
    {
        $message = Headers::getMessage(Codes::TEMPORARY_REDIRECT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::TEMPORARY_REDIRECT, $message);
    }

    public function testMessagePERMANENT_REDIRECT()
    {
        $message = Headers::getMessage(Codes::PERMANENT_REDIRECT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PERMANENT_REDIRECT, $message);
    }

    public function testMessageBAD_REQUEST()
    {
        $message = Headers::getMessage(Codes::BAD_REQUEST);
        $this->assertIsString($message);
        $this->assertEquals(Messages::BAD_REQUEST, $message);
    }

    public function testMessageUNAUTHORIZED()
    {
        $message = Headers::getMessage(Codes::UNAUTHORIZED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::UNAUTHORIZED, $message);
    }

    public function testMessagePAYMENT_REQUIRED()
    {
        $message = Headers::getMessage(Codes::PAYMENT_REQUIRED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PAYMENT_REQUIRED, $message);
    }

    public function testMessageFORBIDDEN()
    {
        $message = Headers::getMessage(Codes::FORBIDDEN);
        $this->assertIsString($message);
        $this->assertEquals(Messages::FORBIDDEN, $message);
    }

    public function testMessageNOT_FOUND()
    {
        $message = Headers::getMessage(Codes::NOT_FOUND);
        $this->assertIsString($message);
        $this->assertEquals(Messages::NOT_FOUND, $message);
    }

    public function testMessageMETHOD_NOT_ALLOWED()
    {
        $message = Headers::getMessage(Codes::METHOD_NOT_ALLOWED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::METHOD_NOT_ALLOWED, $message);
    }

    public function testMessageNOT_ACCEPTABLE()
    {
        $message = Headers::getMessage(Codes::NOT_ACCEPTABLE);
        $this->assertIsString($message);
        $this->assertEquals(Messages::NOT_ACCEPTABLE, $message);
    }

    public function testMessagePROXY_AUTHENTICATION_REQUIRED()
    {
        $message = Headers::getMessage(Codes::PROXY_AUTHENTICATION_REQUIRED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PROXY_AUTHENTICATION_REQUIRED, $message);
    }

    public function testMessageREQUEST_TIMEOUT()
    {
        $message = Headers::getMessage(Codes::REQUEST_TIMEOUT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::REQUEST_TIMEOUT, $message);
    }

    public function testMessageCONFLICT()
    {
        $message = Headers::getMessage(Codes::CONFLICT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::CONFLICT, $message);
    }

    public function testMessageGONE()
    {
        $message = Headers::getMessage(Codes::GONE);
        $this->assertIsString($message);
        $this->assertEquals(Messages::GONE, $message);
    }

    public function testMessageLENGTH_REQUIRED()
    {
        $message = Headers::getMessage(Codes::LENGTH_REQUIRED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::LENGTH_REQUIRED, $message);
    }

    public function testMessagePRECONDITION_FAILED()
    {
        $message = Headers::getMessage(Codes::PRECONDITION_FAILED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PRECONDITION_FAILED, $message);
    }

    public function testMessagePAYLOAD_TOO_LARGE()
    {
        $message = Headers::getMessage(Codes::PAYLOAD_TOO_LARGE);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PAYLOAD_TOO_LARGE, $message);
    }

    public function testMessageURI_TOO_LONG()
    {
        $message = Headers::getMessage(Codes::URI_TOO_LONG);
        $this->assertIsString($message);
        $this->assertEquals(Messages::URI_TOO_LONG, $message);
    }

    public function testMessageUNSUPPORTED_MEDIA_TYPE()
    {
        $message = Headers::getMessage(Codes::UNSUPPORTED_MEDIA_TYPE);
        $this->assertIsString($message);
        $this->assertEquals(Messages::UNSUPPORTED_MEDIA_TYPE, $message);
    }

    public function testMessageRANGE_NOT_SATISFIABLE()
    {
        $message = Headers::getMessage(Codes::RANGE_NOT_SATISFIABLE);
        $this->assertIsString($message);
        $this->assertEquals(Messages::RANGE_NOT_SATISFIABLE, $message);
    }

    public function testMessageEXPECTATION_FAILED()
    {
        $message = Headers::getMessage(Codes::EXPECTATION_FAILED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::EXPECTATION_FAILED, $message);
    }

    public function testMessageIM_A_TEAPOT()
    {
        $message = Headers::getMessage(Codes::IM_A_TEAPOT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::IM_A_TEAPOT, $message);
    }

    public function testMessageMISDIRECT_REQUEST()
    {
        $message = Headers::getMessage(Codes::MISDIRECT_REQUEST);
        $this->assertIsString($message);
        $this->assertEquals(Messages::MISDIRECT_REQUEST, $message);
    }

    public function testMessageUNPROCESSABLE_ENTITY()
    {
        $message = Headers::getMessage(Codes::UNPROCESSABLE_ENTITY);
        $this->assertIsString($message);
        $this->assertEquals(Messages::UNPROCESSABLE_ENTITY, $message);
    }

    public function testMessageLOCKED()
    {
        $message = Headers::getMessage(Codes::LOCKED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::LOCKED, $message);
    }

    public function testMessagePRECONDITION_REQUIRED()
    {
        $message = Headers::getMessage(Codes::PRECONDITION_REQUIRED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::PRECONDITION_REQUIRED, $message);
    }

    public function testMessageINTERNAL_SERVER_ERROR()
    {
        $message = Headers::getMessage(Codes::INTERNAL_SERVER_ERROR);
        $this->assertIsString($message);
        $this->assertEquals(Messages::INTERNAL_SERVER_ERROR, $message);
    }
    public function testMessageNOT_IMPLEMENTED()
    {
        $message = Headers::getMessage(Codes::NOT_IMPLEMENTED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::NOT_IMPLEMENTED, $message);
    }
    public function testMessageBAD_GATEWAY()
    {
        $message = Headers::getMessage(Codes::BAD_GATEWAY);
        $this->assertIsString($message);
        $this->assertEquals(Messages::BAD_GATEWAY, $message);
    }
    public function testMessageSERVICE_UNAVAILABLE()
    {
        $message = Headers::getMessage(Codes::SERVICE_UNAVAILABLE);
        $this->assertIsString($message);
        $this->assertEquals(Messages::SERVICE_UNAVAILABLE, $message);
    }
    public function testMessageGATEWAY_TIMEOUT()
    {
        $message = Headers::getMessage(Codes::GATEWAY_TIMEOUT);
        $this->assertIsString($message);
        $this->assertEquals(Messages::GATEWAY_TIMEOUT, $message);
    }
    public function testMessageHTTP_VERSION_NOT_SUPPORTED()
    {
        $message = Headers::getMessage(Codes::HTTP_VERSION_NOT_SUPPORTED);
        $this->assertIsString($message);
        $this->assertEquals(Messages::HTTP_VERSION_NOT_SUPPORTED, $message);
    }
}
