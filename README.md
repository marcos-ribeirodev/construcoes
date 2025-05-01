
# Construções

Website institucional para uma empresa da área da construção, com secções de apresentação, contactos, destaques e gestão de conteúdos através de backoffice. Desenvolvido em PHP com base de dados MySQL.

## 🚀 Funcionalidades

- Página de entrada com apresentação
- Secções: Quem Somos, Contactos, Empreendimentos, Sócios, Notícias
- Envio de mensagens via formulário com reCAPTCHA v2
- Backoffice para gestão de banners, destaques, carrossel, etc.
- Upload de imagens com gestor de ficheiros (`filemanager`)
- Base de dados incluída

## 🧰 Tecnologias usadas

- PHP
- MySQL
- HTML5 / CSS3
- JavaScript (Vanilla)
- Google reCAPTCHA v2
- Fontes: Poppins
- FileManager simples (PHP)

## 📁 Estrutura

```
construcoes/
├── index.php
├── css/estilo.css
├── contactos.php
├── quem_somos.php
├── empreendimentos.php
├── backoffice/
├── filemanager/
├── imagens/
├── views/
├── helpers/
├── componentes/
└── construcao_e_habitacao_bd.sql
```

## ⚙️ Instalação

1. Copiar os ficheiros para o servidor web (ex: Hostinger, XAMPP)
2. Importar o ficheiro `construcao_e_habitacao_bd.sql` para a base de dados MySQL
3. Configurar os dados da base de dados no ficheiro:
   ```
   helpers/base_dados_helper.php
   ```

4. Verificar permissões da pasta `uploads/` se existir
5. Adicionar as chaves do Google reCAPTCHA no formulário de contacto

## 🔐 Segurança

- O envio de emails utiliza `mail()` com validação básica
- A proteção contra spam é feita com Google reCAPTCHA v2
- Recomenda-se proteger o diretório `backoffice/` com login ou .htaccess

## 👤 Autor

Desenvolvido por [Marcos Ribeiro](https://marcosribeiro.pt)
