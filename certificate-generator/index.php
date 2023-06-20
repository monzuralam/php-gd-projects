<?php

namespace CERTIFICATE;

class Certificate_Generator
{
    public function __construct()
    {
        $this->view();
    }

    public function generate(string $name)
    {
        $certificate_template =  'assets/images/certificate/certificate-01.jpg';
        $certificate = imagecreatefromjpeg($certificate_template);
        $textColor = imagecolorallocate($certificate, 0, 0, 0);
        $positionX = strlen($name) > 7 ? 400 : 1200;

        imagettftext($certificate, 320, 0, $positionX, 1300, $textColor, 'assets/fonts/desyrel.ttf', $name);

        $certificate_id = str_replace(' ', '-', strtolower($name)) . '-' . rand(0, 999);
        imagejpeg($certificate, 'uploads/' . $certificate_id . '.jpg');
        imagedestroy($certificate);

        echo $certificate_id;
    }

    public function view()
    {
        require_once 'inc/frontend/index.php';
    }
}
new Certificate_Generator();
