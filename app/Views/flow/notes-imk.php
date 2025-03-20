<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMK</title>
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
        <div class="inner p-0">
            <!-- HEADER -->
            <div class="header-card container">
                <a href="/flow/notes-folder" class="d-flex align-center transform-min transition-ease"><img
                        src="/img/s-chevron.png" alt=""></a>
                <div class="fs-20 lh-18 fw-600 c-1e">IMK</div>
                <a class="d-flex align-center transform-min transition-ease"><img src="/img/t-menu.png" alt=""></a>
            </div>

            <!-- CONTENT -->
            <div class="d-grid gap-30 px-30">
                <div class="container">
                    <a href="/flow/notes-structure-plane"
                        class="notes-card d-grid gap-20 py-20 px-10 b-dc rounded-15 transform-min transition-ease">
                        <div class="fs-20 fw-600 lh-18 c-1e">Structure Plane</div>
                        <div class="fs-16 w-150p lh-18 c-42">Interaksi dua arah antara pengguna dengan produk. Bagaimana
                            respon produk/layanan ketika user melakukan suatu tindakan tertentu. Contoh sederhana ketika
                            user klik ikon love maka ikon terseb...</div>
                    </a>
                    <a class="notes-card d-grid gap-20 py-20 px-10 b-dc rounded-15 transform-min transition-ease">
                        <div class="fs-20 fw-600 lh-18 c-1e">Skeleton</div>
                        <div class="fs-16 w-150p lh-18 c-42">Sebaiknya disesuaikan dengan taget dan kebiasaan user dalam
                            menggunakan aplikasi (mental model pengguna). Consistency menjadi poin yang perlu
                            diperhatikan ketika kita merancang suatu inter...</div>
                    </a>
                </div>

                <div class="container">
                    <a class="notes-card d-grid gap-20 py-20 px-10 b-dc rounded-15 transform-min transition-ease">
                        <div class="fs-20 fw-600 lh-18 c-1e">Scope</div>
                        <div class="fs-16 w-150p lh-18 c-42">Sifat produk pada dasarnya terbagi menjadi dua, antara
                            produk sebagai fungsionalitas dengan produk sebagai informasi. Produk sebagai fungsionalitas
                            fokus dalam memper-timbangkan set fitur y...</div>
                    </a>
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
            <a href="/flow/calendar" class="nav-items">
                <img src="/img/n-calendar.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Calendar</div>
            </a>
            <a href="/flow/schedule" class="nav-items">
                <img src="/img/n-schedule.png" alt="">
                <div class="fw-600 fs-14 c-1e lh-18">Schedule</div>
            </a>
            <a href="/flow/notes-folder" class="nav-items b-dc">
                <img src="/img/na-notes.png" alt="">
                <div class="fw-600 fs-14 c-42 lh-18">Notes</div>
            </a>
        </div>
    </div>
</body>

</html>