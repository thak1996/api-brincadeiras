# api-brincadeiras

Esta aplicação foi construída com o **micro-framework Lumen** (baseado em PHP) e serve como ponte entre um **aplicativo mobile** e o banco de dados.

Ela disponibiliza endpoints RESTful para operações CRUD (Create, Read, Update, Delete) sobre os recursos principais do sistema.

> 🎓 Este projeto foi desenvolvido com foco em estudo para a faculdade.

## 📱 Integração com o Front-end

Este back-end foi desenvolvido especificamente para ser utilizado por um **aplicativo mobile**, fornecendo todos os dados e operações necessários via API.

🔗 Repositório do app mobile: [brincar_e_conectar_flutter](https://github.com/thak1996/brincar_e_conectar_flutter)

## ✨ Principais funcionalidades

- Gerencia **Brincadeiras**, com dados como:
  - Categoria
  - Custo
  - Descrição
  - Dificuldade
  - Duração
  - Faixa etária
  - Materiais necessários
  - E outros

- Retornos padronizados em **JSON** para mensagens de sucesso e erro (via `ResponseService`).

- Interações com banco de dados usando **Eloquent ORM**.

- Popular o banco de dados com dados iniciais de brincadeiras via **arquivo JSON**.

- Ambiente completamente **dockerizado** para facilitar desenvolvimento e deploy.

## 🛠 Tecnologias utilizadas

- PHP 8.2+
- Lumen Framework 10.x
- MySQL 8.0 (via Docker)
- Composer (gerenciador de dependências)
- Docker & Docker Compose

## 🚀 Como rodar o projeto

### Pré-requisitos

- Docker e Docker Compose instalados
- Composer instalado (caso queira rodar fora do container)

### Passos para execução

```bash
# Subir os containers com build
docker-compose up --build -d

# Instalar dependências na máquina local
composer install

# Instalar dependências dentro do container
docker-compose exec app composer install

# Executar as migrações
docker-compose exec app php artisan migrate

# Popular o banco de dados com os seeds
docker-compose exec app php artisan db:seed
```

## 📂 Estrutura

Este projeto é composto por:

- Rotas RESTful para recursos de brincadeiras e tarefas
- Autenticação e middleware integráveis (se necessário)
- Seeds automáticos para popular o banco
- Dockerfile e docker-compose.yml configurados

---

## 🧑‍💻 Contribuição

Pull requests são bem-vindos!  
Para mudanças maiores, abra uma issue primeiro para discutirmos o que você gostaria de alterar ou melhorar.

---

## 📄 Licença

[MIT](LICENSE)

---

## 👤 Autor

**Franklyn Viana dos Santos**  
📧 E-mail: franklyn_vs_@hotmail.com  
🎓 RU Uninter: 4298019  
🔗 [LinkedIn](https://www.linkedin.com/in/franklyn-v-santos/)
