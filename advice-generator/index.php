<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advice Generator</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="advice-card">
            <span class="advice-id">ADVICE #<span id="advice-number">117</span></span>
            <p id="advice" class="advice-text">
                <?php
                if (isset($_GET['advice'])) {
                    echo htmlspecialchars($_GET['advice']);
                } else {
                    echo "Click the button below to get some advice";
                }
                ?>
            </p>
            <div class="divider"></div>
            <button id="getAdviceBtn" class="dice-btn" aria-label="Get Advice">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 0H4a4.005 4.005 0 0 0-4 4v16a4.005 4.005 0 0 0 4 4h16a4.005 4.005 0 0 0 4-4V4a4.005 4.005 0 0 0-4-4ZM7.5 18a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm0-9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm4.5 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm0-9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z" fill="#202733"/>
                </svg>
            </button>
        </div>
    </div>
    <footer>
        <p>Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a></p>
        <p>Created with ❤️ by <a href="https://github.com/Dedyjagok" target="_blank">Dedy Hutahaean Putra</a></p>
        <p><a href="mailto:dedyhutahaean2005@gmail.com">dedyhutahaean2005@gmail.com</a></p>
        <p>Full-Stack Rebahan Developer</p>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>