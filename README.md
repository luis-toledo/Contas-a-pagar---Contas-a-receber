# Contas a Pagar e Contas a Receber


![Contas a Pagar e Contas a Receber](https://github.com/luis-toledo/Contas-a-pagar---Contas-a-receber/blob/535f099885eed7c23a69bdf85253472afc0304aa/img/ImgGitHub.jpg)

## Descrição do Projeto

O projeto "Contas a Pagar e Contas a Receber" é uma aplicação desenvolvida para o gerenciamento de finanças pessoais ou empresariais. A aplicação permite aos usuários realizar o lançamento de contas a pagar e contas a receber, bem como listar esses lançamentos e exibir o total de cada tipo de lançamento.

## Tecnologias Utilizadas

O projeto foi desenvolvido utilizando as seguintes tecnologias:

- PHP
- JavaScript
- HTML
- CSS
- XAMPP (Apache, MySQL)

O XAMPP é um pacote de software que inclui um servidor web Apache, o banco de dados MySQL e os interpretadores de PHP e Perl. Ele fornece um ambiente de desenvolvimento completo para executar e testar aplicações web localmente.

## Funcionalidades Principais

A aplicação "Contas a Pagar e Contas a Receber" possui as seguintes funcionalidades principais:

- Lançamento de contas a pagar, incluindo informações como descrição, valor, data de vencimento e data de pagamento.
- Lançamento de contas a receber, incluindo informações como descrição, valor, data de vencimento e data de pagamento.
- Listagem dos lançamentos de contas a pagar e contas a receber, exibindo as informações detalhadas de cada lançamento.
- Exibição do total de contas a pagar e contas a receber.

## Como Executar o Projeto

Para executar o projeto localmente, siga as instruções abaixo:

1. Instale o XAMPP em seu computador. Você pode fazer o download do XAMPP em [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html) e seguir as instruções de instalação adequadas para o seu sistema operacional.

2. Clone ou baixe este repositório e coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP. Certifique-se de que o caminho completo para o projeto seja semelhante a `C:\xampp\htdocs\Contas-a-pagar---Contas-a-receber`.

3. Inicie o XAMPP Control Panel e inicie os serviços do Apache e do MySQL.

4. Abra o navegador e digite o seguinte endereço:
   ```
   http://localhost/Contas-a-pagar---Contas-a-receber
   ```

5. A aplicação será carregada e você poderá começar a utilizar as funcionalidades de lançamento, listagem e análise das contas a pagar e contas a receber.

## Banco de Dados

Certifique-se de ter criado um banco de dados MySQL com o nome "controle-financeiro". Você pode criar a tabela "financeiro" utilizando o seguinte script:

```sql
CREATE TABLE `financeiro` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tipo` varchar(

1) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `data_vencimento` date NOT NULL,
  `data_pagamento` date NOT NULL,
  `data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `financeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
```

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests ou relatar problemas encontrados.

## Licença

Este projeto está licenciado sob a licença MIT. Para mais informações, consulte o arquivo [LICENSE](https://github.com/luis-toledo/Contas-a-pagar---Contas-a-receber/blob/main/LICENSE).

## Contato

Se você tiver alguma dúvida ou sugestão em relação a este projeto, entre em contato comigo através do LinkedIn: [Luis Fernando Toledo](https://www.linkedin.com/in/luisfernandotoledo/).
