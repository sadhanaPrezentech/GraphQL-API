## Demo Of GraphSQl API ###
## Install library
$ composer require rebing/graphql-laravel

php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"

php artisan make:model Book -m

php artisan make:seeder BookSeeder

php artisan migrate --seed

## Retirive Books ##
Retrieve the list of books by running the query below in the query parameter:

{
  books {
    id
    title,
    author
  }
}

## Retirive Book ##
Return a specific book by running the query below in the query parameter:
{
  book(id: 6) {
    title,
    author
  }
}

## Create a book ##
Create a book by running the query below in the query parameter:
mutation createBook {
  createBook(title: "John Doe book", author: "johndoe@test.com", 
    language: "secret", year_published: "2020", isbn: "635353353") {
    id
    title
    author
  }
}

## Update a Book ##
Update a Book by running the query below in the query parameter:
mutation updateBook {
  updateBook(id: 2, title: "Mine", author: "sample book", language: "secret", year_published: "2020", isbn: "635353353") {
    id
    title
    author
  }
}


## Delete a Book ##
Delete a Book by running the query below in the query parameter:
mutation deleteBook {
  deleteBook(id: 2)  
}
