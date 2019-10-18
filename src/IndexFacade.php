<?php
namespace Ugc\Comment;

use Illuminate\Support\Facades\Facade;

class IndexFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'comment';
    }
}