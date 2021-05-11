<?php
error_reporting(E_ERROR | E_PARSE);

class Wotermark {
    private $path_to_image;
    private $path_to_watermark;
    private $marge_right;
    private $marge_bottom;

    public function __construct() {
        $this->path_to_image = dirname(__FILE__)."\image.jpg";
        $this->path_to_watermark = dirname(__FILE__)."\watermark.jpg";
        $this->marge_right = 10;
        $this->marge_bottom = 10;
    }

    static public function setImagePath(string $path_param) {
        $this->path_to_image = $path_param;
    }

    public function setWatermarkPath(string $path_param) {
        $this->path_to_watermark = $path_param;
    }

    public function setMargin(int $right_param, int $bottom_param) {
        $this->marge_right = $right_param;
        $this->marge_bottom = $bottom_param;
    }

    public function overlay() {
        $stamp = imagecreatefromjpeg($this->path_to_watermark);
        $im = imagecreatefromjpeg($this->path_to_image);

        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        imagecopy($im, $stamp, imagesx($im) - $sx - $this->marge_right, imagesy($im) - $sy - $this->marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

        header('Content-type: image/png');
        imagepng($im, dirname(__FILE__)."\\result.png");
        imagedestroy($im);

        $data = file_get_contents(dirname(__FILE__)."\\result.png");
        $base64 = base64_encode($data);

        return $base64;
    } 
}

if(isset($_FILES['image']['name'])){

    /* Getting file name */
    $filename = $_FILES['image']['name'];

    /* Location */
    $location = dirname(__FILE__)."\\image.jpg";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    /* Valid extensions */
    $valid_extensions = array("jpg","jpeg","png");

    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $valid_extensions)) {
        /* Upload file */
        if(move_uploaded_file($_FILES['image']['tmp_name'],$location)){
            $response = $location;
        }
    }
}

if(isset($_FILES['wahtermark']['name'])){

    /* Getting file name */
    $filename = $_FILES['wahtermark']['name'];

    /* Location */
    $location = dirname(__FILE__)."\\watermark.jpg";
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);

    /* Valid extensions */
    $valid_extensions = array("jpg","jpeg","png");

    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $valid_extensions)) {
        /* Upload file */
        if(move_uploaded_file($_FILES['wahtermark']['tmp_name'],$location)){
            $response = $location;
        }
    }
}


$img = new Wotermark();
echo $img->overlay();

exit;
?>