## Instalação
    
    git clone git@github.com:4leeX/modulo_produtos.git
    composer install
    copiar e colar o .env.example e renomear com o nome de .env
    php artisan key:generate
    

## Inicialização 

    Sugiro o uso de programas com o Xampp para iniciar seu banco de dados local.
    Após disso crie uma base de dados com o nome que preferir e informe os demais parametros para conexão com seu banco de dados no seu arquivo .env.
    
    php artisan migrate (--seed) caso deseje o banco de dados populado com dados fictícios utilize o "--seed"
    php artisan serve
    
    Dump do banco de dados se encontra na pasta de nome 'mysql'

