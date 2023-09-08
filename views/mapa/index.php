<h1 class="text-center">MAPA DE GUATEMALA CON COORDENADAS</h1>

<div class="text-center">
    <div class="btn-group" role="group">
        <button class="btn btn-danger btn-sm" id="actualizar" name="actualizar">ACTUALIZAR</button>
        <a class="btn btn-primary btn-sm" href="/mapas1/mapa">
            <i class="bi bi-globe-americas me-2"></i> REINICIAR
        </a>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-11 border rounded" id="mapa" style="height: 60vh; min-height:auto "></div>
</div>

<script src="<?= asset('./build/js/mapa/index.js') ?>"></script>