<?php if (strlen($_GET["name"]) > 0): ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rafas Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="sherdog_styles.css" media="screen" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      /*height: 100%;*/
  }
    
    body {background-image: linear-gradient( green, yellow,  red);}
    
    #logo {
      text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
    }
    .top-buffer { margin-top:20px; }
  </style>
    
</head>
<body>
 
<div class="container-fluid">
    <h1 id="logo">Rafa's home page</h1>
    <h2>Um breve colóquio acerca do que fiz de propósito</h2>
  
  
 <div class="row top-buffer">
    <div class="col-sm-9">
        <div class="row">
         <div class="col-sm-4">
            <div class="card" style="width:400px">
            <div id="demo2" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo2" data-slide-to="0" class="active"></li>
                <li data-target="#demo2" data-slide-to="1"></li>
                <li data-target="#demo2" data-slide-to="2"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="life1.png">
                </div>
                <div class="carousel-item">
                  <img src="life2.png">
                </div>
                <div class="carousel-item">
                  <img src="life3.png">
                </div>
              </div>


            </div>
            <div class="card-body">
              <h4 class="card-title">Vida de Vaca RPG 3d</h4>
              <p class="card-text">RPG baseado em realidade virtual sobre a vida de uma vaca.</p>
              <a href="http://lifegame3d.herokuapp.com" target="_blank" class="btn btn-primary stretched-link">Jogar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
                <div class="row">
                    <div>
                        <div class="card" style="width:400px">
                            <div class="card-body">
                              <h4 class="card-title">Science, B*tch</h4>
                                <p class="card-text">Análise exploratória da adesão ao Sistema de Seleção Unificada (SiSU) pelas universidades federais por meio da Análise de Redes Sociais mapeadas a partir de dados abertos. InCID: Revista de Ciência da Informação e Documentação, v. 7, p. 181-200, 2016. <a href="http://www.revistas.usp.br/incid/article/view/76282" target="_blank">[ver]</a></p>
                                <p class="card-text">Formal Information Flows Among Top Authorities of the Brazilian Federal Government based on Co-word Analysis of Data Published in the Official Gazette. In: Sociedade Brasileira de Computação. Congresso. (36. : 2016 : Porto Alegre, RS), 2016, Porto Alegre. Anais do XXXVI congresso da sociedade brasileira de computação. Porto Alegre: Sociedade Brasileira de Computação, 2016. v. 1. p. 139-150.<a href="http://www.each.usp.br/digiampietri/BraSNAM/2016/p11.pdf" target="_blank">[ver]</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card top-buffer" style="width:400px">
                            <div id="demo" class="carousel slide" data-ride="carousel">

                              
                              <!-- The slideshow -->
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="street.jpg">
                                </div>
                              </div>


                            </div>
                            <div class="card-body">
                              <h4 class="card-title">Quadrifinalista - Campeonato de Street Figther V</h4>
                              <p class="card-text">Campus Party 2017</p>
                              <a href="https://challonge.com/STREETFIGHTERCPBR10" class="btn btn-primary stretched-link">Tep tep tuguen </a>
                            </div>
                          </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                <div id="demo" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="dossoccer1.jpg">
                    </div>
                    <div class="carousel-item">
                      <img src="dossoccer2.jpg">
                    </div>
                    <div class="carousel-item">
                      <img src="dossoccer3.jpg">
                    </div>
                    <div class="carousel-item">
                      <img src="dossoccer4.jpg">
                    </div>
                    <div class="carousel-item">
                      <img src="dossoccer5.jpg">
                    </div>
                  </div>


                </div>
                <div class="card-body">
                  <h4 class="card-title">Super DosSoccer</h4>
                  <p class="card-text">O primeiro RPG de futebol da internet. Um clássico!</p>
                  <a href="https://github.com/rafaelhss/dossoccer" class="btn btn-primary stretched-link">Ver no github</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div  style="width:400px">
            <div class="card-body">
              <div class="container">
    <div class="col_left" itemscope="" itemtype="http://schema.org/Person">
        <section>
            <div class="module bio_fighter vcard">
                                <h1><span class="fn">Rafael Henrique</span><br><span class="nickname">"<em>The Fanho</em>"</span></h1>
                                <div class="content">
                    <div>
                        <img itemprop="image" src="sherdog/profile.png" class="profile_image photo">
                        <div class="data">
                            <div class="bio">
                                <div class="birth_info">
                                    <span class="item birthday">
                                        Born: <span itemprop="birthDate">1983-03-23</span><br>
                                        <strong>
                                            Age: <span id="myage"></span>
                                        </strong>
                                    </span>
                                                                        <span class="item birthplace">
                                        <img src="https://www2-cdn.sherdog.com/2795/img/w/flags/br.png" class="big_flag" alt="Country">
                                                                                    <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="adr"><span itemprop="addressLocality" class="locality">Belo Horizonte</span></span><br>
                                                                                <strong itemprop="nationality">Brazil</strong>
                                    </span>
                                                                    </div>
                                <div class="size_info">
                                    <span class="item height">
                                        Height<br>
                                        <strong itemprop="height">6'00"</strong><br>
                                        183 cm                                    </span>
                                    <span class="item weight">
                                        Weight<br>
                                        <strong itemprop="weight">202 lbs</strong><br>
                                        92.0 kg                                    </span>
                                                                        <h5 class="item association">
                                        Association:<br>
                                                                                <strong><span itemprop="memberOf" itemscope="" itemtype="http://www.schema.org/Organization"><a class="association" itemprop="url" href="http://www.cerradomma.com"><span itemprop="name">Cerrado MMA</span></a></span> / <span itemprop="memberOf" itemscope="" itemtype="http://www.schema.org/Organization"><a class="association" itemprop="url" href="https://www.instagram.com/institutobrasiliadojo/"><span itemprop="name">Pombo Prreto Jiu Jitsu</span></a></span></strong>
                                    </h5>
                                    <br>
                                                                        <h6 class="item wclass">
                                        Class: <strong class="title"><a href="/stats/fightfinder?weightclass=Lightweight">Light Heavyweight</a></strong>
                                    </h6>
                                </div>
                            </div>
                            <div class="record">
                                <div class="count_history">
                                    <div class="left_side">
                                        <div class="bio_graph">
                                        <span class="card_bio">
                                                <span class="result">Wins</span>
                                                <span class="counter">17</span>
                                            </span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 0%"></span>
                                            </span>
                                            <span class="graph_tag">0 KO/TKO (<em>0%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 11%"></span>
                                            </span>
                                            <span class="graph_tag">2 SUBMISSIONS (<em>11%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 79%"></span>
                                            </span>
                                            <span class="graph_tag">13 DECISIONS (<em>79%</em>)</span>
                                                                                    </div>
                                        <div class="bio_graph loser">
                                            <span class="card_bio">
                                            <span class="result">Losses</span>
                                            <span class="counter">16</span>
                                            </span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 6%"></span>
                                            </span>
                                            <span class="graph_tag">1 KO/TKO (<em>6%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 25%"></span>
                                            </span>
                                            <span class="graph_tag">4 SUBMISSIONS (<em>25%</em>)</span>
                                            <span class="graphics">
                                                <span class="graph" style="width: 61%"></span>
                                            </span>
                                            <span class="graph_tag">11 DECISIONS (<em>69%</em>)</span>
                                                                                    </div>
                                    </div>
                                                                    </div>
                                                            </div>
                            <div class="socialmedia">
                                <div class="share_buttons">
                                    
            <div class="pw-widget __pw-theme-default pw-widget-855db __pw-size-32 __pw-hover-false __pw-layout-horizontal __pw-padding-false __pw-view-auto __pw-label-false __pw-counter-none ">
                <a class="pw-button pw-button-facebook __pw-size-32 __pw-hover-false __pw-label-false __pw-counter-none __pw-radius-square __pw-button-st-color-def __pw-button-st-bg-def "><span class="pw-button__outer"><span class="pw-button__inner"><span class="pw-button-icon pw-button-facebook-icon __pw-size-32"></span><span class="pw-button-text"></span></span></span></a>
                <a class="pw-button pw-button-twitter __pw-size-32 __pw-hover-false __pw-label-false __pw-counter-none __pw-radius-square __pw-button-st-color-def __pw-button-st-bg-def "><span class="pw-button__outer"><span class="pw-button__inner"><span class="pw-button-icon pw-button-twitter-icon __pw-size-32"></span><span class="pw-button-text"></span></span></span></a>
                <a class="pw-button pw-button-reddit __pw-size-32 __pw-hover-false __pw-label-false __pw-counter-none __pw-radius-square __pw-button-st-color-def __pw-button-st-bg-def "><span class="pw-button__outer"><span class="pw-button__inner"><span class="pw-button-icon pw-button-reddit-icon __pw-size-32"></span><span class="pw-button-text"></span></span></span></a>
                <a class="pw-button-googleplus"></a>
                <a class="pw-button pw-button-email __pw-size-32 __pw-hover-false __pw-label-false __pw-counter-none __pw-radius-square __pw-button-st-color-def __pw-button-st-bg-def "><span class="pw-button__outer"><span class="pw-button__inner"><span class="pw-button-icon pw-button-email-icon __pw-size-32"></span><span class="pw-button-text"></span></span></span></a>
            </div>
        <style>.pw-button{margin: 0 2px;}</style>
        <script src="//i.po.st/static/v4/post-widget.js#publisherKey=3v0p44crgkijifd5c8sk" type="text/javascript" async=""></script>                                </div>
                                                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </section>
        
        <!-- Fighter Biography -->
                <!-- End of fighter biography -->
        
                        <section>
            <div class="module fight_history">
                <div class="module_header">
                    <h2>Fight History</h2>
                </div>
                <div class="content table">
                    <table border="1">
                        <tbody><tr class="table_head">
                            <td class="col_one">Result</td>
                            <td class="col_two">Art</td>
                            <td class="col_three">Event</td>
                            <td class="col_four">Phase</td>
                            <td class="col_five">Category</td>
                        </tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Copa Faca na Caveira 2019</span><br><span class="sub_line">Oct / 20 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 2 NOGI/ROXA/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Copa Faca na Caveira 2019</span><br><span class="sub_line">Oct / 20 / 2019</span></td>
                            <td>Semi-final</td>
                            <td>MASTER 2/ROXA/PESADO</td>
                        </tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 1 NOGI/ROXA/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Sem-final</td>
                            <td>MASTER 1 NOGI/ROXA/PESADO</td>
                        </tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 1/ROXA/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Circuito Brasilia de Jiu Jitsu - 2a Edicao</span><br><span class="sub_line">Jul / 21 / 2019</span></td>
                            <td>Sem-final</td>
                            <td>MASTER 1/ROXA/PESADO</td>
                        </tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">GDF Cup de Jiu Jitsu 2019</span><br><span class="sub_line">Jun / 30 / 2019</span></td>
                            <td>Oitavas de final</td>
                            <td>ABSOLUTO: ADULTO/ROXA</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">GDF Cup de Jiu Jitsu 2019</span><br><span class="sub_line">Jun / 30 / 2019</span></td>
                            <td>Semi Final</td>
                            <td>ADULTO/ROXA/PESADO</td>
                        </tr>
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>KickBoxing</td>
                            <td><span itemprop="award">Campeonato Distrital de Kickboxing 2019</span><br><span class="sub_line">Mai / 25 / 2019</span></td>
                            <td>Semi Final</td>
                            <td>Ate 86Kg</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>KickBoxing</td>
                            <td><span itemprop="award">Campeonato Distrital de Kickboxing 2019</span><br><span class="sub_line">Mai / 25 / 2019</span></td>
                            <td>Quartas de Final</td>
                            <td>Ate 86Kg</td>
                        </tr>
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Final</td>
                            <td>ABSOLUTO: MASTER/AZUL</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ABSOLUTO: MASTER/AZUL</td>
                        </tr>
                            
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 1/AZUL/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Brasiliense de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 11 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1/AZUL/PESADO</td>
                        </tr> 
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Open Brazilian Champion de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 04 / 2019</span></td>
                            <td>Final</td>
                            <td>ADULTO/AZUL/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Open Brazilian Champion de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 04 / 2019</span></td>
                            <td>Semi-Final (Baia)</td>
                            <td>ADULTO/AZUL/PESADO</td>
                        </tr> 
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Open Brazilian Champion de Jiu Jitsu 2019</span><br><span class="sub_line">Mai / 04 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ADULTO/AZUL/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2019</span><br><span class="sub_line">Apr / 14 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 2 NOGI/AZUL/ACIMA 94KG</td>
                        </tr> 
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2019</span><br><span class="sub_line">Apr / 14 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER 2/AZUL/ATE 94KG</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Prime Experience Jiu Jitsu 2019</span><br><span class="sub_line">Apr / 14 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 2/AZUL/ATE 94KG</td>
                        </tr> 
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Centro-Oeste Brasileiro Jiu Jitsu 2019</span><br><span class="sub_line">Mar / 16 / 2019</span></td>
                            <td>Final</td>
                            <td>MASTER/AZUL/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Campeonato Centro-Oeste Brasileiro Jiu Jitsu 2019</span><br><span class="sub_line">Mar / 16 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER/AZUL/PESADO</td>
                        </tr>  
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ADULTO/AZUL/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Quartas de Final</td>
                            <td>ABSOLUTO: ADULTO/AZUL</td>
                        </tr>  
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Semi-Final</td>
                            <td>ADULTO/AZUL/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasil Golden Cup Jiu Jitsu 2019</span><br><span class="sub_line">Feb / 17 / 2019</span></td>
                            <td>Quartas de Final</td>
                            <td>ADULTO/AZUL/PESADO</td>
                        </tr>  
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Final</td>
                            <td>MASTER 1 NOGI/BRANCA/PESADISSIMO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu - NOGI</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Semi - Final</td>
                            <td>MASTER 1 NOGI/BRANCA/PESADISSIMO</td>
                        </tr>  
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Final</td>
                            <td>MASTER 1/BRANCA/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result win">win</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Copa Faca na Caveira Jiu Jitsu 2018</span><br><span class="sub_line">Oct / 14 / 2018</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1/BRANCA/PESADO</td>
                        </tr>     
                        <tr class="even">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">1a Copa Jiu Jitsu Recanto das Emas</span><br><span class="sub_line">Sep / 30 / 2018</span></td>
                            <td>Final</td>
                            <td>MASTER 1/BRANCA/PESADO</td>
                        </tr>
                        <tr class="odd">
                            <td><span class="final_result loss">loss</span></td>
                            <td>Jiu Jitsu</td>
                            <td><span itemprop="award">Brasilia International Pro Jiu Jitsu 2018</span><br><span class="sub_line">Sep / 16 / 2018</span></td>
                            <td>Semi-Final</td>
                            <td>MASTER 1/BRANCA/PESADO</td>
                        </tr>    
                        <tr class="even">
                            <td><span class="final_result win">win</span></td>
                            <td>Muay Thai</td>
                            <td><span itemprop="award">Desafio Reagae Bar - Phi Phi Islands</span><br><span class="sub_line">Dec / 06 / 2017</span></td>
                            <td>Final</td>
                            <td>Pesado</td>
                        </tr>
                        
                    </tbody></table>
                </div>
            </div>
        </section>
                                        <section>
	<div class="module black">
    	<div class="module_header">
			<h2 class="header_sprite video_panel">Related Videos<span class="read_more"><a href="/videos">view more</a></span></h2>
        </div>
		<div class="content video">
            <div class="current_video homepage hd">
            	<!-- SPRINGBOARD LIST WIDGET PLAYER --> 
                <div id="sd_video_player">
                                                                                                                                                                                                                                        <div class="play"></div>
                    <div class="image">
                        <img src="/image_crop/640/480/_images/videos/20190902023617_GettyImages1154006421.JPG">
                    </div>
                </div> 
                <!-- SPRINGBOARD LIST WIDGET PLAYER --> 
                <!-- SPRINGBOARD VIDEO LIST WIDGET -->
                <div id="sd_video_list" class="sd_video_list">
                    <div class="container">
                        <div class="placeholder">
                            <div class="item_collection">
                                                                <div class="item" data-code="<center><div style=&quot;position: relative; overflow: hidden; padding-top: 56.25%;&quot;><iframe style=&quot;position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border: 0px; overflow: hidden;&quot; id=&quot;bamf-vp_1567460468&quot; name=&quot;bamf-vp_1567460468&quot;   src=&quot;https://play.springboardplatform.com?autoplay=true&amp;controls=true&amp;loop=true&amp;muted=true&amp;iu=%2F4403%2Fcr%2Fsherdog%2Fvast&amp;cust_params=kw%3Dvast&amp;width=560&amp;height=315&amp;site_id=113&amp;video_id=1742163&amp;lazy=false&amp;debug=false&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen=&quot;allowfullscreen&quot; scrolling=&quot;no&quot;></iframe><script id=&quot;bamf-vp_1567460468-script&quot; src=&quot;https://play.springboardplatform.com/loader.min.js?iframeId=bamf-vp_1567460468&amp;lazy=false&amp;debug=false&amp;viewability=true&quot;></script></div></center>
<img height=&quot;290&quot; width=&quot;516&quot; src=&quot;http://imp.pxf.io/i/1341246/535101/9070&quot; style=&quot;position:absolute;visibility:hidden;&quot; border=&quot;0&quot; /> </img>
<IMG SRC=&quot;https://ad.doubleclick.net/ddm/trackimp/N6344.3178460IMPACTRADIUS/B21938790.233268953;dc_trk_aid=430994783;dc_trk_cid=108425359;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?&quot; BORDER=&quot;0&quot; HEIGHT=&quot;1&quot; WIDTH=&quot;1&quot; ALT=&quot;Advertisement&quot;> </img>
" data-springboard="" style="display: block;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20190902023617_GettyImages1154006421.JPG" data-original="/image_crop/200/125/_images/videos/20190902023617_GettyImages1154006421.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Pros Pick:...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="<center><iframe width=&quot;516&quot; height=&quot;290&quot; src=&quot;https://www.youtube.com/embed/MEsDQ1-XRCg&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen></iframe></center>
<BR><BR>
<i>We are a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for us to earn fees by linking to Amazon.com and affiliated sites.</i>
" data-springboard="" style="display: block;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20181004075558_111.PNG" data-original="/image_crop/200/125/_images/videos/20181004075558_111.PNG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Conor...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="<iframe width=&quot;516&quot; height=&quot;290&quot; src=&quot;https://embed.teamcoco.com/embed/v/104779&quot; frameborder=&quot;0&quot; allowfullscreen></iframe>
<BR><BR>
<i>We are a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for us to earn fees by linking to Amazon.com and affiliated sites.</i>

" data-springboard="" style="display: block;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20181003070659_22.JPG" data-original="/image_crop/200/125/_images/videos/20181003070659_22.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Conor...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="<a href=&quot;https://www.amazon.com/dp/B07H8NWXQG?&amp;tag=sherdogdotcom-20&quot; target=&quot;_blank&quot;>UFC 229 is now available on Amazon Prime</a>.
<BR><BR>
<iframe width=&quot;516&quot; height=&quot;290&quot; src=&quot;https://www.youtube.com/embed/s8NL-n_XgSY&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen></iframe>
<BR><BR>
<!--[nggallery id=142749 type=event]-->
<BR><BR>
<i>We are a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for us to earn fees by linking to Amazon.com and affiliated sites.</i>
" data-springboard="" style="display: none;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/130/73/img/default_300x300.jpg" data-original="/image_crop/200/125/_images/videos/20180920092650_Untitled1.PNG" alt="">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Video: UFC...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="<iframe width=&quot;516&quot; height=&quot;290&quot; src=&quot;https://www.youtube.com/embed/mp9v64cBPU8&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen></iframe>" data-springboard="" style="display: none;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20180328081625_media_call.JPG" data-original="/image_crop/200/125/_images/videos/20180328081625_media_call.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Audio: UFC...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="
            $sb(
                &quot;shd015&quot;,
                {&quot;sbFeed&quot;:
                {&quot;partnerId&quot;:113,
                &quot;type&quot;:&quot;video&quot;,
                &quot;contentId&quot;:1668831,
                &quot;cname&quot;:&quot;sherdog&quot;},
                &quot;style&quot;:{
                &quot;width&quot;:516,
                &quot;height&quot;:290
            }});" data-springboard="1" style="display: none;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20161112082616_1668831.JPG" data-original="/image_crop/200/125/_images/videos/20161112082616_1668831.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Khabib...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="
            $sb(
                &quot;shd015&quot;,
                {&quot;sbFeed&quot;:
                {&quot;partnerId&quot;:113,
                &quot;type&quot;:&quot;video&quot;,
                &quot;contentId&quot;:1622799,
                &quot;cname&quot;:&quot;sherdog&quot;},
                &quot;style&quot;:{
                &quot;width&quot;:516,
                &quot;height&quot;:290
            }});" data-springboard="1" style="display: none;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20160414025932_1622799.JPG" data-original="/image_crop/200/125/_images/videos/20160414025932_1622799.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Khabib...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="
            $sb(
                &quot;shd015&quot;,
                {&quot;sbFeed&quot;:
                {&quot;partnerId&quot;:113,
                &quot;type&quot;:&quot;video&quot;,
                &quot;contentId&quot;:1236075,
                &quot;cname&quot;:&quot;sherdog&quot;},
                &quot;style&quot;:{
                &quot;width&quot;:516,
                &quot;height&quot;:290
            }});" data-springboard="1" style="display: none;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20141208102520_Untitled9.JPG" data-original="/image_crop/200/125/_images/videos/20141208102520_Untitled9.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Khabib...</div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="item" data-code="
            $sb(
                &quot;shd015&quot;,
                {&quot;sbFeed&quot;:
                {&quot;partnerId&quot;:113,
                &quot;type&quot;:&quot;video&quot;,
                &quot;contentId&quot;:787053,
                &quot;cname&quot;:&quot;sherdog&quot;},
                &quot;style&quot;:{
                &quot;width&quot;:516,
                &quot;height&quot;:290
            }});" data-springboard="1" style="display: none;">
                                    <div class="item_wrapper">
                                        <div class="item_image">
                                            <img border="0" class="lazy" src="/image_crop/200/125/_images/videos/20130916110144_aa.JPG" data-original="/image_crop/200/125/_images/videos/20130916110144_aa.JPG" alt="" style="display: inline;">
                                        </div>
                                        <div class="item_content">
                                            <div class="item_info">
                                                                                            </div>
                                            <div class="title">Khabib...</div>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                        <div class="footer">
                            <div class="left">&nbsp;◄&nbsp;</div>
                            <div class="right">&nbsp;►&nbsp;</div>
                        </div>
                    </div>
                </div>
                <!-- SPRINGBOARD VIDEO LIST WIDGET -->
            </div>
	    </div>
    </div>
</section>
                <section>
            <div class="module pictures">
                <div class="module_header">
                    <h2>Pictures
                    </h2>
                </div>
                <div class="content">
<div id="nGalleryIn0" class="nGalleryWrapper" style="width: 661px;"><div class="nGallery">
 <a href="#" class="closeFS"></a><div class="nBanner728Holder"><div class="nLogo" title="Sherdog Gallery"></div><div class="nBanner728"><div id="ad728ng" data-id="ad728ng" class="gpt-ad"></div></div></div> <div class="nAllThumbs" style="height: 582px; width: 661px;"><ul><li><img data-src="/image_crop/72/72/_images/pictures/20190705035213_IMG_1269.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20190705035212_IMG_1266.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20190705035213_IMG_1267.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0016.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0024.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920061004_IMG_0046.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920061002_IMG_0006.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0008.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920060837_IMG_0108.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920060837_IMG_0109.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920060836_IMG_0103.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20180920060837_IMG_0105.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170407080954_khabib.PNG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302045756_IMG_5045.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302045756_IMG_5047.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302045756_IMG_5042.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095539_IMG_4481.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4430.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4431.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4432.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095539_IMG_4437.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4360.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4363.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4390.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4403.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4339.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20161111043339_1DX_3390.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20161111074236_05_Nurmagomedov.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20161109013650_1DX_2073.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20161109013651_1DX_2083.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160416082446_5D3_9903.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160416082429_5D3_0009.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160416082430_5D3_9989.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160415024355_5D3_9698.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160415024342_5D3_9711.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023602_1DX_1362.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023600_1DX_1295.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023600_1DX_1307.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023601_1DX_1338.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023559_1DX_1258.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023600_1DX_1260.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023558_1DX_1211.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023559_1DX_1248.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023557_1DX_1086.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023558_1DX_1094.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023556_1DX_1023.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023557_1DX_1066.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160414023556_1DX_0982.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20160304065603_IMG_4653.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20150803094902_0D3_3871.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20140419092937_5D3_9942.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20140418024744_1DX_8926.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20140418024701_1DX_8901.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130922060131_1DX_1102.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130922060131_1DX_1181.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130920030640_1DX_6551.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130920030641_1DX_6553.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4398.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4504.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4566.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4664.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105608_IMG_4695.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_3859.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_4161.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_4321.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105605_IMG_3693.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105605_IMG_3789.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_3804.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130916105605_IMG_3376.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130524070606_IMG_8951.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130524070535_IMG_8941.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20130118023855_IMG_1353.JPG"></li><li><img data-src="/image_crop/72/72/_images/pictures/20120706075229_IMG_7521.JPG"></li></ul></div> <div class="nSidebar" style="height: 618px;">  <div class="nBanner300"><div id="ad300ng" data-id="ad300ng" class="gpt-ad" style="" data-google-query-id="CJC7x6LX6eUCFcVgwQodpfMFTA"><div id="google_ads_iframe_/4403/cr/sherdog/fightfinder_4__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/4403/cr/sherdog/fightfinder_4" title="3rd party ad content" name="google_ads_iframe_/4403/cr/sherdog/fightfinder_4" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="9" data-load-complete="true"></iframe></div></div></div>  <ul><li class="" style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov vs. Dustin Poirier</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov vs. Dustin Poirier</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov vs. Dustin Poirier</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Conor McGregor</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Conor McGregor</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Conor McGregor</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Conor McGregor</div><em>Credit: Jason Burgos/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Fan Art by K. David Bena</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Tony Ferguson</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Tony Ferguson</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Tony Ferguson</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Mike Sloan/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov vs. Michael Johnson</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov (155.8)</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov vs. Michael Johnson</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov vs. Michael Johnson</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov (160.5)</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov (160.5) vs. Darrell Horcher (*162)</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Tony Ferguson</div><em>Credit: Jeff Sherwood/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Abubakar Nurmagomedov and Khabib Nurmagomedov</div><em>Credit: Dave Mandel/Sherdog.com</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Rafael dos Anjos and Khabib Nurmagomedov </div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Pat Healy and Khabib Nurmagomedov</div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov </div><em>Credit: Jeff Sherwood</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov and Abel Trujillo </div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Khabib Nurmagomedov</div><em>Credit: Dave Mandel</em></li><li style="height: 346px;"><div class="nTitle">Thiago Tavares and Khabib Nurmagomedov</div><em>Credit: Marcelo Alonso</em></li><li style="height: 346px;"><div class="nTitle">Gleison Tibau and Khabib Nurmagomedov</div><em>Credit: Sherdog.com</em></li></ul> </div> <div class="nMainSection">  <div class="nHeader">   <a class="butExit" href="#"></a>   <a class="butThumbs" href="#"></a>   <a class="butFullscreen" href="#"></a>   <div class="navigation"><a href="#" class="nextImg"></a><span>1 out of 73</span><a href="#" class="prevImg disabled"></a></div>  </div>    <div class="screensWrapper" style="height: 495px;">   <a href="#" class="prevImgBig disabled" style="margin-top: 222.5px;"></a>   <a href="#" class="nextImgBig" style="margin-top: 222.5px;"></a>   <ul style="height: 495px; width: 48253px; opacity: 1; left: 0px;"><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20190705035213_IMG_1269.JPG" src="https://www2-cdn.sherdog.com/_images/pictures/20190705035213_IMG_1269.JPG" style="opacity: 1;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20190705035212_IMG_1266.JPG" src="https://www4-cdn.sherdog.com/_images/pictures/20190705035212_IMG_1266.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20190705035213_IMG_1267.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20180920061003_IMG_0016.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20180920061003_IMG_0024.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20180920061004_IMG_0046.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20180920061002_IMG_0006.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20180920061003_IMG_0008.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20180920060837_IMG_0108.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20180920060837_IMG_0109.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20180920060836_IMG_0103.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20180920060837_IMG_0105.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170407080954_khabib.PNG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302045756_IMG_5045.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170302045756_IMG_5047.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302045756_IMG_5042.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170302095539_IMG_4481.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302095538_IMG_4430.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170302095538_IMG_4431.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302095538_IMG_4432.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170302095539_IMG_4437.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302095537_IMG_4360.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170302095537_IMG_4363.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302095537_IMG_4390.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20170302095538_IMG_4403.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20170302095537_IMG_4339.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20161111043339_1DX_3390.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20161111074236_05_Nurmagomedov.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20161109013650_1DX_2073.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20161109013651_1DX_2083.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160416082446_5D3_9903.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160416082429_5D3_0009.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160416082430_5D3_9989.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160415024355_5D3_9698.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160415024342_5D3_9711.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023602_1DX_1362.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160414023600_1DX_1295.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023600_1DX_1307.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160414023601_1DX_1338.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023559_1DX_1258.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160414023600_1DX_1260.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023558_1DX_1211.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160414023559_1DX_1248.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023557_1DX_1086.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160414023558_1DX_1094.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023556_1DX_1023.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160414023557_1DX_1066.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20160414023556_1DX_0982.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20160304065603_IMG_4653.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20150803094902_0D3_3871.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20140419092937_5D3_9942.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20140418024744_1DX_8926.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20140418024701_1DX_8901.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130922060131_1DX_1102.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130922060131_1DX_1181.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130920030640_1DX_6551.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130920030641_1DX_6553.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130916105607_IMG_4398.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130916105607_IMG_4504.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130916105607_IMG_4566.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130916105607_IMG_4664.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130916105608_IMG_4695.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130916105606_IMG_3859.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130916105606_IMG_4161.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130916105606_IMG_4321.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130916105605_IMG_3693.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130916105605_IMG_3789.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130916105606_IMG_3804.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130916105605_IMG_3376.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130524070606_IMG_8951.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20130524070535_IMG_8941.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www4-cdn.sherdog.com/_images/pictures/20130118023855_IMG_1353.JPG" style="opacity: 0.7;"></li><li style="height: 495px; width: 661px; max-width: 661px;"><img data-src="https://www2-cdn.sherdog.com/_images/pictures/20120706075229_IMG_7521.JPG" src="https://www2-cdn.sherdog.com/_images/pictures/20120706075229_IMG_7521.JPG" style="opacity: 0.7;"></li></ul>  </div>  <div class="nFooter" style="width: 577px;">   <a href="#" class="prevThumbs disabled"></a>   <a href="#" class="nextThumbs"></a>   <div class="thumbsWrapper"><ul style="width: 7501px; left: 0px;"><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20190705035213_IMG_1269.JPG" class="active" src="/image_crop/72/72/_images/pictures/20190705035213_IMG_1269.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20190705035212_IMG_1266.JPG" src="/image_crop/72/72/_images/pictures/20190705035212_IMG_1266.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20190705035213_IMG_1267.JPG" src="/image_crop/72/72/_images/pictures/20190705035213_IMG_1267.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0016.JPG" src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0016.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0024.JPG" src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0024.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920061004_IMG_0046.JPG" src="/image_crop/72/72/_images/pictures/20180920061004_IMG_0046.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920061002_IMG_0006.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920061003_IMG_0008.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920060837_IMG_0108.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920060837_IMG_0109.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920060836_IMG_0103.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20180920060837_IMG_0105.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170407080954_khabib.PNG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302045756_IMG_5045.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302045756_IMG_5047.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302045756_IMG_5042.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095539_IMG_4481.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4430.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4431.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4432.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095539_IMG_4437.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4360.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4363.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4390.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095538_IMG_4403.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20170302095537_IMG_4339.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20161111043339_1DX_3390.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20161111074236_05_Nurmagomedov.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20161109013650_1DX_2073.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20161109013651_1DX_2083.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160416082446_5D3_9903.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160416082429_5D3_0009.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160416082430_5D3_9989.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160415024355_5D3_9698.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160415024342_5D3_9711.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023602_1DX_1362.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023600_1DX_1295.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023600_1DX_1307.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023601_1DX_1338.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023559_1DX_1258.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023600_1DX_1260.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023558_1DX_1211.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023559_1DX_1248.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023557_1DX_1086.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023558_1DX_1094.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023556_1DX_1023.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023557_1DX_1066.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160414023556_1DX_0982.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20160304065603_IMG_4653.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20150803094902_0D3_3871.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20140419092937_5D3_9942.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20140418024744_1DX_8926.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20140418024701_1DX_8901.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130922060131_1DX_1102.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130922060131_1DX_1181.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130920030640_1DX_6551.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130920030641_1DX_6553.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4398.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4504.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4566.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105607_IMG_4664.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105608_IMG_4695.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_3859.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_4161.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_4321.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105605_IMG_3693.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105605_IMG_3789.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105606_IMG_3804.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130916105605_IMG_3376.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130524070606_IMG_8951.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130524070535_IMG_8941.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20130118023855_IMG_1353.JPG"></li><li style="width: 96.1667px;"><img data-src="/image_crop/72/72/_images/pictures/20120706075229_IMG_7521.JPG"></li></ul></div>  </div> </div></div> <div class="nBottombar" style="width: 661px; display: block;"><div class="nTitle">Khabib Nurmagomedov vs. Dustin Poirier</div><em>Credit: Mike Sloan/Sherdog.com</em></div> </div><div class="nGalleryBg"></div>                </div>
            </div>
        </section>
        

        
        
    </div>
</div>
<script>
    var birthday = new Date("1983-03-23")
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch
    document.getElementById("myage").innerHTML = Math.abs(ageDate.getUTCFullYear() - 1970);
</script>
        </div>
      </div>
    </div>
  
 
  
  </div> <!-- row -->
 
 </div>

</body>
</html>
<?php else: echo 'wrong password'; endif ?>