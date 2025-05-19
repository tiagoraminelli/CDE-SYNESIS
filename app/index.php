<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Centro de Estudiantes Synesis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" />


</head>
<a href="#navbarNav" class="btn btn-primary rounded-circle shadow" id="btn-up" title="Volver al menú">
  <i class="bi bi-arrow-up-short fs-3"></i>
</a>

<!-- Botón de enlaces flotante -->
<div id="socialToggle" class="btn-group-vertical position-fixed" style="bottom: 25px; left: 25px; z-index: 1000;">
  <!-- Botones secundarios (inicialmente ocultos) -->
  <a id="btn-instagram"  href="https://www.instagram.com/synesis.centroestudiantil/" class="btn btn-danger mb-2 d-none" target="_blank" title="Instagram">
    <i class="bi bi-instagram"></i>
  </a>
  <a id="btn-whatsapp" href="https://wa.me/.." class="btn btn-success mb-2 d-none" target="_blank" title="WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Botón principal -->
  <button id="toggleSocialBtn" class="btn btn-dark" title="Enlaces">
    <i class="bi bi-link-45deg fs-4"></i>
  </button>
</div>


<body>

<?php require './html/nav-bar.html'; ?>

<?php require './html/titulo.html'; ?>



<?php require './html/documentos.html'; ?>


  



<div class="container py-5">

<?php require './html/carrusel.html'; ?>

</section>

<section id="estructura" class="py-5">
  <h2 class="text-center mb-5">Estructura Organizativa</h2>
  <!-- Botón para abrir offcanvas -->
<div class="text-center my-4">
  <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#estructuraOffcanvas">
    Ver estructura organizativa
  </button>
</div>

<!-- Offcanvas Bootstrap -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="estructuraOffcanvas" aria-labelledby="estructuraOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="estructuraOffcanvasLabel">Estructura Organizativa</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
  </div>
  <div class="offcanvas-body">
    <!-- Contenido de la estructura -->
    <div class="container">
      <!-- Aquí va el contenido original que ya tienes -->
      <div class="row align-items-center mb-4">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Presidencia">
        </div>
        <div class="col-md-6">
          <h5>Presidencia</h5>
          <p>Encargada de representar al centro y liderar las decisiones generales del equipo.</p>
        </div>
      </div>

      <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Secretaría General">
        </div>
        <div class="col-md-6">
          <h5>Secretaría General</h5>
          <p>Coordina la organización interna y lleva registro de reuniones y planificación.</p>
        </div>
      </div>

        <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Secretaría General">
        </div>
        <div class="col-md-6">
          <h5>Secretaría General</h5>
          <p>Coordina la organización interna y lleva registro de reuniones y planificación.</p>
        </div>
      </div>

        <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Secretaría General">
        </div>
        <div class="col-md-6">
          <h5>Secretaría General</h5>
          <p>Coordina la organización interna y lleva registro de reuniones y planificación.</p>
        </div>
      </div>

        <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Secretaría General">
        </div>
        <div class="col-md-6">
          <h5>Secretaría General</h5>
          <p>Coordina la organización interna y lleva registro de reuniones y planificación.</p>
        </div>
      </div>

        <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Secretaría General">
        </div>
        <div class="col-md-6">
          <h5>Secretaría General</h5>
          <p>Coordina la organización interna y lleva registro de reuniones y planificación.</p>
        </div>
      </div>

        <div class="row align-items-center mb-4 flex-md-row-reverse">
        <div class="col-md-6">
          <img src="./assets/img/placeholder.webp" class="img-fluid rounded shadow" alt="Secretaría General">
        </div>
        <div class="col-md-6">
          <h5>Secretaría General</h5>
          <p>Coordina la organización interna y lleva registro de reuniones y planificación.</p>
        </div>
      </div>

      <!-- Repite la estructura para las demás secretarías como ya lo tenías... -->

    </div>
  </div>
</div>


<?php require './html/actividades.html'; ?>

<?php require './html/metodologia.html'; ?>

    <div class="quote">
      "La organización y el compromiso construyen una comunidad educativa más justa, inclusiva y transformadora."
    </div>
  </div> 

  <footer>
    &copy; 2025 Centro de Estudiantes Synesis – Todos los derechos reservados
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/modal.js"></script>
  <script>
  const toggleBtn = document.getElementById("toggleSocialBtn");
  const insta = document.getElementById("btn-instagram");
  const wsp = document.getElementById("btn-whatsapp");

  toggleBtn.addEventListener("click", () => {
    insta.classList.toggle("d-none");
    wsp.classList.toggle("d-none");
  });
</script>

</body>
</html>