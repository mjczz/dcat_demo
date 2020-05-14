<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TSupplierBaseInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TSupplierBaseInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TSupplierBaseInfo(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->enterprise_name.50;
            $grid->legal_person.30;
            $grid->duty_paragraph.100;
            $grid->organizer_file.100;
            $grid->faren_zheng_file.100;
            $grid->faren_fan_file.100;
            $grid->taxpayer_file.100;
            $grid->faren_shouchi_zheng_file.100;
            $grid->faren_shouchi_fan_file.100;
            $grid->duijie_person.30;
            $grid->duijie_person_mobile.50;
            $grid->duijie_person_email.30;
            $grid->recommend_person.30;
            $grid->recommend_person_card.10;
            $grid->recommend_person_mobile.30;
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
        return Show::make($id, new TSupplierBaseInfo(), function (Show $show) {
            $show->id;
            $show->enterprise_name.50;
            $show->legal_person.30;
            $show->duty_paragraph.100;
            $show->organizer_file.100;
            $show->faren_zheng_file.100;
            $show->faren_fan_file.100;
            $show->taxpayer_file.100;
            $show->faren_shouchi_zheng_file.100;
            $show->faren_shouchi_fan_file.100;
            $show->duijie_person.30;
            $show->duijie_person_mobile.50;
            $show->duijie_person_email.30;
            $show->recommend_person.30;
            $show->recommend_person_card.10;
            $show->recommend_person_mobile.30;
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
        return Form::make(new TSupplierBaseInfo(), function (Form $form) {
            $form->display('id');
            $form->text('enterprise_name.50');
            $form->text('legal_person.30');
            $form->text('duty_paragraph.100');
            $form->text('organizer_file.100');
            $form->text('faren_zheng_file.100');
            $form->text('faren_fan_file.100');
            $form->text('taxpayer_file.100');
            $form->text('faren_shouchi_zheng_file.100');
            $form->text('faren_shouchi_fan_file.100');
            $form->text('duijie_person.30');
            $form->text('duijie_person_mobile.50');
            $form->text('duijie_person_email.30');
            $form->text('recommend_person.30');
            $form->text('recommend_person_card.10');
            $form->text('recommend_person_mobile.30');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
