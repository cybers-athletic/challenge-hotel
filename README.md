# <img src="https://avatars1.githubusercontent.com/u/42723118?s=200&v=4" alt="CA" width="24" /> Desafio Hotel

## Sobre o desafio

Criar um crawler que leia [este feed] (http://revistaautoesporte.globo.com/rss/ultimas/feed.xml)
e retorne um json estruturado da seguinte forma:

```
{
    'feed': [
        'item': {
            'title': 'titulo da materia',
            'link': 'url da materia',
            'description': [
                {
                    'type': 'text',
                    'content': 'conteudo da tag'
                },
                {
                    'type': 'image',
                    'content': 'url da imagem'
                },
                {
                    'type': 'links',
                    'content': ['urls dos links', ...]
                }
            ]
        },
        'item': {
            ...
        },
        'item': {
            ...
        },
        'item': {
            ...
        }
    ]
}
```

Você pode usar qualquer linguagem de programação para o desafio. Abaixo a lista de linguagens que nós aqui da CA temos mais afinidade:
- JavaScript
- Python
- Go
- Ruby
- C++
- PHP

Você pode usar qualquer _framework_. Se a sua escolha for por um _framework_ que resulte em _boilerplate code_, por favor assinale no README qual pedaço de código foi escrito por você. Quanto mais código feito por você, mais conteúdo teremos para avaliar.

## Requisitos

* Forkar esse desafio e criar o seu projeto (ou workspace) usando a sua versão desse repositório, tão logo acabe o desafio, submeta um *pull request* usando a branch resolucoes.
* O campo titulo deve ser identico ao item do feed;
* O campo links deve ser identico ao item do feed;
* O campo description deve ser estruturado da seguinte forma: 
  * tag p (com conteúdo) deve gerar um bloco do tipo 'text' com o texto como content;
  * tag div//img deve gerar um bloco do tipo 'image' com o endereço da imagem como content;
  * tag div//ul deve gerar um block do tipo 'links', com o endereço de cada link no content;  



## Critério de avaliação

- **Organização do código**: Separação de módulos, view e model, back-end e front-end
- **Clareza**: O README explica de forma resumida qual é o problema e como pode rodar a aplicação?
- **Assertividade**: A aplicação está fazendo o que é esperado? Se tem algo faltando, o README explica o porquê?
- **Legibilidade do código** (incluindo comentários)
- **Segurança**: Existe alguma vulnerabilidade clara?
- **Cobertura de testes** (Não esperamos cobertura completa)
- **Histórico de commits** (estrutura e qualidade)
- **UX**: A interface é de fácil uso e auto-explicativa?
- **Escolhas técnicas**: A escolha das bibliotecas, banco de dados, arquitetura, etc, é a melhor escolha para a aplicação?

## Dúvidas

Quaisquer dúvidas que você venha a ter, consulte as [_issues_](https://github.com/cybers-athletic/challenge-hotel/issues) para ver se alguém já não a fez e caso você não ache sua resposta, abra você mesmo uma nova issue!

Boa sorte! ;)

<p align="center">
  <img src="https://github.com/cybers-athletic/challenge-charlie/blob/master/ca.jpg?raw=true" alt="Challange accepted" />
</p>
