<?php

namespace App\Components;


class CustomStatusCodes
{

    const SUCCESS = 'srs900';
    const LOGIN_SUCCESS = 'srs9001';
    const REGISTER_SUCCESS = 'srs9002';
    const FILM_SUCCESS = 'srs9002';
    const COUNTRY_SUCCESS = 'srs9004';
    const FAILURE = 'srs1000';
    const LOGIN_FAILED = 'srs1001';
    const VALIDATION_CODE = 'srs1100';
    const GENERAL_VALIDATION_CODE = 'srs1100';

    const RESPONSE_SUCCESS_TRUE = true;
    const RESPONSE_SUCCESS_FALSE = false;
    

    const SUCCESS_GENERAL_MESSAGE = 'Successfully Work';
    const SUCCESS_CREATED= 'Created';
    const GENERAL_ERROR_MESSAGE= 'Something Went Wrong';

    const COMMENT_SUCCESS = 'srs9002';


    const HTTP_SUCCESS_CODE = 200;
    const HTTP_INSERTED_SUCCESS_CODE = 201;
    const HTTP_VALIDATION_FAILED_CODE = 400;
    const HTTP_BAD_REQUEST = 400;
    const HTTP_FAILED_LOGIN_CODE = 401;
    const HTTP_INTERNAL_SERVER_ERROR_CODE = 500;

    public function getSuccessCode()
    {
        return self::SUCCESS;
    }


    public function getFailureCode()
    {
        return self::FAILURE;
    }

    public function getValidationCode()
    {
        return self::VALIDATION_CODE;
    }
    public function getGenralSuccessMessage()
    {
        return self::SUCCESS_GENERAL_MESSAGE;
    }
    public function getHttpSuccessCode()
    {
        return self::HTTP_SUCCESS_CODE;
    }
    public function getHttpInernalServerCode()
    {
        return self::HTTP_INTERNAL_SERVER_ERROR_CODE;
    }
    public function getBadRequest()
    {
        return self::HTTP_VALIDATION_FAILED_CODE;
    }
}
