<?php
/**
 *
 * User: matks
 * Date: 22/08/2014
 * Time: 12:25 AM
 *
 */

namespace Dlin\Zendesk\Client;

use Dlin\Zendesk\Entity\User;

class UserClient extends BaseClient
{

    /**
     * Return entity class type.
     *
     * @return string
     */
    public function getType()
    {
        return '\Dlin\Zendesk\Entity\User';
    }

    /**
     * Return a user by ID
     *
     * @param $id
     * @return \Dlin\Zendesk\Entity\User
     */
    public function getOneById($id)
    {
        return $this->getOne("users/$id.json");
    }
}
