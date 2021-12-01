<?php
/**
 * Dummy training class
 *
 * PHP version 7.4
 *
 * LICENSE: CC Attribution 4.0 https://creativecommons.org/licenses/by-sa/4.0/
 *
 * @category Controller
 * @package  Controller
 * @author   Javier Rodríguez <falces@gmail.com>
 * @license  CC Attribution 4.0 https://creativecommons.org/licenses/by-sa/4.0/
 * @link     https://github.com/falces/myFramework
 */

namespace App\Controllers;

/**
 * User Controller
 *
 * @category Controller
 * @package  Controller
 * @author   Javier Rodríguez <falces@gmail.com>
 * @license  CC Attribution 4.0 https://creativecommons.org/licenses/by-sa/4.0/
 * @link     https://github.com/falces/myFramework
 */
class User
{
    private $_name;

    /**
     * Undocumented function
     *
     * @param string $name Name
     */
    public function __construct(
        string $name
    ) {
        $this->setName($name);
    }

    /**
     * Undocumented function
     *
     * @param string $name Name
     *
     * @return User
     */
    public function setName(
        string $name
    ): User {
        $this->_name = $name;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }
}