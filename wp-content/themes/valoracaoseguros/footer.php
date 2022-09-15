<?php include "inc/variaveis.php"; ?>
<?php wp_footer(); ?>
<!-- Footer -->
<!-- Footer -->
<footer class="footer wow fadeInUp" id="contact">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Single Widget -->
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="single-widget about">
                        <div class="footer-logo">
                            <a href="http://www.aconsegsp.com.br/" target="_blank"><img src="<?php echo $caminho; ?>/assets/images/aconseg-sp-logo2.png"
                                                                                        alt="#"></a>
                        </div>
                        <p>Associação das Empresas de Assessoria e Consultoria do Estado de São Paulo – ACONSEG-SP.</p>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-widget contact">
                        <h2>Entre em Contato</h2>
                        <ul class="list">
                            <li><i class="fa fa-phone"></i>Matriz SP: (11) 2671-5050</li>
                            <li><i class="fa fa-phone"></i>Filial ABC: (11) 2325-4015</li>
                            <li><i class="fa fa-phone"></i>Filial Santos: (11) 2671-5050</li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
                <!-- Single Widget -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-widget">
                        <h2>Redes Sociais</h2>
                        <ul class="social-icon">
                            <li class="active"><a href="https://www.facebook.com/valoracaoassessoria/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i>Facebook</a></li>
                            <li class="active"><a href="https://instagram.com/valoracao.assessoria?igshid=1kiho7l5ep3r3"
                                                  target="_blank"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                            <li class="active"><a
                                        href="https://www.linkedin.com/company/valor-a%C3%A7%C3%A3o-assessoria-e-planejamento/"
                                        target="_blank"><i class="fa-brands fa-linkedin-in"></i>LinkedIn</a></li>
                            <li class="active"><a href="https://api.whatsapp.com/send?phone=+5599999999999" target="_blank"><i
                                            class="fa-brands fa-whatsapp"></i>WhatsApp</a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Widget -->
            </div>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--/ End footer Top -->

<!-- Jquery -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/jquery.min.js"></script>
<!-- Modernizr JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/modernizr.min.js"></script>
<!-- Appear Js -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/jquery.appear.js"></script>
<!-- Scrool Up -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/jquery.scrollUp.min.js"></script>
<!-- Typed Js -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/typed.min.js"></script>
<!-- Slick Nav -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/jquery.slicknav.min.js"></script>
<!-- Onepage Nav -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/jquery.nav.js"></script>
<!-- Yt Player -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/ytplayer.min.js"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/magnific-popup.min.js"></script>
<!-- Wow JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/wow.min.js"></script>
<!-- Counter JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/jquery.counterup.min.js"></script>
<!-- Isotop JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/isotope.pkgd.min.js"></script>
<!-- Masonry JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/masonry.pkgd.min.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/slick.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/bootstrap.min.js"></script>
<!-- Google Map JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/gmap.js"></script>
<!-- Activate JS -->
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/active.js"></script>
<script type="text/javascript" src="<?php echo $caminho?>/assets/js/main.js"></script>
<script>
    window.onload = function () {
        let i = 0;
        const txt = "25 anos";
        let vel = 50;
        digitacao();

        function digitacao() {
            if (i < txt.length) {
                document.querySelector('.ctitle').innerHTML += txt.charAt(i);
                i++;
                setTimeout(digitacao, vel);
            }
        }
    };
</script>

</body>

</html>








