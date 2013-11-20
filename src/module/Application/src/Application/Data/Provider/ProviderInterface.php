<?php
/**
 * Created by PhpStorm.
 * User: cape
 * Date: 11/20/13
 * Time: 12:41 AM
 */

namespace Application\Data\Provider;


interface ProviderInterface {

    public function get();
    public function config($config);

} 