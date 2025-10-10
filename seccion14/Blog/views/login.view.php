<?php require 'header.php'; ?>

<style>
    /* ========== ESTILOS PARA FORMULARIO DE LOGIN ========== */
    .single-post-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .single-post {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 40px;
    }

    .single-titulo {
        font-family: 'Oswald', sans-serif;
        font-size: 2.5rem;
        color: #1a1a1a;
        margin-bottom: 30px;
        text-align: center;
        border-bottom: 3px solid #e74c3c;
        padding-bottom: 15px;
    }

    /* Estilos del formulario */
    .login-form {
        width: 100%;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .form-input {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        font-family: 'Open Sans', sans-serif;
        background: #fafafa;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .form-input:focus {
        outline: none;
        border-color: #e74c3c;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
    }

    .form-input::placeholder {
        color: #999;
    }

    /* Botón de submit */
    .submit-btn {
        width: 100%;
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
        border: none;
        padding: 16px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(231, 76, 60, 0.3);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    /* Mejoras para campos de contraseña */
    .password-group {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #999;
        cursor: pointer;
        font-size: 1.1rem;
        padding: 0;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .password-toggle:hover {
        color: #666;
    }

    /* Opciones adicionales */
    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 20px 0;
        flex-wrap: wrap;
        gap: 10px;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        color: #666;
    }

    .remember-me input {
        margin: 0;
    }

    .forgot-link {
        color: #e74c3c;
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    .forgot-link:hover {
        color: #c0392b;
        text-decoration: underline;
    }

    /* Mensajes de error */
    .error-message {
        color: #e74c3c;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
    }

    .success-message {
        color: #27ae60;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
    }

    /* Estados de validación */
    .form-input.error {
        border-color: #e74c3c;
        background: #fdf2f2;
    }

    .form-input.success {
        border-color: #27ae60;
        background: #f2fdf2;
    }

    /* Efectos de carga */
    .submit-btn.loading {
        position: relative;
        color: transparent;
    }

    .submit-btn.loading::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        top: 50%;
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        border: 2px solid transparent;
        border-top: 2px solid white;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* ========== MEDIA QUERIES ========== */

    /* Tablet */
    @media (max-width: 768px) {
        .single-post-container {
            margin: 30px auto;
            padding: 0 15px;
        }

        .single-post {
            padding: 30px;
        }

        .single-titulo {
            font-size: 2.2rem;
            margin-bottom: 25px;
        }

        .form-options {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
    }

    /* Mobile */
    @media (max-width: 600px) {
        .single-post-container {
            margin: 20px auto;
            padding: 0 10px;
        }

        .single-post {
            padding: 25px;
            border-radius: 10px;
        }

        .single-titulo {
            font-size: 2rem;
        }

        .form-input {
            padding: 12px 15px;
            font-size: 0.95rem;
        }

        .submit-btn {
            padding: 14px;
            font-size: 1rem;
        }
    }

    /* Mobile pequeño */
    @media (max-width: 480px) {
        .single-post {
            padding: 20px;
        }

        .single-titulo {
            font-size: 1.8rem;
        }
    }

    /* Pantallas grandes */
    @media (min-width: 1200px) {
        .single-post-container {
            max-width: 550px;
            margin: 80px auto;
        }

        .single-post {
            padding: 50px;
        }

        .single-titulo {
            font-size: 2.8rem;
        }
    }
</style>

<div class="container">
    <div class="single-post-container">
        <div class="single-post">
            <h1 class="single-titulo">Iniciar Sesión</h1>
            <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <input type="text" name="usuario" class="form-input" placeholder="Usuario" required autocomplete="username">
                </div>

                <div class="form-group password-group">
                    <input type="password" name="password" id="password" class="form-input" placeholder="Contraseña" required autocomplete="current-password">
                    <button type="button" class="password-toggle" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <button type="submit" class="submit-btn" id="submitBtn">
                    Iniciar Sesión
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Toggle de visibilidad de contraseña
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    // Validación en tiempo real
    document.querySelectorAll('.form-input').forEach(input => {
        // Validar al perder el foco
        input.addEventListener('blur', function() {
            validateField(this);
        });

        // Validar mientras se escribe (después de haber sido validado una vez)
        input.addEventListener('input', function() {
            if (this.classList.contains('error') || this.classList.contains('success')) {
                validateField(this);
            }
        });
    });

    function validateField(field) {
        if (field.value.trim() === '') {
            field.classList.add('error');
            field.classList.remove('success');
        } else {
            field.classList.remove('error');
            field.classList.add('success');
        }
    }

    // Animación de carga en el botón de envío
    document.querySelector('.login-form').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        let isValid = true;

        // Validar todos los campos antes de enviar
        document.querySelectorAll('.form-input').forEach(input => {
            validateField(input);
            if (input.classList.contains('error')) {
                isValid = false;
            }
        });

        if (!isValid) {
            e.preventDefault();
            return;
        }

        // Agregar efecto de carga
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;

        // Simular envío (esto se quitará cuando tengas el backend real)
        setTimeout(() => {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
        }, 2000);
    });

    // Efecto de foco mejorado
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });

    // Manejo de mensajes del servidor (si existen)
    <?php if (isset($_GET['error'])): ?>
        document.addEventListener('DOMContentLoaded', function() {
            const errorMsg = "<?php echo htmlspecialchars($_GET['error']); ?>";
            if (errorMsg) {
                showMessage(errorMsg, 'error');
            }
        });
    <?php endif; ?>

    <?php if (isset($_GET['success'])): ?>
        document.addEventListener('DOMContentLoaded', function() {
            const successMsg = "<?php echo htmlspecialchars($_GET['success']); ?>";
            if (successMsg) {
                showMessage(successMsg, 'success');
            }
        });
    <?php endif; ?>

    function showMessage(message, type) {
        const messageDiv = document.createElement('div');
        messageDiv.className = type + '-message';
        messageDiv.style.textAlign = 'center';
        messageDiv.style.marginBottom = '20px';
        messageDiv.style.padding = '12px';
        messageDiv.style.borderRadius = '8px';
        messageDiv.style.fontWeight = '500';

        if (type === 'error') {
            messageDiv.style.background = '#fdf2f2';
            messageDiv.style.border = '1px solid #e74c3c';
            messageDiv.style.color = '#e74c3c';
        } else {
            messageDiv.style.background = '#f2fdf2';
            messageDiv.style.border = '1px solid #27ae60';
            messageDiv.style.color = '#27ae60';
        }

        messageDiv.textContent = message;

        const form = document.querySelector('.login-form');
        form.parentNode.insertBefore(messageDiv, form);
    }
</script>

<?php require 'footer.php'; ?>