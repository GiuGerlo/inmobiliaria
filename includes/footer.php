    </main>

    <footer id="footer" class="footer pt-5">
        <div class="container">
            <div class="row g-4">
                <!-- Columna 1: Logo y descripción -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about">
                        <h4 class="mb-3">Inmobiliaria</h4>
                        <p class="mb-3">Expertos en el mercado inmobiliario con un enfoque personalizado para cada cliente. Su satisfacción es nuestra prioridad.</p>
                        <div class="social-links d-flex gap-3">
                            <a href="#" class="text-dark" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Columna 2: Enlaces rápidos -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="inicio" class="text-decoration-none text-dark">Inicio</a></li>
                        <li class="mb-2"><a href="inicio#about" class="text-decoration-none text-dark">Nosotros</a></li>
                        <li class="mb-2"><a href="inicio#servicios" class="text-decoration-none text-dark">Servicios</a></li>
                        <li class="mb-2"><a href="propiedades.php" class="text-decoration-none text-dark">Venta</a></li>
                        <li class="mb-2"><a href="inicio#contacto" class="text-decoration-none text-dark">Contacto</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Información de contacto -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Contáctenos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Dirección de la Inmobiliaria</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> (123) 456-7890</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2"></i> info@inmobiliaria.com</li>
                    </ul>
                </div>

                <!-- Columna 4: Horario -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Horario de Atención</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Lunes a Viernes</li>
                        <li class="mb-2">Mañanas: 9:00 - 13:00</li>
                        <li class="mb-2">Tardes: 15:00 - 19:00</li>
                    </ul>
                </div>
            </div>

            <!-- Línea divisoria -->
            <hr class="my-4">

            <!-- Copyright y créditos -->
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Inmobiliaria. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        Desarrollado con ❤️ por
                        <a href="#" target="_blank" class="text-decoration-none">
                            Tu Empresa
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- AOS Animation -->
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    </body>

    </html>