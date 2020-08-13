<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
   protected $table = 'charlie_materials_filiale1';
   protected $filiable = ['lost' , 'status', 'control_place', 'completed', 'observation']; 



}
