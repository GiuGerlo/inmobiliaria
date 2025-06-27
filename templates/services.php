<!-- Services Section Innovador -->
<section id="servicios" class="services-section-innovador">
    <div class="services-bg-overlay"></div>
    <div class="container position-relative">
        <div class="services-header-innovador text-center mb-5">
            <span class="services-badge">Soluciones Inmobiliarias</span>
            <h2 class="services-title mb-3">Explora nuestro portafolio de propiedades</h2>
            <p class="services-lead mb-4">Encuentra la opción ideal para tu inversión, familia o negocio. Nuestro equipo te acompaña en cada paso con asesoría personalizada y experiencia comprobada.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Alquileres -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <a href="#" class="service-card-innovador" id="alquileres-btn">
                    <div class="service-card-inner">
                        <i class="bi bi-house-door"></i>
                        <span>Alquileres</span>
                    </div>
                </a>
            </div>
            <!-- Casas -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <a href="propiedades.php#cat-1" class="service-card-innovador">
                    <div class="service-card-inner">
                        <i class="bi bi-house"></i>
                        <span>Casas</span>
                    </div>
                </a>
            </div>
            <!-- Cocheras -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <a href="propiedades.php#cat-5" class="service-card-innovador">
                    <div class="service-card-inner">
                        <i class="bi bi-car-front"></i>
                        <span>Cocheras</span>
                    </div>
                </a>
            </div>
            <!-- Departamentos -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <a href="propiedades.php#cat-6" class="service-card-innovador">
                    <div class="service-card-inner">
                        <i class="bi bi-building"></i>
                        <span>Departamentos</span>
                    </div>
                </a>
            </div>
            <!-- Locales -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                <a href="propiedades.php#cat-3" class="service-card-innovador">
                    <div class="service-card-inner">
                        <i class="bi bi-shop"></i>
                        <span>Locales</span>
                    </div>
                </a>
            </div>
            <!-- Quintas -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                <a href="propiedades.php#cat-4" class="service-card-innovador">
                    <div class="service-card-inner">
                        <i class="bi bi-flower1"></i>
                        <span>Quintas</span>
                    </div>
                </a>
            </div>
            <!-- Terrenos -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                <a href="propiedades.php#cat-2" class="service-card-innovador">
                    <div class="service-card-inner">
                        <i class="bi bi-tree"></i>
                        <span>Terrenos</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var alquilerBtn = document.getElementById('alquileres-btn');
    if (alquilerBtn) {
        alquilerBtn.addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'info',
                title: '¡Próximamente!',
                text: 'Todavía no están disponibles los alquileres.',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Entendido'
            });
        });
    }
});
</script>