<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Fsdf;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class FsdfController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Fsdf(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->title.50;
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
        return Show::make($id, new Fsdf(), function (Show $show) {
            $show->id;
            $show->title.50;
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
        return Form::make(new Fsdf(), function (Form $form) {
            $form->display('id');
            $form->text('title.50');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
