<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface UserInterface
 * @package Trinity\Component\Core\Interfaces
 */
interface UserInterface extends EntityInterface
{

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @return string
     */
    public function getWebsite();

    /**
     * @return string
     */
    public function getAvatar();

    /**
     * @return bool
     */
    public function getPublic();

    /**
     * @return string
     */
    public function getAddressLine1();

    /**
     * @return string
     */
    public function getAddressLine2();

    /**
     * @return string
     */
    public function getCity();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getPostalCode();

    /**
     * @return string
     */
    public function getRegion();

    /**
     * @return int
     */
    public function getSettingIdentifier();
}
