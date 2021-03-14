<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class Warehouse extends \Illuminate\Database\Eloquent\Model
{
    public $id;

    public function getAllWarehouse()
    {
        return DB::select('select * from warehouse');
    }

    public function getPositionWarehouse()
    {
        return DB::select('select * from warehouse where id = ?', [$this->id]);
    }
}