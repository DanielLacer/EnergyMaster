<?php 
  
  session_start();
  
  include("php/funcoes.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  

  <title>Power Fitness</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
      <?php echo ThisMenu() ?>
      
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        A Revolução do seu bem estar
                      </h2>
                      <h1>
                        BombFit 
                      </h1>
                      <p>
                        A Power Fitness ajuda você a conquistar a forma física e a qualidade de vida que
                        sempre desejou, através de um acompanhamento direcionado para seus objetivos.
                      </p>
                      <div class="btn-box">
                       
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Somos Especialistas
                      </h2>
                      <h1>
                        BombFit
                      </h1>
                      <p>
                        Somos especializados em todo os ramos de uma vida ativa e saudável. 
                        Contamos com Profissionais de conhecimento estrangeiro para melhor satisfação dos nossos clientes
                      </p>
                      <div class="btn-box">
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Somos Diferenciados
                      </h2>
                      <h1>
                        BombFit 
                      </h1>
                      <p>
                        Com o ambiente aperfeiçoado, agradevel e com resultados garantidos, nós somos a escolha perfeita para você.
                      </p>
                      <div class="btn-box">
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section class="about_section layout_padding">
   <div class="container">
      <div class="heading_container">
        <h2>
          Sobre Power Fitness
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
          <div class="detail-box">
            <p>
                Inaugurada em maio de 2005, a Power Fitness está situada na região norte e litoral de Santa Catarina, nas cidades de
                Joinville, Jaraguá do Sul, Itapema e Balneário Camboriú, com 4 academias em operação. Nossa matriz, em Joinville, é uma das
                maiores academias da região sul e conta com 3 andares de infrastrutura proporcionando equipamentos de ponta, profissionais 
                capacitados, e variedade de atividades como musculação, crossfit, ginástica, zumba, treino funcional e muito mais.
            </p>
          </div>

    </div>
  </section>
  <!-- end about section -->

  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Nossos diferenciais
        </h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img-box">
            <img src="images/u-1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Equipamentos de Qualidade
            </h5>
            <p>
              Treinos elaborados pelos melhores profissionais do mercado
              e de acordo com<br> os seus objetivos através de equipamentos</br> de alta qualidade.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Plano de Nutrição Saudável
            </h5>
            <p>
              Nossos especialistas desenvolvem<br> junto com você um plano alimentar personalizado</br>
              possível e focado em suas necessidades, objetivos e expectativas.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Serviço de Chuveiro
            </h5>
            <p>
              Para sua maior comodidade adequamos chuveiro elétrico <br>individual para melhor otimização do seu tempo
              pós treino.</br>
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
          </div>
          <div class="detail-box">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          O que nossos clientes acham?
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/cle.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>Instrutor</h1>
                <h5>
                  Swagger Oliver/Africa
                </h5>
                <p>
                  <br>"Ótimos instrutores, equipamentos incríveis e um ambiente muito amigável. É um privilégio
                  estar nesse lugar, ótimo ambiente e os profissionais super prestativos."</br>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/raf.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>Instrutor</h1>
                <h5>
                  Rafeal Luiz/Alemanha
                </h5>
                <p>
                  Ele é Ótimo, pode contar com ele.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
            <div class="img-box">
                <img src="images/carol.jpg" alt="">
              </div>
              <div class="detail-box">
                <h1>Cliente</h1>
                <h5>
                  Caroline/França
                </h5>
                <p>
                 "A melhor academia! Um atendimento excelente, com os melhore professores, com uma ampla diversidade de aulas! ADORO ESTE LUGAR!"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- result section -->

  <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/result-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              Resultado <br>
              Garantido
            </h2>
            <p>
             Resultado já experimentado por varios de nossos clientes. Usamos métodos e estratégiastécnicas e pragmaticas para o seu sucesso.
             Métodos e Práticas usados, testados e aprovados no mundo da Educação Física mundial. Mediada por especialistas na area do controle da mesmas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end result section -->


  <!-- contact section -->
  <section class="contact_section layout_padding" >
    
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Entre em Contato
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="">
              
              <div class="contact_form-container">
                <div>
                  <div class="container-1">
                  <div>
                    <div class="titulo">
                    <p>PREENCHA O FORMULÁRIO</p>
                    </div>
                    <input type="text" placeholder="Nome" >
                  </div>
                  <div>
                    <input type="email" placeholder="E-mail" >
                  </div>
                  <div>
                    <input type="text" placeholder="Telefone" >
                  </div>
                  <div class="mt-5">
                    <label for="msg">Mensagem</label>
                    <textarea id="msg" cols="32" rows="3"></textarea>
                    <div class="mt-6">
                      <button type="submit">
                        Enviar
                      </button>
                    </div>
                  </div>
                  </div>
                 
                  
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1580827384297!6m8!1m7!1sCAoSLEFGMVFpcE1LUERBeEFmelRFMHcydm5JZnkxUHdIdkVuaTZjU3pHSUlKRVAz!2m2!1d-26.303061247258!2d-48.848963271164!3f14.77!4f3.5400000000000063!5f0.7820865974627469" width="550" height="490"    frameborder="0" style="border:0;" allowfullscreen=""></iframe>

			</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- end info section -->

<!-- footer-->
  <br><br><br><br><br>
  <?php echo ThisFooter()?>
<!-- footer -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script>
  function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
      .querySelector(".custom_menu-btn")
      .classList.toggle("menu_btn-style");
  }
</script>
</body>

</html>