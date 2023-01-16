<?php  
    $cookie_md4 = setcookie('module4','pass',time() + (86400 *30),true)
?>
<?php include 'header.php';?>

<body>
    <header>
        <!-- <a href="../index.html" class="btn">⬅︎ Change Language</a> -->
        <a href="korean.php" class="btn">⬅︎ Main Page</a>
        <nav id="nav-container">
            <?php 
            if(isset($_COOKIE['module3']) || isset($_COOKIE["module4"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" class="active">Shopping</a>';
                print '<a href="module4.php" class="active">Restaurant</a>';
            }
            
            ?>
        </nav>
    </header>
    <main>
        <h1>레스토랑</h1>
        <div id="container" style="max-width:80ch">
            <div class="module">
                <section>
                    <div class="section-container">
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="1">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-1">
                                            <source src="../audio/english/rest-1.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>2명/3명/4명 입니다.</p>
                                <p>Table for 2/3/4 people, please.</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="2">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-2">
                                            <source src="../audio/english/rest-2.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>이거 하나랑 이거 하나 주세요.</p>
                                <p>One of this and one of this, please.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="3">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-3">
                                            <source src="../audio/english/rest-3.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>이거 매워요?</p>
                                <p>How spicy is this?</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="4">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-4">
                                            <source src="../audio/english/rest-4.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>앞치마 주세요.</p>
                                <p>An apron, please.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="5">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-5">
                                            <source src="../audio/english/rest-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>물 좀 더 주세요.</p>
                                <p>More water, please.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="6">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-6">
                                            <source src="../audio/english/rest-6.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>계산할게요</p>
                                <p>I'll pay for the table.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="7">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-7">
                                            <source src="../audio/english/rest-7.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>나눠서 계산해주세요.</p>
                                <p>Separate bills, please.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="8">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-8">
                                            <source src="../audio/english/rest-8.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>현금으로 계산할게요.</p>

                                <p>I'll pay with cash.</p>
                            </div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="btn btn-test">Last Test!</button>
                    </div>
                </section>
            </div>

            <div class="test hidden">
                <div class="test-container">
                    <div class="quiz-section-container">

                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="9">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-9">
                                            <source src="../audio/english/rest-2.mp3">
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
                                            <source src="../audio/english/rest-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>

                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="11">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-11">
                                            <source src="../audio/english/rest-6.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>

                    </div>

                    <form class="quiz"></form>

                    <div class="quiz-btns">
                        <button class="btn submit">결과보기</button>
                        <div class="results"></div>
                        <a href="../final.html" class="btn btn-next hidden">마지막 페이지</a>
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
                    ballon.innerHTML = `<p>벌써 마지막이네요. 레스토랑에서 유용한 표현들 배워보세요.</p>`
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
                            a: '앞치마 주세요.',
                            b: '이거 하나랑 이거 하나 주세요.',
                            c: '계산할게요.',
                        },
                        correctAnswer: 'b',
                    },
                    {
                        question: '',
                        answers: {
                            a: '물 좀 더 주세요.',
                            b: '나눠서 계산 해주세요.',
                            c: '3명 입니다.',
                        },
                        correctAnswer: 'a',
                    },
                    {
                        question: '',
                        answers: {
                            a: '이거 매워요?',
                            b: '나눠서 계산해주세요.',
                            c: '계산할게요.',
                        },
                        correctAnswer: 'c',
                    },

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