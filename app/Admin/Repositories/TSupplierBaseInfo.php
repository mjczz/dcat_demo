<?php

namespace App\Admin\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;
use App\Models\TSupplierBaseInfo as TSupplierBaseInfoModel;

class TSupplierBaseInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = TSupplierBaseInfoModel::class;
}
