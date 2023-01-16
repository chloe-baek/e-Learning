<?php  
    $cookie_md1 = setcookie('module1','pass',time() + (86400 *30),true)
?>
<?php include 'header.php';?>

<body>
    <header>
        <!-- <a href="../index.html" class="btn">⬅︎ Change Language</a> -->
        <a href="korean.php" class="btn">⬅︎ Main Page</a>
        <nav id="nav-container">
            <?php 
             if(isset($_COOKIE["module0"]) && isset($_COOKIE['module1']) && isset($_COOKIE["module2"]) && isset($_COOKIE["module3"]) && isset($_COOKIE["module4"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" class="active">Shopping</a>';
                print '<a href="module4.php" class="active">Restaurant</a>';
            }else if(isset($_COOKIE["module0"]) && isset($_COOKIE['module1']) && isset($_COOKIE["module2"]) && isset($_COOKIE["module3"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" class="active">Shopping</a>';
                print '<a href="module4.php" style=" pointer-events: none">Restaurant</a>';
            }else if(isset($_COOKIE["module0"]) && isset($_COOKIE['module1']) && isset($_COOKIE["module2"])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" class="active">Taxi & Hotel</a>';
                print '<a href="module3.php" style=" pointer-events: none">Shopping</a>';
                print '<a href="module4.php"style=" pointer-events: none">Restaurant</a>';
            }else if(isset($_COOKIE["module0"]) || isset($_COOKIE['module1'])){
                print '<a href="module1.php" class="active">Airport</a>';
                print '<a href="module2.php" style=" pointer-events: none">Taxi & Hotel</a>';
                print '<a href="module3.php" style=" pointer-events: none">Shopping</a>';
                print '<a href="module4.php" style=" pointer-events: none">Restaurant</a>';
            }
            
            ?>
        </nav>
    </header>
    <main>
        <h1>공항</h1>
        <div id="container" style="max-width:80ch">
            <div class="module">
                <section>
                    <div class="section-container">
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="1">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-1">
                                            <source src="../audio/english/airport-1.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>캐나다에 입국 목적이 무엇입니까?</p>
                                <p>What is your purpose of visiting Canada?</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="2">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-2">
                                            <source src="../audio/english/airport-2.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>관광하러 왔습니다.</p>
                                <p>I'm here for sightseeing</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="3">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-3">
                                            <source src="../audio/english/airport-3.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>사업차 왔습니다.</p>
                                <p>I'm here for business.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="4">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-4">
                                            <source src="../audio/english/airport-4.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>얼마나 머물 예정이십니까?</p>

                                <p>How long are you planning to stay?</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="5">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-5">
                                            <source src="../audio/english/airport-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>일주일 정도 여행할 생각힙니다.</p>

                                <p>I will be in Canada for a week.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="6">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-6">
                                            <source src="../audio/english/airport-6.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>숙소 주소와 연락처를 알려주세요.</p>

                                <p>Please provide your accommodation address and contact information.</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="7">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-7">
                                            <source src="../audio/english/airport-7.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>캐나다에 오신 것을 환영합니다.</p>
                                <!-- <p>Welcome to Korea.</p>             -->
                                <p>Welcome to Canada.</p>
                            </div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="btn btn-test">테스트 1</button>
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
                                            <source src="../audio/english/airport-2.mp3">
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
                                            <source src="../audio/english/airport-4.mp3">
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
                                            <source src="../audio/english/airport-7.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>

                        <!-- <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="11">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-11">
                                            <source src="../audio/sample.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>


                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="12">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-12">
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
                        <a href="module2.php" class="btn btn-next hidden">다음 모듈</a>
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
                    ballon.innerHTML = `<p>공항에서 많이 사용되는 표현들 입니다. Good luck,${localStorage.getItem('username')}</p>`
                } else {
                    ballon.classList.add('hidden');
                }
                </script>
                <?php include 'footer.php'; ?>

                <script src="../js/script.js" defer></script>
                <script>
                const quizContainer = document.querySelector('.quiz');
                const resultsContainer = document.querySelector('.results');
                const btnSubmit = document.querySelector('.submit');
                const btnNext = document.querySelector('.btn-next');
                const btnAgain = document.querySelector('.btn-again');
                let questions = [{
                        question: '',
                        answers: {
                            a: '한국에 오신것을 환영합니다.',
                            b: '일주일 정도 여행할 생각입니다.',
                            c: '관광하러 왔습니다.',
                        },
                        correctAnswer: 'c',
                    },
                    {
                        question: '',
                        answers: {
                            a: '얼마나 머물 예정이십니까?',
                            b: '숙소 주소와 연락처를 알려주세요.',
                            c: '사업차 왔습니다.',
                        },
                        correctAnswer: 'a',
                    },
                    {
                        question: '',
                        answers: {
                            a: '캐나다에 입국 목적이 무엇입니까?',
                            b: '캐나다에 오신것을 환영합니다.',
                            c: "한달 정도 여행할 생각입니다.",
                        },
                        correctAnswer: 'b',
                    },
                    // {
                    //     question: '',
                    //     answers: {
                    //         a: 'I will be in Korea for a week',
                    //         b: 'Please provide your accommodation address and contact information.',
                    //         c: "I'm here for business",
                    //     },
                    //     correctAnswer: 'a',
                    // },
                    // {
                    //     question: '',
                    //     answers: {
                    //         a: 'What is your purpose for visiting Korea?',
                    //         b: "I'm here for business.",
                    //         c: "I'm here for sightseeing, pleasure.",
                    //     },
                    //     correctAnswer: 'a',
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
                                    `<label><input type="radio" name='question${i}' value="${letter}">${questions[i].answers[letter]}</label>`
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