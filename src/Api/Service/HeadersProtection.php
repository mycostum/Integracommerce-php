<?php

declare(strict_types = 1);

namespace IntegraCommerce\Api\Service;

use IntegraCommerce\Api\Helpers;

/**
 * Class HeadersProtection
 *
 * @package IntegraCommerce\Api\Service
 */
class HeadersProtection
{
    use Helpers;

    /**
     * @var array
     */
    private $headers = [];

    /**
     * @var array
     */
    private $protectedFields = [];

    /**
     * @param array $headers
     * @param array $protectedFields
     *
     * @return $this
     */
    public function protect(array $headers = [], array $protectedFields = [])
    {
        $this->headers = $headers;
        $this->protectedFields = $protectedFields;

        foreach ($this->headers as $key => $value) {
            if (in_array($key, $this->protectedFields)) {
                $this->headers[$key] = $this->protectString($value);
            }
        }

        return $this;
    }

    /**
     * @return array
     */
    public function export() : array
    {
        return $this->headers;
    }
}
