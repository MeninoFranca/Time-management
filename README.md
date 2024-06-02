Resumo Técnico: *SISTEMA DE REGISTRO E CONSULTA DE HORAS DE TRABALHO* V1.0

O sistema é uma aplicação web para registro e consulta de horas trabalhadas de usuários autenticados. Consiste em uma interface de usuário objetiva e funcionalidades para inserção e visualização de dados.

Componentes do Sitema:

    front-end:
        HTML/CSS
        Boostrap
        javascript

    Back-end:
        PHP
        Mysql
        javascript
    
Funcionalidades:

    Registro de Horas: usuários autenticados podem registrar seu horário de trabalho 4 vezes ao dia (Entrada,inicio almoço,fim almoço,saida)

    Armazenamento local: A aplicação ultiliza o localStorage(Armazenamento local do navegador) para salvar os dados(Horários) temporariamente, permitindo que o usuário saia,atualize,renicie o telefone e os dados fiquem salvo de forma consistente antes de ser enviado para o banco de dados.
    
    Consulta de horas: Visualização de horas totais do mês atual
                       Visualização de horas totais da semana atual
                       Visualização do total de horas trabalhadas por dia via gráfico

Funcionamento:

    Registro de horas:
        O usuário acessa inserção de horas
        Cada clique no botão de "registrar hora" é um registro de um horário, mas, o horário só vai para o banco após todas as tabelas estarem preenchidas.
        Dados enviados atráves de HTTP POST
        Os dados são validados e inseridos no banco de dados

    Consulta de Horas:
        O usuário acessa consulta de horas
        Requisições AJAX para pegar dados de horas totais de trabalho, horas mensais, horas semanais, horas diarias.
        Dados são processados e exibidos no dashboard

Considerações Finais:

    O sistema é uma maneira eficaz de registrar e consultar suas horas trabalhadas, com uma interface objetiva e funcionalidades bem definidas é uma ferramenta que pode ser útil para usuários que não tem ciência do seu horário de trabalho. O sistema está na sua primeira versão, busco tecnologias e inovações para aprimorar o processo, contribuições são bem-vindas! Se você encontrar algum problema ou tiver sugestão de melhoria, sinta-se à vontade para enviar uma pull request.

    Atualmente estou trabalhando na V1.1 onde estou dando uma atenção diretamente para o banco de dados, possiveis sistemas a serem melhorados são: 
    segurança como funções de hash
    validações mais rigorosas 
    proteção contra ataques CSRF.

    
