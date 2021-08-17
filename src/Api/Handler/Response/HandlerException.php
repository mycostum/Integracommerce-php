<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  SkuHub
 * @package   SkuHub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

namespace IntegraCommerce\Api\Handler\Response;

use Exception;

class HandlerException extends HandlerAbstract implements HandlerInterfaceException
{
    
    /** @var Exception */
    protected $exception = null;
    
    
    /**
     * HandlerException constructor.
     *
     * @param Exception $exception
     */
    public function __construct(Exception $exception)
    {
        $this->exception = $exception;
    }
    
    
    /**
     * @return string
     */
    public function message()
    {
        return $this->exception->getMessage();
    }
    
    
    /**
     * @return string
     */
    public function file()
    {
        return $this->exception->getFile();
    }
    
    
    /**
     * @return int|mixed
     */
    public function code()
    {
        return $this->exception->getCode();
    }
    
    
    /**
     * @return int
     */
    public function line()
    {
        return $this->exception->getLine();
    }
    
    
    /**
     * @return string
     */
    public function traceAsString()
    {
        return $this->exception->getTraceAsString();
    }
    
    
    /**
     * @return array
     */
    public function trace()
    {
        return $this->exception->getTrace();
    }
    
    
    /**
     * @return bool
     */
    public function success()
    {
        return false;
    }
    
    
    /**
     * @return bool
     */
    public function exception()
    {
        return true;
    }
    
    
    /**
     * @return bool
     */
    public function invalid()
    {
        return false;
    }
    
    
    /**
     * @return array
     */
    public function export()
    {
        return [
            'message' => $this->message(),
            'file'    => $this->file(),
            'code'    => $this->code(),
            'line'    => $this->line(),
            'trace'   => $this->traceAsString(),
        ];
    }
}
