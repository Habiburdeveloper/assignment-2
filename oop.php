<?php

class Book{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    
    public function __construct($title = "", $availableCopies = 0) {
        // TODO: Initialize properties
            $this -> title = $title;
            $this -> availableCopies = $availableCopies;
        }
   
   
   // TODO: Add getTitle method
   public function getTitle(){
        return $this -> title;
   }
   
    
   
   
   
    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
        return $this -> availableCopies;
    }
   
   
   
    // TODO: Add borrowBook method
    public function borrowBook($dicrease = 0){
        $borrowBook = $this -> availableCopies -= $dicrease;
        return $borrowBook;
    }
   
   
   
    // TODO: Add returnBook method
    public function returnBook($increase = 0){
        $returnBook = $this ->availableCopies  += $increase;
        return $returnBook;
    }


   }
   
   
   class Member{
    // TODO: Add properties as Private
    private $name;
    private $borrowBook = [];
   
   
    public function __construct($name = "") {
         // TODO: Initialize properties
         $this -> name = $name;
        }
   
   
   
    // TODO: Add getName method
    public function getName(){
        return $this -> name;
    }
    
    // TODO: Add borrowBook method
    public function borrowBook(Book $getBook){
            
        $this -> borrowBook[] = $getBook;
    }
    
   
   
   
    // TODO: Add returnBook method
    public function returnBook(Book $return){
       $key = array_search($return , $this -> borrowBook);
       if($key !== false){
        unset($this -> borrowBook[$key]);
       }
    }
    
   }


   class Library{
    private $books = [];
    private $members = [];

    public function addBook(Book $book){
        $this -> books[] = $book;
    }
    public function addMembers(Member $member){
        $this -> members[] = $member;
    }
    public function availableBooks(){
        foreach($this -> books as $book){
            echo "Available Books :". $book-> getTitle().$book-> borrowBook();
        }
    }
    public function returnBooks(){
        foreach($this -> books as $book){
            echo "Available Books :". $book-> getTitle().$book-> returnBook();
        }
    }

    public function increase($title, $increase){
        foreach($this -> books as $book){
            if($book-> getTitle() === $title){
                $book -> returnBook($increase);
                return;
            }
        }
    }
    public function dicrease($title, $dicrease){
        foreach($this -> books as $book){
            if($book-> getTitle() === $title){
                $book -> borrowBook($dicrease);
                return;
            }
        }
    }
   }
   
   
   
   // Usage
   // You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


    // TODO: Create 2 books with the following properties
   
   //  book 1
   $book1 = new Book("The Great Gatsby", 5);
   $book2 = new Book("To Kill a Mockingbird", 3);


   // TODO: Create 2 members with the following properties

    //  member 1
    $member1 = new Member("Jone Doe");
    $member2 = new Member("Jane Doe");
    


   // TODO: Apply Borrow book method to each member
   $library = new Library();
   $library -> addBook($book1);
   $library -> addBook($book2);

   $library -> addMembers($member1);
   $library -> addMembers($member2);

   $member1 -> borrowBook($book1);
   $member2 -> borrowBook($book2);


   $library -> dicrease("The Great Gatsby",1);
   $library -> dicrease("To Kill a Mockingbird",1);
   // TODO: Print Available Copies with their names:
   echo"Available Copies : ". $book1 -> getTitle()."-".$book1 -> borrowBook()."<br>";
   echo"Available Copies : ". $book2 -> getTitle()."-".$book2 -> borrowBook()."<br>";