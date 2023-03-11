01. Introdução e conceituação
    Nessa aula aprendemos sobre o universo dos designs systems
        Conhecemos a problemática existente que resultou na criação dos designs systems e seus objetivos. Além disso, abordamos o design atômico, o que é um design system e referência de bons sistemas. Posteriormente definimos um roteiro para a construção do nosso design system e criamos a parte conceitual dele dentro do programa do Figma.


02. Princípios de design
    No último vídeo aprendemos a adicionar cores nos estilos locais do Figma utilizando o plugin do Chroma Colors. Outro plugin que foi visto foi o do Design System Organizer, que traz a possibilidade de agrupar cores diferentes em grupos distintos.
    
    Fontes do Google x fontes do sistema
        Saber escolher uma fonte para um projeto requer um estudo de como ela se comportará nos diferentes ambientes em que será exibida. Vamos pensar o seguinte exemplo: a empresa na qual eu trabalho é um serviço que possui um aplicativo para Android, outro para iOS e também um site.
        
        Nesse caso, como decidir que fontes utilizar?
        
        O Google Fonts oferece uma grande diversidade de fontes para serem utilizadas e são de fácil acesso para o desenvolvedor por já estarem hospedadas em um local. Portanto, há uma possibilidade de escolher fontes desse local e utilizar em todas as distintas aplicações (Android iOS e site). Isso torna o sistema com uma linguagem visual mais unificada que usa a mesma família tipográfica em diversos ambientes distintos, tornando o produto facilmente reconhecível.
        
        Por outro lado, deve-se verificar como é a atuação dessas fontes nesses ambientes diversos. Para cada um desses ambientes há uma fonte padrão. Isso significa que cada sistema operacional indica qual a melhor fonte feita para ele. Por exemplo: o Android utiliza a fonte Roboto, o iOS usa a SF UI, o Windows usa a Segoe
        
        ![alura_designsystemfigma_02.gif](https://caelum-online-public.s3.amazonaws.com/1813-design-system/02/alura_designsystemfigma_02.gif)
        
        Design system do Firefox indica qual fonte usar em cada sistema operacional.
        
        Nessas circunstâncias é importante saber qual decisão tomar:
        
        Utilizar uma fonte apenas que atue em diversos cenários;
        Utilizar a fonte padrão para cada sistema.
        Para isso, deve-se entender que, quando uma fonte que não é padrão do sistema estiver sendo utilizada, toda vez que o aplicativo carregar precisará fazer um chamado na internet para buscar essa família tipográfica. Na criação da estrutura do projeto pode-se também salvar os arquivos da família tipográfica dentro da pasta do projeto, permitindo que não seja necessário esse chamado, mas que ainda sim seja necessário carregar as fontes localmente.
        
        Outro capricho que também deve ser feito no momento do desenvolvimento é para evitar o FOUC ou Flash of Unstyled Content. Ele pode fazer com que a página carregue primeiramente com a fonte padrão do sistema e só depois carregar a nova fonte e exibir, o que pode causar certo desconforto no usuário.

    No último vídeo foram vistos diversos aspectos sobre a elevação dos elementos. Aprendemos sobre o eixo Z, sobre as diferentes elevações possíveis da interface e sobre a aplicação de diferentes sombras no design system salvas nos estilos locais.
    
    Nesta aula começamos a incluir os átomos do design system dentro do Figma. 
        1- Primeiro inserimos as cores utilizando o plugin do Chroma Colors; 
        2- Depois inserimos a tipografia com o plugin do Text Style Generator; 
        3- Ao final aprendemos sobre sombras e o eixo Z; grids e espaçamentos.


03. Finalizando os princípios de design
    No último vídeo o conteúdo apresentado foi sobre imagens. Foi ensinado como inserir imagens a partir do plugin do
    Unsplash e como salvar essas imagens em estilos locais separando por categorias diferentes. Além desse conteúdo
    também foi visto o plugin do Aspects.
        Qual a função desse plugin?
            Definir proporções de tela específicas para objetos do design system.

    No último vídeo foi apresentado um conteúdo sobre ilustrações vetoriais no design system. O conteúdo baseou-se na busca de packs distintos; a aplicação dos packs no design system; a mudança da cor nos elementos de ilustração e a aplicação das ilustrações em componentes locais. Um dos pontos de maior enfoque do vídeo foi sobre os packs de ilustração.

    Usando outline stroke
        No último vídeo foi comentado sobre a criação de componentes locais no Figma para a criação de ícones. Os ícones estão agrupados por pastas que, dessa forma, trazem mais organização a esses componentes. Cada ícone está inserido dentro de um frame de 24px x 24px, garantindo que há uma padronização desses elementos.
        
        Um outro ajuste necessário é o de garantir que os ícones estão como objetos e não como traçados. Note que dentro do Artboard de um ícone há os elementos vetoriais que o compõem. Ao clicar em algum desses elementos, é possível ver quais são as propriedades dele no painel a direita. Existem duas propriedades principais para elementos vetoriais: fill (preenchimento) e stroke (traçado).
        
        ![alura_designsystemfigma_03.png](https://caelum-online-public.s3.amazonaws.com/1813-design-system/03/alura_designsystemfigma_03.png)
        
        Seleção dos objetos que compõem o ícone mostram que ele foi construído usando traçados.
        
        Caso o ícone tenha sido construído utilizando a propriedade do traçado é necessário alterar para que ele se torne um elemento com apenas a propriedade de preenchimento. Isso é necessário pois, ao escalonar um objeto construído com traçado, o valor que corresponde a essa propriedade não se altera e o peso do ícone se perde.
        
        ![alura_designsystemfigma_04.gif](https://caelum-online-public.s3.amazonaws.com/1813-design-system/03/alura_designsystemfigma_04.gif)
        
        A espessura do traçado não varia junto ao objeto.
        
        Para corrigir esse problema basta selecionar os elementos vetoriais que estão com a propriedade de traçado, clicar com o botão direito do mouse nesses elementos e selecionar a opção outline stroke.
        
        ![alura_designsystemfigma_05.gif](https://caelum-online-public.s3.amazonaws.com/1813-design-system/03/alura_designsystemfigma_05.gif)
        
        O uso do outline stroke permite redimensionar objetos sem perder sua espessura.
        
        Note que, ao selecionar essa opção, o objeto deixa de ter a propriedade de traçado e passa apenas a ter um preenchimento e agora é possível aumentar ou diminui-lo sem que ele perca o seu peso.

    Nesta aula:
        1 Finalizamos a parte de átomos do design system. 
        2 Aprendemos a criar estilos locais de cor para abrigar imagens distintas. 
        3 Além disso, aprendemos o plugin do Aspects para definir proporções de elementos e incluímos ilustrações de packs semelhantes dentro do design system no Figma. 
        4 Ao final incluímos os ícones como componentes locais.


04. Componentes
    Nesta aula aprendemos sobre as moléculas do design system. Grande parte delas foram construídas utilizando os componentes locais. Primeiro começamos criando botões com o auto-layout; posteriormente incluímos os cards; depois os inputs de texto; posteriormente incluímos os itens de navegação e por último alguns teclados.
    
    