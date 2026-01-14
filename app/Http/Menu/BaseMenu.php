<?php

namespace App\Http\Menu;

class BaseMenu implements \IteratorAggregate {
    protected array $_menuItems = [];
    public string $active = '';

    function AddMenu($caption): MenuItem {
        $result = new MenuItem;
        $this->_menuItems[] = $result;
        return $result->caption($caption);
    }

    function getIterator(): \Traversable {
        return new \ArrayIterator($this->_menuItems);
    }

    function isActive(MenuItem $item){
        return $item->isActive($this->active);
    }

    function isActiveByID(string $active){
        foreach($this->_menuItems as $item)
            if($item->isActive($active))
                return true;
    }
}

