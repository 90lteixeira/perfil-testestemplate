<?php
session_start();
error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html>
    <head>  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="index, follow">
        <meta name="description" content="Biografia de Leonardo Henrique P. Teixeira." />
        <meta name="keywords" content="desenvolvedor, programador, php, css, analista de sistema">

        <meta property="og:url" content="http://lteixeira.tk/" />
        <meta property="og:image" content="http://www.jornaldoempreendedor.com.br/wp-content/uploads/2013/10/programador.jpg" />
        <meta name="twitter:image" content="http://www.jornaldoempreendedor.com.br/wp-content/uploads/2013/10/programador.jpg" />
        <meta itemprop="image" content="http://www.jornaldoempreendedor.com.br/wp-content/uploads/2013/10/programador.jpg">

        <meta name="author" content="Leonardo Henrique P. Teixeira">

        <title>Leonardo Teixeira - Perfil</title>

        <link rel="shortcut icon" href="https://d30y9cdsu7xlg0.cloudfront.net/png/88288-200.png">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link id="switcher" href="css/themes/dark-red-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <style type="text/css">
            .text-alert-s{
                padding: 4px;
                border: 1px solid #555;
                box-shadow: #DDDDDD;
                background: #87CB16;
                color: white;
            }

            .text-alert-e{
                padding: 4px;
                border: 1px solid #555;
                box-shadow: #DDDDDD;
                background: #dd514c;
                color: white;
            }

            #home{
                background-image: url("img/bg.jpg");
            }
            #experience{
                background-image: url("img/fundo_ti.jpg");
            }
            .footer-top{
                background-image: url("img/tec.jpg");
            }
        </style>
    </head>

    <body>
        <div id="preloader">        
            <div class="progress">
                <div class="indeterminate"></div>
            </div>        
        </div>
        <header id="header" role="banner">
            <div class="navbar-fixed">
                <nav>
                    <div class="container">
                        <div class="nav-wrapper">

                            <a href="#" class="brand-logo">Leonardo</a>

                            <ul class="right hide-on-med-and-down custom-nav">
                                <li><a href="#sobre" class="waves-effect waves-light sroll">Sobre</a></li>
                                <li><a href="#habilidades" class="waves-effect waves-light">Habilidades</a></li>
                                <li><a href="#experiencias" class="waves-effect waves-light scroll">Experiências</a></li>
                                <li><a href="#certificados" class="waves-effect waves-light scroll">Certificados</a></li>
                                <li><a href="#contato" class="waves-effect waves-light scroll">Contato</a></li>
                            </ul>
                            <ul id="slide-out" class="side-nav">
                                <li><a href="#about">Sobre</a></li>
                                <li><a href="#habilidades" >Habilidades</a></li>
                                <li><a href="#experiencias" >Experiências</a></li>
                                <li><a href="#certificados" >Certificados</a></li>
                                <li><a href="#contato" >Contato</a></li>
                            </ul>
                            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                        </div>
                    </div>
                </nav>
            </div>  
        </header>
        <div class="main-wrapper">
            <main role="main">
                <section id="home">
                    <div class="overlay-section">
                        <div class="container">
                            <div class="row">
                                <div class="col s12">
                                    <div class="home-inner">
                                        <h1 class="home-title"><span>Leonardo</span> Teixeira</h1>
                                        <p><span style="text-shadow: 0.1em 0.1em #000;">Prazer em conhecê-lo, saiba um pouco mais sobre mim!</span></p>
                                        <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#footer">Vamos trabalhar juntos<i class="mdi-content-send left"></i>                     
                                        </a>
                                        <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>                  
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </section>
                <span id="sobre"></span>
                <section id="about" >
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="about-inner">
                                    <div class="row">
                                        <div class="col s12 m4 l3">
                                            <div class="about-inner-left">
                                                <img class="profile-img" src="img/perfil.png" alt="Imagem de perfil">
                                            </div>
                                        </div>
                                        <div class="col s12 m8 l9">
                                            <div class="about-inner-right">
                                                <h3>Sobre mim</h3>
                                                <p>
                                                    Moro atualmente em Campinas/SP, tenho 26 anos, desenvolvo e faço manutenções de websites e sistemas desde 2008, quando terminei técnico em informática e me apaixonei pela profissão, formei no final de 2015 na CEUCLAR (presencial), Bacharelado em Sistemas de Informação.
                                                </p>
                                                <div class="personal-information col s12 m12 l6">
                                                    <h3>Informação Pessoal</h3>
                                                    <ul>
                                                        <li><span>Nome : </span>Leonardo Henrique P. Teixeira </li>
                                                        <li><span>Idade : </span>26 Anos</li>
                                                        <li><span>Celular : </span> <small>(entrar em contato por e-mail para essa informação)</small></li>
                                                        <li><span>Endereço : </span>Campinas/SP, Brasil</li>
                                                        <li><span>Email : </span><a href="mailto:leohpt@hotmail.com">leohpt@hotmail.com</a></li>
                                                        <li><span>Linkedin : </span><a href="https://www.linkedin.com/in/leohpt" target="_blank">https://www.linkedin.com/in/leohpt</a></li>
                                                        <li><span>Projeto : </span><a href="https://www.banhosoft.com.br" target="_blank">https://www.banhosoft.com.br</a></li>
                                                    </ul>
                                                </div>
