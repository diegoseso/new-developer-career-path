<?php


/**
 * Imagine we want to design a software to control our personal library, the idea
 * will be to have an application to search for book information to see if we have any match in our personal collection
 *
 * To build the personal Library application you will need to:
 *
 * 1. Create a base class for Book. Book will have the following properties ( title, author, pageNumber, summary, coverDescription )
 *    It will also have methods open(), close(), hasRelatedInformation().
 * 2. Create child Inherited classes for Specific categories available on the library ( NovelBook, BiographyBook and AdventureBook)
 * 3. Biography will have an extra private property called subjectName to store the person name to whom the biography is about,
 *    also 2 specific methods called getSubjectName() that will return subjectName.
 *                                   isAutoBiography() will compare  "subjectName" and "author" if they are equal it will return true, otherwise false
 * 4. Create an Interface to be implemented on two of the book categories as wished called HumorousBook
 *    This interface will have as contract ContainsHumor() method
 *    Implement interface on the 2 chosen Classes
 *
 *
 * Hint: It is difficult to think into non animated objects to have actions, but it is important to imagine that this actions are being executed
 * by the machine, the methods are the things that a machine can do with those non tangible objects. For Example if we have a book
 * and it has an open method, it is not that the book can open itself , instead the computer when running our software can create
 * a book object dan then can open() it  ... it can help to think at times on the computer the person in this invented world made of software
 * that can interact with the objects available ...
 */



