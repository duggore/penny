# Penny 2.0

This is the estimate & billing software used by About Blank Design Office 

### Setup

1. Clone the repository

        git clone git@github.com:AboutBlank/penny.git
        cd penny

2. Add **composer** in your project and install dependencies
		
        curl -sS https://getcomposer.org/installer | php
        php composer.phar install
 
3. Install **Grunt** via Node

        npm install
   
4. Run the `vendor` script to copy ressources from composer 

        grunt vendor