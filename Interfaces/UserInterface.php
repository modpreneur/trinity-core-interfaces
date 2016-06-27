<?php

namespace Trinity\Component\Core\Interfaces;

/**
 * Interface UserInterface
 * @package Trinity\Component\Core\Interfaces
 */
interface UserInterface
{

    public function getId();


    public function getFirstName();


    public function getLastName();


    public function getFullName();


    public function getPhoneNumber();


    public function getWebsite();


    public function getAvatar();


    public function getPublic();


    public function getAddressLine1();


    public function getAddressLine2();


    public function getCity();


    public function getCountry();


    public function getPostalCode();


    public function getRegion();

    
    public function getSettingIdentifier();
}