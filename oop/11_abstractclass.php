<?php

abstract class ProductFeatures
{
    abstract public function ProductDetails();
    abstract public function ProductImages();
    abstract public function ProductOwner();

    public function common()
    {
        echo "coomin function";
    }
}

// class uploadProducts extends productFeature
// {
// }

// $productfeat = new productFeature();

class UploadProducts extends ProductFeatures
{
    public function ProductDetails()
    {
        echo "produc details";
    }
    public function ProductImages()
    {
        echo "product images";
    }
    public function ProductOwner()
    {
        echo "product owner";

    }

    public function other()
    {
        echo "other function";

    }

}

$product = new UploadProducts();

$product->ProductDetails();
echo "<br>";
$product->ProductImages();
echo "<br>";
$product->ProductOwner();
echo "<br>";
$product->other();
echo "<br>";
$product->common();
echo "<br>";
