<?php
/**
 *
 * User: matks
 * Date: 22/8/2014
 * Time: 12:36 AM
 *
 */

namespace Dlin\Zendesk\Search;

/**
 * Class UserFilter
 * @package Dlin\Zendesk\Search
 */
class UserFilter extends BaseFilter
{

    public function getType()
    {
        return 'user';
    }

    protected $id;
    protected $email;
    protected $name;
    protected $phone;
    protected $external_id;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $external_id
     */
    public function setExternalId($external_id)
    {
        $this->external_id = $external_id;
    }
}