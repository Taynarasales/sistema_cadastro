"# sistema_cadastro" 

O objetivo desse projeto é fornecer informações sobre a implementação do sistema de cadastros de usuários PHP e MySQL. O sistema permite realizar operações básicas de gerenciamento de usuários, como criar novos registros, visualizar usuários existentes, editar informações de usuários e excluir registros de usuários.

![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/15ac168a-c11d-4e9c-a83f-407ca48820ea)



###  	Funcionalidade

1)	Cadastro de novos usuários
2)	Visualização de usuários cadastrados
3)	Edição de informações de usuários
4)	Exclusão de usuários



### Pré-requisitos 

1)	 Instalar o Laragon
2)	Servidor web ( Apache) com PHP instalado
3)	Banco de dados MySQL
4)	Instalar Framework Frontend bootstrap 5
5)	Conexão com a internet (para fazer o download de bibliotecas e dependências, se necessário)
6)	Um editor de código de sua preferência.


### Requisitos técnico do Sistema: 

O sistema deve permitir que novos usuários se cadastrem fornecendo as seguintes informações: Nome, E-mail , Senha e data de nascimento 

Deve haver validações para garantir que o e-mail seja único e válido, e que a senha atenda a critérios mínimos de segurança.
Os usuários cadastrados devem ser armazenados em um banco de dados.
Após o cadastro, os usuários devem poder fazer login no sistema.

## instalações 
### laragon 
O Laragon, se conecta com banco de dados e executa consultas de forma extremamente simples. Atualmente, o Laragon suporta quatro sistemas de bancos de dados: MySQL, Postgres, SQLite, e SQL Server

![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/fcca82ab-9e76-41db-b8b9-a0f19f48bdae)


iniciar tudo: Inicia todas as extensões instaladas no seu Laragon.
Web: Direciona você para uma página com informações sobre a instância do Laragon que está rodando.
Banco de dados : Gerencia suas conexões de banco de dados, e permite acessar os mesmos via HeidiSQL (mais sobre essa ferramenta adiante).
Terminal: Abre a linha de comando do servidor (Utiliza Cmder, falaremos mais sobre ele).
Root: Navegar pelos Arquivos locais dos seus projetos.

## phpMYAdmin

 O phpMyAdmin para gerenciar o seu banco de dados MySQL dentro do cPanel. O phpMyAdmin é uma ferramenta via web bastante poderosa e versátil, que lhe permite realizar praticamente qualquer operação na linguagem SQL com seu banco de dados 
 ### tutorial de uso do phpMYAdmin


 Inicie o Laragon: Primeiro, inicie o Laragon em seu computador. Você pode fazer isso a partir do ícone na área de trabalho ou do menu de programas.
Acesse o phpMyAdmin: Após iniciar o Laragon, você pode acessar o phpMyAdmin através do navegador da web. Por padrão, o Laragon instala o phpMyAdmin e o disponibiliza em http://localhost/phpmyadmin/.
Faça login no phpMyAdmin: Na página de login do phpMyAdmin, você precisará fazer login com as credenciais padrão. Por padrão, o nome de usuário é "root" e a senha é deixada em branco.


Após fazer login, você será redirecionado para a interface principal do phpMyAdmin. No menu lateral esquerdo, você verá uma seção chamada "Banco de dados". Clique nessa seção.


![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/4e46da3f-1b2b-4323-8f62-168534ecc7f3)


Para criar um banco de dados chamado "cadastros", você será redirecionado para a interface. Coloque o nome da tabela como "cadastro_gerais" e defina o número de colunas como 5.
Obs: Nomeei dessa forma, pois, caso contrário, será necessário modificar o código.

![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/5d2867d8-db56-495d-a2cf-db6948925cd9)

##configuração dos campos  da tabela

•	ID INT AUTO_INCREMENT PRIMARY KEY: Este é um campo de identificação único para cada usuário, que é automaticamente incrementado sempre que um novo usuário é adicionado. Ele também é definido como a chave primária da tabela.

•	Nome VARCHAR(255): Este campo armazena o nome do usuário, com um limite de 100 caracteres.

•	Email VARCHAR(255) UNIQUE: Este campo armazena o endereço de e-mail do usuário e é marcado como único para garantir que não haja duplicatas de e-mails na tabela.
•	Senha VARCHAR(255): Este campo armazena a senha do usuário.


•	DataNascimento DATE: Este campo armazena a data de nascimento do usuários



### Instalação do Bootstrap 

![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/a909663c-7a7b-476d-a207-a69cb833da86)







Após a instalação do bootstrap 4 , acesse o VS CODE  e digite b4,para abrir os comandos CSS e html copilados.





![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/fbfc6361-ba96-431d-a929-7606fbdaadd0)










![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/10d7f4d9-f8db-4653-812b-e6e8c1175955)


### inicio do projeto 


Abra o Laragon. Clique no botão direito do menu e acesse a pasta 'web' ('Cadastro') para acessar o projeto web."



![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/eb954b9a-b057-4e30-99bf-3c0640f32987)









### Conteúdo dos código-fonte  



![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/93522971-aff2-46b0-8818-ff7aaf279430)








Um arquivo index.php para a interface principal do usuário, onde ele pode acessar as funcionalidades do sistema.
Um arquivo salvar-usuario.php para lidar com a criação, atualização e exclusão de usuários no banco de dados.
Um arquivo listar-usuario.php  para exibir a lista de usuários cadastrados.
Um arquivo config.php para armazenar as configurações de conexão com o banco de dados.
Um arquivo database.sql contendo o script para criar a estrutura inicial do banco de dados, incluindo a tabela de usuários





### USO
![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/c330f0fb-426a-483f-88a5-0663ae7a9c93)












![image](https://github.com/Taynarasales/sistema_cadastro/assets/90871074/6c3661d3-95fe-467a-902d-4a490fd14a65)
















1)	Cadastre um novo usuário clicando no link "Cadastrar Usuário" na página inicial.
2)	Visualize os usuários cadastrados clicando no link "Listar Usuários".
3)	Para editar ou excluir um usuário, clique nos links correspondentes na lista de usuários






