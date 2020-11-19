<?php
class Config
{
    private $allowImgType = ['jpg', 'png', 'jpeg'];
    private $maxImgsizeMB = 4;
    private $upload_dir = './public/images/uploads';
    function __construct()
    {
    }
    function produce_img_cf()
    {

        return $produce_img = [
            'allowImgTypes' => $this->allowImgType,
            'maxImgsizeMB' => $this->maxImgsizeMB,
            'maxImgsizebyte' =>  1048576 * $this->maxImgsizeMB,
            'upload_dir' => $this->upload_dir . '/produce'
        ];
    }
};
