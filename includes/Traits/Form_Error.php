<?php

namespace WeDevs\Academy\Traits;

/**
 * Error handler trait
 */
trait Form_Error
{
    /**
     * holds the errors
     */
    public $errors = [];

    /**
     * check if the form has error
     * 
     * @return boolean
     */
    public function has_error( $key )
    {
        return isset( $this->errors[ $key ] ) ? true : false;
    }

    /**
     * get the error by key
     * 
     * @return string|false
     */
    public function get_error( $key )
    {
        if ( isset( $this->errors[ $key ] ) ) {
            return $this->errors[ $key ];
        }

        return false;
    }
}