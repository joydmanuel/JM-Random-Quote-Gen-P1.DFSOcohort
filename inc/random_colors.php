<?php
/**
 * Created by PhpStorm.
 * User: Joy
 * Date: 11/14/2018
 * Time: 10:32 PM
 */
//trying to create random background color https://gist.github.com/agarzon/2322495#file-random_color-php

$color = dechex(rand(000000, 0xFFFFFF)); ?>
<body style="background-color: <?php echo $color; ?>">;
</body>