<!--                                                <div class="resume-download col s12 m12 l6">
                                                    <a  href="curriculo.pdf" target="_blank" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> Download Currículo</a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <span id="habilidades"></span>
                <section id="resume">
                    <section id="skill">
                        <div class="container">
                            <div class="skill-inner">
                                <h2 class="title">Habilidades e competências</h2>
                                <div class="skill-progress-bar">
                                    <p>Minhas principais competências e com experiência profissional:</p>
                                    <h4>Nível Avançado</h4>
                                    <span>HTML, HTML 5</span> - 
                                    <span>CSS, CSS3</span> - 
                                    <span>Bootstrap</span> - 
                                    <span>jQuery</span> - 
                                    <span>PHP</span>  

                                    <h4>Nível Intermediário </h4>
                                    <span>MySQL</span> - 
                                    <span>PostgreSQL</span> - 
                                    <span>Oracle</span>
                                    <span>Photoshop</span> - 
                                    <span>Corel Draw</span> - 
                                    <span>Sony Vegas (Edição de vídeo)</span>  
                                    
                                    <br><hr><br>
                                    
                                    <p>Minhas principais competências e estudos, porém sem experiência profissional:</p>
                                    <h4>Nível Iniciante </h4>
                                    <span>Laravel</span> - 
                                    <span>Ruby on Rails</span> - 
                                    <span>ASP</span> - 
                                    <span>Java</span>

                                    <p>Entre outros..</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <span id="experiencias"></span>
                    <section id="experience">
                        <div class="container">
                            <div class="experience-inner">
                                <h2 class="title" style="text-shadow: 0.1em 0.1em #000;">Experiência Profissional</h2>
                                <p style="text-shadow: 0.1em 0.1em #000;">Trabalho desde 2009 como desenvolvedor autônomo, meu primeiro trabalho foi em uma rádio de minha cidade natal Batatais como Office Boy, onde me ajudou muito na organização pessoal e sobre trabalho em equipe mas minha paixão na profissão de TI começou quando fiz técnico em informática e entrei em uma empresa de produções de vídeos onde comecei a abrir mais a mente sobre desenvolvimento e designer, abaixo mais detalhes:</p>
                                <div id="owl-carousel" class="experience-slider row">
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Janeiro 2017 <br>Atual.</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Superlógica</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Desenvolvedor</span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Desenvolvedor<i class="material-icons right">close</i></span>
                                                <p>Em construção...</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Maio 2016 <br> Outubro 2016</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Go Liberty<br> do Brasil</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Desenvolvedor PHP </span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Desenvolvedor PHP<i class="material-icons right">close</i></span>
                                                <p>Desenvolvimento e manutenção do site da empresa e projetos paralelos, com Javascript, JQuery, CSS, PHP, Bootstrap, Postgresql.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Julho 2009 <br> Abril 2016</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Desenvolvedor<br> Autônomo</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Desenvolvedor Web</span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Desenvolvedor Web<i class="material-icons right">close</i></span>
                                                <p>Projetos mais relevantes:  Colégio Objetivo de Batatais, Inbatatais, Dádiva Turismo, Banhosoft. <br><br>Principais atividades: Desenvolvimento e manutenção de Web sites, com Javascript, JQuery, CSS, ASP, PHP, Bootstrap, MySQL, Access. Edição de vídeos, elaboração de capa e gravação para DVD's, com Sony Vegas, Photoshop, Corel Draw. </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Fevereiro 2015 <br> Outubro 2015</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Inbatatais</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Desenvolvedor Web </span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Desenvolvedor Web<i class="material-icons right">close</i></span>
                                                <p> Desenvolvimento e manutenção do site da empresa, com Javascript, JQuery, CSS, PHP, Bootstrap, MySQL. Edição de vídeos de festas e eventos da cidade, elaboração de capa e gravação para DVD's, com Sony Vegas, Photoshop. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Outubro 2008 <br> Dezembro 2010</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Colégio Objetivo<br> de Batatais</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Web designer</span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Web designer<i class="material-icons right">close</i></span>
                                                <p> Gerenciamento, desenvolvimento e manutenção do site da empresa. ( Autônomo )
                                                    - html, css, access, asp, javascript.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Dezembro 2008 <br> Março 2010</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Conect <br>Informática</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Web designer</span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Web designer<i class="material-icons right">close</i></span>
                                                <p>Desenvolvimento e manutenção do site da empresa, com Javascript, ASP, CSS, Access. Edição de vídeos, elaboração de capa e gravação para DVD's, com Sony Vegas, Photoshop, Corel Draw.
                                                    <br><br>
                                                    Carga horária de 24 horas semanais.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">Novembro 2006 <br> Junho 2008</h2>
                                                <h3 class="activator reveal-title" style=" text-align: center; min-height: 100px;">Rádio e Televisão <br> Educadora</h3>
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator reveal-title">Office Boy </span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title reveal-title">Office Boy <i class="material-icons right">close</i></span>
                                                <p>Principais atividades: Pagamento e recebimento de contas da empresa. Ajudante na parte de escritório. 
                                                    Carga horária de 20 horas semanais ( Estágio ).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="customNavigation">
                                    <a class="btn prev btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                                    <a class="btn next btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <span id="certificados"></span>
                    <section id="edcuation">
                        <div class="container">
                            <div class="education-inner">
                                <h2 class="title">Formação e certificados</h2>
                                <p>Meus estudos começou lá em 2004 na área de TI com web designer, gostei porém não me aprofundei, era muito novo ainda. Em 2008 quando entrei no curso de técnico em informática e tive mais acesso a programação, me apaixonei de vez na profissão o que teve bastante influência na minha faculdade, que entrei em 2012. </p>
                                <div id="owl-carousel" class="experience-slider row">
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2012 - 2015</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Bacharelado em Sistemas de Informação</h4>
                                                <p> Centro Universitário Claretiano </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2015</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso Complementar em Pro Tableless, Padrões Web</h4>
                                                <p> UP Inside </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2015</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso presencial em Desenvolvimento Web com Rails</h4>
                                                <p>Centro Universitário Claretiano </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2015</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso Complementar em Web Designer</h4>
                                                <p>Fundação Bradesco</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2015</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso Complementar em HTML avançado</h4>
                                                <p>Fundação Bradesco </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2014</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso presencial em SEO</h4>
                                                <p>Centro Universitário Claretiano </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2008 - 2009</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso presencial em Técnico em Informática</h4>
                                                <p>Escola Técnica Antônio de Pádua Cardoso</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <h2 class="experience-title">2004 - 2006</h2>
                                            </div>
                                            <div class="card-content">
                                                <h4>Curso presencial em Web Designer</h4>
                                                <p>Microlins, Cursos Profissionalizantes </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <span id="contato"></span>
                <footer id="footer" role="contentinfo">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col s12">
                                    <div class="footer-top-inner">
                                        <h2 class="title" style="text-shadow: 0.1em 0.1em #000;">Contato</h2>
                                        <p style="text-shadow: 0.1em 0.1em #000;">Entre em contato comigo preenchendo o formulário abaixo, se preferir mande email diretamente para leohpt@hotmail.com.<br>
                                            Obrigado por sua visita, retorno assim que possível. (Não estou fazendo frella no momento)</p>
                                        <div class="contact">
                                            <div class="row">
                                                <div class="col s12 m6 l6">
                                                    <div class="contact-form">
                                                        <div id="msg" class=" "></div>
                                                        <?php if ($_SESSION['status'] == 'emailenviado'): ?>
                                                            <div class="text-alert-s"> 
                                                                Seu email foi enviado com sucesso, entro em contato assim que possível.
                                                            </div> 
                                                        <?php endif; ?>

                                                        <?php if ($_SESSION['status'] == 'emailconfere'): ?>
                                                            <div class="text-alert-e"> 
                                                                Email digitado não confere, tente novamente! Não tem como retornar para um email inexistente e desta forma garanto que terá retorno.
                                                            </div> 
                                                        <?php endif; ?>

                                                        <?php if ($_SESSION['status'] == 'emailerro'): ?>
                                                            <div class="text-alert-e"> 
                                                                Não foi possível enviar o seu email, tente novamente ou envie um email diretamente para: <a href="mailto:leohpt@hotmail.com" title="Email Leonardo">leohpt@hotmail.com</a>.
                                                            </div> 
                                                        <?php endif; ?>
                                                        <form method="post" action="mail/contact_me.php" onSubmit="return cadastroContato.enviar();">
                                                            <div class="input-field">
                                                                <input  type="text" class="input-box" name="contactName" id="contact-name" required >
                                                                <label class="input-label" for="contact-name">Nome</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <input type="email" class="input-box" name="contactEmail" id="email" required>
                                                                <label class="input-label" for="email">Email</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <input type="email" class="input-box" name="contactEmail2" id="email2" required>
                                                                <label class="input-label" for="email2">Confirme o seu Email</label>
                                                            </div>
                                                            <div class="input-field">
                                                                <input type="text" class="input-box" name="contactSubject" id="subject" required>
                                                                <label class="input-label" for="subject">Assunto</label>
                                                            </div>
                                                            <div class="input-field textarea-input">
                                                                <textarea class="materialize-textarea" name="contactMessage" id="textarea1" required></textarea>
                                                                <label class="input-label" for="textarea1">Mensagem</label>
                                                            </div>
                                                            <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">Enviar mensagem</button>
                                                        </form>
                                                        <script type="text/javascript">

                                                            var cadastroContato = {
                                                                email: $("#email"),
                                                                email2: $("#email2"),
                                                                enviar: function () {
                                                                    $("#msg").fadeIn();

                                                                    if (cadastroContato.email.val() != cadastroContato.email2.val()) {
                                                                        $("#msg").html("E-mails não conferem, tente novamente.")
                                                                                .addClass("text-alert-e")
                                                                                .removeClass("text-alert-s");
                                                                        $("#contactEmail").focus();
                                                                        return false;
                                                                    } else {
                                                                        $("#msg").html("Enviando mensagem...")
                                                                                .addClass("text-alert-s")
                                                                                .removeClass("text-alert-e");
                                                                        return true;
                                                                    }
                                                                }
                                                            };

                                                            jQuery(document).ready(function ($) {
                                                                $.easing.easeInOutExpo = function (x, t, b, c, d) { // definição do efeito que será posteriormente usado no animate
                                                                    if (t == 0)
                                                                        return b;
                                                                    if (t == d)
                                                                        return b + c;
                                                                    if ((t /= d / 2) < 1)
                                                                        return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                                                                    return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
                                                                }

                                                                $(".scroll").click(function (event) {
                                                                    event.preventDefault();
                                                                    $('html,body').animate({
                                                                        scrollTop: $(this.hash).offset().top
                                                                    }, {
                                                                        duration: 3000,
                                                                        easing: 'easeInOutExpo' // basta usar o mesmo nome que você definiu acima ;)
                                                                    });
                                                                });
                                                            });

                                                        </script>   
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l6">
                                                    <div class="contact-map"  >
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235231.75455364067!2d-47.17068921257058!3d-22.895063223395844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8f6a2552649%3A0x7475001c58043536!2sCampinas+-+SP!5e0!3m2!1spt-BR!2sbr!4v1481474411100" width="100%" height="116%" frameborder="0" style="border:0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col s12">
                                    <div class="footer-inner">
                                        <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/appear.min.js" type="text/javascript"></script>
        <script src="js/pro-bars.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js"></script>    
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>     
        <script src="js/custom.js"></script>      

    </body>
</html>

<?php
unset($_SESSION['status']);
