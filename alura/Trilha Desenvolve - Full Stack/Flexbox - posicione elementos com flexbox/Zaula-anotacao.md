01. Introdução ao flexbox e fazendo o cabeçalho 
    Quais as principais diferenças entre as nossas propriedades de posicionamento?
        1) display: inline;
        2) display: inline-block;
        3) float: left | right;
        4) display: flex;

        display: inline
            Colocando display: inline nos elementos permite eles se posicionarem um do lado do outro, o problema do display: inline é que os elementos não aceitam mais que seja modificada tanto a width quanto a height. Isso limita MUITO nossas possibilidades.

        display: inline-block
            O display: inline-block permite os elementos se posicionarem um do lado do outro porém, diferentemente do display: inline ele permite que os elementos tenham sua width e height modificadas. Por esse motivo o display: inline-block é muito mais interessante na maioria dos casos do que o display: inline.

            O problema de usar display: inline-block é espaçar os elementos entre si. Para fazer isso teríamos que colocar margins e fazer contas.

        float: left | right
            O float é mais complicado, ele empurra o elemento para um dos lados (left | right) e os elementos que estão embaixo sobem. Isso nem sempre é o que a gente quer. Além do mais o float não permite que usemos a propriedade vertical-align: middle para alinhar os elementos verticalmente. Ou seja, para contornar isso uma possibilidade seria ter que colocar margin-top ou bottom nos elementos e usar os temidos números mágicos!

        display: flex
            O display: flex veio com o intuito de facilitar nossa vida nesses aspectos de posicionamento. Ele permite os elementos ficarem um do lado do outro, permite espaçar os elementos de forma mais intuitiva e sem ter que fazer cálculos. Além disso ele também permite alinhar os elementos verticalmente de forma fácil.

            O display flex pode ser um pouco mais complicado de usar tendo em vista que existem diversas propriedades que vem junto da especificação flexible box, todavia tudo isso foi feito para justamente melhorar nosso código.

        Agora que já tivemos essa introdução, vamos logo começar a organizar nosso site com flex 

        /*
            Como poderiamos fazer com flex para que os elementos filhos ficassem um do lado do outro?
                O valor da propriedade display referente ao flexbox é flex. Ou seja, ficaria: " display: flex "

            Devemos colocar align-items: center no pai, dessa forma todos os elementos ficam alinhados verticalmente no centro.
                O código ficaria assim:
                    .cabecalho {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    }
                "align-items" nós devemos colocar no pai. Dessa forma todos os seus filhos são afetados.
                    A propriedade align-items faz com que os elementos dentro do pai que está com flex se alinhem verticalmente, portanto, pra eles ficarem alinhados no centro podemos usar align-items: center, colocando essa propriedade no pai dos elementos que queremos alinhar, no caso cabecalho.
        */



02. Fazendo o footer e controlando melhor os elementos
    Qual o valor da propriedade justify-content para essas distribuições de espaço?
        Podemos distribuir os elementos dentro do pai de diversas formas, podemos por exemplo:

        Colocar todo espaço à esquerda, jogando o conteúdo para direita com justify-content: flex-end.

        Colocar todo espaço à direita, jogando o conteúdo para esquerda com justify-content: flex-start (que é o padrão).

        Colocar todo espaço à esquerda e à direita, jogando o conteúdo para o meio com justify-content: center.

        Colocar todo espaço entre os elementos como vimos antes usando justify-content: space-between.

        E uma possibilidade bem interessante também é colocar o espaço em volta dos elementos. Podemos usar o justify-content: space-around para isso.

    Para o flex não invadir outras divs, devemos falar para o flex não transbordar o conteúdo, de forma que quando o conteúdo ultrapassar o tamanho do pai, ele simplesmente quebre para uma próxima coluna. Para fazer isso usamos flex-wrap: wrap.



03. Grid principal e limitações do flexbox
    Para espaçar corretamente os elementos de um grid temos que realmente fazer contas com a boa e velha margin e width.
        Se temos 3 elementos por linha podemos fazer algo do tipo:
            HTML:
                <div class="grid">
                <!-- primeira linha -->
                <div class="course"></div>
                <div class="course"></div>
                <div class="course"></div>
                <!-- segunda linha -->
                <div class="course"></div>
                <div class="course"></div>
                <div class="course"></div>
                <!-- terceira linha -->
                <div class="course"></div>
                <div class="course"></div>
                <div class="course"></div>
                <!-- quarta linha -->
                <div class="course"></div>
                <div class="course"></div>
                </div>COPIAR CÓDIGO

            CSS:
                .grid {
                    display: flex;
                    flex-wrap: wrap;
                }

                .course {
                    width: 31.3%;
                    margin: 1%;
                }
                
    Opinião do instrutor:
        Nesse caso teriamos 3 .course por linha, cada um com width: 31.3% e margin: 1%.
        De width isso totaliza: 31.3 * 3 = 93.9%.
        De margin isso totaliza: 6% (1% à esquerda e 1% à direita de cada elemento).
        No total temos: 93.9% + 6% = 99.9% que dá pra arredondar para 100%.


4. Arrumando os elementos com flex para mobile
    Para mobile devemos colocar um elemento em baixo do outro, é a melhor forma de ocupar todo o espaço para melhorar a usabilidade no celular.
        Para fazer isso podemos colocar a propriedade flex-direction: column, que faz com que os elementos fiquem um em baixo do outro. Esse é o aspecto mais importante da responsividade do flexbox.

    O melhor a se fazer aqui é ter em mente que o ideal é sempre que necessário consultar a documentação através desse site: https://css-tricks.com/snippets/css/a-guide-to-flexbox/ .
        Lá podemos ver claramente quais propriedades são aplicadas ao container e aos flex items, não há necessidade de ficar decorando, isso virá naturalmente com a prática.

        Seguindo a documentação temos:
            container:
                display: flex
                flex-direction
                justify-content
                flex-wrap
                flex-flow
                align-items
                align-content
            flex item:
                order
                flex-grow
                flex-shrink
                flex-basis
                flex
                align-self


06. mais sobre flexbox e desafios
    /*
        Para falar para um elemento / flex item crescer e ocupar todo o espaço que está sobrando dentro do flex container devemos usar a propriedade flex-grow.

        A propriedade flex-basis serve para definir uma largura ou altura para o flex item. Se o flex container tiver com flex-direction: column, o flex-basis no flex item servirá para definir uma height. Caso o flex-direction: row, ele funciona como um width.

        Podemos usar também flex-direction: column-reverse nos casos em que usamos flex-direction: column. Ele inverterá a ordem!

        Lembra da propriedade align-items que colocávamos no flex container? O align-self faz a mesma coisa, só que alinha um único elemento e é colocada no flex item.
    */