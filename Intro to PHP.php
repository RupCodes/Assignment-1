<?php

/*******w******** 
    
    Name: Rup
    Date: 2024-05-04
    Description: Gallery website with random and local images from unsplash

****************/

$config = [
    'gallery_name' => 'Peaceful Gallery',
    'unsplash_categories' => ['Hills', 'Mountains', 'Sky', 'Ocean', 'River', 'Mount'],
    'local_images' => [
        ['filename' => 'ciocan-ciprian-unsplash.jpg', 'photographer' => 'Ciocan Ciprian', 'unsplash_url' => 'https://unsplash.com/@cipriann'],
        ['filename' => 'job-savelsberg-unsplash.jpg', 'photographer' => 'Job Savelsberg', 'unsplash_url' => 'https://unsplash.com/@jobsavelsberg'],
        ['filename' => 'trac-vu-unsplash.jpg', 'photographer' => 'Trac Vu', 'unsplash_url' => 'https://unsplash.com/@tracminhvu'],
        ['filename' => 'stephanie-klepacki-unsplash.jpg', 'photographer' => 'Stephanie Klepacki', 'unsplash_url' => 'https://unsplash.com/@sklepacki']
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
    <title><?php echo $config['gallery_name']; ?></title>
</head>
<body>

    <h1><?php echo $config['gallery_name']; ?></h1>

    <div class="imgRow">
    <?php foreach ($config['unsplash_categories'] as $category): ?>
        <div class="imgBox">
        <h2><?php echo $category; ?></h2>
        <img class="unsplashImg" src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
        </div>
    <?php endforeach; ?>
    </div>

    <?php $num_local_images = count($config['local_images']); ?>

    <h1><?php echo $num_local_images; ?> Large Images</h1>

    <div class="imgCol">

    <?php foreach ($config['local_images'] as $image): ?>
        <div class="imgBox">
            <img class="unsplashImg" src="images/<?php echo $image['filename']; ?>" alt="<?php echo $image['photographer']; ?> image">
            <br>
            <p>Photo by <a href="<?php echo $image['unsplash_url']; ?>" target="_blank"> <?php echo $image['photographer']; ?></a></p>
        </div>
    <?php endforeach; ?>

    </div>

</body>
</html>
