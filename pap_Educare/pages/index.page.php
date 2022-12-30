<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educare - Centro de explicações</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="../education-website/assets/css/style.css">
  <link rel="stylesheet" href="../education-website/assets/css/media_queries.css">
  <link rel="stylesheet" href="../education-website/assets/css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

</head>

<body>

  <!--
    - main container
  -->

  <div class="container">

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-brand">
          <img src="../education-website/assets/images/logo.png" alt="Educator Logo">
        </div>

        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a href="#course">Cursos</a>
          </li>
          <li class="nav-item">
            <a href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a href="#contact">Contactos</a>
          </li>

        </ul>

        <a href="register.page.php">
          <button class="btn btn-primary">
            <p class="btn-text">Registe-se</p>
            <span class="square"></span>
          </button>
        </a>

        <a href="login.page.php">
          <button class="btn btn-primary">
            <p class="btn-text">Entrar</p>
            <span class="square"></span>
          </button>
        </a>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

    </header>





    <main>

      <!--
        - #HOME SECTION
      -->

      <section class="home" id="home">

        <div class="deco-shape shape-1">
          <img src="../education-website/assets/images/shape-1.png" alt="art shape" width="70">
        </div>
        <div class="deco-shape shape-2">
          <img src="../education-website/assets/images/shape-2.png" alt="art shape" width="55">
        </div>
        <div class="deco-shape shape-3">
          <img src="../education-website/assets/images/shape-3.png" alt="art shape" width="120">
        </div>
        <div class="deco-shape shape-4">
          <img src="../education-website/assets/images/shape-4.png" alt="art shape" width="30">
        </div>

        <div class="home-left">

          <p class="section-subtitle">Bem-vindo(a) ao EduCare!</p>

          <h1 class="main-heading">
            Os melhores explicadores a sua
            <span class="underline-img">disposição! <img src="../education-website/assets/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Faça parte da nossa equipa de alunos e obtenha uma explicação com qualidade!
          </p>

          <div class="home-btn-group">
            <button class="btn btn-primary">
              <p class="btn-text">Nossos cursos</p>
              <span class="square"></span>
            </button>

            <button class="btn btn-secondary">
              <p class="btn-text">Contatos</p>
              <span class="square"></span>
            </button>
          </div>

        </div>

        <div class="home-right">

          <div class="img-box">

            <img src="../education-website/assets/images/banner-img-bg.png" alt="colorful background shape" class="background-shape">
            <img src="../education-website/assets/images/banner-img.png" alt="banner image" class="banner-img">

            <img src="../education-website/assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="../education-website/assets/images/banner-aliment-icon-2.png" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">
            <img src="../education-website/assets/images/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
            <img src="../education-website/assets/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

          </div>

        </div>

      </section>





      <!--
        - #COURSE CATEGORY SECTION
      -->

      <section class="category">

        <p class="section-subtitle">Nossos cursos:</p>

        <h2 class="section-title">Explore nossos cursos mais populares</h2>

        <ul class="course-item-group">

          <li class="course-category-item">

            <div class="wrapper">
              <img src="../education-website/assets/images/course-category-icon-1.png" alt="category icon" class="category-icon default">

              <img src="../education-website/assets/images/course-category-icon-1-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Matemática</a>
              </h3>

              <p class="category-subtitle">Melhores seus conhecimentos matemáticos!</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="../education-website/assets/images/course-category-icon-2.png" alt="category icon" class="category-icon default">

              <img src="../education-website/assets/images/course-category-icon-2-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Geologia</a>
              </h3>

              <p class="category-subtitle">Melhore seus conhecimentos em geologia!</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="../education-website/assets/images/course-category-icon-3.png" alt="category icon" class="category-icon default">

              <img src="../education-website/assets/images/course-category-icon-3-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Geometria Descritiva</a>
              </h3>

              <p class="category-subtitle">Melhore seus resultados em geometria descritiva!</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="../education-website/assets/images/course-category-icon-4.png" alt="category icon" class="category-icon default">

              <img src="../education-website/assets/images/course-category-icon-4-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Economia</a>
              </h3>

              <p class="category-subtitle">Melhore seus conhecimentos em economia!</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="../education-website/assets/images/course-category-icon-5.png" alt="category icon" class="category-icon default">

              <img src="../education-website/assets/images/course-category-icon-5-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Marketing</a>
              </h3>

              <p class="category-subtitle">Melhroe seus conhecimentos em marketing!</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="../education-website/assets/images/course-category-icon-6.png" alt="category icon" class="category-icon default">

              <img src="../education-website/assets/images/course-category-icon-6-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">MACS</a>
              </h3>

              <p class="category-subtitle">Melhore seus conhecimentos em MACS</p>
            </div>

          </li>

        </ul>

      </section>





      <!--
        - #ABOUT SECTION
      -->

      <section class="about" id="about">

        <div class="about-left">

          <div class="img-box">
            <img src="../education-website/assets/images/about-img-bg.png" alt="about bg" class="about-bg">

            <img src="../education-website/assets/images/about-img.png" alt="about person" class="about-img">

            <img src="../education-website/assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="../education-website/assets/images/banner-aliment-icon-3.png" alt="" class="icon-2 smooth-zigzag-anim-3" width="195">
          </div>

        </div>

        <div class="about-right">

          <p class="section-subtitle">Sobre nós</p>

          <h2 class="section-title">Os melhores cursos com os melhores professores!</h2>

          <p class="section-text">
            O centro de explicação EduCare tem como o objetivo fornecer educação com qualidade aos seus alunos com a finalidade de que os mesmos consigam atingir seus objetivos e suas metas. Acreditamos que juntos podemos ajudá-los a alcançar seus sonhos e suas expectativas de vida.
          </p>

          <ul class="about-ul">

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Aulas particulares!</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Os melhores professores para elevar seus conhecimentos e notas.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Somos mais de 20 mil alunos, aprendendo juntos.</p>
            </li>

          </ul>

          <button class="btn btn-primary">
            <p class="btn-text">Saiba mais</p>
            <span class="square"></span>
          </button>

        </div>

      </section>





      <!--
        - #COURSE SECTION
      -->

      <section class="course" id="course">

        <p class="section-subtitle">Nossos cursos:</p>

        <h2 class="section-title">Encontre o curso certo para si:</h2>

        <div class="course-grid">

          <div class="course-card">

            <div class="course-banner">
              <img src="../education-website/assets/images/course-1.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Matemática</a>
                <a href="#" class="badge-tag blue">Exatas</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Matemática</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="../education-website/assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Markus Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>5.0 (2k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$50.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="../education-website/assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>600k</p>
                </div>
              </div>

            </div>

          </div>


          <div class="course-card">

            <div class="course-banner">
              <img src="../education-website/assets/images/course-2.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Geografia</a>
                <a href="#" class="badge-tag blue">Geologia</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Geologia</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="../education-website/assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.7 (5k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$80.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="../education-website/assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>545k</p>
                </div>
              </div>

            </div>

          </div>


          <div class="course-card">

            <div class="course-banner">
              <img src="../education-website/assets/images/course-3.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Linguas</a>
                <a href="#" class="badge-tag blue">Intercâmbio</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Inglês</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="../education-website/assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.1 (3k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$29.90</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="../education-website/assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>317k</p>
                </div>
              </div>

            </div>

          </div>


          <div class="course-card">

            <div class="course-banner">
              <img src="../education-website/assets/images/course-4.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Economia</a>
                <a href="#" class="badge-tag blue">Gestão</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Economia</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="../education-website/assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.8 (3.9k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$49.90</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="../education-website/assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>891k</p>
                </div>
              </div>

            </div>

          </div>



          <div class="course-card">

            <div class="course-banner">
              <img src="../education-website/assets/images/course-5.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Matemática</a>
                <a href="#" class="badge-tag blue">Desenho</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Geometria Descritiva</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="../education-website/assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>3.8 (1k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$89.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="../education-website/assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>204k</p>
                </div>
              </div>

            </div>

          </div>


          <div class="course-card">

            <div class="course-banner">
              <img src="../education-website/assets/images/course-6.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Matemática</a>
                <a href="#" class="badge-tag blue">Física e Química</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Fisicoquímica</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="../education-website/assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.9 (23k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$199.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="../education-website/assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>1.3M</p>
                </div>
              </div>

            </div>

          </div>

        </div>

        <button class="btn btn-primary">
          <p class="btn-text">Ver todos os cursos</p>
          <span class="square"></span>
        </button>

      </section>





      <!--
        - #EVENT SECTION
      -->

      <section class="event">

        <div class="event-left">

          <div class="event-banner">
            <img src="../education-website/assets/images/event-img.jpg" alt="event banner" class="banner-img">
          </div>

          <button class="play smooth-zigzag-anim-1">
            <div class="play-icon pulse-anim">
              <ion-icon name="play-circle"></ion-icon>
            </div>

            <p>Watch Us !</p>
          </button>

        </div>

        <div class="event-right">

          <p class="section-subtitle">Nossos eventos:</p>

          <h2 class="section-title">Participe dos nossos próximos eventos:</h2>

          <div class="event-card-group">

            <div class="event-card">

              <div class="content-left">
                <p class="day">28</p>
                <p class="month">Feb, 2022</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Lisboa</p>
                </div>

                <a href="#" class="event-name">Workshop: A educação e a tecnologia!</a>
              </div>

            </div>

            <div class="event-card">

              <div class="content-left">
                <p class="day">15</p>
                <p class="month">Mar, 2022</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Lisboa</p>
                </div>

                <a href="#" class="event-name">INSIDE - Nossa escola por dentro</a>
              </div>

            </div>

            <div class="event-card">

              <div class="content-left">
                <p class="day">20</p>
                <p class="month">May, 2022</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Poland</p>
                </div>

                <a href="#" class="event-name">Workshop: Saúde mental.</a>
              </div>

            </div>

          </div>

        </div>

      </section>





      <!--
        - #FEATURES SECTION
      -->

      <section class="features">

        <div class="features-left">

          <p class="section-subtitle">Principais objetivos</p>

          <h2 class="section-title">Qual a nossa missão?</h2>

          <ul>

            <li class="features-item">
              <div class="item-icon-box blue">
                <img src="../education-website/assets/images/feature-icon-1.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Vida estudantil</h3>

                <p class="item-text">A EduCare tem como principal objetivos ajudar os estudantes a alcancarem seus sonhos de diversas formas e em dferentes areas de suas vidas.</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box pink">
                <img src="../education-website/assets/images/feature-icon-2.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Estude com os melhores!</h3>

                <p class="item-text">A EduCare se responsabiliza em ter no seu corpo docente os melhores profissionais. Com a finalidade de elevar o nível das aulas que são lessionadas.</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box purple">
                <img src="../education-website/assets/images/feature-icon-3.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">24x7</h3>

                <p class="item-text">Aceda os seus conteúdos principais onde quer que você esteja. A EduCare dispõe de explicações online sempre quando tiveres duvidas.</p>

              </div>
            </li>

          </ul>

        </div>

        <div class="features-right">
          <img src="../education-website/assets/images/coure-features-img.jpg" alt="core features image">
        </div>

      </section>





      <!--
        - #INSTRUCTOR SECTION
      -->

      <section class="instructor">

        <p class="section-subtitle">Os melhores</p>

        <h2 class="section-title">Nossa equipa</h2>

        <div class="instructor-grid">

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="../education-website/assets/images/instructor-1.jpg" alt="instructor louis sullivan">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Louis Sullivan</h4>

            <p class="instructor-title">Matemática</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="../education-website/assets/images/instructor-2.jpg" alt="instructor camden david">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Camden David</h4>

            <p class="instructor-title">Geologia</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="../education-website/assets/images/instructor-3.jpg" alt="instructor fiona dean">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Fiona Dean</h4>

            <p class="instructor-title">Geometria descritiva</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="../education-website/assets/images/instructor-4.jpg" alt="instructor cherish sosa">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Cherish Sosa</h4>

            <p class="instructor-title">Fisicoquímica</p>

          </div>

        </div>

      </section>





      <!--
        - #TESTIMONIALS
      -->

      <section class="testimonials">

        <div class="testimonials-left">

          <p class="section-subtitle">Depoimentos</p>

          <h2 class="section-title">O que dizem sobre nós?</h2>

          <p class="section-text">
            Cada feedback é de extrema importância para a nossa escola.
          </p>

        </div>

        <div class="testimonials-right">

          <div class="testimonials-card">
            <img src="../education-website/assets/images/quote.png" alt="quote icon" class="quote-img">

            <p class="testimonials-text">
              "Proin feugiat tortor non neque eleifend, at fermentum est elementum. Ut mollis leo odio vulputate rutrum.
              Nunc sagittis
              sit amet ligula ut eleifend. Mauris consequat mauris sit amet turpis commodo fermentum. Quisque consequat
              tortor ut nisl
              finibus".
            </p>

            <div class="testimonials-client">

              <div class="client-img-box">
                <img src="../education-website/assets/images/client.jpg" alt="client christine rose">
              </div>

              <div class="client-detail">
                <h4 class="client-name">Christine Rose</h4>

                <p class="client-title">Customer</p>
              </div>

            </div>
          </div>

        </div>

      </section>





      <!--
        - #BLOG
      -->

      <section class="blog" id="blog">

        <p class="section-subtitle">Nosso blog</p>

        <h2 class="section-title">Ultimas notícias</h2>

        <div class="blog-grid">

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="../education-website/assets/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Métodos de estudo</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="../education-website/assets/images/calendar.png" alt="calendar icon">

                  <a href="#">07 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="../education-website/assets/images/comment.png" alt="comment icon">

                  <a href="#">3 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="../education-website/assets/images/blog-2.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Mercado de trabalho</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="../education-website/assets/images/calendar.png" alt="calendar icon">

                  <a href="#">04 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="../education-website/assets/images/comment.png" alt="comment icon">

                  <a href="#">10 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="../education-website/assets/images/blog-3.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Qual carreira seguir?</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="../education-website/assets/images/calendar.png" alt="calendar icon">

                  <a href="#">01 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="../education-website/assets/images/comment.png" alt="comment icon">

                  <a href="#">5 Comments</a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>





      <!--
        - #CONTACT
      -->

      <section class="contact">

        <div class="contact-card" id="contact">
          <img src="../education-website/assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

          <h2>Entre no melhor centro de explicações do país!</h2>

          <button class="btn btn-primary">
            <p class="btn-text">Fale conosco!</p>
            <span class="square"></span>
          </button>
        </div>

      </section>

    </main>





    <!--
      - #FOOTER
    -->

    <footer>

      <div class="footer-grid">

        <div class="grid-item">

          <div class="footer-logo">
            <img src="../education-website/assets/images/logo-footer.png" alt="educator logo white">
          </div>

          <!-- <p class="footer-text">
            Duis a tempor magna. Maecenas ligula felis, imperdiet quis arcu eget, blandit ultricies risus. Vivamus
            fringilla urna
            vel risus congue accumsan.
          </p> -->

          <div class="social-link">
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </div>

        </div>

        <ul class="grid-item">

          <h4 class="item-heading">Our Link</h4>

          <li class="list-item">
            <a href="#home">Home</a>
          </li>

          <li class="list-item">
            <a href="#about">Sobre nós</a>
          </li>

          <li class="list-item">
            <a href="#course">Cursos</a>
          </li>

          <li class="list-item">
            <a href="#blog">Blog</a>
          </li>

          <li class="list-item">
            <a href="#contact">Contatos</a>
          </li>

        </ul>

        <ul class="grid-item">

          <h4 class="item-heading">Other Link</h4>

          <li class="list-item">
            <a href="#">Bem vindo</a>
          </li>

          <li class="list-item">
            <a href="#">FAQ</a>
          </li>

          <li class="list-item">
            <a href="#">Event</a>
          </li>

          <li class="list-item">
            <a href="#">Privacy Policy</a>
          </li>

          <li class="list-item">
            <a href="#">Term & Condition</a>
          </li>

        </ul>

        <div class="grid-item">

          <h4 class="item-heading">Subscribe Now</h4>

          <div class="wrapper">
            <input type="text" name="subscribe" placeholder="Email Address">
            
            <button class="send-btn">
              <ion-icon name="paper-plane"></ion-icon>
            </button>
          </div>

        </div>

      </div>

      <p class="copyright">
        Copyright © 2022 <a href="#">codewithsadee</a>. All rights reserved.
      </p>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="../education-website/assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>