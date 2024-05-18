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
   
   
    public function __construct($name = "") {
         // TODO: Initialize properties
         $this -> name = $name;
        }
   
   
   
    // TODO: Add getName method
    public function getName(){
        return $this -> name;
    }
    
    // TODO: Add borrowBook method
    public function borrowBook($getBook = 0){
        $borrowBook = $getBook;
        return $borrowBook;
    }
    
   
   
   
    // TODO: Add returnBook method
    public function returnBook($return = 0){
        $returnBook = $return;
        return $returnBook;
    }
    
   }
   
   
   
   // Usage
   // You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


    // TODO: Create 2 books with the following properties
   
   //  book 1
   $bookObject = new Book("The Great Gatsby", 5);
   $bookObject -> getTitle();
   $bookObject -> getAvailableCopies();
   $bookObject -> borrowBook(1)."<br>";
   $bookObject -> returnBook();

   // book 2
   $book_2_object = clone $bookObject;
   $book_2_object = new Book("To Kill a Mockingbird", 3);
   $book_2_object -> getTitle();
   $book_2_object -> getAvailableCopies();
   $book_2_object -> borrowBook(1)."<br><br><br><br>";
   $book_2_object -> returnBook();

 
   
   // TODO: Create 2 members with the following properties

    //  member 1
    $memberObject = new Member("Jone Doe");
    $name_1 = "Member 1 - Name :". $memberObject -> getName()."<br>";
    $memberObject -> borrowBook(1);
    $memberObject -> returnBook();
 
    //  member 2
    $member_2_Object = clone $memberObject;
    $member_2_Object = new Member("Jane Smith");
    $name_2 = "Member 2 - Name :". $member_2_Object -> getName();
    $member_2_Object -> borrowBook(1);
    $member_2_Object -> returnBook();


   // TODO: Apply Borrow book method to each member
   function bookLibrary(){

   }
   
   
   // TODO: Print Available Copies with their names:
   echo"Available Copies : ". $bookObject -> getTitle()."-".$bookObject -> borrowBook()."<br>";
   echo"Available Copies : ". $book_2_object -> getTitle()."-".$book_2_object -> borrowBook()."<br>";