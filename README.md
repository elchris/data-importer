## Setting-up the Project

### Checkout the project

### Install Box on Your System

"Box" will generate the "phar" archive of your work based on [./box.json](https://github.com/elchris/data-importer/blob/main/box.json)

- Follow these instructions:
  - https://github.com/box-project/box/blob/main/doc/installation.md
    - Mac Users: the HomeBrew route works very well.

### Run Composer install

### Run PHPUnit Tests

- Ensure the basic project bootstrapping is good:
  - `./vendor/bin/phpunit`

### Generate Phar file

- Run:
  - `box compile`
    - this should generate a `data-importer.phar` file in your directory

### Run / Test the Phar File

- Run:
  - `./data-importer.phar tests/AAA1-Customers.csv `

## Engineering Notes

- `src/index.php` is what echoes the output when running `./data-importer.phar`
- Bonus points for test-driving the solution, but not required.
- Feel free to include any open-source library in your project.
- Feel free to structure the code and create as many classes as you see fit.

## Task Description
Create an executable "phar" archive which will perform the following:

1. Connect a local SQLite database named `serviceline.db`. This database should be stored on disk and not in memory.
2. Create a table named `customer` to store the data in `AAA1-Customers.csv`. You are free to design the structure of the table, and your program is responsible for creating the table.
3. Import the data from `AAA1-Customers.csv` into the `customer` table.
4. On completion, print the number of customers that were created or updated.

## General Notes
- Assume the program will be run multiple times.
- It can be assumed all data is based in the United States.
- Empty values should be inserted as `null` wherever possible.
- (Optional) Create indexes on the `customer` table where you may think necessary.
- The following command will be used to execute the script:

```bash
php ./data-importer.phar tests/AAA1-Customers.csv
```

- Output an error if the filepath passed in as an argument to the script does not exist.

## Customer Notes
- A unique, single column, primary key that is independent from the customer number is required.
- A `customer` record should be created if it does not already exist based on the "CustomerNumber" column, updated otherwise.
- A valid `customer` record requires a non-empty "CustomerNumber" and either a non-empty "FirstName" or non-empty "LastName" value.
- Invalid email addresses should be nullified.
- Invalid phone numbers should be nullified.
- Valid phone numbers should be formatted as (XXX) YYY-ZZZZ where X, Y, and Z are all digits.
- (Optional) A phone number must have a real United States area code to be considered valid.
- The column in the `customer` table that stores the "Birthday" data should be a `date` type and only store valid dates.
