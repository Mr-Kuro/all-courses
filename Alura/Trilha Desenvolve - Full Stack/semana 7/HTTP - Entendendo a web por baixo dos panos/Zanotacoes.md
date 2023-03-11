01. O que é HTTP?
    Visualizando:
        ![arquitetura_de_comunicação_alura.png](https://s3.amazonaws.com/caelum-online-public/http/arquitetura_alura.png)

    O que você aprendeu nesse capítulo?
        A arquitetura Cliente-Servidor
        Um protocolo é um conjunto de regras
        HTTP é um protocolo que define as regras de comunicação entre cliente e servidor na internet.
        HTTP é o protocolo mais importante da Internet


02. A web segura - HTTPS
    Aprendemos no vídeo que o HTTPS usa uma chave pública e uma chave privada. As chaves estão ligadas matematicamente, o que foi cifrado pela chave pública só pode ser decifrado pela chave privada. Isso garante que os dados cifrados pelo navegador (chave pública) só podem ser lidos pelo servidor (chave privada). Como temos duas chaves diferentes envolvidas, esse método de criptografia é chamado de criptografia assimétrica. No entanto, a criptografia assimétrica tem um problema, ela é lenta.
    ![chave publica e chave privada](https://s3.amazonaws.com/caelum-online-public/http/cripto-assimetrica.png)

    Por outro lado, temos a criptografia simétrica, que usa a mesma chave para cifrar e decifrar os dados, como na vida real, onde usamos a mesma chave para abrir e fechar a porta. A criptografia simétrica é muito mais rápida.
    ![chave simétrica](https://s3.amazonaws.com/caelum-online-public/http/cripto-simetrica.png)
    
    Agora, o interessante é que o HTTPS usa ambos os métodos de criptografia, assimétrica e simétrica. Como assim? Muita calma, tudo o que aprendemos é verdade! Só faltou o grande final.
    
    No certificado, vem a chave pública para o cliente utilizar, certo? E o servidor continua na posse da chave privada, ok? Isso é seguro, mas lento e por isso o cliente gera uma chave simétrica ao vivo. Uma chave só para ele e o servidor com o qual está se comunicando naquele momento! Essa chave exclusiva (e simétrica) é então enviada para o servidor utilizando a criptografia assimétrica (chave privada e pública) e então é utilizada para o restante da comunicação.
    
    Então, HTTPS começa com criptografia assimétrica para depois mudar para criptografia simétrica. Essa chave simétrica será gerada no início da comunicação e será reaproveitada nas requisições seguintes. Bem-vindo ao mundo fantástico do HTTPS.

    O que você aprendeu nesse capítulo?
        1- Por padrão, os dados são trafegados como texto puro na web.
        2- Apenas com HTTPS a Web é segura
        3- O protocolo HTTPS nada mais é do que o protocolo HTTP mais uma camada adicional de segurança, a TLS/SSL
        4- O tipo de criptografia de chave pública/chave privada
        5- O que são os certificados digitais
        6- Certificados possuem identidade e validade
        7- As chaves públicas estão no certificado, a chave privada fica apenas no servidor
        8- O que é uma autoridade certificadora
        9- O navegador utiliza a chave pública para criptografar os dados


03. Enderecos sob seu domínio
    ![Alt text](https://s3.amazonaws.com/caelum-online-public/http/http-url.png)

    No início da web, os recursos, na grande maioria, eram arquivos com a extensão .html ou .htm. Até hoje existem vários recursos que são arquivos na web. Mas reparem que a Alura não funciona dessa maneira. Em nenhum momento você acessa um arquivo no Alura. Por exemplo, para ver um curso, você usa a URL:

        /* https://cursos.alura.com.br/course/introducao-html-css  */
            
        Isso é um pouco mais legível e possui a vantagem que a URL não diz nada a respeito do formato. A URL não fica amarrada ao formato HTML.

    Muitas vezes, desenvolvedores usam a sigla URI (Uniform Resource Identifier) quando falam de endereços na web. Alguns preferem URL (Uniform Resource Locator), e alguns misturam as duas siglas à vontade. Há uma certa confusão no mercado a respeito e mesmo desenvolvedores experientes não sabem explicar a diferença. Então, qual é a diferença?
        
        Resposta 1 (fácil): Uma URL é uma URI. No contexto do desenvolvimento web, ambas as siglas são válidas para falar de endereços na web. As siglas são praticamente sinônimos e são utilizadas dessa forma.

        Resposta 2 (mais elaborada): Uma URL é uma URI, mas nem todas as URI's são URL's! Existem URI's que identificam um recurso sem definir o endereço, nem o protocolo. Em outras palavras, uma URL representa uma identificação de um recurso (URI) através do endereço, mas nem todas as identificações são URL's.
        
        Humm ... ficou claro? Não? Vamos dar um exemplo! Existe um outro padrão que se chama URN (Uniform Resource Name). Agora adivinha, os URN's também são URI's! Um URN segue também uma sintaxe bem definida, algo assim urn:cursos:alura:course:introducao-html-css. Repare que criamos uma outra identificação do curso Introdução ao HTML e CSS da Alura, mas essa identificação não é um endereço.
        ![uri, url e urn block](https://s3.amazonaws.com/caelum-online-public/http/http-uri-urn-url.png)
        
        Novamente, a resposta 2 vai muito além do que você realmente precisa no dia a dia. Normalmente URL e URI são usados como sinônimos.

    O que aprendemos nesse capítulo?
        URL são os endereços da Web
        Uma URL começa com o protocolo (por exemplo https://) seguido pelo domínio (www.alura.com.br)
        Depois do domínio pode vir a porta, se não for definida é utilizada a porta padrão desse protocolo
        Após o domínio:porta, é especificado o caminho para um recurso (/course/introducao-html-css)
        Um recurso é algo concreto na aplicação que queremos acessar
        ![url estrutura](https://s3.amazonaws.com/caelum-online-public/http/http-url.png)
    

04. O cliente pede e o servidor responde
    O que é uma sessão HTTP?
        Uma sessão HTTP nada mais é que um tempo que o cliente permanece ativo no sistema! Isso é parecido com uma sessão no cinema. Uma sessão, nesse contexto, é o tempo que o cliente usa a sala no cinema para assistir a um filme. Quando você sai da sala, termina a sessão. Ou seja, quando você se desloga, a Alura termina a sua sessão.

    Mas o que é um cookie?
        Quando falamos de Cookies na verdade queremos dizer Cookies HTTP ou Cookie web. Um cookie é um pequeno arquivo de texto, normalmente criado pela aplicação web, para guardar algumas informações sobre usuário no navegador. Quais são essas informações depende um pouco da aplicação. Pode ser que fique gravado alguma preferência do usuário. Ou algumas informações sobre as compras na loja virtual ou, como vimos no vídeo, a identificação do usuário. Isso depende da utilidade para a aplicação web.
        
        Um cookie pode ser manipulado e até apagado pelo navegador e, quando for salvo no navegador, fica associado com um domínio. Ou seja, podemos ter um cookie para www.alura.com.br, e outro para www.caelum.com.br. Aliás, um site ou web app pode ter vários cookies!
        
        Podemos visualizar os cookies salvos utilizando o navegador. Como visualizar, depende um pouco do navegador em questão:
        
        No Chrome: Configurações -> Privacidade -> Configurações de conteúdo... -> Todos os cookies e dados de site... -> Pesquisar alura
        
        No Firefox: Preferências -> Privacidade -> remover cookies individualmente -> Pesquisar alura

        O que você aprendeu nesse capítulo?
            O protocolo HTTP segue o modelo Requisição-Resposta
            Sempre o cliente inicia a comunicação
            Uma requisição precisa ter todas as informações para o servidor gerar a resposta
            HTTP é stateless, não mantém informações entre requisições
            As plataformas de desenvolvimento usam sessões para guardar informações entre requisições


05. Depurndo a requisição http
    Transcrição
        Nesse capítulo, trabalhamos com depuração de uma requisição HTTP, vimos que ela pode ser feita somente com recursos do próprio browser, através do console de depuração.
        
        Vimos também que existem métodos quando fazemos uma requisição, por enquanto só trabalhamos com método HTTP GET, que é utilizado quando estamos pedindo alguma coisa, quando queremos receber algo.
        
        Além disso, quando recebemos uma resposta, ela contém cabeçalhos, como Location.
        
        Por último, vimos os códigos de resposta HTTP, como 200, 301, 404 e 500, para analisar de fato o que aconteceu com a nossa requisição.


06. Parâmetros da requisição
    Transcrição
        Vimos o uso e as diferenças básicas entre os métodos GET e POST, que resumindo são: GET é utilizado para a busca de informações e tem seus parâmetros listados na URL, indicados pela presença da interrogação (?) seguido de pares de chave e valor, lembrando que vários parâmetros podem ser enviados simplesmente concatenando-os com o caractere &. Exemplo: https://www.youtube.com/results?search_query=ayrton+senna&sp=cam%250

        O POST por outro lado é mais utilizado para criação de recursos, informações no servidor e envia seus dados no corpo da requisição.

        Para finalizar o capítulo, mencionamos que existem outros métodos HTTP como o DELETE e PUT (e acredite que tem mais ainda). O DELETE existe para enviar uma requisição com a intenção de remover um recurso, PUT para atualizar. No entanto, esses métodos são poucos utilizados no desenvolvimento de aplicações web, eles são mais importantes quando se tratam de serviços web.

        Em geral, há mais recursos que o protocolo HTTP oferece, como vários outros cabeçalhos que especificam mais a requisição e resposta. Aqui nesse treinamento vimos os mais importantes métodos, códigos e cabeçalhos do protocolo HTTP.


07. Serviços na web com REST
    Transcrição
        REST é um padrão arquitetural para comunicações entre aplicações
        Ele aproveita a estrutura do HTTP
        Recursos são definidos via URI
        Operações com métodos HTTP(GET/POST/PUT/DELETE)
        Cabeçalhos(Accept/Content-Type) são usados para especificar as representações(JSON,XML,...)


08. HTTP2 - Por uma web mais eficiente
    O que é o Server Push no HTTP/2?
        O servidor pode empurrar para o clientes certos recursos antes mesmo de serem solicitados, pois ele consegue analisar o HTML e ver o que mais é preciso para carregar a página fazendo com que não seja necessário gastar tempo pedindo todos os outros recursos.

    Transcrição
        Chegamos aqui ao término do curso HTTP um protocolo tão importante para a nossa área como pode ser visto. É através dele que tudo acontece!
        
        Com os conhecimentos adquiridos nesse treinamento você pode caminhar para a área de back-end, mobile e até mesmo front-end. A onipresença desse protocolo permite toda essa flexibilidade de caminho a seguir ou se aprofundar.
        
        Preparamos o material pensando justamente em trazer conteúdo relevante e com aplicações práticas para te preparar pro que vier de HTTP.
        
        Espero que você tenha gostado do curso e dos assuntos aqui abordados, além é claro de vê-lo em breve na plataforma com outros assuntos.
        
        Forte abraço,
        Fábio Pimentel