<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface ProductInterface
 * @package Trinity\Component\Core\Interfaces
 */
interface ProductInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();
}
