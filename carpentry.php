<?php
$json = file_get_contents("http://maintain.natiaa.com/carpentry.php");
$data =  json_decode($json);
echo "<div class=\"container\">
<div id=\"products\" class=\"row list-group\">";

foreach($data as $object):?>
<div class="col-md-4">
            <div class="thumbnail">
                <img alt="<?php echo $object->{'name'}?>" 
                src="<?php echo $object->{'picture'}?>" 
                class="group list-group-image img-m">
                <div class="caption">
                    <h5 class="group inner list-group-item-heading">
                        <?php echo $object->{'name'}?></h5>
                    <p class="group inner list-group-item-text">
                        </p>
                    <div class="row">
                        <div class="col-xs-6">
                            <p class="lead">
                                <?php echo $object->{'new-price'}?></p>
                        </div>
                        <div class="col-xs-6">
                            <a href="<?php echo $object->{'link'}?>" 
                            class="btn btn-danger btncs">
                            Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php endforeach;
?>
</div>
</div>
