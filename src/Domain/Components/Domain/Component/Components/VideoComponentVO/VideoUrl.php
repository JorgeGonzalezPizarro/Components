<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 10:24
 */

namespace App\Domain\Components\Domain\Component\Components\VideoComponentVO;


use App\IO\Validator\UrlValidator;

class VideoUrl
{

    public function __construct($imageUrl)
    {
        $this->guurd($imageUrl);
        $this->imageUrl = $this->guard($imageUrl);

    }

    private function guard($imageUrl)
    {

        if ( UrlValidator::urlValidator($imageUrl) ) {
            return $imageUrl;
        }
        /**TODO EXCEPTION */

    }
}