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

interface HandlerInterfaceException extends HandlerInterface
{
    
    /**
     * HandlerInterfaceException constructor.
     *
     * @param Exception $exception
     */
    public function __construct(Exception $exception);
    
    
    /**
     * @return string
     */
    public function message();
    
    
    /**
     * @return string
     */
    public function file();
    
    
    /**
     * @return int|mixed
     */
    public function code();
    
    
    /**
     * @return int
     */
    public function line();
    
    
    /**
     * @return string
     */
    public function traceAsString();
    
    
    /**
     * @return array
     */
    public function trace();
}
