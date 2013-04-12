<?php

/**
 * @author Fabio Pratta <fabiobrotas@hotmail.com>
 * @copyright (c) 2013 , Zend2
 * @name User.php 
 * @encoding UTF-8
 * @version 1.0 11/04/2013
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * 
 *  All rights reserved ® - www.fabiopratta.com.br more information.
 */


namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class User {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;

    // getters/setters
}

