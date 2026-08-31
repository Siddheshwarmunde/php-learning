<?php

interface productFeature
{
    public function images();
    public function ownerDetails();
}

class products implements productFeature
{
    public function images()
    {
        echo "images";
    }


    public function ownerDetails()
    {
        echo "owner details";
    }
}

$product = new products();
$product->images();
$product->ownerDetails();
