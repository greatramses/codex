<?php defined('SYSPATH') or die('No direct script access.');

class Dao_Pages extends Dao_MySQL_Base
{
    protected $cache_key = 'Dao_Pages';

    protected $table = 'pages';
}
