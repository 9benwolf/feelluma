<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Base params for frontend, add as needed.
 * Do not modify unless necessary or properly tested
 */
class BaseController extends Controller
{
    public function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->view->params = array_merge($this->view->params, [
            'showNavbar' => true,
            'showFooter' => true,
        ]);
    }

    protected function showNavbar(bool $value = true)
    {
        if(isset($this->view->params))
        $this->view->params['showNavbar'] = $value;
    }

    protected function showFooter(bool $value = true)
    {
        if(isset($this->view->params))
            $this->view->params['showFooter'] = $value;
    }

    protected function hideNavbar()
    {
        if(isset($this->view->params))
            $this->view->params['showNavbar'] = false;
    }

    protected function hideFooter()
    {
        if(isset($this->view->params))
            $this->view->params['showFooter'] = false;
    }

    protected function setTitle(string $title)
    {
        $this->view->title = $title;
    }

    protected function mergeToParams(array $data = [])
    {
        return $this->view->params = array_merge($this->view->params, $data);
    }
}