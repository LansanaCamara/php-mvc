<?php

class Controller extends Base
{
    /**
     * Return a new instance of a model or throw an exception.
     *
     * @param $model
     * @return mixed
     * @throws Exception
     */
    public function model($model)
    {
        if (is_readable('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';

            return new $model();
        }

        throw new Exception("The model $model does not exist or is not readable.");
    }

    /**
     * Return the master view with data containing the view
     * being requested as well as optional data.
     *
     * @param $view
     * @param array $data
     */
    public function view($view, $data = [])
    {
        $data['view'] = $view;

        extract($data);

        if (is_readable('../app/views/pages/' . $view . '.php')) {
            require_once '../app/views/pages/' . $view . '.php';
        } else {
            $this->respondNotFound();
        }
    }
}