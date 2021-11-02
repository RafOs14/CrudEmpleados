<div class="row g-3 align-items-center">
        <h2>Bienvenido</h2>
        <form method="POST" class="row g-3">
            <div class="mb-3">
                <label for="inputEmail4" class="form-label">Usuario</label>
                <input type="text" class="form-control"  name="usuarioI" placeholder="Usuario" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control"  name="claveI" required>
            </div>        
            <div class="col-12">
                <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
            </div>
        </form>
    </div>

    <?php

        $ingreso = new AdminC();
        $ingreso -> IngresoC();

    ?>