<?php
require_once '../config/config.php';

// Obtener estadísticas para el dashboard
$totalPropiedades = $db->query("SELECT COUNT(*) as total FROM propiedades")->fetch_assoc()['total'];
$totalCategorias = $db->query("SELECT COUNT(*) as total FROM tipos_propiedad")->fetch_assoc()['total'];
$totalImagenes = $db->query("SELECT COUNT(*) as total FROM imagenes_propiedades")->fetch_assoc()['total'];

// Obtener últimas propiedades agregadas
$ultimasPropiedades = $db->query("SELECT id, titulo, localidad FROM propiedades ORDER BY id DESC LIMIT 5");

// Incluir cabecera
include_once 'includes/head.php';
?>

<div class="container-fluid px-2 px-md-4 py-4">
    <!-- HERO DASHBOARD -->
    <div class="dashboard-hero mb-4">
        <h1 class="mb-1">Panel de Administración</h1>
        <p class="mb-0">Bienvenido al panel de administración. Gestiona tus propiedades y categorías de forma profesional.</p>
    </div>

    <!-- Stats Cards Innovador -->
    <div class="stats-innovador mb-4">
        <div class="stat-card-innovador">
            <div class="stat-icon-innovador"><i class="fas fa-building"></i></div>
            <div class="stat-number-innovador"><?php echo $totalPropiedades; ?></div>
            <div class="stat-label-innovador">Propiedades Activas</div>
        </div>
        <div class="stat-card-innovador">
            <div class="stat-icon-innovador"><i class="fas fa-tags"></i></div>
            <div class="stat-number-innovador"><?php echo $totalCategorias; ?></div>
            <div class="stat-label-innovador">Categorías</div>
        </div>
        <div class="stat-card-innovador">
            <div class="stat-icon-innovador"><i class="fas fa-images"></i></div>
            <div class="stat-number-innovador"><?php echo $totalImagenes; ?></div>
            <div class="stat-label-innovador">Imágenes Totales</div>
        </div>
    </div>

    <!-- Quick Actions Grid Innovador -->
    <div class="quick-actions-innovador mb-4">
        <a href="propiedades.php" class="text-decoration-none">
            <div class="quick-action-innovador">
                <div class="quick-action-icon-innovador"><i class="fas fa-plus"></i></div>
                <h6>Nueva Propiedad</h6>
                <p>Agregar una nueva propiedad</p>
            </div>
        </a>
        <a href="categorias.php" class="text-decoration-none">
            <div class="quick-action-innovador">
                <div class="quick-action-icon-innovador"><i class="fas fa-folder-plus"></i></div>
                <h6>Categorías</h6>
                <p>Gestionar categorías</p>
            </div>
        </a>
        <a href="vendidas.php" class="text-decoration-none">
            <div class="quick-action-innovador">
                <div class="quick-action-icon-innovador"><i class="fas fa-check-circle"></i></div>
                <h6>Propiedades Vendidas</h6>
                <p>Ver propiedades vendidas</p>
            </div>
        </a>
        <a href="order-propiedades.php" class="text-decoration-none">
            <div class="quick-action-innovador">
                <div class="quick-action-icon-innovador"><i class="fas fa-sort"></i></div>
                <h6>Ordenar Propiedades</h6>
                <p>Organizar el listado</p>
            </div>
        </a>
    </div>

    <!-- Recent Properties Table Innovador -->
    <div class="row">
        <div class="col-12">
            <div class="card recent-properties-card">
                <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
                    <h5 class="mb-0 fw-bold">Últimas Propiedades</h5>
                    <a href="propiedades.php" class="btn btn-sm btn-custom-blue">
                        Ver Todas <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Localidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($ultimasPropiedades && $ultimasPropiedades->num_rows > 0): ?>
                                <?php while ($propiedad = $ultimasPropiedades->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $propiedad['id']; ?></td>
                                        <td><?php echo htmlspecialchars($propiedad['titulo']); ?></td>
                                        <td><?php echo htmlspecialchars($propiedad['localidad']); ?></td>
                                        <td>
                                            <a href="../propiedad<?php echo $propiedad['id']; ?>" class="btn btn-sm btn-custom-blue" target="_blank"><i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">No hay propiedades disponibles</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Incluir pie de página
include_once 'includes/footer.php';
?>