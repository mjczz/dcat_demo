<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Test1;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class Test1Controller extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Test1(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->title.30;
            $grid->body;
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
        return Show::make($id, new Test1(), function (Show $show) {
            $show->id;
            $show->title.30;
            $show->body;
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
        return Form::make(new Test1(), function (Form $form) {
            $form->display('id');
            $form->text('title.30');
            $form->text('body');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
