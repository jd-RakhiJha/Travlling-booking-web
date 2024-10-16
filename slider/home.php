<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <main>
        <div class="slide-container">
            <img src="https://picsum.photos/id/243/1000/500" class="slide" alt="">
            <img src="https://picsum.photos/id/241/1000/500" class="slide" alt="">
            <img src="https://picsum.photos/id/242/1000/500" class="slide" alt="">
        </div>
    </main>

    <div class="nav">
        <button onclick="goPrev()">prev</button>
        <button onclick="goNext()">Next</button>
    </div>
   
    <script src="assets/js/script.js"></script>

</body>

</html>
