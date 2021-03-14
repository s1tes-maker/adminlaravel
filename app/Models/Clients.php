<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class Clients extends \Illuminate\Database\Eloquent\Model
{
    public $id;

    public function getAllClients()
    {
        return DB::select('select * from clients where status = ?', ['new']);
    }

    public function getClientById()
    {
        return DB::select('select * from clients where id = ?', [$this->id]);
    }

}