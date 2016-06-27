<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface EntityInterface
 */
interface EntityInterface
{
    /**
     * Get id.
     */
    public function getId();


    /**
     * @return string
     */
    public function __toString();
}
