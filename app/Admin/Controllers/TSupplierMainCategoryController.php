<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TSupplierMainCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TSupplierMainCategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TSupplierMainCategory(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name.30;
            $grid->cate_status.1;
            $grid->onsale_goods_num;
            $grid->pic_material.500;
            $grid->file_material.500;
            $grid->created_at;
            $grid->updated_at->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new TSupplierMainCategory(), function (Show $show) {
            $show->id;
            $show->name.30;
            $show->cate_status.1;
            $show->onsale_goods_num;
            $show->pic_material.500;
            $show->file_material.500;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new TSupplierMainCategory(), function (Form $form) {
            $form->display('id');
            $form->text('name.30');
            $form->text('cate_status.1');
            $form->text('onsale_goods_num');
            $form->text('pic_material.500');
            $form->text('file_material.500');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
