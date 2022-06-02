<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Quiz App</title>
    <link rel="stylesheet" href="./css/game2.css">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Comenzar Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Reglas del Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Tienes <span>15 segundos</span>por cada pregunta.</div>
            <div class="info">2. Una vez seleccionado no puedes volver a seleccionar otro.</div>
            <div class="info">3. Son preguntas de 6 semestre asi que si eres de otro semestre sorry de ante mano.</div>
            <div class="info">4. No te puedes salir estando en el quiz si no se reinicia.</div>
            <div class="info">5. Si pierdes volveras al inicio de la pagina y volveras a cruzar los juegos.</div>
        </div>
        <div class="buttons">
            <button onclick="location.href='../index.php'" class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Impresionante aplicación de prueba</div>
            <div class="timer">
                <div class="time_left_txt">Tiempo Limite</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Siguiente</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">¡Has completado el Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="./js/game2.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="./js/game2coded.js"></script>

</body>
</html>
</html>