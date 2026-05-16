# Painel do Blog — Dashboard Administrativo

> Projeto desenvolvido na disciplina de **Web I** da faculdade.  
> Sistema de gerenciamento de blog com autenticação, postagens, categorias e usuários — 100% frontend, sem backend.

---

## Visão Geral

O **Painel do Blog** é um dashboard administrativo para gerenciar o conteúdo de um blog. Toda a persistência de dados é feita via **localStorage** do navegador, sem necessidade de servidor ou banco de dados externo.

```
login.html  →  index.html (dashboard)
                 ├── usuario.html      — listagem de usuários
                 ├── postagem.html     — listagem de postagens
                 └── categorias.html   — listagem de categorias
```

---

## Funcionalidades

### Autenticação
- Tela de login com validação de e-mail e senha
- Credenciais verificadas contra os usuários cadastrados no `localStorage`
- Sessão mantida via `sessionStorage` durante a navegação
- Redirecionamento automático após login bem-sucedido

### Dashboard (Início)
- Visão geral do sistema com cards de acesso rápido
- Atalhos para: Módulo de Usuários, Relatórios de Vendas e Configurações do Servidor

### Gestão de Usuários
| Ação | Descrição |
|------|-----------|
| Listar | Tabela com ID, Nome, E-mail, Nível de Acesso e Status |
| Adicionar | Formulário de cadastro de novo usuário (`cad-usuarios.html`) |
| Editar | Carrega dados existentes no formulário via `sessionStorage` |
| Excluir | Remove o registro com confirmação prévia |

Níveis de acesso: **Usuário** e **Administrador**

### Gestão de Postagens
| Ação | Descrição |
|------|-----------|
| Listar | Tabela com ID, Título, Conteúdo, Categoria e Status |
| Adicionar | Formulário de nova postagem (`cad-postagem.html`) |
| Editar | Edição de postagem existente |
| Excluir | Remoção com confirmação |

Status possíveis: **Ativo** / **Inativo**

### Gestão de Categorias
| Ação | Descrição |
|------|-----------|
| Listar | Tabela com ID, Nome e Status |
| Adicionar | Formulário de nova categoria (`cad-categoria.html`) |
| Editar | Edição de categoria existente |
| Excluir | Remoção com confirmação |

---

## Estrutura de Arquivos

```
Dashbord/
├── login.html          # Tela de autenticação
├── index.html          # Dashboard principal
├── usuario.html        # Listagem de usuários
├── cad-usuarios.html   # Formulário de usuário
├── postagem.html       # Listagem de postagens
├── cad-postagem.html   # Formulário de postagem
├── categorias.html     # Listagem de categorias
├── cad-categoria.html  # Formulário de categoria
├── estilo.css          # Estilos globais e dashboard
├── usuario.css         # Estilos de tabelas e formulários
├── dash.css            # Estilos da tela de login
└── valida_login.js     # Lógica de autenticação
```

---

## Tecnologias Utilizadas

- **HTML5** — estrutura semântica das páginas
- **CSS3** — estilização responsiva
- **JavaScript (Vanilla)** — lógica de CRUD e navegação
- **localStorage / sessionStorage** — persistência de dados no navegador
- **Font Awesome 6** — ícones da interface

---

## Como Executar

Por ser um projeto puramente frontend, basta abrir o arquivo `login.html` em qualquer navegador moderno.

> Nenhuma instalação ou servidor é necessário.

**Primeiro acesso:** cadastre um usuário pelo formulário `cad-usuarios.html` antes de tentar fazer login, pois não há usuários pré-cadastrados.

---

## Armazenamento de Dados

Os dados são salvos no `localStorage` do navegador sob as seguintes chaves:

| Chave | Conteúdo |
|-------|----------|
| `bancoUsuario` | Array de usuários cadastrados |
| `bancoPostagem` | Array de postagens |
| `bancoCategoria` | Array de categorias |

> Os dados persistem enquanto o `localStorage` do navegador não for limpo.

---

## Autor

**Valverde** — Desenvolvido na aula de Web I
