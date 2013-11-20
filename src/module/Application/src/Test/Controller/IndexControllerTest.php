<?php
namespace Application\Test\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase{

    public function setUp()
    {

        $this->setUseConsoleRequest(false);
        $this->setApplicationConfig(
            include getcwd().'/config/application.config.php'
        );
        $this->getApplication();


    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);
        $this->assertMatchedRouteName('home');
        $this->assertControllerName('application\controller\index');
        $this->assertQuery('.jumbotron','div');



    }

} 