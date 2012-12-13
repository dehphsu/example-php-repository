example-php-repository
======================

Example php repository with phing, phpunit suitable for jenkins


Useful commands
---------------

`phing -l` will display all the possible phing targets

    Default target:
    -------------------------------------------------------------------------------
     build
    
    Main targets:
    -------------------------------------------------------------------------------
     clean          Clean up artifact directories
     lint           Perform syntax check of httpdocscode files
     parallelTasks  Run the phpmd, phpcs, phpdoc and phploc tasks in parallel using a maximum of 2 threads.
     phpcb          Aggregate tool output with PHP_CodeBrowser
     phpcpd         Find duplicate code using PHPCPD
     phpcs          Find coding standard violations using PHP_CodeSniffer and print human readable output. Intended for usage on the command line before committing.
     phpcs-ci       Find coding standard violations using PHP_CodeSniffer creating a log file for the continuous integration server
     phpdepend      Calculate software metrics using PHP_Depend
     phpdoc         Generate API documentation using PHPDocumentor
     phploc         Generate phploc.csv
     phpmd          Generate pmd.xml using PHPMD
     phpunit        Run unit tests using PHPUnit and generates junit.xml and clover.xml
     prepare        Create artifact directories
     server         Start a PHP server to view the outputs
    
    Subtargets:
    -------------------------------------------------------------------------------
     build
     update-live
     update-test
 

