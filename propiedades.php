<?php
$page_title = "Propiedades en Venta - Guatimozín y Zona";
$page_description = "Descubre nuestra amplia selección de propiedades en venta en Guatimozín y alrededores. Casas, terrenos, locales comerciales y más. Encuentra tu próxima propiedad con nosotros.";
$page_image = "assets/img/logo.png";

require_once 'config/config.php';
include_once 'includes/head.php';

// Obtener todas las categorías
$categorias = $db->query("SELECT * FROM tipos_propiedad ORDER BY nombre_categoria");

// Query base para propiedades
$base_query = "SELECT p.*, tp.nombre_categoria,
              (SELECT ruta_imagen FROM imagenes_propiedades WHERE id_propiedad = p.id LIMIT 1) as imagen_principal,
              (SELECT COUNT(*) FROM imagenes_propiedades WHERE id_propiedad = p.id) as total_imagenes
              FROM propiedades p 
              LEFT JOIN tipos_propiedad tp ON p.categoria = tp.id
              WHERE p.vendida = 0 ";

?>

<link rel="stylesheet" href="assets/css/propiedades.css">

<!-- Header de la página -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 data-aos="fade-up">Encuentra tu Espacio Ideal</h1>
                <p data-aos="fade-up" data-aos-delay="100">
                    Explora propiedades seleccionadas para vos.<br>
                    Viví la experiencia de encontrar tu próximo hogar, inversión o proyecto con asesoramiento profesional y atención personalizada.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Filtros modernos -->
<div class="filters-container">
    <div class="container">
        <div class="filters-wrapper justify-content-center">
            <button class="filter-btn active" data-filter="all">
                <i class="bi bi-grid"></i> Todas las propiedades
            </button>
            <?php
            $categorias->data_seek(0);
            while ($cat = $categorias->fetch_assoc()):
            ?>
                <button class="filter-btn" data-filter="<?php echo $cat['id']; ?>" 
                        data-category-name="<?php echo htmlspecialchars($cat['nombre_categoria']); ?>">
                    <i class="bi bi-house"></i>
                    <?php echo htmlspecialchars($cat['nombre_categoria']); ?>
                </button>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- Contenedor de propiedades y mensaje sin resultados -->
<div class="container">
    <div class="no-results-message text-center" style="display: none;">
        <div class="alert alert-info">
            <i class="bi bi-info-circle me-2"></i>
            Por el momento no hay <span class="category-name"></span> disponibles
        </div>
    </div>
    
    <!-- Contenedor de todas las categorías -->
    <div class="categories-container">
        <?php
        $categorias->data_seek(0);
        while ($categoria = $categorias->fetch_assoc()):
            $query = $base_query . " AND p.categoria = " . $categoria['id'] . " ORDER BY p.orden ASC, p.id DESC";
            $propiedades = $db->query($query);
            if ($propiedades->num_rows > 0):
        ?>
            <div class="category-section" data-category="<?php echo $categoria['id']; ?>">
                <div class="category-header">
                    <h2 class="category-title"><?php echo htmlspecialchars($categoria['nombre_categoria']); ?></h2>
                </div>
                <div class="properties-grid">
                    <?php while ($propiedad = $propiedades->fetch_assoc()): ?>
                        <div class="property-item">
                            <div class="property-card">
                                <div class="property-image">
                                    <span class="property-badge" style="font-size:0.98rem;padding:5px 16px;top:14px;left:14px;opacity:0.92;letter-spacing:0.2px;min-width:unset;max-width:60%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"> <?php echo htmlspecialchars($categoria['nombre_categoria']); ?> </span>
                                    <?php if ($propiedad['imagen_principal']): ?>
                                        <img src="<?php echo $propiedad['imagen_principal']; ?>"
                                            alt="<?php echo htmlspecialchars($propiedad['titulo']); ?>">
                                    <?php else: ?>
                                        <img src="assets/img/no-image.jpg" alt="Sin imagen">
                                    <?php endif; ?>
                                </div>
                                <div class="property-content">
                                    <h3 class="property-title" style="font-size:1.22rem;margin-bottom:8px;"><?php echo htmlspecialchars($propiedad['titulo']); ?></h3>
                                    <div class="property-info" style="gap:10px;">
                                        <?php if ($propiedad['localidad']): ?>
                                            <div class="info-item" style="margin-bottom:0;">
                                                <i class="bi bi-geo-alt-fill"></i>
                                                <span><?php echo htmlspecialchars($propiedad['localidad']); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($propiedad['ubicacion']): ?>
                                            <div class="info-item" style="margin-bottom:0;">
                                                <i class="bi bi-map-fill"></i>
                                                <span><?php echo htmlspecialchars($propiedad['ubicacion']); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($propiedad['tamanio']): ?>
                                            <div class="info-item" style="margin-bottom:0;">
                                                <i class="bi bi-rulers"></i>
                                                <span><?php echo htmlspecialchars($propiedad['tamanio']); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="property-footer">
                                        <a href="propiedad<?php echo $propiedad['id']; ?>" class="btn-view-property" title="Ver más">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php 
            endif;
        endwhile; 
        ?>
    </div>
</div>

<!-- CONTACTO -->

<?php include_once 'templates/contact-me.php'; ?>

<script src="assets/js/propiedades.js"></script>

<?php
include_once 'includes/footer.php';
?>