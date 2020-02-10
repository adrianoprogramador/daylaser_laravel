@extends('layouts.site')

@section('conteudo')
    
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
              <div class="rd-navbar-aside">
                <ul class="list-inline navbar-contact-list">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="#">79 99898-1073</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="#">dayane@daylaser.com.br</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="#">Aracaju. Sergipe, Brasil</a></div>
                    </div>
                  </li>
                </ul>
                <ul class="social-links">
                  <!-- <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-linkedin" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li> -->
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://instagram.com/enfdaylaser?utm_source=ig_profile_share&igshid=hxtyyqr9z92c" target="_blank"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://instagram.com/enfdaylaser?utm_source=ig_profile_share&igshid=hxtyyqr9z92c" target="_blank"></a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logoday-ajustada.png" alt="" width="100" height="17"/><img class="brand-logo-light" src="images/logoday-ajustada.png" alt="" width="100" height="17"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">                  
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Serviços</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Sobre</a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Main section-->
      <section class="section main-section parallax-scene-js" style="background:url('images/bg-01.jpg') no-repeat center center; background-size:cover;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-12">
              <div class="main-decorated-box text-center text-xl-left">
                <h2 class="text-white text-xl-center wow slideInRight" data-wow-delay=".3s"><span class="align-top offset-top-30 d-inline-block font-weight-light prefix-text"></span><span class="big font-weight-bold d-inline-flex offset-right-170">Tratamento</span><span class="biggest d-block d-xl-flex font-weight-bold">Especializado</span></h2>
                <div class="decorated-subtitle text-italic text-white wow slideInLeft">Cuidamos de você</div>
              </div>
            </div>
            <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><a class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center" href="#" data-custom-scroll-to="about"><span class="fa-chevron-down"></span></a></div>
          </div>
        </div>
        <div class="decorate-layer">
          <div class="layer-1">
            <div class="layer" data-depth=".20"><img src="images/parallax-item-1-563x532.png" alt="" width="563" height="266"/>
            </div>
          </div>
          <div class="layer-2">
            <div class="layer" data-depth=".30"><img src="images/parallax-item-2-276x343.png" alt="" width="276" height="171"/>
            </div>
          </div>
          <div class="layer-3">
            <div class="layer" data-depth=".40"><img src="images/parallax-item-3-153x144.png" alt="" width="153" height="72"/>
            </div>
          </div>
          <div class="layer-4">
            <div class="layer" data-depth=".20"><img src="images/parallax-item-4-69x74.png" alt="" width="69" height="37"/>
            </div>
          </div>
          <div class="layer-5">
            <div class="layer" data-depth=".40"><img src="images/parallax-item-5-72x75.png" alt="" width="72" height="37"/>
            </div>
          </div>
          <div class="layer-6">
            <div class="layer" data-depth=".30"><img src="images/parallax-item-6-45x54.png" alt="" width="45" height="27"/>
            </div>
          </div>
        </div>
      </section>
      <!--About-->
      <section class="section section-sm position-relative" id="about">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-6">
              <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img src="images/img-home.jpg" alt="" width="570" height="351"/>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="block-sm offset-top-45">
                <div class="section-name wow fadeInRight" data-wow-delay=".2s">Sobre Nós</div>
                <h3 class="wow fadeInLeft text-capitalize devider-bottom" data-wow-delay=".3s">O Que<span class="text-primary"> Fazemos</span></h3>
                <p class="offset-xl-40 wow fadeInUp" data-wow-delay=".4s">A Clinica Daylaser conta com serviço Home Care. Vamos até você a realizamos o tratamento com laserterapia no conforto de sua residência.</p>
                <p class="default-letter-spacing font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s">Temos mais de 2 anos de experiência bem-sucedida na área da saúde no mercado Sergipano.</p><a class="button-width-190 button-primary button-circle button-lg button offset-top-30" href="#">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
        <div class="decor-text decor-text-1">ABOUT</div>
      </section>
      <!--Features-->
      <section class="section custom-section position-relative section-md">
        <div class="container">
          <div class="row">
            <div class="col-xl-7 col-lg-7 col-12">
              <div class="section-name wow fadeInRight">Nossos recursos</div>
              <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Porque nossos clientes<span class="text-primary"> Nos Escolhem?</span></h3>
              <p>Com mais de 3 anos de experiência em serviços de qualidade, temos muito a oferecer aos nossos clientes. Aqui estão algumas razões pelas quais eles nos escolhem.</p>
              <div class="row row-15">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                  <div class="box-default">
                    <div class="box-default-title">Soluções inovadoras</div>
                    <p class="box-default-description">Nossos serviços e soluções são baseados em inovações da saúde.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-lightbulb-gears"></span>
                  </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                  <div class="box-default">
                    <div class="box-default-title">Pensamento estratégico</div>
                    <p class="box-default-description">A Daylaser trabalha estrategicamente para forjar o melhor caminho para o seu tratamento</p><span class="box-default-icon novi-icon icon-lg mercury-icon-target-2"></span>
                  </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                  <div class="box-default">
                    <div class="box-default-title">Profissional Experiente</div>
                    <p class="box-default-description">Empregamos os melhores profissionais com mais de 5 anos de experiência.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-user"></span>
                  </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                  <div class="box-default">
                    <div class="box-default-title">Abordagem Criativa</div>
                    <p class="box-default-description">Cada tratamento em que trabalhamos baseia-se no tratamento eficaz de qualquer problema.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-partners"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="image-left-side wow slideInRight" data-wow-delay=".5s"><img src="images/profissional-home.jpeg" alt="" width="636" height="240"/>
        </div>
        <div class="decor-text decor-text-2 wow fadeInUp" data-wow-delay=".3s">características</div>
      </section>
      <!--Counters-->
      <section class="section bg-image-2">
        <div class="container section-md">
          <div class="row row-30 text-center">
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-time"></span><span class="counter text-white" data-speed="2000">2017</span>
                </div>
                <div class="counter-classic-title">Ano de Fundação</div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-folder"></span><span class="counter text-white" data-speed="2000">47</span>
                </div>
                <div class="counter-classic-title">Tratamentos Realizados</div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-users"></span><span class="counter text-white" data-speed="2000">45</span><span class="symbol text-white">+</span>
                </div>
                <div class="counter-classic-title">Parceiros</div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-group"></span><span class="counter text-white" data-speed="2000">1500</span>
                </div>
                <div class="counter-classic-title">Pessoas Beneficiadas </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Pricing-->
      <section class="section section-md bg-xs-overlay" style="background:url('images/bg-image-pc.jpg')no-repeat;background-size:cover">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-12 text-center col-md-10 col-lg-8">
              <div class="section-name wow fadeInRight" data-wow-delay=".2s">Opções de Preços</div>
              <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Encontre o plano perfeito para<span class="text-primary"> Você</span></h3>
              <p>Oferecemos três planos de preços diferentes que cobrem completamente as necessidades de nossos clientes. Sinta-se à vontade para selecionar um plano adequado, saiba mais sobre cada um deles abaixo.</p>
            </div>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
              <div class="pricing-box bg-gray-dark">
                <div class="pricing-box-tittle">Starter</div>
                <p>Perfeito para 10 sessões</p>
                <hr/>
                <div class="pricing-box-inner"><span class="pricing-box-symbol">$</span><span class="pricing-box-price">600</span></div>
                <div class="pricing-box-label bg-gray">10 Sessões</div>
                <p>ILIB <br> Diabetes</p><a class="button button-190 button-circle btn-primary-rounded" href="#">Adiquirir</a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
              <div class="pricing-box bg-gray-primary">
                <div class="pricing-box-tittle">Professional</div>
                <p>Perfeito para 20 sessões</p>
                <hr/>
                <div class="pricing-box-inner"><span class="pricing-box-symbol">R$</span><span class="pricing-box-price">1100</span></div>
                <div class="pricing-box-label bg-gray-primary-light">PACOTE</div>
                <p>ILIB <br> Diabetes</p><a class="button button-190 button-circle btn-rounded-outline" href="#">Adiquirir</a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
              <div class="pricing-box bg-gray-dark">
                <div class="pricing-box-tittle">Premium</div>
                <p>Perfeito para 30 sessões</p>
                <hr/>
                <div class="pricing-box-inner"><span class="pricing-box-symbol">R$</span><span class="pricing-box-price">1500</span></div>
                <div class="pricing-box-label bg-gray">PACOTE</div>
                <p>ILIB<br>Diabetes</p><a class="button button-190 button-circle btn-primary-rounded" href="#">Adiquirir</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Owl Carousel-->
      <section class="section section-md bg-gray-lighten">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="section-name wow fadeInRight text-center" data-wow-delay=".2s">depoimentos</div>
              <h3 class="wow fadeInLeft text-capitalize text-center" data-wow-delay=".3s">O que as pessoas dizem<span class="text-primary"> Sobre Nós</span></h3>
              <div class="owl-carousel review-carousel" data-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-xl-items="1" data-xxl-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="true" data-autoplay="false">
                <div class="item">
                  <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img src="images/usuario-servico.png" alt="" width="216" height="108"/>
                  </div>
                  <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                    <p>Fiquei impressionado com a qualidade do que seus especialistas fizeram. Eles rapidamente descobriram qual era o principal motivo da minha mãe e me ajudaram tratando ela de forma correta, que funcionou perfeitamente e a deixou ótima em poucos dias e sessões.</p>
                    <div class="item-subsection"><span class="item-subsection-title devider-left">Carlos Almeida</span><span>Tratou sua mãe</span></div>
                  </div>
                </div>
                <!-- <div class="item">
                  <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img src="images/user-2-216x216.jpg" alt="" width="216" height="108"/>
                  </div>
                  <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                    <p>I appreciate what you’ve done to help my small company develop and thrive in that market niche that we specialize in. Your business consulting experts are the best in the whole industry and I’m going to recommend you to my partners!</p>
                    <div class="item-subsection"><span class="item-subsection-title devider-left">Donald Hughes</span><span>Regular Client</span></div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img src="images/user-3-216x216.jpg" alt="" width="216" height="108"/>
                  </div>
                  <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                    <p>My cooperation with your team helped me understand that you really care about your clients – it was proved by a lot of positive reviews already – and that's why I chose you. Thank you for a great job, you are true professionals!</p>
                    <div class="item-subsection"><span class="item-subsection-title devider-left">Anthony Parker</span><span>Regular Client</span></div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-preview wow fadeInDown" data-wow-delay=".2s"><img src="images/user-4-216x216.jpg" alt="" width="216" height="108"/>
                  </div>
                  <div class="item-description wow fadeInUp" data-wow-delay=".3s">
                    <p>Two years after СonsultBiz’s involvement, we are remarkably successful and the leader in served markets. This brought industry knowledge, best practices, and real-world solutions to the intricate challenges we faced.</p>
                    <div class="item-subsection"><span class="item-subsection-title devider-left">Jennifer Coleman</span><span>Regular Client</span></div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Footer-->
      <footer class="section footer-classic section-sm">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-3 wow fadeInLeft">
              <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logoday-ajustada-bco.png" alt="" width="100" height="17"/><img class="brand-logo-light" src="images/logoday-ajustada-bco.png" alt="" width="100" height="17"/></a>
              <p class="footer-classic-description offset-top-0 offset-right-25">A Clinica Daylaser também conta com serviço Home Care. Vamos até você a reallizamos o tratamento no conforto de sua residência.</p>
            </div>
            <div class="col-lg-3 col-sm-8 wow fadeInUp">
              <P class="footer-classic-title">Contato</P>
              <div class="d-block offset-top-0"><span class="d-lg-block"></span></div><a class="d-inline-block accent-link" href="#">dayane@daylaser.com.br</a><a class="d-inline-block" href="#">79 99898-1073
              </a>
              <ul>
                <li>Seg-Sex:<span class="d-inline-block offset-left-10 text-white">9:30 AM - 9:00 PM</span></li>
                <li>Sab:<span class="d-inline-block offset-left-10 text-white">10:00 AM - 9:00 PM</span></li>              
              </ul>
            </div>
            <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
              <P class="footer-classic-title">Acesso Rápido</P>
              <ul class="footer-classic-nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Contato</a></li>                
              </ul>
            </div>
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
              <P class="footer-classic-title">newsletter</P>
              <form class="rd-mailform text-left footer-classic-subscribe-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <label class="form-label" for="subscribe-email">Email</label>
                  <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
                <div class="form-button group-sm text-center text-lg-left">
                  <button class="button button-primary button-circle" type="submit">Inscrever-se</button>
                </div>
              </form>
              <p>Seja o primeiro a descobrir nossas últimas novidades, atualizações e ofertas especiais.</p>
            </div>
          </div>
        </div>
        <div class="container wow fadeInUp" data-wow-delay=".4s">
          <div class="footer-classic-aside">
            <p class="rights">Daylaser <span class="copyright-year"></span><span>&copy;&nbsp;</span> Todos os direitos reservados. Design by <a href="http://www.adrianocarvalhosolutions.com.br" target="_blank">Adriano Carvalho</a></p>
            <ul class="social-links">              
              <li><a class="fa fa-facebook" href="https://instagram.com/enfdaylaser?utm_source=ig_profile_share&igshid=hxtyyqr9z92c" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://instagram.com/enfdaylaser?utm_source=ig_profile_share&igshid=hxtyyqr9z92c" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
   
    
    @endsection