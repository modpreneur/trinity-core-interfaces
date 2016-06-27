<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface BillingPlanInterface
 * @package Trinity\Component\Core\Interfaces
 */
interface BillingPlanInterface
{

    /**
     * @return int|null
     */
    public function getId();


    public function getFrequency();


    public function getInitialPrice();


    /**
     * @return ProductInterface
     */
    public function getProduct() : ProductInterface;


    public function getRebillPrice();


    public function getRebillTimes();


    public function getType();


    public function getTrial();


    public function isRecurring();
}