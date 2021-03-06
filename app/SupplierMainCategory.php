<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierMainCategory extends Model
{
    protected $table = 't_supplier_main_category';

    public $timestamps = false;

    public function detail()
    {
        return $this->hasMany(SupplierMainCategoryDetail::class, 'cate_id');
    }
}
