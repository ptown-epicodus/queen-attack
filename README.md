# Queen Attack

#### Website for practicing unit testing with PHP for Epicodus, 02.13.2017

#### By Patrick McGreevy & Leah Sherrell

## Description

This website tells a user whether a queen can make an attack on a chess board, based on initial and destination coordinates.


## Setup/Installation Requirements
1. Set project root as working directory in CLI.
2. Run `$ composer install --prefer-source --no-interaction`.
3. Run `$ cd web`.
4. Run `$ php -S localhost:8000`.
5. Visit **`localhost:8000`** in web browser.


## Technologies Used

HTML

CSS

Bootstrap

JavaScript

jQuery

PHP

Silex

Twig

Composer

JSON

## Specs

|Behavior|Input|Output|
|--------|-----|------|
|Queen not able to attack own coordinates.|(1,2),(1,2)|false|
|Queen able to attack horizontally.|(1,2),(4,2)|true|
|Queen able to attack vertically.|(1,2),(1,5)|true|
|Queen able to attack diagonally.|(1,2),(2,3)|true|
|Queen not able to attack elsewhere from above.|(1,2),(3,3)|false|
|Queen not able to attack outside board.|(1,2),(9,2)|false|

## Known Bugs

_No known bugs or issues_

### License

Copyright (c) 2017 _**Patrick McGreevy**_ & _**Leah Sherrell**_

This software is licensed under the MIT license.
