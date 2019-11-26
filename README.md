[![Join the chat at https://telegram.me/#MapasCulturais](https://patrolavia.github.io/telegram-badge/chat.png)](https://telegram.me/joinchat/AVzIFAqpz3VFIPehrPpbZQ)

# Mapas da Saúde

Mapas da Saúde é uma plataforma colaborativa que reúne informações sobre agentes, espaços, eventos e projetos da saúde inicialmente apenas para o estado do Cerá, fornecendo ao poder público uma radiografia da área de saúde (profissionais/populaçãp)

OBJETIVOS 
 - No processo de planejamento, o Mapa da Saúde auxilia na análise situacional contribuindo na identificação das necessidades de saúde da população, nas dimensões referentes às condições de vida e de acesso aos serviços e às ações de saúde, baseando o estabelecimento de metas de saúde e o processo de construção regional do Contrato Organizativo de Ação Pública (Coap).

 - As informações que constituem o Mapa da Saúde possibilitam aos gestores do SUS o entendimento de questões estratégicas para o planejamento das ações e dos serviços de saúde, facilitando a tomada de decisão quanto à implementação e à adequação das ações e dos serviços de saúde.

O gasto com saúde no Brasil representa 9,1% do PIB, e mais da metade desse percentual (54%) concentra-se no setor privado.
A maior parte do gasto é direcionada a 25% da população que possui saúde suplementar ou recursos para arcar com os custos.

Em 2013 foram registradas perdas de R$ 22 bilhões com ineficiências do sistema.
Se todos os focos de ineficiência fossem eliminados do sistema, a economia seria de R$ 989 bilhões, superior a da Reforma a Previdência.

O Ceará é o 8o Estado com maior acesso ao serviço público do país e o 5o do Nordeste (PNS IBGE 2013)
76% dos leitos existentes no Estado do Ceará são do SUS e 24% exclusivamente privados (CNES)

O Ceará supera todos os Estados da região nordeste na taxa de cobertura vacinal (75,86%)

O Ceará é o 3o Estado da Região Nordeste em produção ambulatorial

De 45,2 milhões de internações no Brasil, cerca de 12,1 milhões foram realizadas no Nordeste e 1,9 milhões no Ceará (2018), representando 15,75% em relação ao NE e 4,2% em relação ao Brasil.

Diante do exposto entendemos a necessidade de concentar esforços no sentido de aprimorar o sistema Mapa da Saúde para que sirva como um recurso centralizador de dados como:

 - Números e localizações de hospitais públicos e privados

 - Números e locais de trabalho dos profissionais de saúde inicialmente do Estado do Ceará

 - Distribuição geográfica de Postos de Saúde e atendimentos emergências/ambulatoriais

Dados estes, importantes e que auxiliarão nas tomadas de decisões para criação de estratégias com a finalidade de promover mudanças no atual quadro da saúde no estado.

A nova visão gestora da Secretaria Estadual de Saúde (SESA) entendendo a necessidade de investir em soluções inovadoras para a agilização dos processos.......

A plataforma poderá:
- Estar alinhada ao Sistema Nacional de Informação e Indicadores de Saúde do Ministério da Saúde (MS) e poderá contribui para a realização de alguns dos objetivos do Plano Nacional de Saúde.

- Estar em uso em diversos municipios, estados, no governo federal em diversos projetos do ministério da saúde. Instalações recentes: 

Referênciais
* [Mapa da Saúde - CONASS](https://www.conass.org.br/guiainformacao/mapa-da-saude/)
* [Mapa da Saúde - Ministério da Saúde](http://bvsms.saude.gov.br/bvs/folder/mapa_saude.pdf)
* [Mapa da Saúde](http://mapadasaude.saude.gov.br/mapadasaude/)


## Sobre a aplicação
Mapas da Saúde é uma aplicação web server-side baseada em linguagem PHP e banco de dados Postgres, entre outras tecnologias e componentes, que propicia um ambiente virtual para mapeamento, divulgação e gestão de ativos culturais. 

## Projetos correlatos

* [Título do link](link completo)


### Documentação 

A documentação pode ser navegada no endereço (http://docs.mapasculturais.org)

Toda documentação da aplicação está na pasta [documentation](documentation). Principais referências: 
- [Deploy](documentation/docs/mc_deploy.md)
- [Deploy Docker](documentation/docs/mc_developer_docker_enviroment.md)
- [API](documentation/docs/mc_config_api.md)
- [Guia do desenvolvedor](documentation/docs/mc_developer_guide.md)
- [Como contribuir](documentation/docs/mc_developer_contribute.md)
- [Habilitar um novo tema](documentation/docs/mc_deploy_theme.md)
- [Desenvolver um novo tema](documentation/docs/mc_developer_theme.md)
- [Importação de arquivos de dados geoespaciais (Shapefiles)](documentation/docs/mc_deploy_shapefiles.md)

### [Software] Requisitos para Instalação
Lista dos principais softwares que compõe e aplicação. Maiores detalhes, ver documentação de [instalação](documentation/docs/mc_deploy.md) ou [guia do desenvolvedor](documentation/docs/mc_developer_guide.md). 

- [Ubuntu Server >= 14.04](http://www.ubuntu.com) ou [Debian Server >= 8](https://www.debian.org.)
- [PHP >= 5.4](http://php.net)
  - [php5-gd](http://php.net/manual/pt_BR/book.image.php)
  - [php5-cli] (https://packages.debian.org/pt-br/jessie/php5-cli)
  - [php5-json](http://php.net/manual/pt_BR/book.json.php)
  - [php5-curl](http://php.net/manual/pt_BR/book.curl.php)
  - [php5-pgsql](http://php.net/manual/pt_BR/book.pgsql.php)
  - [php-apc](http://php.net/manual/pt_BR/book.apc.php)
- [Composer](https://getcomposer.org/)
- [PostgreSQL >= 9.3](http://www.postgresql.org/)
- [Postgis >= 2.1](http://postgis.net)
  - [PostgreSQL-Postgis-Scripts](http://packages.ubuntu.com/trusty/misc/postgresql-9.3-postgis-2.1)
- [Node.JS >= 4.x](https://nodejs.org/en/)
  - [NPM](https://www.npmjs.com/)
  - [UglifyJS](https://www.npmjs.com/package/uglify-js)
  - [UglifyCSS](https://www.npmjs.com/package/gulp-uglifycss)
- [Ruby] (https://www.ruby-lang.org/pt)
  - [Sass gem] (https://rubygems.org/gems/sass/versions/3.4.22)

### [Hardware] Requisitos para instalação

Para instalações de pequeno/medio porte nas quais o número de entidades, isto é, número de agentes, espaços, projetos e evento,giram em torno de 2000 ativos, recomenda-se o mínimo de recursos para um servidor (aplicação + base de dados):

* 2 cores de CPU;
* 2gb de RAM;
* 50mbit de rede;

Desejável:

*  4 cores de CPU;
* 4gb de RAM;
* 100mbit de rede;

Para instalações em cidades de grande porte onde o número de entidades, isto é, número de agentes, espaços, projetos e evento, giram em torno de dezenas de milhares de ativos de cada, recomenda-se o mínimo de recursos para um servidor:

* 4 cores de CPU
* 4gb de RAM
* 100mbit de rede

Recomendado:
* 8 cores de CPU
* 8gb de RAM
* 500mbit de rede

Vale lembrar que os requisitos de hardware podem variar de acordo com a latência da rede, velocidade dos cores dos cpus, uso de proxies, entre outros fatores. Recomendamos aos sysadmin da rede em que a aplicação será instalada um monitoramento de tráfego e uso durante o período de 6 meses a 1 ano para avaliação de cenário de uso. 

### Canais de comunicação

* [Lista de discussão](https://groups.google.com/forum/?hl=en#!forum/mapas-culturais)
* Telegram: [![Join the chat at https://telegram.me/#MapasCulturais](https://patrolavia.github.io/telegram-badge/chat.png)](https://telegram.me/joinchat/AVzIFAqpz3VFIPehrPpbZQ)
 

### Ambientes de desenvolvimento e teste
Estes ambientes possuem integração contínua com os branches e temas atuais. Para maiores detalhes, ver [Guia do desenvolvedor](doc/developer-guide.md). 

As urls de testes functionam da seguinte maneira:

* http://nomedacidade.uf.ambiente.map.as e
* http://uf.ambiente.map.as

Os ambientes possíveis são **stable**, **rc** e **master**, onde:

stable: É a última versão de produção que está disponibilizada do software
rc: Sigla de **Release Candidate**, onde as features (funcionalidades) são homologadas antes de irem para a versão **stable**
master: Ambiente de desenvolvimento, em constante evolução antes de ter pacotes de features para irem para a versão **rc**

Exemplos:
* http://saopaulo.sp.stable.map.as
* http://blumenau.sc.rc.map.as
* http://santoandre.sp.master.map.as
* http://ce.rc.map.as
* http://rs.stable.map.as
* http://df.master.map.as
* http://museus.minc.rc.map.as (minc)
* http://bibliotecas.minc.stable.map.as (minc)

### Stories & Tests

- Stories for development: 
[![Stories in Dev Ready](https://badge.waffle.io/hacklabr/mapasculturais.png?label=status:dev-ready)](https://waffle.io/mapasculturais/mapasculturais) 
- Stories for test: 
[![Stories in Test Ready](https://badge.waffle.io/hacklabr/mapasculturais.png?label=status:test-ready)](https://waffle.io/mapasculturais/mapasculturais)
- Stories for deploy: [![Stories in Deploy Ready](https://badge.waffle.io/hacklabr/mapasculturais.png?label=status:tested)](https://waffle.io/mapasculturais/mapasculturais)
- Travis:
[![Build Status](https://secure.travis-ci.org/mapasculturais/mapasculturais.png)](http://travis-ci.org/mapasculturais/mapasculturais)

### Licença de uso e desenvolvimento

Mapas Culturais é um software livre licenciado com [GPLv3](http://gplv3.fsf.org). 

