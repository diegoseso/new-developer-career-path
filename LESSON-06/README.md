# Introduction

Oh this Lesson we will be explaining the basic programming paradigms used nowadays to program professionally. Programming paradigms are a way to structure software code so it is easier to maintain order, legibility and align with an unique way of work.

# Lesson Index

* 6 Programming Paradigms
* 6.1 Object Oriented Programming
*   6.1.1 Classes, properties and methods 
*   6.1.2 Creating new objects 
*   6.1.3 Inheritance
*   6.1.4 Interfaces (working with contracts)
*   6.1.5 The triangle of death
* 6.2 Structured Programming
* 6.3 Imperative Programming
* 6.4 Other paradigms
* 6.5 Thoughts about programming paradigms  

# 6 Programming paradigms

Programming paradigms are a way to classify programming languages based on their features. Languages can be classified into multiple paradigms.

Some paradigms are concerned mainly with implications for the execution model of the language, such as allowing side effects, 
or whether the sequence of operations is defined by the execution model. Other paradigms are concerned mainly with
the way that code is organized, such as grouping a code into units along with the state that is modified by the code. 
Yet others are concerned mainly with the style of syntax and grammar.

## 6.1 Object Oriented Programming

Is a programming paradigm based on the concept of "objects", which can contain data, in the form of fields (often known as attributes or properties),
and code, in the form of procedures (often known as methods). A feature of objects is an object's procedures that can access and often modify the data fields of the object 
with which they are associated (objects have a notion of "this" or "self"). In OOP, computer programs are designed by making them out of objects that interact with one another.
OOP languages are diverse, but the most popular ones are class-based, meaning that objects are instances of classes, which also determine their types.

Many of the most widely used programming languages (such as C++, Java, Python, etc.) are multi-paradigm and they support object-oriented programming 
to a greater or lesser degree, typically in combination with imperative, procedural programming. Significant object-oriented languages include 
Java, C++, C#, Python, PHP, JavaScript, Ruby, Perl, Object Pascal, Objective-C, Dart, Swift, Scala, Common Lisp, MATLAB, and Smalltalk.


### 6.1.1 Classes, Objects, properties and methods 


#### Classes 
 Is the definition for the data format and available procedures for a given type or class of object; may also contain data and procedures (known as class methods) themselves, i.e. classes contain the data members and member functions.

#### Objects
 Is an instantiation of a class, it means that is an entity built with the blueprint provided by the class. 
 
 For example in php, an object can created as: 
 
 `$person = new Person();`
 
 Where Person is the class: 
 
 `Class Person {
     // Here we will have the possible characteristics needed to built a person
 }`
  

#### Properties or Attributes

 The properties also known as Attributes are variables available within a Class, this variables will help you define valued characteristics for an object.
 
#### Methods or routines 

 The Methods also known as routines are functions availables within a Class, methods can not be called directly as when we are working with
 "functions", the methods can be called from the object, let´s explain 
 

### 6.1.2 Creating new objects 

To create an object out of a class, you need to use the ‘new’ keyword.

When creating/instantiating a class, you can optionally add brackets to the class name, as I did in the example below. To be clear, you can see in the code below how I can create multiple objects from the same class.

From the PHP’s engine point of view, each object is its own entity. Does that make sense?

`<?php 
 	$stefan = new person();
 	$jimmy = new person;
 ?>`


### 6.1.3 Inheritance

Inheritance allows us to write the code only once in the parent, and then use the code in both the parent and the child classes.

In order to declare that one class inherits the code from another class, we use the extends keyword. Let's see the general case:

`Class Parent {
  // The parent's class code
}
 
Class Child extends Parent {
  // The  child can use the parent's class code
}`

### 6.1.4 Interfaces (working with contracts)

An Interface allows the users to create programs, specifying the public methods that a class must implement, 
without involving the complexities and details of how the particular methods are implemented. 

It is generally referred to as the next level of abstraction. It resembles the abstract methods,
resembling the abstract classes. An Interface is defined just like a class is defined but with the class keyword replaced by the interface keyword and just the function prototypes. The interface contains no data variables. The interface is helpful in a way that it
ensures to maintain a sort of metadata for all the methods a programmer wishes to work on.

To create an interface, you can follow this syntax: 

`<?php  
  
interface MyInterfaceName { 
   public function methodA(); 
   public function methodB(); 
}  
  
?>`

To implement above interface, you would do it like:

`<?php 
   
 class MyClassName implements MyInterfaceName{ 
    public  function methodA() {     
      // method A implementation 
    }  
    public  function methodB(){  
   
      // method B implementation 
    }  
 } 
   
 ?>`

### 6.1.5 The deadly diamond of death

is an ambiguity that arises when two classes B and C inherit from A, and class D inherits from both B and C. If there is a method in A that B and C have overridden, and D does not override it, then which version of the method does D inherit: that of B, or that of C?

For example, in the context of GUI software development, a class Button may inherit from both classes Rectangle (for appearance) and Clickable (for functionality/input handling), and classes Rectangle and Clickable both inherit from the Object class. Now if the equals method is called for a Button object and there is no such method in the Button class but there is an overridden equals method in Rectangle or Clickable (or both), which method should be eventually called?

It is called the "diamond problem" because of the shape of the class inheritance diagram in this situation. In this case, class A is at the top, both B and C separately beneath it, and D joins the two together at the bottom to form a diamond shape.



### 6.2 Structured Programming

### 6.3 Imperative Programming

### 6.4 Other paradigms

### 6.5 Thoughts about programming paradigms
