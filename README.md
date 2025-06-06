# RandomUser Laravel App

Aplicação simples em Laravel que consome a API https://randomuser.me e exibe 100 usuários.
![image](https://github.com/user-attachments/assets/9080e236-5c10-4e1a-9295-1ed60793ae48)


<br />

## Como executar o projeto localmente

### 1. Clone o repositório

```bash
git clone https://github.com/barbaraleles/apiRandomUser.git
```
### 2. Abra a pasta onde está o projeto
```bash
cd apiRandomUser
```
### 3. Instale as dependências PHP
```bash
composer install
```
### 4. Copie o .env e gere a key
```bash
cp .env.example .env
php artisan key:generate
```
### 5. Inicie o servidor local
```bash
php artisan serve
```
### 6. No navegador acesse:
```bash
http://localhost:8000
```
