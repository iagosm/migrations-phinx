Verificar se o Composer está instalado
### composer -v

Criar o arquivo composer.json com a instrução básica.
### composer init

Instalar a biblioteca Phinx.
### composer require robmorgan/phinx

Criar o arquivo "phinx.php" com as configurações e alterar as mesmas
### vendor/bin/phinx init -f php

Testar as configurações
### vendor\bin\phinx test

Criar a migrations.
### vendor\bin\phinx create Users

Executar as migrations.
### vendor\bin\phinx migrate

Adicionar Coluna a migrations.
### vendor\bin\phinx create AddColumnPassowordUsers

Como voltar caso tenha feito besteira?
Executar o rollback na última migration - reverter as alterações realizadas.
### vendor\bin\phinx rollback

Onde verificar mais sobre as querys a serem montadas.
### https://book.cakephp.org/phinx/0/en/migrations.html

Criar o diretório para seed
### mkdir db\seeds\

Criar uma seed
### vendor\bin\phinx seed:create NomeSeed
### vendor\bin\phinx seed:create AddUser

Executar as seed
### vendor/bin/phinx seed:run

Principais funcionalidades:
- Migrações: Permite adicionar, modificar ou excluir tabelas e colunas do banco de dados.
- Versionamento: Garantir que o banco de dados esteja sempre atualizado, tenha o histórico das alterações.
- Rollbacks: Reverter ou desfazer migrações anteriores, permitindo retornar ao estado anterior do banco de dados.
- Seeds: Preencher o banco de dados com dados iniciais ou de teste.