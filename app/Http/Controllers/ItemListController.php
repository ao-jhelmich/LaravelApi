<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemList;
use App\ItemListHasItem;

class ItemListController extends Controller
{
   	public function show(id $id)
   	{
   		return ItemList::find($id);
   	}

    protected function addItemTooList(listId $listId, itemId $itemId)
    {
    	
    }
}
