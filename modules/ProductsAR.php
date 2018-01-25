<?php
class ProductsAR extends ActivRecord{
	public $products_id;
	public $name;
        public $description;
	public $price;
	public $image;
	public static $table = "products";
	public static $key = "products_id";
}