<?php  
    $cookie_md0 = setcookie('module0','pass',time() + (86400 *30),true)
?>

<?php include 'header.php';?>

<body>
    <header>
        <a href="../index.html" class="btn">⬅︎ Change Language</a>
    </header>
    <main>
        <h1>탑승을 환영합니다</h1>
        <div id="container">
            <h2>캐나다로 여행하시나요? 캐나다를 여행하는 당신을 위한 영어 가이드!</h2>

            <p>당신의 여행을 위해 저희가 도와드릴게요!</p>

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
                    ballon.innerHTML = `<p>안녕하세요, ${localStorage.getItem('username')}</p>`
                } else {
                    ballon.classList.add('hidden');
                }
                </script>
                <?php include 'footer.php'; ?>

</body>

</html>