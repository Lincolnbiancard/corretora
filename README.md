# corretora
Api para corretores analisarem o perfil de compra e venda de ações do cliente, e fazer venda.


Passo a passo para rodar a api:

Após baixar o projeto execute os seguintes comandos no projeto:

1 - npm install

2 - composer update

3 - renomeie o arquivo .env.example para .env e coloque as credenciais do Banco de dados

4 - php artisan migrate // Criar as tabelas no banco de dados

5 - php artisan db:seed // Popula o banco de dados

Fim, depois disso é so fazer os testes.
