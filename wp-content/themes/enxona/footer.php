    <div class="container mb-1">
        <div class="row justify-content-between" id="copyright">
            <p>&copy; <?php echo date('Y'); ?> ENXONA COMERCIOS & SERVICIOS. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script type="text/javascript">
// PARALLAX
// ------------------------------->
$('#download-section').parallax({
    imageSrc: '<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/burgers_food.jpg',
    position: 'center'
});
</script>

<?php wp_footer(); ?>
</body>
</html>