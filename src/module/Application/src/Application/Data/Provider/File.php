<?php
namespace Application\Data\Provider;

class File implements ProviderInterface{

    protected $config;

    const SOURCE = 'file';


    public  function isValid(){
        return true == $this->validate($this->config);
    }

    /**
     * checks that the configuration file is valid
     * @param $config array
     * @return bool
     */
    public function validate($config){

        if(isset($config[''])){
            if(is_file(realpath($config[self::SOURCE]))){
                return true;
            }
        }

        return false;
    }

    /**
     * return the content of a file
     * @return string
     */
    public function get(){

        return file_get_contents($this->config[self::SOURCE]);

    }

    /**
     * configure the provider
     * @param $config
     */
    public function configure($config)
    {
        if($this->validate($config)){
            $this->config = $config;
        }
    }
}