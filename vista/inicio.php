<?php include_once __DIR__ . '/layout/header.php'; ?>

    <main>
        <div class="container mt-4 text-center">
            <h2 class=" mt-4">Dashboard general</h2>
            <p class="mt-2 mb-4">Gestión inteligente de flujos clínicos y estadísticas generales del centro médico.</p>
        </div>

    <!-- Estructura de tarjeta -->
    <div class="container ">
        <div class="row">

            <!-- Primera tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 text-center p-3">
                    <h6 class="text-muted uppercase">TOTAL PACIENTES</h6>
                    <h2 class="fw-bold">1,250</h2>
                </div>
            </div>
            <!-- Segunda tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 text-center p-3">
                    <h6 class="text-muted uppercase">CITAS PACIENTES</h6>
                    <h2 class="fw-bold text-success">48</h2>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 text-center p-3">
                    <h6 class="text-muted uppercase">HISTORIAL</h6>
                    <h2 class="fw-bold text-danger">25</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- text-primary da color azul -->
     
    <div class="text-center mt-5 mb-4">
            <a href="index.php?accion=login" class="link-volver">
                Volver al Login
            </a>
        </div>
    </main>

    

<?php include_once __DIR__ . '/layout/footer.php'; ?>
