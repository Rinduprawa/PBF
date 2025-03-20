<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
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
        <div class="inner pt-50">
            <!-- TABS -->
            <img class="absolute ml-354" src="/img/t-menu.png" alt="" style="position: absolute;">
            <div class="d-flex gap-8 pt-2 mb-34">
                <a class="b-42 px-16 py--25 rounded-30 fs-12 c-f4">All</a>
                <a class="b-a6 px-16 py--25 rounded-30 fs-12 c-42">Work</a>
                <a class="b-a6 px-16 py--25 rounded-30 fs-12 c-42">Personal</a>
                <a class="b-a6 px-16 py--25 rounded-30 fs-12 c-42">Hobby</a>
                <a class="b-a6 px-16 py--25 rounded-30 fs-12 c-42">Community</a>
            </div>

            <!-- ACCORDION -->
            <div class="d-grid gap-30">
                <div class="accordion-item">
                    <div class="accordion-title">
                        <span>Previous</span>
                        <span class="chevron"><img src="/img/t-chevron.png" alt=""></span>
                    </div>
                    <div class="accordion-content d-none">
                        <div class="c-a6"><i>Empty list</i></div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-title">
                        <span>Today</span>
                        <span class="chevron"><img src="/img/t-chevron.png" alt=""></span>
                    </div>
                    <div class="accordion-content">
                        <div class="d-grid gap-10">
                            <div class="container rounded-30 b-dc px-16 h-40p">
                                <label class="cb">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <span class="text fs-18 m-0">Read asylum</span>
                                </label>
                                <img class="" src="/img/i-progress 9.png" alt="">
                            </div>

                            <div class="container rounded-30 b-dc m-0 px-16 h-40p">
                                <label class="cb">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <span class="text fs-18 m-0">IMK: Final Project</span>
                                </label>
                                <img class="" src="/img/i-progress 5.png" alt="">
                            </div>

                            <div class="container rounded-30 b-dc m-0 px-16 h-40p">
                                <label class="cb">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <span class="text fs-18 m-0">Nana tour ep.4</span>
                                </label>
                                <img class="" src="/img/i-progress 5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-title">
                        <span>Future</span>
                        <span class="chevron"><img src="/img/t-chevron.png" alt=""></span>
                    </div>
                    <div class="accordion-content d-none">
                        <div class="c-a6"><i>Empty list</i></div>
                    </div>
                </div>
                <a class="fs-14 lh-16 c-42 text-center"><u>Check all completed tasks</u></a>
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
            <a href="/flow/tasks" class="nav-items b-dc">
                <img src="/img/na-tasks.png" alt="">
                <div class="fw-600 fs-14 c-42 lh-18">Tasks</div>
            </a>
            <a href="/flow/calendar" class="nav-items">
                <img src="/img/n-calendar.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Calendar</div>
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

    <script src="/script.js"></script>
</body>

</html>