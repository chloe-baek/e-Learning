<?php  
    $cookie_md0 = setcookie('module0','pass',time() + (86400 *30),true)
?>

<?php include 'header.php';?>

<body>
    <header>
        <a href="../index.html" class="btn">⬅︎ Change Language</a>
    </header>
    <main>
        <h1>Welcome Aboard</h1>
        <div id="container">
            <h2>Are you traveling to Korea? Here is an English guide for you!</h2>

            <p>Let us help you on your journey!</p>

            <div class="btn-container">
                <a href="module1.php" class="btn btn-module">Let's Go!</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="img">
            <div class="ballon">
                <script>
                const ballon = document.querySelector('.ballon');
                if (localStorage.getItem('username') !== null) {
                    ballon.innerHTML =
                        `<p>Hello, ${localStorage.getItem('username')}😀</p><p>Let's learn useful Korean phrases together!</p>`
                } else {
                    ballon.classList.add('hidden');
                }
                </script>

                <?php include 'footer.php'; ?>
                <script src="../js/test.js" defer></script>
                <script>

                </script>
</body>

</html>