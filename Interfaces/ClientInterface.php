<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface ClientInterface
 */
interface ClientInterface
{
    /** @return int */
    public function getId();

    /** @return  boolean */
    public function isNotified();


    /** @return string */
    public function getSecret();


    /** @return string */
    public function getName();
}
