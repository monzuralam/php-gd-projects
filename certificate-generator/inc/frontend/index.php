<?php
use CERTIFICATE\Certificate_Generator;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Generator</title>
    <link rel="stylesheet" href="../../../certificate/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Certificate Generator</h1>
                <form action="" class="form" >
                    <input type="text" name="name" class="form-control" id="" placeholder="Your Name">
                    <input type="submit" name="submit" value="Generate">
                </form>
                <?php
                    if( isset( $_REQUEST['submit'] ) ){
                        $name = isset( $_REQUEST['name'] ) ?? $_REQUEST['name'];
                        $certificate = new Certificate_Generator();
                        $certificate->generate( $name );
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>