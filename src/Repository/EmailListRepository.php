<?php
namespace MS\EmailList\Repository;

use MS\EmailList\Models\EmailModel;
use MS\EmailList\EloquentRepository;
use MS\EmailList\Repository\Interfaces\EmailListRepositoryInterface;


class EmailListRepository extends EloquentRepository implements EmailListRepositoryInterface{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(EmailModel $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
