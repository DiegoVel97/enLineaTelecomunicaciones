
</div>
<!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<footer class="page-footer">
    <div class="footer-copyright ">
        <div class="container verde_oscuro">
            <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="#" target="_blank">Enlinea Telecomunicaciones</a> All rights reserved.</span>
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">World Web Design Colombia</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo addLib('templates/js/plugins/jquery-1.11.2.min.js') ?>"></script>

<!-- jQuery Validation -->
<script src="<?php echo addLib('templates/js/plugins/jquery-validation/jquery.validate.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo addLib('templates/js/plugins/jquery-validation/additional-methods.min.js') ?>" type="text/javascript"></script>

<!--materialize js-->
<script type="text/javascript" src="<?php echo addLib('templates/js/materialize.js') ?>"></script>
<!--prism -->
<script type="text/javascript" src="<?php echo addLib('templates/js/plugins/prism/prism.js') ?>"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?php echo addLib('templates/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
<!-- chartjs -->
<script type="text/javascript" src="<?php echo addLib('templates/js/plugins/chartist-js/chartist.min.js')   ?>"></script>
<script type="text/javascript" src="<?php echo addLib('templates/js/plugins/chartjs/chart.min.js')   ?>"></script>


<script type="text/javascript" src="<?php echo addLib('templates/sweetalert/dist/sweetalert.min.js') ?>"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?php echo addLib('templates/js/plugins.js') ?>"></script>
<!--<script type="text/javascript" src="<?php echo addLib('templates/js/custom-script.js') ?>"></script>-->

<!-- plugins.js funciones para las imagenes  -->
<script src="<?php echo addLib('templates/js/plugins/fancybox/jquery.fancybox.js') ?>" type="text/javascript"></script>
<script src="<?php echo addLib('templates/js/plugins/fancybox/jquery.fancybox.pack.js') ?>" type="text/javascript"></script>

<!-- Plugin chosen select2 -->
<script type="text/javascript" src="<?php echo addLib('js/select2.full.min.js') ?>"></script>
<script type="text/javascript">
    $(".select2").select2({});
</script>

<!-- Scripts personalizados --> 
<script type="text/javascript" src="<?php echo addLib('templates/js/personalizado.js') ?>"></script>
<script type="text/javascript" src="<?php echo addLib('templates/js/permisos-permisos.js') ?>"></script>
<script type="text/javascript" src="<?php echo addLib('templates/js/usuarios-usuarios.js') ?>"></script>
<script type="text/javascript" src="<?php echo addLib('templates/js/roles-roles.js') ?>"></script>



<?php if (isset($modulo) && file_exists('js/modulos/' . (strtolower($modulo)) . '-' . (strtolower($controller)) . '.js')) { ?>
    <script type="text/javascript" src="<?php echo addLib('js/modulos/' . (strtolower($modulo)) . '-' . (strtolower($controller)) . '.js') ?>"></script>
<?php } // if ?>

<!-- Scripts PrintArea -->
<script type="text/javascript" src="<?php echo addLib('js/jquery.printarea.js') ?>"></script>
<!-- Scripts jquery Form-->
<script type="text/javascript" src="<?php echo addLib('js/jquery.form.js') ?>"></script>
<!--Scripts PAGMAN-->
<script type="text/javascript" src="<?php echo addLib('js/global.js') ?>"></script>

</body>

</html>
