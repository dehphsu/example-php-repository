example-php-repository
======================

Example php repository with phing, phpunit suitable for usage in [Jenkins](http://jenkins-ci.org/).

Fork the project and try it our for yourself.

Dependancies
------------

Usage
-----

To run all the programs type:

    phing

If you wish to run just one you can do.  Lets take php lint for example

    phing lint

Some of the commands have 2 targets.  One is the machine readable output that is used as Jenkins for input.  These have the postfix -ci.  

If you want the human readble version just run the version of it without -ci on the end.  I.E. 

    phing phpcs
    
instead of

    phing phpcs-ci
    
If you wish to view the output in a web browser you can.  Point your browser at the build directory or if you are using PHP 5.4 or later run

    phing analysis
    
and then view http://localhost:8000

There are intentional style errors in the code to help it produce output.

### Useful commands

`phing -l` will display all the possible phing targets

    Default target:
    -------------------------------------------------------------------------------
     build
    
    Main targets:
    -------------------------------------------------------------------------------
     analysis       Start a PHP server to view analysis output
     clean          Clean up artifact directories
     lint           Perform syntax check of httpdocscode files
     parallelTasks  Run the phpmd, phpcs, phpdoc and phploc tasks in parallel using a maximum of 2 threads.
     phpcb          Aggregate tool output with PHP_CodeBrowser
     phpcpd         Find duplicate code using PHPCPD
     phpcs          Find coding standard violations using PHP_CodeSniffer and print human readable output. Intended for usage on the command line before committing.
     phpcs-ci       Find coding standard violations using PHP_CodeSniffer creating a log file for the continuous integration server
     phpdepend      Calculate software metrics using PHP_Depend
     phpdoc         Generate API documentation using PHPDocumentor
     phploc         Measures the size of the project and count it's tests. Human reabable output
     phploc-ci      Measures the size of the project and count it's tests. Generates phploc.csv
     phpmd          Generate pmd.xml using PHPMD
     phpunit        Run unit tests using PHPUnit and generates junit.xml and clover.xml
     prepare        Create artifact directories
     server         Start a PHP server to view the code
    
    Subtargets:
    -------------------------------------------------------------------------------
     build
     update-live
     update-test

 