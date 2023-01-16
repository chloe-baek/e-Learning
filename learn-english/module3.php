<?php  
    $cookie_md3 = setcookie('module3','pass',time() + (86400 *30),true)
?>
<?php include 'header.php';?>

<body>
    <header>
        <!-- <a href="../index.html" class="btn">⬅︎ Change Language</a> -->
        <a href="korean.php" class="btn">⬅︎ Main Page</a>
        <nav id="nav-container">
            <?php 
            if(isset($_COOKIE["module0"]) && isset($_COOKIE["module1"]) && isset($_COOKIE["module2"])&&isset($_COOKIE["module3"]) && isset($_COOKIE["module4"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" class="active">Shopping</a>';
                print '<a href="module4.php" class="active">Restaurant</a>';
            }else if(isset($_COOKIE["module0"]) || isset($_COOKIE["module1"]) || isset($_COOKIE["module2"]) || isset($_COOKIE["module3"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" class="active">Shopping</a>';
                print '<a href="module4.php" style=" pointer-events: none">Restaurant</a>';
            }
           
            ?>

        </nav>
    </header>
    <main>
        <h1>쇼핑</h1>
        <div id="container" style="max-width:80ch">
            <div class="module">
                <section>
                    <div class="section-container">
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="1">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-1">
                                            <source src="../audio/english/shop-1.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>이거 사이즈 있나요?</p>
                                <p>Do you have this size?</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="2">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-2">
                                            <source src="../audio/english/shop-2.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>이거 입어봐도 되나요?</p>
                                <p>Can I try this on? (Clothes / Shoes)</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="3">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-3">
                                            <source src="../audio/english/shop-3.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>이거 새걸로 꺼내주세요.</p>
                                <p>Can I see a different one?</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="4">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-4">
                                            <source src="../audio/english/shop-4.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>얼마예요?</p>
                                <p>How much is it?</p>
                            </div>
                        </div>

                    </div>

                </section>
                <section style="margin-top:2rem">
                    <p style="text-align:right"> $ = CAD</p>
                    <div class="section-container">
                        <div class="row">
                            <div class="col-1-of-3">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <img src="../images/quarter.svg" alt="" width="70%" height="auto"
                                            style="transform: translate(0, 3%)">
                                    </div>
                                    <div class="card__side card__side--back">
                                        <p class="cash-content"> ¢ 25 = ₩ 250</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-1-of-3">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <img src="../images/loonie.svg" alt="" width="60%" height="auto"
                                            style="transform: translate(0%, 15%)">
                                    </div>
                                    <div class="card__side card__side--back">
                                        <p class="cash-content">$ 1 = ₩ 1000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-1-of-3">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <img src="../images/toonie.svg" alt="" width="70%" height="auto"
                                            style="transform: translate(-3px, 10px)">
                                    </div>

                                    <div class="card__side card__side--back">
                                        <p class="cash-content">$ 2 = ₩ 2000</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-1-of-3">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <img src="../images/10-canadian.svg" alt="" width="95%" height="auto"
                                            style="transform: translate(1px, 50px)">
                                    </div>
                                    <div class="card__side card__side--back">
                                        <p class="cash-content">$ 10 = ₩ 10,000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-1-of-3">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <img src="../images/20-canadian.svg" alt="" width="95%" height="auto"
                                            style="transform: translate(0, 50px)">
                                    </div>
                                    <div class="card__side card__side--back">
                                        <p class="cash-content">$ 20 = ₩ 20,000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-1-of-3">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <img src="../images/50-canadian.svg" alt="" width="95%" height="auto"
                                            style="transform: translate(0, 50px)">
                                    </div>

                                    <div class="card__side card__side--back">
                                        <p class="cash-content">$ 50 = ₩ 50,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <div class="btn-container">
                    <button class="btn btn-test" style="margin-left:15rem">테스트 3</button>
                </div>
            </div>

            <div class="test hidden">
                <h2>왼쪽 상자로, 높은 단위 순으로 이동하세요.</h2>
                <div class="drop-test-container">
                    <div class="drop-container">
                        <button class="draggable receipt" draggable="false">
                            <img src="../images/receipt-1.svg" alt="" width="100%" height="auto"
                                style="transform:translate(-5%, 10%)">
                        </button>
                    </div>
                    <div class="drag-container drag-answer">
                        <button class="draggable" draggable="false" value="0" style="display:none"></button>
                    </div>

                    <div class="drag-container">
                        <button class="draggable" draggable="true" value="0.25">
                            <img src="../images/quarter.svg" alt="" width="110%" height="auto"></button>
                        <button class="draggable" draggable="true" value="1">
                            <img src="../images/loonie.svg" alt="" width="110%" height="auto"></button>
                        <button class="draggable" draggable="true" value="2">
                            <img src="../images/toonie.svg" alt="" width="110%" height="auto"></button>
                        <button class="draggable" draggable="true" value="10">
                            <img src="../images/10-canadian.svg" alt="" width="170%" height="auto"></button>
                        <button class="draggable" draggable="true" value="20">
                            <img src="../images/20-canadian.svg" alt="" width="180%" height="auto"></button>
                        <button class="draggable" draggable="true" value="50">
                            <img src="../images/50-canadian.svg" alt="" width="180%" height="auto"></button>

                    </div>

                </div>


                <div class="results"></div>
                <a href="module3.php" class="btn btn-again">모듈 다시 확인하기</a>
                <a href="module4.php" class="btn btn-next hidden">다음 모듈</a>

            </div>
        </div>
    </main>
    <footer>
        <div class="img">
            <div class="ballon">
                <script>
                const ballon = document.querySelector('.ballon');
                if (localStorage.getItem('username') !== null) {
                    ballon.innerHTML = `<p>여행을 가면 쇼핑을 필수죠? </p>`
                } else {
                    ballon.classList.add('hidden');
                }
                </script>
                <?php include 'footer.php'; ?>

                <script src="../js/script.js"></script>
                <script>
                // Drag & drop quiz
                const draggables = document.querySelectorAll('.draggable')
                const dragContainer = document.querySelectorAll('.drag-container')
                const dragTestContainer = document.querySelector('.drag-test-container')
                const btnNext = document.querySelector('.btn-next')
                const btnAgain = document.querySelector('.btn-again')

                let sum = 0;
                let totalPrice = 0;

                function add(draggable) {
                    return totalPrice = sum += Number(draggable.value)
                }

                draggables.forEach(draggable => {
                    draggable.addEventListener('dragstart', () => {
                        draggable.classList.add('dragging')
                        add(draggable)
                        console.log(totalPrice);

                        if (totalPrice === 33.25) {
                            btnNext.classList.remove(HIDDEN)
                        }
                    })
                    draggable.addEventListener('dragend', () => {
                        draggable.classList.remove('dragging')

                    })

                })

                dragContainer.forEach(container => {
                    container.addEventListener('dragover', e => {
                        e.preventDefault();
                        const afterElement = getDragAfterElement(container, e.clientX)
                        // console.log(afterElement);
                        const draggable = document.querySelector('.dragging')
                        if (afterElement == undefined) {
                            container.appendChild(draggable)
                        } else {
                            container.insertBefore(draggable, afterElement)
                        }
                    })
                })

                function getDragAfterElement(container, x) {
                    const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')];

                    return draggableElements.reduce((closest, child) => {
                        const box = child.getBoundingClientRect();
                        const offset = x - box.left - box.width / 2
                        // console.log(offset);
                        if (offset < 0 && offset > closest.offset) {
                            return {
                                offset: offset,
                                element: child
                            }
                        } else {
                            return closest
                        }
                    }, {
                        offset: Number.NEGATIVE_INFINITY
                    }, ).element
                }
                </script>




</body>

</html>