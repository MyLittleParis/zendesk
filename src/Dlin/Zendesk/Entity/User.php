<?php
/**
 *
 * User: matks
 * Date: 22/8/2014
 * Time: 11:37 AM
 *
 */

namespace Dlin\Zendesk\Entity;

class User extends BaseEntity
{
    /**
     * Automatically assigned when created
     * @var integer
     * @readonly
     */
    protected $id;

    /**
     * @var string
     * @readonly
     */
    protected $url;

    /**
     * User full name
     * @var string
     */
    protected $name;

    /**
     * Configurable ID
     * @var string
     */
    protected $external_id;

    /**
     * Agent alias for display purposes
     * @var string
     */
    protected $alias;

    /**
     * When this user was created
     * @var string
     * @readonly
     */
    protected $created_at;

    /**
     * When this user last got updated
     * @var string
     * @readonly
     */
    protected $updated_at;

    /**
     * Users can be deactivated ('deleted')
     * @var boolean
     */
    protected $active;

    /**
     * Authenticity of the user (whether he is truly who he says he is)
     * @var boolean
     * @readonly
     */
    protected $verified;

    /**
     * Shared agent between different Zendesk
     * @var boolean
     * @readonly
     */
    protected $shared_agent;

    /**
     * Shared user between different Zendesk
     * @var boolean
     * @readonly
     */
    protected $shared;

    /**
     * User locale
     * @var string
     * @readonly
     */
    protected $locale;

    /**
     * User langage identifier
     * @var integer
     */
    protected $locale_id;

    /**
     * User timezone
     * @var string
     * @readonly
     */
    protected $time_zone;

    /**
     * When this user last logged in
     * @var string
     * @readonly
     */
    protected $last_login_at;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * Agent signature (only available for agents and admins)
     * @var string
     */
    protected $signature;

    /**
     * User extra details (e.g address)
     * @var string
     */
    protected $details;

    /**
     * User support notes
     * @var string
     */
    protected $notes;

    /**
     * User organization ID
     * @var integer
     */
    protected $organization_id;

    /**
     * User role
     * Available values: "end-user" (customer), "agent" (comapany employee), "admin" (company Zendesk administrator)
     * @var string
     */
    protected $role;

    /**
     * Custom user role ID
     * @var integer
     */
    protected $custom_role_id;

    /**
     * Forum moderation features enabled or not
     * @var boolean
     */
    protected $moderator;

    /**
     * User role
     * Available values: "end-user" (customer), "agent" (comapany employee), "admin" (company Zendesk administrator)
     * @var string
     */
    protected $ticket_restriction;

    /**
     * Restrict user to only create private comments
     * @var boolean
     */
    protected $only_private_comments;

    /**
     * User tags
     * @var array
     */
    protected $tags;

    /**
     * Suspended users cannot log-in
     * @var boolean
     */
    protected $suspended;

    /**
     * Agent restrictions
     * @var boolean
     */
    protected $restricted_agent;

    /**
     * User custom fields
     * @var hash
     */
    protected $user_fields;

    public function getId()
    {
        return $this->id;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getExternalId()
    {
        return $this->external_id;
    }

    public function setExternalId($external_id)
    {
        $this->external_id = $external_id;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getVerified()
    {
        return $this->verified;
    }

    public function getSharedAgent()
    {
        return $this->shared_agent;
    }

    public function getShared()
    {
        return $this->shared;
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function getLocaleId()
    {
        return $this->locale_id;
    }

    public function setLocaleId($locale_id)
    {
        $this->locale_id = $locale_id;
    }

    public function getTimeZone()
    {
        return $this->time_zone;
    }

    public function getLastLoginAt()
    {
        return $this->last_login_at;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    public function setOrganizationId($organization_id)
    {
        $this->organization_id = $organization_id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getCustomRoleId()
    {
        return $this->custom_role_id;
    }

    public function setCustomRoleId($custom_role_id)
    {
        $this->custom_role_id = $custom_role_id;
    }

    public function getModerator()
    {
        return $this->moderator;
    }

    public function setModerator($moderator)
    {
        $this->moderator = $moderator;
    }

    public function getTicketRestriction()
    {
        return $this->ticket_restriction;
    }

    public function setTicketRestriction($ticket_restriction)
    {
        $this->ticket_restriction = $ticket_restriction;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function getSuspended()
    {
        return $this->suspended;
    }

    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;
    }

    public function getRestrictedAgent()
    {
        return $this->restricted_agent;
    }

    public function setRestrictedAgent($restricted_agent)
    {
        $this->restricted_agent = $restricted_agent;
    }

    public function getUserFields()
    {
        return $this->user_fields;
    }

    public function setUserFields($user_fields)
    {
        $this->user_fields = $user_fields;
    }
}
