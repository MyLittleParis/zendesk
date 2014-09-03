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
use Dlin\Zendesk\Search\UserFilter;

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

    /**
     * Search users
     *
     * @param TicketFilter $query
     * @param int $page
     * @param int $per_page
     * @param null $sort_by
     * @param string $sort_order
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function search(UserFilter $query, $page=1, $per_page=100, $sort_by=null, $sort_order='asc')
    {
        $endPoint = 'search.json?query='.rawurlencode(implode(' ',$query->toArray()));

        return $this->getCollection($endPoint, 'results', $page, $per_page, $sort_by, $sort_order);
    }
}
