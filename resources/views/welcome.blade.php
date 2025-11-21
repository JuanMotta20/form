<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clasificación de Residuos</title>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="residuos-body">
        <header class="residuos-hero animate-fade-in">
            <div class="residuos-hero__top">
                <div class="animate-slide-down">
                    <p style="font-weight:600; letter-spacing:0.05em;">Centro Formativo La Angostura</p>
                    <small style="opacity:0.9;">Control de residuos sólidos</small>
                </div>

                <h1 class="residuos-hero__title animate-slide-up">Clasificación de Residuos</h1>

                <div class="residuos-hero__actions animate-slide-down">
                    @if(Route::has('login'))
                    @auth
                            <a href="{{ url('/dashboard') }}" class="btn-login btn-login--panel">PANEL</a>
                    @else
                            <a href="{{ route('login') }}" class="btn-login">INICIAR SESIÓN</a>
                    @endauth
            @endif
                </div>
            </div>

            <div class="residuos-logo-center animate-scale-in">
                <span>
                    CONTROL DE RESIDUOS
                    <br>
                    LA ANGOSTURA
                </span>
            </div>
        </header>

        <main class="residuos-content">
            <section class="residuos-cards">
                <article class="residuos-card animate-card-in" style="animation-delay: 0.1s;">
                    <h3>Introducción</h3>
                    <p>
                        Este software está enfocado en la recolección, clasificación y control de residuos que genera el centro formativo La Angostura. 
                        El sistema asegura el orden y almacenamiento de datos para la recolección responsable.
                    </p>
                </article>

                <article class="residuos-card animate-card-in" style="animation-delay: 0.2s;">
                    <h3>Unidades y módulos</h3>
                    <p>
                        Cada unidad registra distintos tipos de residuos, manteniendo un control documentado y específico. 
                        Los contenedores están distribuidos estratégicamente en todo el centro formativo para facilitar la separación.
                    </p>
                </article>

                <article class="residuos-card animate-card-in" style="animation-delay: 0.3s;">
                    <h3>Reporte mensual</h3>
                    <p>
                        Se emiten reportes mensuales que consolidan los 12 meses del año, permitiendo visualizar el estado y comportamiento de los residuos generados, 
                        con gráficos para un seguimiento rápido.
                    </p>
                </article>
            </section>
        </main>

        <footer class="residuos-footer animate-fade-in-up">
            <section>
                <h4>Soporte</h4>
                <form>
                    <input type="text" placeholder="Tu nombre" required>
                    <input type="email" placeholder="Correo" required>
                    <textarea rows="3" placeholder="Comentario" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </section>

            <section>
                <h4>Contacto</h4>
                <p style="margin-bottom:0.75rem;">Síguenos en redes para mantenerte informado.</p>
                <div class="residuos-contact">
                    <span class="animate-bounce-in" style="animation-delay: 0.1s;">F</span>
                    <span class="animate-bounce-in" style="animation-delay: 0.2s;">Y</span>
                    <span class="animate-bounce-in" style="animation-delay: 0.3s;">T</span>
                    <span class="animate-bounce-in" style="animation-delay: 0.4s;">IG</span>
                </div>
            </section>
        </footer>
    </body>
</html>
