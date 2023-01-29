<?php
namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class connection extends BaseController{
   public function index() {
      try {
         $dbconnect = DB::connection()->getPDO();
         $dbname = DB::connection()->getDatabaseName();
         echo "Connected successfully to the database. Database name is => ".$dbname;
      } catch(Exception $e) {
         echo "Error in connecting to the database".$e->getMessage();
      }
   }
}