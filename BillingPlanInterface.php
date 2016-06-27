<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface BillingPlanInterface
 * @package Trinity\Component\Core\Interfaces
 */
interface BillingPlanInterface
{

    public function getId();


    public function getFrequency();


    public function getInitialPrice();


    public function getProduct();


    public function getRebillPrice();


    public function getRebillTimes();


    public function getType();


    public function getTrial();


    public function isRecurring();
}