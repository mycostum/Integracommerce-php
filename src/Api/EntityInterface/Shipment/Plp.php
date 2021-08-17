<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  IntegraCommerce
 * @package   IntegraCommerce
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Bruno Gemelli <bruno.gemelli@e-smart.com.br>
 */

namespace IntegraCommerce\Api\EntityInterface\Shipment;

use IntegraCommerce\Api\EntityInterface\EntityAbstract;
use IntegraCommerce\Api\Handler\Request\Shipment\PlpHandler;

class Plp extends EntityAbstract
{

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->data['id'] = (string) $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getId()
    {
        return $this->getData('id');
    }


    /**
     * @return array
     */
    public function getOrders()
    {
        return (array) $this->getData('orders');
    }


    /**
     * @param string $source
     *
     * @return $this
     */
    public function addOrder($source)
    {
        $orders   = $this->getOrders();
        $orders[] = $source;

        $this->setData('orders', $orders);

        return $this;
    }


    /**
     * @return \IntegraCommerce\Api\Handler\Response\HandlerInterface
     */
    public function plps()
    {
        /** @var PlpHandler $handler */
        $handler = $this->requestHandler();
        return $handler->plps();
    }


    /**
     * @return \IntegraCommerce\Api\Handler\Response\HandlerInterface
     */
    public function ordersReadyToGroup()
    {
        /** @var PlpHandler $handler */
        $handler = $this->requestHandler();
        return $handler->ordersReadyToGroup();
    }


    /**
     * @return \IntegraCommerce\Api\Handler\Response\HandlerInterface
     */
    public function group()
    {
        $this->validate();

        /** @var \IntegraCommerce\Api\Handler\Request\Shipment\PlpHandler $handler */
        $handler = $this->requestHandler();

        /** @var \IntegraCommerce\Api\Handler\Response\HandlerInterface $response */
        $response = $handler->group($this->getOrders());

        return $response;
    }


    /**
     * @return \IntegraCommerce\Api\Handler\Response\HandlerInterface
     */
    public function ungroup()
    {
        /** @var PlpHandler $handler */
        $handler = $this->requestHandler();
        return $handler->ungroup($this->getId());
    }


    /**
     * @return \IntegraCommerce\Api\Handler\Response\HandlerInterface
     */
    public function viewFile()
    {
        /** @var PlpHandler $handler */
        $handler = $this->requestHandler();
        return $handler->viewFile($this->getId());
    }


    /**
     * @return bool
     */
    public function validate()
    {
        return true;
    }
}