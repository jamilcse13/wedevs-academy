<?php

namespace WeDevs\Academy;

class Frontend
{
    /**
     * initialize the class
     */
    function __construct()
    {
        new Frontend\Shortcode();
        new Frontend\Enquiry();
    }
}