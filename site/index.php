<?php

    if (!isset($_COOKIE ['is_logado']) || $_COOKIE['is_logado'] == 0){
        ?>
            <script> 
                window.location.href="../";
            </script>
        <?php
    } 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Rodoviaria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">

    <script src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div class="container body-content">
        <header class="flex bg-silver sticky-top">
            <div class="topo">
                <img class="logo" src="img/logo.png" alt="logo">
            </div>
            <nav class="navbar navbar-expand-lg bg-silver">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#institucional" rel="modal">
                            INSTITUCIONAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#servicos">
                            SERVIÇOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#horarios">
                            HORÁRIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#vendapassagens">
                            VENDA DE PASSAGENS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#contato">
                            FALE CONOSCO</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section>
            <ul class="bxslider">
                <li><img src="img/slide01.jpg" width="100%" alt="banner 1"></li>                
                <li><img src="img/slide03.jpg" width="100%" alt="banner 3"></li>                    
            </ul>            
        </section>
        <section id="institucional" class="bg-silver"style="height: 650px">
            <div class="row sectionContent">
                <div class="flex">
                    <div class="col-md-6">
                        <img src="img/busdesenho.png" width="80%" />
                    </div>
                    <div class="col-md-6" style="padding-top: 30px;">
                        <h3>Sobre a Empresa</h3>
                        <p>Trabalhamos há mais de 20 anos no mercado de Transportes de passageiros de todas as localidades do Estado,</br>
                        e também nas regiões Sul, Sudeste e Centro-Oeste do Brasil, através de transportadoras intermunicipais e interestaduais.
                        </p>
                    </div>
                </div>
            </div>        
        </section>
        <section id="servicos" class="bg-silver" style="color: #000000">
            <div class="sectionContent">
                <div>
                    <h2>Nossos Serviços </h2>
                    <p>
                        Os serviços oferecidos pelo terminal rodoviário são diversos e facilitam a vida de quem passa por lá.</br>
                        Além disso, comodidade e segurança são fatores que merecem destaque. O Balcão de Informações está localizado no hall principal da rodoviária e fica aberto de segunda a sexta-feira, das 8h às 18h. O setor de Achados e Perdidos funciona na área de desembarque de passageiros e está aberto nos mesmos horários.</br>
                        Além de rampas de acesso e banheiros especiais, há elevadores nas plataformas B, D, E e G e funcionários que oferecem atendimento especial para pessoas com dificuldade de locomoção.
                    </p>
                </div>
                <div class="row">
                    <div class="flex">
                        <div class="div40">
                            <img src="img/estacionamento2.png" />
                        </div>
                        <div class="div60">
                            <h2>Estacionamento</h2>
                            <p>
                                Há dois estacionamentos acessíveis aos usuários que funcionam 24 horas:</br>
                                Coberto - localizado no nível do desembarque - 210 vagas para carros e 10 para motos</br>
                                Descoberto - localizado no nível do embarque - 86 vagas para carros e 16 para motos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="flex">
                        <div class="div40">
                            <img src="img/informacoes2.png" />
                        </div>
                        <div class="div60">
                            <h2>Balcão de Informações</h2>
                            <p>
                                Localizado na área de desembarque de passageiros - funciona 24 horas.</br>
                                Telefones: +55 (51) 3271-8933 / (51) 3271-3000.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flex">
                        <div class="div40">
                            <img src="img/acessiblidade2.png" />
                        </div>
                        <div class="div60">
                            <h2>Acessibilidade</h2>
                            <p>
                                A Rodoviária conta com 4 elevadores, nas plataformas B, D, E e F, para o atendimento aos usuários com dificuldade de locomoção.</br>
                                Além disso, os pisos são rebaixados e há sistemas de travessia especial para deficientes físicos e idosos na área de desembarque. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flex">
                        <div class="div40" >
                            <img src="img/alimentacao2.png" />
                        </div>
                        <div class="div60">
                            <h2>Alimentação</h2>
                            <p>
                                Na rodoviária existem vários pontos de alimentação como lanchonetes, padaria, sorveteria que funcionam todos os dias.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="flex">
                        <div class="div40">
                            <img src="img/comercial2.png" />
                        </div>
                        <div class="div60">
                            <h2>Área Comercial</h2>
                            <p>
                                Na rodoviária existem várias lojas abertas todos os dias.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flex">
                        <div class="div40">
                            <img src="img/money2.png" />
                        </div>
                        <div class="div60">
                            <h2>Terminais Bancários</h2>
                            <p>
                                Os caixas eletrônicos disponíveis são: Santander, Banco do Brasil, Caixa Econômica, Itaú, Bradesco e Banco 24h.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flex">
                        <div class="div40">
                            <img src="img/call2.png" />
                        </div>
                        <div class="div60">
                            <h2>Telefones Públicos</h2>
                            <p>
                                Existem vários telefones públicos nos pisos mezanino e superior.</br>
                                Os cartões telefônicos são vendidos no Balcão de Informações do terminal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flex">
                        <div class="div40">
                            <img src="img/wc2.png" />
                        </div>
                        <div class="div60">
                            <h2>Sanitários</h2>
                            <p>
                                Há conjuntos de sanitários (masculino e feminino) nos setores de embarque e desembarque, com fraldário anexo.
                            </p>
                        </div>
                    </div>
                </div>      
            </div>  
        </section>
        <section id="horarios" class="bg-dark" style="height: 650px;">
            <div class="sectionContent"> 
                <h3 style="color: #ffffff;">Tabela de Horários/Linha</h3>
                <table class="bg-dark tabelaHorarios" cellspacing="2px" cellpadding="5px">             
                    <tr style="background-color: #2F4F4F;">
                        <th>Linha</th>
                        <th>Dias da Semana</th>
                        <th>Horário</th>
                    </tr>
                    <tr>
                        <td>São Paulo/Florianópolis</td>
                        <td>Seg-Ter-Qua-Qui-Sex</td>
                        <td>14:00-15:00-16:00-17:30-21:00-00:00</td>
                    </tr>
                    <tr style="background-color: #2F4F4F;">
                        <td>Paraná/Rio de Janeiro</td>
                        <td>Dom-Seg-Qua-Qui-Sex</td>
                        <td>7:00-9:00-11:00-13:00-16:00-19:00</td>
                    </tr>
                    <tr>
                        <td>Porto Alegre/Santa Catarina</td>
                        <td>Dom-Seg-Ter-Sex-Sáb</td>
                        <td>8:00-10:00-12:00-15:00-18:00-22:00</td>
                    </tr>
                    <tr style="background-color: #2F4F4F;">
                        <td>Minas Gerais/São Paulo</td>
                        <td>Dom-Seg-Ter-Qui-Sáb</td>
                        <td>9:00-10:00-12:00-14:00-17:00-22:00</td>
                    </tr>
                    <tr>
                        <td>Porto Alegre/Gramado</td>
                        <td>Seg-Ter-Qua-Sex-Sáb</td>
                        <td>7:00-9:00-11:00-13:00-18:00-23:00</td>
                    </tr>
                    <tr style="background-color: #2F4F4F;">
                        <td>Passo Fundo/Montenegro</td>
                        <td>Dom-Seg-Ter-Qui-Sáb</td>
                        <td>10:00-11:00-15:00-18:00-21:00-00:00</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="vendapassagens" class="bg-dark" style="color:#ffffff; height: 650px;">
            <div class="row sectionContent">
                <div class="flex">
                    <div class="col-md-6">
                        <h3>Venda de Passagens</h3>
                        <p> A Venda de Passagens está disponível em nossas Unidades mais próximas de você.</br>
                            Em breve estará disponível a venda em nosso site.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="img/ticketbus.png" width="50%"/>
                    </div>
                </div>
            </div>
        </section>
        <section class="form" id="contato" style="height: 650px;">
            <div class="sectionContent">
                <h2>Fale Conosco</h2>
                <form action="" method="post" id="formContato">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Digite seu nome" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Digite o seu Email" />
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="txtMensagem" id="txtMensagem" class="form-control mensagem" placeholder="Digite a sua Mensagem"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary">Enviar</button>
                        <!--<input type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-secondary  enviar" value="Enviar">-->
                    </div>
                </form>
            </div>
        </section>
        <footer class="rodape">
            <div class="container flex end">
                <div class="flex">
                    <img src="img/face.png.png" class="rounded mx-auto d-block" alt="..." height="50px">
                    <img src="img/insta.png.png" class="rounded mx-auto d-block" alt="..." height="50px">
                    <img src="img/twitter.png.png" class="rounded mx-auto d-block" alt="..." height="50px">
                    <img src="img/likedin.png.png" class="rounded mx-auto d-block" alt="..." height="50px">
                </div>                 
                <div>
                    &copy; 2019 aSc Applied Software Consultants <br />
                    <a href="#">Terms of service</a>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/jquery.bxslider.js"></script>
<script type="text/javascript">
    $('.bxslider').bxSlider({
        auto: true,
        controls: true,
        responsive: true,
        pause: 5000,
        speed: 100,
        width: 1000
    });
</script>
</html>