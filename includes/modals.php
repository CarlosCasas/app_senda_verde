<!-- Modal Iniciar Sesión -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" method="POST">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Ingrese su correo">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="loginRemember">
                        <label class="form-check-label" for="loginRemember">Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm" method="POST" >
                    <div class="mb-3">
                        <label for="registerFirstName" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPhone" class="form-label">Celular</label>
                        <input type="tel" class="form-control" id="celular"  name="celular"placeholder="Ingrese su número de celular" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerInterest" class="form-label">Intereses</label>
                        <select class="form-select" id="intereses" name ="intereses">
                            <option value="">Seleccione</option>
                            <option value="viajes">Viajes</option>
                            <option value="turismo">Turismo</option>
                            <option value="promociones">Promociones</option>
                            <option value="aventura">Aventura</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese una contraseña" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerConfirmPassword" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirme su contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
                <div id="message" class="mt-3" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>
<!--
<script>
    function validatePasswords() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        
        if (password !== confirmPassword) {
            alert('Las contraseñas no coinciden. Por favor, intente de nuevo.');
            return false; // Evita el envío del formulario
        }
        return true; // Permite el envío del formulario
    }
</script>
-->

