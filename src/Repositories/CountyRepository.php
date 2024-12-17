<?php
namespace App\Repositories;

class CountyRepository extends BaseRepository
{
    
    protected /*string*/ $defaultOrderColumn = 'name'; 
    function __construct(
        $host = self::HOST, 
        $user = self::USER,
        $password = self::PASSWORD,
        $database = self::DATABASE)
    {
        parent::__construct($host, $user, $password, $database);
        $this->tableName = 'counties';
    }
}