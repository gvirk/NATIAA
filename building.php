<?php
                  $building = file_get_contents("http://maintain.natiaa.com/building.php");
$main =  json_decode($building);
echo "<div class=\"container\">
<div id=\"products\" class=\"row list-group\">";

foreach($main as $aobject):?>
<div class="col-md-4">
            <div class="thumbnail">
                <img alt="<?php echo $aobject->{'name'}?>" src="<?php echo $aobject->{'picture'}?>" class="group list-group-image img-m">
                <div class="caption">
                    <h5 class="group inner list-group-item-heading">
                        <?php echo $aobject->{'name'}?></h5>
                    <p class="group inner list-group-item-text">
                        </p>
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="lead">
                                <?php echo $aobject->{'new-price'}?></p>
                        </div>
                        <div class="col-xs-6">
                            <a href="<?php echo $aobject->{'link'}?>" class="btn btn-danger btncs">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;
?>
</div>
        </div>