<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Design para quem não é Designer | Gutter Think</title>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="robot" content="index, follow">
    <meta name="webmaster" content="Guilherme Bigois">
    <meta name="description" content="The Building Blocks of Visual Hierarchy | Gutter Think">
    <meta name="keywords" content="gutter, thinking, think, design, conceito, inovação, inspiração, negócio, moderno, arte, ebook">
    <meta property="og:title" content="Gutter Think - Be different">
    <meta property="og:description" content="Baixe agora mesmo seu ebook grátis!">
    <meta property="og:image" content="http://gutterthink.com/img/logo.jpeg">
    <link type="text/css" href="css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href="css/normalize.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body class="layout-ebook ebook">

    <!-- BEGIN ANALYTICS TRACKING -->
    <?php include_once("analyticstracking.php") ?>
    <!-- END ANALYTICS TRACKING -->

    <!-- BEGIN FIRST CONTENT -->
    <div id="primary-content">

        <!-- BEGIN HEADER -->
        <header id="main-header">

            <!-- BEGIN LOGO -->
            <div id="logo-wrap">
                <a href="http://gutterthink.com/blog/" target="_blank" class="logo">
                    <img class="center logo-header" src="img/logo_footer.png" alt="oculos">
                </a>
            </div>
            <!-- END LOGO -->

            <!-- BEGIN SOCIAL BUTTONS -->
            <div class="center social-buttons social-header">
                <!-- BEGIN FACEBOOK PAGE -->
                <a href="https://www.facebook.com/gutterthinking" target="_blank" class="facebook">
                    <img class="social-header" src="img/logo_facebook.png" alt="facebook">
                </a>
                <!-- END FACEBOOK PAGE -->

                <!-- BEGIN WEBSITE PAGE -->
                <a href="https://www.gutterthink.com/blog" target="_blank" class="facebook">
                    <img class="social-header" src="img/logo_blog.png" alt="blog">
                </a>
                <!-- END WEBSITE PAGE -->

            </div>
            <!-- END SOCIAL BUTTONS -->

        </header>
        <!-- END HEADER -->

        <!-- BEGIN EBOOK PRESENTATION -->
        <section>
            <div class="container">

                <!-- BEGIN EBOOK MESSAGE -->
                <div class="content">
                    <h1>Você está começando agora no mundo do Design?</h1>
                    <p>Entenda um pouco sobre o universo do design e coloque em prática.</p>
                    <a href="#form" class="scrollSuave call-action">Baixar grátis!</a>
                </div>
                <!-- END EBOOK MESSAGE -->

                <!-- BEGIN EBOOK IMG -->
                <div class="ebook">
                    <img src="img/ebook.png">
                </div>
                <!-- END EBOOK IMG -->

            </div>
        </section>
        <!-- END EBOOK PRESENTATION -->

    </div>
    <!-- END FIRST CONTENT -->

    <!-- BEGIN SECOND CONTENT -->
    <section id="main-content">

        <h2>Que tal aprender dicas de Design de um modo descomplicado?</h2>
        <br>

        <p>Para quem não tem tempo de estudar <strong>design</strong> e <strong>tipografia</strong>, o livro <strong>"Design para quem não é designer: Noções básicas de planejamento visual"</strong>, escrito por Robin Williams, contém uma leitura leve, fácil e é recomendado para quem deseja <strong>aprender</strong> um pouco sobre o universo do <strong>design</strong> e colocar em prática, como nos cursos de Design, Comunicação Social (Publicidade e Propaganda, Jornalismo e Marketing) e pessoas interessadas em criar produtos visuais com harmonia, sem a necessidade de se aprofundar</p>

        <p>O livro é bem técnico <strong>(porém não complicado)</strong> e não traz muitas reflexões, como se fosse uma <strong>oficina objetiva</strong> sobre design, criação de materiais visuais e os seus elementos.</p>

        <p>Espero que o conteúdo desse e-book te ajude a seguir em frente <strong>na de um design mais inteligente</strong>. Faça seu download gratuito e <strong>dê vida ao Designer que há em você!</strong> ;)</p>

    </section>
    <!-- END SECOND CONTENT -->

    <!-- BEGIN THIRD CONTENT -->
    <a name="form"></a>
    <section id="form" class="form-default">
        <form id="my_form" action="cadastra.php" method="post" class="container">
            <p>Quer receber <strong>grátis</strong> agora mesmo o e-book <strong>Design para quem não é Designer</strong>?</p>
            <input placeholder="Informe seu nome" name="nome" type="text" required="">
            <input placeholder="Deixe seu e-mail" name="email" type="email" required="">
            <input type="hidden" name="" value="">
            <button class="call-action" type="submit">Quero o e-book gratuito!</button>
            <small>Fique tranquilo, não vamos mandar spam e o link ficará disponível após preencher os dados.</small>
        </form>
    </section>
    <!-- END THIRD CONTENT -->

    <!-- BEGIN FOOTER -->
    <div id="footer-container">
        <footer id="main-footer">
            <div class="copyright">
                <img class="footer-logo" src="img/logo_full.png" alt="facebook">
                <br><br>
                <a href="http://www.gutterthink.com/blog" target="_blank">© 2017 Gutter Thinking.</a>
                <br><br>
            </div>
        </footer>
    </div>
    <!-- END FOOTER -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">

        var $doc = $('html, body');
        $('.scrollSuave').click(function() {
        $doc.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
        });
    </script>
</body>

</html>
