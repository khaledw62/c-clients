<?php

namespace Codetoon\ClientRelationshipManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codetoon\ClientRelationshipManager\ClientRelationshipManager
 */
class ClientRelationshipManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Codetoon\ClientRelationshipManager\ClientRelationshipManager::class;
    }
}
