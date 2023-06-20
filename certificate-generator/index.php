<?php
namespace CERTIFICATE;
class Certificate_Generator{
    public function __construct(){
        $this->view();
    }

    public function generate( $name ){
        header("Content-Type: image/jpeg");
        $font = 'assets/fonts/desyrel.ttf';
        $certificate_template =  'assets/images/certificate/certificate-01.jpg';
        $certificate = imagecreatefromjpeg( $certificate_template );
        $textColor = imagecolorallocate( $certificate, 0, 0, 0 );
        $name = isset( $name ) ? $name : 'Monzur Alam';
        imagettftext( $certificate, 320, 0, 1200, 1500, $textColor, '', $name );
        $certificate_user_name = trim( strtolower( $name) );
        imagejpeg( $certificate, null, null );
        imagejpeg( $certificate, 'uploads/' . $certificate_user_name . '.jpg' );
        imagedestroy( $certificate );
    }

    public function view(){
        require_once 'inc/frontend/index.php';
    }
}
new Certificate_Generator();
