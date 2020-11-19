<?php
class Config
{
    function __construct()
    {
    }
    function produce_img_cf()
    {

        return $produce_img = [
            $allowImgTypes = ['jpg', 'png', 'jpeg'],
            $maxImgsizeMB = 4,
            $maxImgsizebyte   = 1048576 * $maxImgsizeMB
        ];
    }
};
