<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    protected $table = "item_list";
	
    protected $fillable = ['user_id',,'item_id'];
}
