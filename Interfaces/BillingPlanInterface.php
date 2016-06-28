<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface BillingPlanInterface
 * @package Trinity\Component\Core\Interfaces
 */
interface BillingPlanInterface extends EntityInterface
{

    /**
     * @return int
     */
    public function getFrequency();

    /**
     * @return float
     */
    public function getInitialPrice();


    /**
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @return float
     */
    public function getRebillPrice();

    /**
     * @return int
     */
    public function getRebillTimes();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return int
     */
    public function getTrial();

    /**
     * @return bool
     */
    public function isRecurring();
}
