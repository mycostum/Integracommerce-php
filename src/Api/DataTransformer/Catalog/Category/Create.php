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

namespace IntegraCommerce\Api\DataTransformer\Catalog\Category;

use IntegraCommerce\Api\DataTransformer\DataTransformerAbstract;

class Create extends DataTransformerAbstract
{

    /**
     * Attribute constructor.
     *
     * @param string $code
     * @param string $name
     */
    public function __construct($code, $name, $parent_code)
    {
        // $this->setOutputData([
        //     'category' => [
        //         'code' => $code,
        //         'name' => $name
        //     ]
        // ]);
        $this->setOutputData([
            
                'Id' => $code,
                'Name' => $name,
                'ParentId' => $parent_code
            
        ]);

        parent::__construct();
    }
}
