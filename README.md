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