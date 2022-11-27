<?php


namespace MS\EmailList;

use Exception;
use Illuminate\Database\Eloquent\Model;
use MS\EmailList\EloquentRepositoryInterface;

class EloquentRepository implements EloquentRepositoryInterface
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Fin an item by id
     * @param mixed $id
     * @return Model|null
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * find Or Fail
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Return all items
     * @return Collection|null
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Return query builder instance to perform more manouvers
     * @return Builder|null
     */
    public function query()
    {
        return $this->model->query();
    }

    /**
     * Create an item
     * @param array|mixed $data
     * @return Model|null
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * Update a item
     * @param int|mixed $id
     * @param array|mixed $data
     * @return bool|mixed
     */
    public function update($id, array $data)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    /**
     * destroy many item with primary key
     * @param int|Model $id
     */
    public function destroy(array $id)
    {
        return $this->model->destroy($id);
    }

    /**
     * delete item
     * @param Model|int $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    /**
     * @param int $noOfItems             
     * @return Model
     */
    public function paginate($input, $noOfItems)
    {
        return $this->model->filter($input)->paginate($noOfItems);
    }

    function ddMenu($label, $id)
    {
        return $this->model->get()->pluck($label, $id);
    }

    function get()
    {
        return $this->model->get();
    }


}
