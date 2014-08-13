<?php
/**
 * 
 * User: davidlin
 * Date: 9/11/2013
 * Time: 11:44 PM
 * 
 */

namespace Dlin\Zendesk\Entity;


class TicketCustomFieldValue extends BaseEntity {


    /**
     * Custom Field Id
     * @var integer
     * @readonly
     */
    protected $id;

    /**
     * Value of the custom field
     * @var string
     * @readonly
     */
    protected $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this->addChange('id');
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this->addChange('value');
    }
}