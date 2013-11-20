<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Data\Provider\File as DataProvider;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $view = new ViewModel();

        $provider = new DataProvider();

        $provider->config(array('filename'=> getcwd().'/data/content/list'));

        $this->setViewVariable($view,'first',$provider->get());
        $this->setViewVariable($view,'second',$provider->get());
        $this->setViewVariable($view,'third',$provider->get());



        return $view;
    }

    protected function setViewVariable($view, $variable,$content=false){

        $view->setVariable($variable,'empty');
        if($content!==false){
            $view->setVariable($variable,$content);
        }

    }

    public function searchAction(){

    }
}
