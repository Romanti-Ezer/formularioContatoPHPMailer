# Formulário de contato - Front-end e Back-end
* Front-end: HTML, CSS e Javascript (Ajax)
* Back-end: PHP
* Biblioteca: PHPMailer
* Gerenciador de dependências: Composer

![Preview do formulário](/preview.png)

## Para usar:
* `composer install` para instalar as dependências
* Configurar o SMTP em `app/src/Mail.php`. Nas configurações atuais está para o Gmail, então só colocar o e-mail e senha caso use o Gmail também

## Observações
Está sendo feito um POST para o index.php em `public/index.php`, porém se a pasta `public` for configurada como DocumentRoot, não é necessário ter um index.php na raiz do projeto.
Talvez aja várias formas de melhorar essa estrutura, este é apenas um teste.