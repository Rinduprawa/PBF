<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus Mode</title>
    <link rel="icon" href="/img/flow.png">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- STYLE -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php
    $minutes = isset($duration) ? intval($duration) : 25;
    $totalSeconds = $minutes * 60;
    ?>

    <div class="frame">
        <div class="inner p-0">
            <!-- HEADER -->
            <div class="header-card container mb-35">
                <a href="/flow" class="d-flex align-center transform-min transition-ease"><img src="/img/s-chevron.png"
                        alt=""></a>
                <div class="fs-20 lh-18 fw-600 c-1e">August 8, 2024</div>
                <a class="d-flex align-center transform-min transition-ease"><img src="/img/t-menu.png" alt=""></a>
            </div>

            <!-- TABS -->
            <div class="container px-30">
                <a href="/flow/podomoro-mode"
                    class="d-flex align-center justify-center h-40p w-163p b-f4 c-42 rounded-30 bs-42-20 transform-min transition-ease">Podomoro
                    Mode</a>
                <a
                    class="d-flex align-center justify-center h-40p w-163p b-f4 c-42 rounded-30 bs-42-20 transform-min transition-ease">Stopwatch
                    Mode</a>
            </div>

            <!-- CONTENT -->
            <div class="d-grid gap-150 justify-center p-95">
                <div class="d-grid gap-24">
                    <div class="fs-32 fw-600 lh-24 c-42 text-center">Timer Mode</div>
                    <div class="clock-container">
                        <input type="text" id="timer" class="clock" value="<?= gmdate("H:i:s", $totalSeconds) ?>">
                    </div>
                </div>
                <div class="d-flex justify-center">
                    <a href="/flow/focus-mode" class="d-flex align-center justify-center h-40p w-200p rounded-30 b-42 c-f4 fs-18 fw-600 
                        transform-min transition-ease border-none p-0 ff-c pointer">Reset</a>
                </div>
            </div>
        </div>


        <!-- NAVIGATION -->
        <div class="nav">
            <a class="nav-items w-90p">
                <img src="/img/n-strict-mode.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Strict Mode</div>
            </a>
            <a class="nav-items w-90p">
                <img src="/img/n-fullscreen.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Fullscreen</div>
            </a>
            <a class="nav-items w-90p">
                <img src="/img/n-white-noise.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">White Noise</div>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let totalSeconds = <?= $totalSeconds ?>;
            let timerInput = document.getElementById("timer");

            function startCountdown() {
                let countdown = setInterval(() => {
                    if (totalSeconds <= 0) {
                        clearInterval(countdown);
                        alert("Time's up!");
                        return;
                    }

                    totalSeconds--;

                    let hours = Math.floor(totalSeconds / 3600);
                    let minutes = Math.floor((totalSeconds % 3600) / 60);
                    let seconds = totalSeconds % 60;

                    timerInput.value =
                        String(hours).padStart(2, '0') + ":" +
                        String(minutes).padStart(2, '0') + ":" +
                        String(seconds).padStart(2, '0');
                }, 1000);
            }
            startCountdown();
        });
    </script>

</body>

</html>