<?php


$title = $args['title'] ?? "";
$background = $args['background'];
?>
<section class="section--jumbotron d-flex align-items-end pb-3" style="<?php echo "background-image: url({$background})" ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white h2 fw-800"><?php echo $title ?></h2>
            </div>
        </div>
    </div>
</section>