<?php
namespace Application\Data\Provider;

class File implements ProviderInterface{

    protected $filename;

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