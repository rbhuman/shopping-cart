<?php
namespace Repositories;
use Model\Item;

interface  ItemInterface{

    function insert(Item $item);
    function getItem();

}
?>