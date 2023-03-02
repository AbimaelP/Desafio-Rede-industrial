# Desafio proposto para o processo seletivo da empresa Rede Industrial

# INSTRUÇÕES DO PROJETO 


# Banco de dados

- As configurações de conexão com o bando de dados estão no arquivo: backend/database/dbconnect.php

- Crie um banco de dados, com essas informações, de preferencia MySQL: host = localhost, user = root, password = '', dbname = 'redeindustrial'

- No campo senha, insira a senha do seu banco

- E importe o dump que esta aqui: backend/database/redeindustrial_users.sql


# Necessario PHP 7

- Para rodar o projeto basta rodar esse comando no terminal dentro da pasta "test4"
    
  php -S localhost:8000/login.php -d short_open_tag=true -d display_errors=false

- Esse comado fará com que o projeto encaminhe a pagina diretamente para o caminho "login.php"

- Mas tambem é possivel rodar o mesmo, diretamente no apache, e apenas colocar o caminho /login.php no final da URL


# Explicações sobre o projeto

- O frontend foi desenvolvido usando html, css e js. E o backend foi feito inteiramente em php.

- O Projeto tem 4 rotas.

- index.php: A rota index.php é apenas para encaminhar usuarios que não sejam "admin" para outra rota, quando tentarem acessar o Painel Administrativo.

- login.php: Rota que faz o login do usuario

- register.php: Rota que para cadastrar novos usuarios que não sejam "Admin"

- admin_panel.php: Rota que lista usuarios cadastrados no site. Também é possivel excluir usuarios, por essa mesma rotar

- A validação de autenticação, é feita por meio de tokens, gerados aleatoriamente no backend da aplicação, pelo php.



## DADOS DE ACESSO DO ADMIN ##

- login: admin@gmail.com
- senha: admin