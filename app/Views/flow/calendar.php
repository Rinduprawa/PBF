<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
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
    <div class="frame" style="background: url(/img/c-phone.png);">
        <div class="inner pt-50 px-20">
            <!-- MONTH -->
            <div class="container mb-20">
                <a class="d-flex align-center transform-min transition-ease"><img src="/img/c-chevron.png" alt=""></a>
                <div class="fs-24 lh-18 fw-600 c-f4">August 2024</div>
                <a class="d-flex align-center transform-min transition-ease"><img src="/img/c-chevron.png" alt=""
                        style="rotate: 180deg;"></a>
            </div>

            <!-- CALENDAR -->
            <div class="d-grid px-10">
                <!-- DAY -->
                <div class="container">
                    <div class="calendar fw-600 fs-18 c-f4">Sun</div>
                    <div class="calendar fw-600 fs-18 c-f4">Mon</div>
                    <div class="calendar fw-600 fs-18 c-f4">Tue</div>
                    <div class="calendar fw-600 fs-18 c-f4">Wed</div>
                    <div class="calendar fw-600 fs-18 c-f4">Thu</div>
                    <div class="calendar fw-600 fs-18 c-f4">Fri</div>
                    <div class="calendar fw-600 fs-18 c-f4">Sat</div>
                </div>

                <!-- DATE -->
                <div class="container">
                    <div class="calendar fs-16 c-a6">28</div>
                    <div class="calendar fs-16 c-a6">29</div>
                    <div class="calendar fs-16 c-a6">30</div>
                    <div class="calendar fs-16 c-a6">31</div>
                    <div class="calendar">1</div>
                    <div class="calendar">2</div>
                    <div class="calendar">3</div>
                </div>
                <div class="container">
                    <div class="calendar">4</div>
                    <div class="calendar">5</div>
                    <div class="calendar">6</div>
                    <div class="calendar">7</div>
                    <div class="today calendar">8</div>
                    <div class="calendar">9</div>
                    <div class="calendar">10</div>
                </div>
                <div class="container">
                    <div class="calendar">11</div>
                    <div class="calendar">12</div>
                    <div class="calendar">13</div>
                    <div class="calendar">14</div>
                    <div class="calendar">15</div>
                    <div class="calendar">16</div>
                    <div class="calendar">17</div>
                </div>
                <div class="container">
                    <div class="calendar">18</div>
                    <div class="calendar">19</div>
                    <div class="calendar">20</div>
                    <div class="calendar">21</div>
                    <div class="calendar">22</div>
                    <div class="calendar">23</div>
                    <div class="calendar">24</div>
                </div>
                <div class="container">
                    <div class="calendar">25</div>
                    <div class="calendar">26</div>
                    <div class="calendar">27</div>
                    <div class="calendar">28</div>
                    <div class="calendar">29</div>
                    <div class="calendar">30</div>
                    <div class="calendar">31</div>
                </div>
            </div>

            <!-- TASKS -->
            <div class="d-grid gap-10 px-10 pt-62">
                <div class="calendar-task container h-48p b-dc rounded-15">
                    <div class="fs-18 lh-16 c-1e">Read asylum</div>
                    <img src="/img/c-progress 9.png" alt="">
                </div>
                <div class="calendar-task container h-48p b-dc rounded-15">
                    <div class="fs-18 lh-16 c-1e">IMK: Final Project</div>
                    <img src="/img/c-progress 5.png" alt="">
                </div>
                <div class="calendar-task container h-48p b-dc rounded-15">
                    <div class="fs-18 lh-16 c-1e">Nana tour ep.4</div>
                    <img src="/img/c-progress 5.png" alt="">
                </div>
            </div>
        </div>

        <!-- FLOATING BUTTON -->
        <a class="floating transform-min transition-ease">
            <img src="/img/t-add.png" alt="">
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
            <a href="/flow/calendar" class="nav-items b-dc">
                <img src="/img/na-calendar.png" alt="">
                <div class="fw-600 fs-14 c-42 lh-18">Calendar</div>
            </a>
            <a href="/flow/schedule" class="nav-items">
                <img src="/img/n-schedule.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Schedule</div>
            </a>
            <a href="/flow/notes-folder" class="nav-items">
                <img src="/img/n-notes.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Notes</div>
            </a>
        </div>
    </div>
</body>

</html>