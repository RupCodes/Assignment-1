<?php

/*******w******** 
    
    Name: Rup
    Date: 2024-05-04
    Description: Gallery website with random and local images from unsplash (Added Javascript Responsive Lightbox)

****************/

$config = [
    'gallery_name' => 'Peaceful Gallery',
    'local_images' => [
        ['filename' => 'ciocan-ciprian-unsplash', 'photographer' => 'Ciocan Ciprian'],
        ['filename' => 'job-savelsberg-unsplash', 'photographer' => 'Job Savelsberg'],
        ['filename' => 'trac-vu-unsplash', 'photographer' => 'Trac Vu'],
        ['filename' => 'stephanie-klepacki-unsplash', 'photographer' => 'Stephanie Klepacki']
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <title><?php echo $config['gallery_name']; ?></title>
</head>
<body>

    <h1><?php echo $config['gallery_name']; ?></h1>

    <div class="imgRow">
    <?php foreach ($config['local_images'] as $image): ?>
        <div class="imgBox">
            <!-- Changed Images name (Now they are without extension), So theres no need to use explode to separate from extension -->
            <a href="images/<?php echo $image['filename']; ?>.jpg" data-luminous="image">
                 <!-- Inline Style for Image -->
                <img style="width: 100%; aspect-ratio: 9/14;" class="unsplashImg" src="images/<?php echo $image['filename']; ?>_thumbnail.jpg" alt="<?php echo $image['photographer']; ?> image">
            </a>
        </div>
    <?php endforeach; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <script>
        new LuminousGallery(document.querySelectorAll(".imgBox a"));
    </script>

</body>
</html>
