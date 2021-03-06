<?php

namespace App\Dto;

final class UserThirdPartyData {

   
    /** @var integer */
    public $id;

    /** @var integer */
    public $user_id;

    /** @var string */
    public $username;
    
    /** @var string */
    public $email;

    /** @var string */
    public $name;

    /** @var string */
    public $first_name;

    /** @var string */
    public $middle_name;

    /** @var string */
    public $last_name;

    /** @var string */
    public $extension_name;

    /** @var string */
    public $photo_url;

    /** @var string */
    public $provider;

    /** @var integer */
    public $role_type;

    /** @var string */
    public $phone_number;

    /** @var datetime */
    public $last_online;

    /** @var boolean */
    public $verified;

    /** @var datetime */
    public $created_at;

    /** @var datetime */
    public $updated_at;

     /** @var string */
     public $error_code;

     /** @var string */
     public $error_message;
 
     /** @var boolean */
     public $success;
 
}
