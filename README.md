# rede_social
um pequeno projeto de uma rede social criada em php

O projeto é organizado em partes importantes:
-- Public:
pasta responsavel por guardar os arquivos que serão acessiveis para o public, caso queira hospedar o servidor, HOSPEDE NESTA PASTA.

-- APP:
pasta responsavel por manter os arquivos do back-end, como o roteador, classes, controladores e qualquer programa essencial para o bom funcionamento do website.

-- Como funciona?
ao acessar a pasta index.php na pasta public, tentaremos chamar a classe app dentro da pasta app/core/App.php, que enviara o pedido para um controlador especial dependendo da url acessada.
classes especiais para funcionamentos especiais como o contato com o banco de dados são utilizadas chamando model(classe) dentro do controlador que queres utilizar.
para instanciar uma view para o usuário basta chamar o método view(view) no controlador. as classes e as views estão guardadas dentro das pastas de mesmo nome em plural.
observação: estou seguindo o modelo pasta -> index.php para renderizar as view, mas voce faz da maneira que quiser.

Ainda não trabalhei com a documentação do projeto, segue apenas um link para a playlist que criarei para mante-lo documentado. https://youtu.be/86iw5-8dq8M
estou atualizando o projeto e o video esta fortemente des-atualizado comparado com a novar versão, o manterei apenas para mostrar o histórico.
