<?php
namespace Application\Data\Provider;

class File implements ProviderInterface{

    protected $filename;



    public  function isValid($config){
        return true == $this->validate($config);
    }

    /**
     * checks that the configuration file is valid
     * @param $config array
     * @return bool
     */
    public function validate($config){

        if(isset($config['filename'])){
            if(is_file(realpath($config['filename']))){
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

        return file_get_contents($this->filename);

    }

    /**
     * configure the provider
     * @param $config
     */
    public function config($config)
    {
        if($this->isValid($config)){
            $this->filename = $config['filename'];
        }
    }
}