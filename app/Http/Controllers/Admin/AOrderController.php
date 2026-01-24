<?php

namespace App\Http\Controllers\Admin;

use App\Models\OrderRecord;

class AOrderController extends BaseController {
    function table(){
        $this->menu->active = 'orders';

        return view('admin.orders.table',[
            'orders' => OrderRecord::orderBy('id', 'DESC')->paginate(20)
        ]);
    }
}
