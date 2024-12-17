<?php
namespace App\Repositories;

class CityRepository extends BaseRepository
{
    protected /*string*/ $defaultOrderColumn = 'zip_code'; 

    function __construct(
        $host = self::HOST, 
        $user = self::USER,
        $password = self::PASSWORD,
        $database = self::DATABASE)
    {
        parent::__construct($host, $user, $password, $database);
        $this->tableName = 'cities';
    }
}