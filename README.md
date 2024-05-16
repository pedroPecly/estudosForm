### README.md

# Formulário de Exemplo com PHP

Este projeto é um exemplo simples de um formulário em PHP que coleta dados do usuário, realiza validações básicas e exibe os dados enviados. O formulário inclui campos para nome, idade e e-mail, e valida os dados antes de processá-los.

## Funcionalidades

- Coleta de dados do usuário através de um formulário HTML.
- Validação de campos obrigatórios (nome, idade e e-mail).
- Validação de formato de e-mail.
- Exibição de mensagens de erro específicas para cada campo.
- Exibição dos dados submetidos se todos os campos forem válidos.

## Estrutura do Projeto

- `formulario.php`: O arquivo principal que contém o formulário HTML e o código PHP para processar e validar os dados.

## Pré-requisitos

Para executar este projeto, você precisa ter:

- Um servidor web com suporte a PHP (como Apache ou Nginx).
- PHP instalado (versão 5.4 ou superior).

## Como Usar

1. **Clone o repositório ou baixe o arquivo `formulario.php`.**
   
   ```sh
   git clone <URL_DO_SEU_REPOSITORIO>
   cd <NOME_DO_REPOSITORIO>
   ```

2. **Coloque o arquivo `formulario.php` em seu diretório raiz do servidor web.**

3. **Inicie o servidor web (se ainda não estiver em execução).**

   - Para servidores locais como XAMPP, MAMP ou WAMP, certifique-se de que o servidor Apache está ativo.

4. **Abra o navegador e acesse o formulário:**

   ```sh
   http://localhost/formulario.php
   ```

5. **Preencha os campos do formulário e envie.**

   - Nome: Insira seu nome (apenas letras e espaços são permitidos).
   - Idade: Insira sua idade (apenas números inteiros são permitidos).
   - E-mail: Insira um endereço de e-mail válido.

6. **Verifique se há mensagens de erro e corrija os campos conforme necessário.**

7. **Após o envio bem-sucedido, os dados submetidos serão exibidos na página.**

## Estrutura do Código

- **Validação do Formulário:**
  - O PHP verifica se o formulário foi submetido usando `$_SERVER["REQUEST_METHOD"] == "POST"`.
  - Validações são realizadas para cada campo:
    - `name`: Verifica se não está vazio e contém apenas letras e espaços.
    - `age`: Verifica se não está vazio e é um número inteiro válido.
    - `email`: Verifica se não está vazio e tem um formato de e-mail válido.

- **Função `test_input`:**
  - Limpa os dados de entrada para remover espaços extras, barras invertidas e caracteres especiais, prevenindo injeção de código.

- **Exibição de Mensagens de Erro:**
  - Mensagens de erro específicas são exibidas ao lado dos campos correspondentes se as validações falharem.