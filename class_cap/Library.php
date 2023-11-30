<?php

class Book {
	private $title;
	private $author;
	private $publicationYear;
	private $isbn;

	public function __construct($title, $author, $publicationYear, $isbn) {
		$this->title = $title;
		$this->author = $author;
		$this->publicationYear = $publicationYear;
		$this->isbn = $isbn;
	}

    public function getIsbn() {
        return $this->isbn;
    }

     public function getTitle() {
    return $this->title;
}


}

class Library {
    private $books = [];

    public function __construct() {
       
    }
    
    public function addBook(Book $book) {
        if ($this->isIsbnUnique($book->getIsbn())) {
            $this->books[] = $book;
            echo "Book added successfully.<br>";
        } else {
            echo "A book with this ISBN already exists.<br>";
        }
    }
        private function isIsbnUnique($isbn) {
        foreach ($this->books as $book) {
            if ($book->getIsbn() === $isbn) {
                return false;
            }
        }
        return true; 
    }
     
    public function removeBook($isbn) {
        foreach ($this->books as $key => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->books[$key]);
                echo "Book removed successfully.<br>";
                return;
            }
        }
        echo "No book found with that ISBN.<br>"; 
    }
    
    public function findBook($isbn) {
    	echo "Queried books:" . "<br>";
    	foreach ($this->books as $book) {
             if ($book->getIsbn() === $isbn) {
            echo "Book name is: " . $book->getTitle() . "<br>";
             }
             else {
             	echo "No book found.";
             	break;
             }
    	}
    }

    public function checkBooks() {
     	echo "<pre>";
     	var_dump($this->books);
     	echo "</pre>";
     }
}

$Library = new Library();
$myBook = new Book ("IME Kniga", "Avtor", "9999", "123");
//$myBook2 = new Book ("IME Kniga1", "Avtor", "9999", "123");
//$Library->addBook($myBook);
//$Library->removeBook("123");
//$Library->addBook($myBook2);
//$Library->checkBooks();
//$Library->findBook("123");

