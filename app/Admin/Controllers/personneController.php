<?php

namespace App\Admin\Controllers;

use App\personne;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;


class personneController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'personne';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        // $grid = new Grid(new personne());



        // return $grid;

        return personne::tree();
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(personne::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('ordre', __('Ordre'));
        $show->field('nomPrenom', __('Nom prenom'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new personne());

        $form->number('parent_id', __('Parent id'));
        $form->number('ordre', __('Ordre'));
        $form->text('nomPrenom', __('Nom prenom'));

        return $form;
    }
}
