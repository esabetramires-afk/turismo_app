<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Turismo - Región Puno</title>
    <style>
        :root {
            --bg-main: #0A0A12;
            --sidebar-bg: #12121A;
            --card-bg: #1B1B26;
            --rosa-palo: #E2A9C4;
            --rosa-hover: #F0C4DC;
            --accent-cyan: #00F3FF;
            --text-white: #FFFFFF;
            --text-gray: #A0A0B0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-main);
            color: var(--text-white);
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* Menú Lateral */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar-bg);
            border-right: 1px solid #222233;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: var(--accent-cyan);
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .menu-item {
            padding: 12px 16px;
            margin-bottom: 10px;
            border-radius: 8px;
            color: var(--text-gray);
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .menu-item.active, .menu-item:hover {
            background-color: var(--rosa-palo);
            color: var(--bg-main);
        }

        /* Contenido Principal */
        .main-content {
            flex: 1;
            padding: 30px 40px;
            overflow-y: auto;
        }

        h2 {
            color: var(--rosa-palo);
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* VISTA DE BIENVENIDA */
        .welcome-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .welcome-banner {
            background: linear-gradient(135deg, #1B1B26, #252538);
            border: 2px solid var(--rosa-palo);
            border-radius: 16px;
            padding: 25px;
            display: flex;
            align-items: center;
            gap: 25px;
            box-shadow: 0 8px 24px rgba(226, 169, 196, 0.15);
        }

        .welcome-banner img {
            width: 280px;
            height: 180px;
            object-fit: contain;
            background-color: #0A0A12;
            border-radius: 10px;
            border: 2px solid var(--accent-cyan);
            padding: 4px;
            cursor: zoom-in;
            transition: transform 0.3s ease;
        }

        .welcome-banner img:hover {
            transform: scale(1.03);
        }

        .welcome-text h3 {
            color: var(--accent-cyan);
            margin-top: 0;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .welcome-text p {
            color: var(--text-gray);
            line-height: 1.5;
            margin: 0;
            font-size: 14px;
        }

        /* Carrusel / Galería Horizontal */
        .slider-title {
            color: var(--rosa-palo);
            font-size: 18px;
            margin-top: 10px;
            font-weight: bold;
        }

        .horizontal-slider {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding-bottom: 15px;
        }

        .horizontal-slider::-webkit-scrollbar {
            height: 8px;
        }

        .horizontal-slider::-webkit-scrollbar-thumb {
            background: var(--rosa-palo);
            border-radius: 4px;
        }

        .mini-card {
            min-width: 280px;
            max-width: 280px;
            background-color: var(--card-bg);
            border: 1px solid #2A2A3D;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .mini-card:hover {
            transform: translateY(-8px);
            border-color: var(--rosa-palo);
            box-shadow: 0 10px 25px rgba(226, 169, 196, 0.25);
        }

        .mini-card .img-container {
            width: 100%;
            height: 150px;
            background-color: #12121A;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .mini-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: zoom-in;
            transition: transform 0.3s ease;
        }

        .mini-card:hover img {
            transform: scale(1.05);
        }

        .mini-card-body {
            padding: 15px;
        }

        .mini-card-body h4 {
            margin: 0 0 5px 0;
            color: var(--rosa-palo);
            font-size: 16px;
        }

        .mini-card-body p {
            margin: 0;
            color: var(--text-gray);
            font-size: 13px;
        }

        /* FORMULARIO EN DOS COLUMNAS */
        .form-container {
            background-color: var(--card-bg);
            border: 2px solid var(--rosa-palo);
            border-radius: 16px;
            padding: 25px 30px;
            max-width: 900px;
            box-shadow: 0 8px 24px rgba(226, 169, 196, 0.15);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: var(--rosa-palo);
            font-weight: bold;
            font-size: 13px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px 12px;
            background-color: #12121A;
            border: 1px solid #333344;
            border-radius: 8px;
            color: var(--text-white);
            font-size: 13px;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--rosa-palo);
            outline: none;
        }

        .btn-submit {
            background-color: var(--rosa-palo);
            color: var(--bg-main);
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 15px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
            grid-column: span 2;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: var(--rosa-hover);
            transform: translateY(-2px);
        }

        /* MODAL DE ZOOM EN PANTALLA COMPLETA */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.92);
            justify-content: center;
            align-items: center;
            cursor: zoom-out;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 12px;
            box-shadow: 0 0 35px rgba(226, 169, 196, 0.4);
            border: 2px solid var(--rosa-palo);
        }
    </style>
</head>
<body>

    <?php 
        $vista = isset($_GET['vista']) ? $_GET['vista'] : 'inicio';
    ?>

    <!-- Menú Lateral -->
    <div class="sidebar">
        <div class="logo">🌴 Turismo App</div>
        <a href="index.php?vista=inicio" class="menu-item <?php echo ($vista == 'inicio') ? 'active' : ''; ?>">🏠 Menú / Inicio</a>
        <a href="index.php?vista=nuevo" class="menu-item <?php echo ($vista == 'nuevo') ? 'active' : ''; ?>">📍 Nuevo Destino</a>
        <a href="index.php?vista=lista" class="menu-item <?php echo ($vista == 'lista') ? 'active' : ''; ?>">📋 Ver Destinos</a>
    </div>

    <!-- Contenido Dinámico -->
    <div class="main-content">

        <?php if ($vista == 'inicio'): ?>
            <!-- VISTA DE BIENVENIDA CON MAPA -->
            <h2>✨ Bienvenidos a la Región Puno 🏔️</h2>
            <div class="welcome-container">
                <div class="welcome-banner">
                    <img src="https://imgv2-1-f.scribdassets.com/img/document/311282980/original/23559d6ff4/1?v=1" 
                         alt="Mapa de la Región Puno" 
                         onclick="abrirZoom(this.src)">
                    <div class="welcome-text">
                        <h3>Cuna del Imperio Incaico y Capital del Folklore</h3>
                        <p>Explora la magia del Lago Titicaca, sus imponentes paisajes altoandinos, provincias y distritos. Este panel te permite administrar y sincronizar todos los atractivos turísticos en tiempo real con tu aplicación móvil.</p>
                    </div>
                </div>

                <div class="slider-title">🌟 Provincias y Atractivos Destacados de Puno</div>
                <div class="horizontal-slider">
                    <!-- Isla Taquile -->
                    <div class="mini-card">
                        <div class="img-container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT7Xfo2toK03ewkbGDNPDpvrPGBBLVwX35rc0nQRVt8g&s=10"
                                 alt="Isla Taquile" 
                                 onclick="abrirZoom(this.src)">
                        </div>
                        <div class="mini-card-body">
                            <h4>Isla Taquile</h4>
                            <p>Arte textil ancestral y vista al Titicaca.</p>
                        </div>
                    </div>

                    <!-- Sillustani -->
                    <div class="mini-card">
                        <div class="img-container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZoy1eYs0dU-Qq1XNxUrHycwW_28II0eeYjZejzX0VZVNYzykg7BGUK-Tr&s=10" 
                                 alt="Sillustani" 
                                 onclick="abrirZoom(this.src)">
                        </div>
                        <div class="mini-card-body">
                            <h4>Sillustani</h4>
                            <p>Chullpas funerarias prehispánicas de Umayo.</p>
                        </div>
                    </div>

                    <!-- Cristo Blanco -->
                    <div class="mini-card">
                        <div class="img-container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfMafFCEAlrYrXJ-Q-AbHIOSPqLQS4UwTZ8MrJdWy0ag&s=10" 
                                 alt="Cristo Blanco" 
                                 onclick="abrirZoom(this.src)">
                        </div>
                        <div class="mini-card-body">
                            <h4>Cristo Blanco</h4>
                            <p>Mirador turístico en Desaguadero (Chucuito).</p>
                        </div>
                    </div>

                    <!-- Juliaca / San Román -->
                    <div class="mini-card">
                        <div class="img-container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVoHdTlksRuwnJm6wcIQxQIwcLzXZkwp4eUt2rpQsoa2ecfcEOmmt-CozN&s=10" 
                                 alt="San Román" 
                                 onclick="abrirZoom(this.src)">
                        </div>
                        <div class="mini-card-body">
                            <h4>San Román</h4>
                            <p>Juliaca, Plaza de Armas y centro comercial.</p>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif ($vista == 'nuevo'): ?>
            <!-- VISTA DE REGISTRO DE DESTINOS (DISTRIBUCIÓN HORIZONTAL) -->
            <h2>📍 Registrar Nuevo Destino Turístico (Región Puno)</h2>
            <div class="form-container">
                <form action="guardar.php" method="POST" class="form-grid">
                    
                    <div class="form-group full-width">
                        <label>Nombre del Lugar Turístico:</label>
                        <input type="text" name="nombre" placeholder="Ej. Mirador Cristo Blanco" required>
                    </div>

                    <div class="form-group">
                        <label>Región:</label>
                        <select name="region" required>
                            <option value="Puno" selected>Puno</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Provincia:</label>
                        <select name="provincia" required>
                            <option value="">-- Seleccione Provincia --</option>
                            <option value="Chucuito">Chucuito</option>
                            <option value="Puno">Puno</option>
                            <option value="San Román">San Román (Juliaca)</option>
                            <option value="El Collao">El Collao</option>
                            <option value="Yunguyo">Yunguyo</option>
                            <option value="Azángaro">Azángaro</option>
                            <option value="Carabaya">Carabaya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Distrito:</label>
                        <select name="distrito" required>
                            <option value="">-- Seleccione Distrito --</option>
                            <option value="Desaguadero">Desaguadero</option>
                            <option value="Juli">Juli</option>
                            <option value="Puno Distrito">Puno</option>
                            <option value="Ilave">Ilave</option>
                            <option value="Yunguyo Distrito">Yunguyo</option>
                            <option value="Juliaca">Juliaca</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>URL de la Imagen / Foto:</label>
                        <input type="text" name="imagen" placeholder="https://..." required>
                    </div>

                    <div class="form-group full-width">
                        <label>Descripción:</label>
                        <textarea name="descripcion" rows="3" placeholder="Breve reseña del atractivo..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Latitud GPS:</label>
                        <input type="text" name="latitud" placeholder="Ej. -16.565889" required>
                    </div>

                    <div class="form-group">
                        <label>Longitud geográfica:</label>
                        <input type="text" name="longitud" placeholder="Ej. -69.047101" required>
                    </div>

                    <button type="submit" class="btn-submit">💾 GUARDAR DESTINO TURÍSTICO</button>
                </form>
            </div>

        <?php elseif ($vista == 'lista'): ?>
            <!-- VISTA DE LISTA DE DESTINOS REGISTRADOS -->
            <h2>📋 Destinos Turísticos Registrados</h2>
            <p style="color: var(--text-gray);">Visualiza los lugares sincronizados en tiempo real con tu app móvil.</p>
        <?php endif; ?>

    </div>

    <!-- MODAL PARA VISOR DE ZOOM EN PANTALLA COMPLETA -->
    <div id="imageModal" class="modal" onclick="cerrarZoom()">
        <img id="imgZoom" src="" alt="Zoom de imagen">
    </div>

    <script>
        function abrirZoom(urlImagen) {
            const modal = document.getElementById('imageModal');
            const imgZoom = document.getElementById('imgZoom');
            imgZoom.src = urlImagen;
            modal.style.display = 'flex';
        }

        function cerrarZoom() {
            const modal = document.getElementById('imageModal');
            modal.style.display = 'none';
        }
    </script>

</body>
</html>