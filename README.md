
# News Generator

Programa simples para gerar um cadastro de categoria e noticia, e depois visualizar/procurar as mesmas.



## Stack utilizada

* Laravel
* MySQL
* Docker (sail)




## Instalação

Instale PHP e suas extensões

```bash
sudo apt update
sudo apt upgrade
sudo apt install software-properties-common ca-certificates lsb-release apt-transport-https
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.2 php8.2-cli php8.2-fpm php8.2-common php8.2-mysql php8.2-xml php8.2-mbstring php8.2-curl php8.2-gd php8.2-intl php8.2-zip php8.2-bcmath php8.2-soap php8.2-opcache php8.2-readline php8.2-imap php8.2-ldap php8.2-json php8.2-pspell php8.2-tidy php8.2-sqlite3 php8.2-pgsql php8.2-xdebug php8.2-xmlrpc php8.2-dev php8.2-redis php8.2-memcached php8.2-msgpack php8.2-igbinary
```

Instale o composer

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

Instale o Laravel

```bash
composer global require laravel/installer
export PATH="$HOME/.composer/vendor/bin:$PATH"
```

Instale o Docker

```bash
sudo apt update
sudo apt install apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
sudo apt update
sudo apt install docker-ce
```

Instale o docker-compose

```bash
sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```
    
## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/vecarrilho/news_generator.git
```

Entre no diretório do projeto

```bash
  cd my-project
```

Copie o .env

```bash
  cp .env.example .env
```

Instale as dependências

```bash
  composer install
```

Defina as variaveis do banco

```bash
  DB_CONNECTION=mysql
  DB_HOST=mysql
  DB_PORT=3306
  DB_DATABASE=laravel
  DB_USERNAME=sail
  DB_PASSWORD=password
```

Suba os containers

```bash
  ./vendor/bin/sail up
```

Gere a key do .env

```bash
  ./vendor/bin/sail art key:generate
```

Rode as migrations

```bash
  ./vendor/bin/sail art migrate
```

Acesse a aplicação

```bash
  http://localhost
```


## Demonstração


https://giphy.com/gifs/axhHQdmVzTi9DMqCFy