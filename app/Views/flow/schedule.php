<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
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
    <div class="frame">
        <div class="inner">
            <!-- HERO -->
            <div class="d-grid gap-20 place-center mb-50" style="margin-top: 14px;">
                <img class="w-200p" src="/img/h-clock.png" alt="clock">
                <div class="d-grid gap-10 place-center">
                    <div class="fs-32 lh-24 fw-600 c-1e">8:00 - 10:30 AM</div>
                    <div class="fs-24 lh-24 c-1e">It's time to Read: Asylum part IV</div>
                </div>
                <a href="/flow/focus-mode"
                    class="w-175p b-42 py-10 rounded-30 fs-14 c-f4 lh-16 text-center transform-max transition-ease">Focus
                    mode</a>
            </div>

            <!-- SCHEDULE -->
            <div class="d-grid gap-20 ">
                <div class="fs-24 fw-700 lh-24 c-1e">Next up:</div>

                <div class="d-grid">
                    <div class="container schedule h-45p">
                        <div class="fs-18 c-1e">10:30 AM - 10:50 AM</div>
                        <div class="fs-18 fw-600 c-1e">Daily challenge</div>
                    </div>
                    <div class="container schedule h-45p">
                        <div class="fs-18 c-1e">10:50 AM - 01:00 PM</div>
                        <div class="fs-18 fw-600 c-1e">Solitare event</div>
                    </div>
                    <div class="container schedule h-45p">
                        <div class="fs-18 c-1e">01:00 PM - 01:30 PM</div>
                        <div class="fs-18 fw-600 c-1e">Lunch + Break</div>
                    </div>
                    <div class="container schedule h-45p">
                        <div class="fs-18 c-1e">01:30 PM - 03:00 PM</div>
                        <div class="fs-18 fw-600 c-1e">Take a nap</div>
                    </div>
                    <div class="container schedule h-45p">
                        <div class="fs-18 c-1e">03:00 PM - 05:00 PM</div>
                        <div class="fs-18 fw-600 c-1e">Nana tour + Break</div>
                    </div>
                </div>

                <a class="fs-14 lh-16 c-42 text-center transform-max transition-ease"><u>More</u></a>
            </div>
        </div>

        <!-- FLOATING BUTTON -->
        <a href="/flow/schedule-overview" class="floating transform-min transition-ease">
            <img src="/img/f-edit.png" alt="">
        </a>

        <!-- NAVIGATION -->
        <div class="nav">
            <a href="/flow" class="nav-items">
                <img src="/img/n-home.png" alt="">
                <div class="fs-14 fw-600 lh-18 c-1e">Home</div>
            </a>
            <a href="/flow/tasks" class="nav-items">
                <img src="/img/n-tasks.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Tasks</div>
            </a>
            <a href="/flow/calendar" class="nav-items">
                <img src="/img/n-calendar.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Calendar</div>
            </a>
            <a href="/flow/schedule" class="nav-items b-dc">
                <img src="/img/na-schedule.png" alt="">
                <div class="fw-600 fs-14 c-42 lh-18">Schedule</div>
            </a>
            <a href="/flow/notes-folder" class="nav-items">
                <img src="/img/n-notes.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Notes</div>
            </a>
        </div>
    </div>
</body>

</html>