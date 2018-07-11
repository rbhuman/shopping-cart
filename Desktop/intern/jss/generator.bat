echo 'generate migration'
'-------------------------------------------------------'

php artisan make:migration create_category_table --create categories
php artisan make:migration create_product_table --create products


echo 'Generate models'
echo '..................................................'

php artisan make:model Product
php artisan make:model Category


echo 'Generate Controller'
echo '...................................................'

php artisan make:controller CategoryController -r -m Category
php artisan make:controller ProductController -r -m Product

echo '....................................................'
echo 'Finished'