<?php
use Application\Data\Provider\File as DataProvider;


class FileProviderTest extends PHPUnit_Framework_TestCase{

    public function setUp(){
        Zend\Mvc\Application::init(include 'config/application.config.php');
    }
    public function testConfigureProvider(){

        $provider = new DataProvider();
        $provider->configure(array('filename'=> getcwd().'/data/content/list'));

        $this->assertTrue($provider->isValid(),'Data Provider Is not properly configured using "filename as key"');


    }
}
 