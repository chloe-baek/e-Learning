<?php  
    $cookie_md2 = setcookie('module2','pass',time() + (86400 *30),true)
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
            }else if(isset($_COOKIE["module0"]) && isset($_COOKIE["module1"]) && isset($_COOKIE["module2"])&&isset($_COOKIE["module3"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" class="active">Shopping</a>';
                print '<a href="module4.php" style=" pointer-events: none">Restaurant</a>';
            }else if(isset($_COOKIE["module0"]) || isset($_COOKIE["module1"]) || isset($_COOKIE["module2"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" style=" pointer-events: none">Shopping</a>';
                print '<a href="module4.php" style=" pointer-events: none">Restaurant</a>';
            }
            ?>

        </nav>
    </header>
    <main>
        <h1>택시 & 호텔</h1>
        <div id="container" style="max-width:80ch">
            <div class="module">
                <section>
                    <div class="section-container">
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="1">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-1">
                                            <source src="../audio/english/hotel-1.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>XXX로 가주세요.</p>
                                <p>Please go to XXX.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="2">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-2">
                                            <source src="../audio/english/hotel-2.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>카드로 할게요.</p>
                                <p>I'll pay by credit card.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="3">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-3">
                                            <source src="../audio/english/hotel-3.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>여기서 내릴게요.</p>
                                <p>I'll get off here.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="4">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-4">
                                            <source src="../audio/english/hotel-4.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>영수증 주세요.</p>
                                <p>Receipt, please.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="5">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-5">
                                            <source src="../audio/english/hotel-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>예약했습니다.</p>
                                <p>I made a reservation.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="6">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-6">
                                            <source src="../audio/english/hotel-6.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>수영장은 어디 있어요?</p>
                                <p>Where is the swimming pool?</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="7">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-7">
                                            <source src="../audio/english/hotel-7.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>
                            <div class="content-container">
                                <p>택시 불러주실 수 있어요?</p>
                                <p>Can you call me a taxi?</p>
                            </div>
                        </div>

                    </div>
                    <div class="btn-container">
                        <button class="btn btn-test">테스트 2</button>
                    </div>
                </section>
            </div>

            <div class="test hidden">
                <div class="test-container">
                    <div class="quiz-section-container">

                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="8">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-8">
                                            <source src="../audio/english/hotel-2.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>

                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="9">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-9">
                                            <source src="../audio/english/hotel-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>

                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="10">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-10">
                                            <source src="../audio/english/hotel-6.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>
                        <!-- 
                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="11">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-11">
                                            <source src="../audio/sample.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div> -->

                    </div>

                    <form class="quiz"></form>

                    <div class="quiz-btns">
                        <button class="btn submit">결과보기</button>
                        <div class="results"></div>
                        <a href="module3.php" class="btn btn-next hidden">다음 모듈</a>
                        <a href="#" class="btn btn-again hidden">다시 시도해보기</a>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="img">
            <div class="ballon">
                <script>
                const ballon = document.querySelector('.ballon');
                if (localStorage.getItem('username') !== null) {
                    ballon.innerHTML = `<p>택시나 호텔에서 유용하게 쓰일 표현들 입니다.</p>`
                } else {
                    ballon.classList.add('hidden');
                }
                </script>
                <?php include 'footer.php'; ?>
                <script src="../js/script.js"></script>
                <script>
                const quizContainer = document.querySelector('.quiz');
                const resultsContainer = document.querySelector('.results');
                const btnSubmit = document.querySelector('.submit');
                const btnNext = document.querySelector('.btn-next');
                const btnAgain = document.querySelector('.btn-again');
                let questions = [{
                        question: '',
                        answers: {
                            a: '예약했습니다.',
                            b: '영수증 주세요',
                            c: '카드로 할게요.',
                        },
                        correctAnswer: 'c',
                    },
                    {
                        question: '',
                        answers: {
                            a: '수영장은 어디 있어요?',
                            b: '예약했습니다.',
                            c: '영수증 주세요.',
                        },
                        correctAnswer: 'b',
                    },
                    {
                        question: '',
                        answers: {
                            a: '여기서 내릴게요.',
                            b: '카드로 할게요.',
                            c: '수영장은 어디 있어요?',
                        },
                        correctAnswer: 'c',
                    },
                    // {
                    //     question: "",
                    //     answers: {
                    //         a: 'I\'ll get off here.',
                    //         b: 'Can you call me a taxi?',
                    //         c: 'Where is the swimming pool?'
                    //     },
                    //     correctAnswer: 'a'
                    // },
                    // {
                    //     question: "",
                    //     answers: {
                    //         a: 'Can you call me a taxi?',
                    //         b: 'I\'ll get off here.',
                    //         c: 'Where is the swimming pool?'
                    //     },
                    //     correctAnswer: 'a'
                    // },
                ];

                generateQuiz(questions, quizContainer, resultsContainer, btnSubmit);

                function generateQuiz(questions, quizContainer, resultsContainer, btnSubmit) {
                    function showQuestions(questions, quizContainer) {
                        let output = [];
                        let answers;

                        for (let i = 0; i < questions.length; i++) {
                            answers = [];

                            for (let letter in questions[i].answers) {
                                answers.push(
                                    `<label><input type="radio" name='question${i}' value="${letter}">${letter} : ${questions[i].answers[letter]}</label>`
                                );
                            }

                            output.push(
                                // `<div class="question">${questions[i].question}</div>
                                `<div class="answers">${answers.join('')}</div>`
                            );
                        }

                        quizContainer.innerHTML = output.join('');
                    }

                    function showResults(questions, quizContainer, resultsContainer) {
                        let answerContainers = quizContainer.querySelectorAll('.answers');
                        let userAnswer = '';
                        let numCorrect = 0;

                        for (let i = 0; i < questions.length; i++) {
                            userAnswer = (
                                answerContainers[i].querySelector(`input[name=question${i}]:checked`) || {}
                            ).value;

                            // correct
                            if (userAnswer === questions[i].correctAnswer) {
                                numCorrect++;
                                answerContainers[i].style.color = 'blue';
                            }
                            // incorrect
                            else {
                                answerContainers[i].style.color = 'orangered';
                            }

                            //pass to next module
                            if (numCorrect >= 2) {
                                resultsContainer.classList.remove(HIDDEN);
                                btnSubmit.classList.add(HIDDEN);
                                btnNext.classList.remove(HIDDEN);
                                btnAgain.classList.add(HIDDEN);
                            }
                            // try again
                            else {
                                btnSubmit.classList.add(HIDDEN);
                                btnAgain.classList.remove(HIDDEN);
                                btnAgain.addEventListener('click', function() {
                                    quizContainer.reset();
                                    answerContainers[i].style.color = 'black';
                                    btnSubmit.classList.remove(HIDDEN);
                                    btnAgain.classList.add(HIDDEN);
                                    resultsContainer.classList.add(HIDDEN);
                                });
                            }
                        }

                        resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;
                    }

                    showQuestions(questions, quizContainer);

                    btnSubmit.addEventListener('click', function() {
                        showResults(questions, quizContainer, resultsContainer);
                    });
                }
                </script>



</body>

</html>