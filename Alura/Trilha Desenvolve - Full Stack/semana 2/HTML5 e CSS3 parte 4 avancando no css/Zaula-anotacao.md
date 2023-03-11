1. Adaptando a página inicial:
    /*
        Só devemos usar < section > quando o bloco for semântico:
            Para um bloco onde o conteúdo tenha o mesmo significado, o mesmo sentido, usamos uma < section >.

            < div > é usada no oposto, quando a divisão for só "visual".
        
        Um balanço é a melhor alternativa. Nem tão específica, para poder repetir as classes, e nem tão genérica, para poder não precisar combinar classes.

        Tanto o float:left quanto o float: right servem para que o elemento se destaque na tela, deixe de ocupar o espaço em que estava, para que os outros elementos possam se posicionar ao redor dele
    */

    Nesta aula, aprendemos:
        A ajustar a página principal para utilizar os mesmos padrões da página de produtos
        Medidas proporcionais com CSS
        Como funciona a flutuação dos elementos e como modificá-la, com a propriedade float do CSS
        Como limpar o float, com a propriedade clear do CSS


2. Conteúdo externo:
    /*
        Usar fontes externas é uma alternativa muito funcional para termos mais opções, que deixam o nosso site mais bonito e exclusivo, e também padronizado em todos os navegadores.
    */

    Nesta aula, aprendemos:
        A utilizar fontes externas nas nossas páginas
        Como incorporar um mapa à nossa página
        Como incorporar um vídeo à nossa página

    
3. Melorando o CSS:
    /*
        Como fazer um degradê de cinco cores em um elemento?
            "background: linear-gradient(gray, yellow, red, orange, blue)"
                Usamos dentro do mesmo parênteses, separando as cores por vírgulas

        Quando queremos criar um elemento na página, via CSS, antes do elemento do HTML, usamos a propriedade :before.

        A propriedade :after serve para criar um pseudo-elemento após um elemento do HTML.

        Com a propriedade :first-letter, eu consigo marcar a primeira letra de qualquer elemento de texto.
    */

    Nesta aula, aprendemos:
        A melhorar mais ainda a semântica da página principal, com novas divisões, classes, etc
        Novas pseudo-classes
        Como aplicar um background gradiente na página
        Pseudo-elementos


4. Selecionando qualquer coisa:
    /*
        "
        <h2>
        <section>
        <h2>
        <p>
        </p>
        <h2>
        "
            Como fazemos para selecionar o último <h2>?
                section > p + h2:
                    último h2 é filho direto da section e irmão do p

        Como usar as medidas proporcionais para deixar um elemento de 100% de largura com o equivalente a um terço do elemento pai, menos 10px?
            width: calc( (100% / 3) - 10px )
                Alternativa correta! Essa é uma forma mais complexa, não precisa dessa primeira conta!
            width: calc( 33% - 10px )
                Alternativa correta! Essa é a forma mais direta!
    */

    Nesta aula, aprendemos:
        Seletores avançados CSS
            Seletor >, para acessar os filhos de determinado elemento. Por exemplo, para acessar todos os p dentro de main:
            main > p {
            }

            Seletor +, para acessar o primeiro irmão de determinado elemento. Por exemplo, para acessar o primeiro p após um img:
            img + p {
            }
            
            Seletor ~, para acessar todos os irmãos de determinado elemento. Por exemplo, para acessar todos os p após um img:
            img ~ p {
            }
            
            Seletor not, para acessar os elementos, exceto algum. Por exemplo, para acessar todos os p dentro de main, exceto o p que tem id missao:
            main p:not(#missao) {
            }


05. Opacidade e sombra:
    /*
        Quais tipos de elementos podem receber uma camada de opacidade?
            Todos os elementos e todas as cores podem ter uma camada de opacidade.

        Como fazer uma sombra interna em um elemento?
            Sombra interna, preta, com 5px de espalhamento.
    */

    Nesta aula, aprendemos:
        Como manipular a opacidade dos elementos, com a propriedade CSS opacity
        Como manipular a opacidade das cores
        Como adicionar um sombreamento em volta dos elementos, com a propriedade CSS box-shadow
        Como adicionar um sombreamento em textos, com a propriedade CSS text-shadow


06. Design Responsivo:
    /*
        @media (max-width: 480px) {}
            É dentro dessa media query que criamos um estilo visual que compreenda telas de até 480px.

        Qual a principal tática para não perder muito tempo criando layouts responsivos?
            Usar medidas proporcionais para tudo:
                É hoje a melhor forma de criar qualquer conteúdo.
            Criar um layout fluido que se adapte sempre:
                É uma forma perfeita de evitar retrabalho.
    */

    Nesta aula, aprendemos:
        Design responsivo: 
            Como ajustar o estilo da nossa página de acordo com o tamanho da tela do dispositivo que a acesse.
        Meta tag de Viewport.
        Media Queries.