Resumo Técnico: *SISTEMA DE REGISTRO E CONSULTA DE HORAS DE TRABALHO* V1.0

preview: https://gestaohora.francacoder.com.br

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

Preview Desktop:
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/9457216b-0d15-420f-8d43-ea914b33f979)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/9a690557-de33-4c18-b5f2-359db5d53eee)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/e039387f-27fc-44f1-b789-129ecab0233b)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/484b23f0-75f4-4e84-af4f-0ff193c57c3d)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/6211d845-9ddc-4db5-9612-f5a6ffc43fa6)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/c4401543-f80f-41e5-8297-450f1a8b0047)

Preview Mobile:
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/cc8b0471-ce7c-4d09-b678-46eecbfc4690)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/110bf9ff-5c26-4247-8430-59cb93fbe02d)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/b0b66c6d-0fc2-478b-951a-a55fc2ae804c)
![image](https://github.com/MeninoFranca/Time-management/assets/106559345/15e3932c-e032-43e3-89b4-f0b8daaca9cd)

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

    
