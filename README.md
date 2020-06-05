# Blog

Yes, it is a blog, however it will keep being built on non-profit purpose.
 
We have the right to continue to breathe our brilliant idea into the green planet, also to contribute our masterpieces without barrier and prejudice to our space.  

And you are eligible to enjoy your life with everything we share.

This scheme and implementation are initiated and brought to you by Brandiel Community.   Anyone who is interested in enhancing functionalities of this site is always welcomed and encouraged to do pull request on develop branch.  
 
### Development Environment

- Web server: Apache, Nginx, etc.
- Language: PHP >= v7.2.9
- Framework: Symfony v4.4 (LTS)
- Database: SQLite3

### What to run prior to running

    php bin/console doc:mig:mig
    php bin/console ckeditor:install
    
    # if symfony command installed, you can run simple web server
    symfony serve

### Code Analyse

[PHPStan](https://github.com/phpstan/phpstan) focuses on finding errors in your code without actually running it. It catches whole classes of bugs even before you write tests for the code. It moves PHP closer to compiled languages in the sense that the correctness of each line of the code can be checked before you run the actual line.   
The following composer command is alias to `vendor/bin/phpstan analyse --level 8 src`

    composer analyse


### Coding Standards

[PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) has been
configured to detect violations of the defined coding standards for the
application.

The default rule is PSR-12 but you can change this in your config `phpcs.xml`, which should be copied first manually from `phpcs.xml.dist` before running this tool.  

To validate your code, simply run:

    vendor/bin/phpcs


### Inquiry

hello@brandiel.com


### License

This package is available under the MIT license.

### Last update

Fri Jun 5 12:31 2020 +1200 
