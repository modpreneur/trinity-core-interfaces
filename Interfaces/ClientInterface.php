<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface ClientInterface
 */
interface ClientInterface extends EntityInterface
{
    /** @return string */
    public function getNotificationUri();


    /** @return  boolean */
    public function isNotified();


    /** @return string */
    public function getSecret();


    /** @return string */
    public function getName();
}
