<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;

class personne extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = 'personne';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('ordre');
        $this->setTitleColumn('nomPrenom');
    }
}
