# Sistema de Gerenciamento de Usuários

Sistema desenvolvido com CodeIgniter 3 para gerenciamento de usuários com operações CRUD e autenticação.

## 🚀 Tecnologias Utilizadas

- PHP 7.4
- CodeIgniter 3
- MySQL 5.7
- Docker & Docker Compose
- jQuery 3.6
- Bootstrap 5.2

## 📋 Funcionalidades

- Autenticação de usuários (Email/CPF)
- Cadastro completo de usuários
- Listagem com paginação
- Edição inline de registros
- Exclusão lógica (soft delete)
- Validações em tempo real
- Sistema de templates responsivo

## 🛠️ Instalação

1. Clone o repositório
```bash
git clone https://github.com/rccheruti/jo.git
```

2. Inicie os containers Docker
```bash
docker-compose up -d
```

3. Acesse o sistema
```
http://localhost:8000
```

## 🔑 Acesso ao Sistema

Use as seguintes credenciais para testar o aplicativo:

```
Email: admin@admin.com
CPF: 82103448030
```

## 📦 Estrutura do Projeto

```
project/
├── app/
│   ├── application/
│   │   ├── controllers/
│   │   ├── models/
│   │   ├── views/
│   │   └── libraries/
│   └── public/
│       ├── scripts/
│       └── css/
├── db/
│   └── init.sql
└── docker-compose.yml
```

## ⚙️ Configurações

### Banco de Dados
```env
DB_HOST=mysql-db
DB_USER=ci_user
DB_PASS=ci_pass
DB_NAME=codeigniter_db
```

## 🔍 Recursos Implementados

### Autenticação
- Login via Email/CPF
- Proteção de rotas
- Controle de sessão

### Interface
- Templates responsivos
- Modais para CRUD
- Feedback visual de ações
- Menu adaptativo

### Validações
- Validação de CPF em tempo real
- Máscaras para telefone/celular
- Campos obrigatórios
- Feedback de erros

### Dados
- Soft delete
- Normalização de dados
- Migrations para banco
- Seeder para usuário admin

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.