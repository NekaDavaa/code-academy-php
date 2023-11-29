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
  private $price;
  public function __construct($name, $stranici, $price) {
  	 $this->stranici = $stranici;
  	 $this->price = $price;
  	 $this->setName($name);
  }
   
   public function __toString() {
        return "Book Name: " . $this->getName() . ", Pages: " . $this->stranici . "\n";
    }

     public function getPrice() {
        return $this->price;
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


    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }



    public function checkCart() {
        echo "<pre>";
        var_dump($this->products);
        echo "</pre>";
    }
}

$book_obj = new Book("Zaglavie1", "11", "1");
$book_obj2 = new Book("Zaglavie2", "22", "2");
$book_obj3 = new Book("Zaglavie3", "33", "3");
$cart_obj = new Cart();

$cart_obj->addProduct($book_obj);
$cart_obj->addProduct($book_obj2);
$cart_obj->addProduct($book_obj3);
//$cart_obj->checkCart();
//$cart_obj->listCart();
//To do payment class
class Payment {
    private $cart;
    private $paymentType;

    public function __construct(Cart $cart, PaymentType $paymentType) {
         $this->cart = $cart;
         $this->paymentType = $paymentType;
    }

    public function proceedPayment() {
        $totalPrice = $this->cart->getTotalPrice();
        echo "Total Price: " . $totalPrice . "lv.<br>";
        echo "Payment Method: " . $this->paymentType->value . "<br>";
        echo "Payment Processed Successfully!";
    }
}

enum PaymentType: string {
    case CreditCard = 'creditcard';
    case PayPal = 'paypal';
    case Bitcoin = 'bitcoin';
}


$payment_obj = new Payment($cart_obj, PaymentType::CreditCard);

$payment_obj->proceedPayment();