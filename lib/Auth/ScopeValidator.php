<?php

namespace Autodesk\Core\Auth;

class ScopeValidator
{
    const SCOPES = [
        'data:read',
        'data:write',
        'data:create',
        'data:search',
        'bucket:create',
        'bucket:read',
        'bucket:update',
        'bucket:delete',
        'code:all',
        'account:read',
        'account:write',
        'user-profile:read',
    ];

    /**
     * @var array
     */
    private $scopes;

    /**
     * ScopeValidator constructor.
     * @param array|null $scopes
     */
    public function __construct(array $scopes = null)
    {
        if (is_null($scopes)) {
            $scopes = self::SCOPES;
        }

        $this->scopes = $scopes;
    }

    /**
     * @param $name
     * @return bool
     */
    public function isScopeValid($name)
    {
        return in_array($name, $this->scopes);
    }

    /**
     * @param $name
     * @return bool
     */
    public function isScopeInvalid($name)
    {
        return ! $this->isScopeValid($name);
    }
}