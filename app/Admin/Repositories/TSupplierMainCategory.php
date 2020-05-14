<?php

namespace App\Admin\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;
use App\Models\TSupplierMainCategory as TSupplierMainCategoryModel;

class TSupplierMainCategory extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = TSupplierMainCategoryModel::class;
}
