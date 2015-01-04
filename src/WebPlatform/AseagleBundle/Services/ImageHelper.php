<?php
/**
 * Created by PhpStorm.
 * User: HiepLuong
 * Date: 12/27/14
 * Time: 2:14 PM
 */

namespace WebPlatform\AseagleBundle\Services;


class ImageHelper {
    public function generate_image_url($str_images) {
        $result = array();
        if(isset($str_images) && $str_images != ""){
            $images = explode(";", $str_images);
            foreach ($images as &$image) {
                $filename = basename($image);
                $dirname = dirname($image);

            }
        }
        return array("abc","cdf");
    }
} 