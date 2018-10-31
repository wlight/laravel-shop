<?php

namespace App\Admin\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use function foo\func;

class UsersController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        // 根据回调函数，在页面上用表格的形式来展示用户记录
        return Admin::grid(User::class, function (Grid $grid){
            $grid->id('ID')->sortable();

            $grid->name('用户名');

            $grid->email('邮箱');
            $grid->email_verified('已验证邮箱')->display(function ($value){
                return $value ? '是' : '否';
            });
            $grid->created_at('注册时间');

            $grid->disableCreateButton();
            $grid->actions(function ($actions){
                $actions->disableView();
                $actions->disableDelete();
                $actions->disableEdit();
            });
            $grid->tools(function ($tools){
                $tools->batch(function ($batch){
                    $batch->disableDelete();
                });
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->email('Email');
        $show->password('Password');
        $show->remember_token('Remember token');
        $show->email_verified('Email verified');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->text('name', 'Name');
        $form->email('email', 'Email');
        $form->password('password', 'Password');
        $form->text('remember_token', 'Remember token');
        $form->switch('email_verified', 'Email verified');

        return $form;
    }
}
