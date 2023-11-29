<?php
//Class abstract product
abstract class Product {
     protected $name;
	abstract public function asdname();
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}
//Class book
class Book extends Product {
  public function asdname(){ }
  private $stranici;
  public function __construct($name, $stranici) {
  	 $this->stranici = $stranici;
  	 $this->setName($name);
  }
   
   public function __toString() {
        return "Book Name: " . $this->getName() . ", Pages: " . $this->stranici . "\n";
    }
}

class Cart {
	private $products;

    public function __construct() {
        $this->products = [];
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function listCart() {
    	foreach ($this->products as $product) {
    		 echo $product . "<br>";
    	}
    }



    public function checkCart() {
        echo "<pre>";
        var_dump($this->products);
        echo "</pre>";
    }
}

$book_obj = new Book("Zaglavie1", "11");
$book_obj2 = new Book("Zaglavie2", "22");
$cart_obj = new Cart();

$cart_obj->addProduct($book_obj);
$cart_obj->addProduct($book_obj2);
//$cart_obj->checkCart();
$cart_obj->listCart();
//To do payment class