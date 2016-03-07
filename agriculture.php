<?php
$content = file_get_contents("http://maintain.natiaa.com/agriculture.php");
$agriculture =  json_decode($content);
echo "<div class=\"container\">
<div id=\"products\" class=\"row list-group\">";

foreach($agriculture as $bobject):?>
<div class="col-md-4">
            <div class="thumbnail">
                <img alt="<?php echo $bobject->{'name'}?>" src="<?php echo $bobject->{'picture'}?>" class="group list-group-image img-m">
                <div class="caption">
                    <h5 class="group inner list-group-item-heading">
                        <?php echo $bobject->{'name'}?></h5>
                    <p class="group inner list-group-item-text">
                        </p>
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="lead">
                                <?php echo $bobject->{'new-price'}?></p>
                        </div>
                        <div class="col-xs-6">
                            <a href="<?php echo $bobject->{'link'}?>" class="btn btn-danger btncs">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;
?>
</div>
        </div>