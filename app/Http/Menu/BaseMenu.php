<?php

namespace App\Http\Menu;

use Traversable;

class BaseMenu implements \IteratorAggregate {
    protected array $_menuItems = [];
    public string $active = '';

    function AddMenu($caption): MenuItem {
        $result = new MenuItem;
        $this->_menuItems[] = $result;
        return $result->caption($caption);
    }

    function getIterator(): Traversable {
        return new \ArrayIterator($this->_menuItems);
    }

    function isActive(MenuItem $item){
        return $this->active == $item->id;
    }
}

