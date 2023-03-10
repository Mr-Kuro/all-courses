01. Criando uma nova página:
    /*
        Para decidir quando devemos usar um formulário nas nossas páginas, alguns motivos podem ser analisados:
            1) Quando queremos enviar os dados para um servidor
            2) Quando queremos capturar informações que o usuário digitar
            3) Quando queremos enviar os dados para uma outra página
   */

    Nesta aula, vimos:
        Uma revisão do conteúdo aprendido no treinamento anterior
        Uma introdução ao projeto do treinamento
        A criação da página de contato
        Um pouco sobre os formulários


02. Começando um formulário:
    /*
        A tag < label > é uma etiqueta para a entrada de dados, para o < input >.

        A propriedade padding serve para alterarmos o espaçamento interno, entre o conteúdo e a borda.
    */

    Nesta aula, aprendemos:
        A criar um formulário HTML;
        A tag que o representa é a < form >;
        A tag < input >, para a entrada de dados do usuário;
        A criar uma "etiqueta" para o input, com a tag < label >;
        A conectar um "input" com o seu label;
        Colocamos um id para o input e associamos esse id ao atributo for do label;
        Alguns tipos de "input", como text e submit
        Que label possui o display inline e o input possui display inline-block;
        A estilizar o nosso formulário;

    
03. Tipos de campos:
    /*
        A propriedade "id" serve somente como um identificador para o item. Serve também para que eu possa fazer a conexão entre o "label" e aquele "input" específico.

        A propriedade "name" só pode ser "preenchida" uma única vez, por isso que, quando eu seleciono um dos itens, ele desmarca o outro, mantendo somente um selecionado.

        A propriedade "value" serve para criarmos o valor que meu "input" vai ter. É diretamente relacionada ao conteúdo daquele "input", e não ao grupo dele.

        Usar os seletores dos itens separados por vírgula: Essa é uma forma simples de fazermos a mesma configuração de CSS funcionar para os dois itens, sendo eles seletores dos elementos, de ids ou de classes.

        Quando temos um estilo que pode ser repetido, uma excelente estratégia é extrair isso para uma classe e usar a classe para aplicar esses estilos nos nossos elementos.

        "p.paragrafo" é o mais forte, e a cor aplicada é a vermelha (red). O seletor 'p' é somente uma tag.
        tag - classe - identificador - inline

        A estrutura da tag <select> é composta de um ou mais <option>.
    */

    Nesta aula, vimos:
        O textarea, para entradas de texto de mais de uma linha
        O input do tipo radio
        Como agrupar vários input do tipo radio, impedindo que mais de um input seja selecionado
        O input do tipo checkbox
        Que podemos criar um input dentro de um label, assim associando-os
        Mais estilizações para a nossa página
        Como funciona a hierarquia no CSS
        O select, que é seletor, um campo de seleção de um item, e o option, que representa cada opção do seletor


4. Melhorando a semântica:
    /*
        Por quais motivos é importante usar os tipos corretos de <input> para os usuários que acessam a página via celular?
            É extremamente importante facilitarmos a vida dos nossos usuários sempre.
            É muito melhor termos dados corretos quando temos o nosso formulário preenchido.

        Quando adicionamos a propriedade required, o navegador nos ajuda a validar se aquele campo está preenchido

        A propriedade placeholder é usada para adicionar um texto no campo, para sugerir a forma como o campo deve ser preenchido.

        A propriedade checked é usada para que um campo já carregue marcado, para facilitar a vida do usuário ou até para sugerir que aquele campo seja preenchido.

        É a tag < legend > que usamos para um título de um grupo de campos em qualquer formulário.

        A tag < fieldset > é usada para criar uma divisão no nosso formulário, com um ou mais < input >.

        O alt é uma propriedade que usamos para prover uma alternativa para imagens.
    */

    Nesta aula, aprendemos:
        Alguns tipos de inputs para celular: email, tel, number, password, date, datetime, month e search
        Como não permitir que um campo não seja preenchido, através do atributo required
        Como exibir uma sugestão de preenchimento para os campos, através do atributo placeholder
        Como deixar uma opção marcada por padrão nos nossos input radio e checkbox, através do atributo checked
        Como estruturar melhor o nosso código com fieldset e legend
        Como adicionar uma alternativa à imagem, descrevendo-a, com o atributo alt


5. CSS avançado:
    /*
        A propriedade transform serve para mudarmos o tamanho ou o comportamento do elemento.

        Utilizamos a propriedade transition para prover uma transição visual de um elemento.

        Utilizamos a propriedade transform: scale() para aumentar um elemento proporcionalmente.

        Utilizamos a propriedade transform: rotate() para "girar" um elemento em seu eixo.
    */

    Nesta aula, aprendemos:
        Como estilizar o botão de envio de formulário
        A realizar transições nos nossos elementos, com a propriedade CSS transition
        A modificar o estilo do ponteiro do mouse, quando passar por cima de determinado elemento, através da propriedade CSS cursor
        A realizar transformações nos nossos elementos, como aumentar proporcionalmente a escala de determinado elemento ou rotacioná-lo, através da propriedade CSS transform
        DISCUTIR NO FORUM
        PRÓXIMA ATIVIDADE


6. Estrutura de tabelas:
    /*
        Utilizamos a tag <table> para criar uma tabela.

        Utilizamos a tag < tr > para marcar uma linha de uma tabela.

        Utilizamos a tag <td> para marcar uma coluna de uma tabela.

        As tags <thead>, <tbody> e <tfoot> ajudam a deixar o conteúdo da tabela mais bem dividido e mais semântico.

        /*
            As tabelas também nos oferecem a possibilidade de juntar células e montar um visual diferente. Por exemplo, quando uma linha, que deveria ter 5 células, passa a mostrar só "uma célula".
            Esse efeito é conseguido através da propriedade colspan=X, onde X é o número de células que você quer agrupar.
            Portanto, em uma tabela de 5 colunas, para ter uma célula única na linha, usamos um código assim:
                <tr>
                    <td colspan="5">Rio de Janeiro</td> 
                </tr>
        */
    */

    Nesta aula, aprendemos:
        A criar uma tabela HTML
        A tag table, que representa a tabela
        A tag tr, que representa a linha da tabela
        A tag td, que representa a célula da tabela
        A tag thead, que representa o cabeçalho da tabela
        A tag tbody, que representa o corpo da tabela
        A tag th, que representa a célula do cabeçalho da tabela
        A tag tfoot, que representa o rodapé da tabela
        A estilizar a tabela