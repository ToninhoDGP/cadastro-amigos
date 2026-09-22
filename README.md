# 👥 Sistema de Cadastro de Amigos (CRUD)

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

Aplicação web interativa para gerenciamento de contatos e lista de amigos com controle de acesso por autenticação de sessão. Projeto desenvolvido como atividade prática do curso de Desenvolvimento de Sistemas (Etec).

---

## 🚀 Funcionalidades

- 🔒 **Sistema de Autenticação:** Proteção de rotas com controle de sessão (`session_start()`).
- ➕ **Cadastrar Amigos (Create):** Inserção de novos registros com nome, e-mail e telefone no banco de dados.
- 📋 **Listar Amigos (Read):** Exibição dinâmica dos dados cadastrados em tabela HTML.
- 🗑️ **Excluir Amigos (Delete):** Remoção de registros via parâmetro `GET` com confirmação.
- 🚪 **Logout Segura:** Encerramento completo e destruição da sessão do usuário.

---

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP 8.x
- **Banco de Dados:** MySQL (conexão via extensão `mysqli`)
- **Servidor Local:** XAMPP (Apache & MySQL rodando na porta `3307`)
- **Front-end:** HTML5 semântico
- **Versionamento:** Git & GitHub

---

## ⚙️ Como Executar o Projeto Localmente

1. **Clone este repositório:**
   ```bash
   git clone [https://github.com/ToninhoDGP/cadastro-amigos.git](https://github.com/ToninhoDGP/cadastro-amigos.git)