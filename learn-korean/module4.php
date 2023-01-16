<?php  
    $cookie_md4 = setcookie('module4','pass',time() + (86400 *30),true)
?>
<?php include 'header.php';?>

<body>
    <header>
        <!-- <a href="../index.html" class="btn">⬅︎ Change Language</a> -->
        <a href="english.php" class="btn">⬅︎ Main Page</a>
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
        <h1>Restaurant</h1>
        <div id="container">
            <div class="module">
                <section>
                    <div class="section-container">
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="1">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-1">
                                            <source src="../audio/korean/rest-1.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>Table for 2 people, please.</p>
                                <p>[Dumyeong-ibnida.]</p>
                            </div>
                        </div>
                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="2">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-2">
                                            <source src="../audio/korean/rest-2.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>One of this and one of this, please.</p>
                                <p>[Igeo hanalang igeo hana juseyo.]</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="3">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-3">
                                            <source src="../audio/korean/rest-3.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>How spicy is this?</p>
                                <p>[Igeo maewoyo?]</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="4">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-4">
                                            <source src="../audio/korean/rest-4.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>An apron, please.</p>
                                <p>[Apchima juseyo.]</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="5">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-5">
                                            <source src="../audio/korean/rest-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>More water, please.</p>
                                <p>[Mul jom deo juseyo.]</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="6">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-6">
                                            <source src="../audio/korean/rest-6.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>I'll pay for the table.</p>
                                <p>[Gyesan halgeyo.]</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="7">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-7">
                                            <source src="../audio/korean/rest-7.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>Separate bills, please.</p>
                                <p>[Nanwoseo gyesanhaejuseyo.]</p>
                            </div>
                        </div>

                        <div class="section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="8">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-8">
                                            <source src="../audio/korean/rest-8.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                            <div class="content-container">
                                <p>I'll pay by credit card.</p>
                                <p>[Card-lo gyesanhalgeyo.]</p>
                            </div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="btn btn-test">Last Test!</button>
                    </div>
                </section>
            </div>

            <div class="test hidden">
                <h2>Take a listen to the audio and choose the same sentence.</h2>
                <p>*You need to match 2 or more to move on to the next module.</p>
                <div class="test-container">
                    <div class="quiz-section-container">

                        <div class="quiz-section">
                            <div class="audio-container">
                                <button class="btn-headphones headphones" data-tab="9">
                                    <i class='fas fa-headphones' style='font-size:40px'>
                                        <audio class="audio audio-9">
                                            <source src="../audio/korean/rest-3.mp3">
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
                                            <source src="../audio/korean/rest-7.mp3">
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
                                            <source src="../audio/korean/rest-5.mp3">
                                        </audio>
                                    </i>
                                </button>
                            </div>

                        </div>

                    </div>

                    <form class="quiz"></form>

                    <div class="quiz-btns">
                        <button class="btn submit">Get Results</button>
                        <div class="results"></div>
                        <a href="../final.html" class="btn btn-next hidden">Last Page</a>
                        <a href="#" class="btn btn-again hidden">Try again</a>
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
                    ballon.innerHTML =
                        `<p>This is the final chapter, ${localStorage.getItem('username')}. Ask if you need anything at the restaurant!</p>`
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
                            a: 'I\'ll pay for the table.',
                            b: 'How spicy is this?',
                            c: 'An apron, please.',
                        },
                        correctAnswer: 'b',
                    },
                    {
                        question: '',
                        answers: {
                            a: 'Seperate bills, please.',
                            b: 'More water, please.',
                            c: 'One of this and one of this, please.',
                        },
                        correctAnswer: 'a',
                    },
                    {
                        question: '',
                        answers: {
                            a: 'Table for 2 people, please.',
                            b: 'I\'ll pay by credit card.',
                            c: 'More water, please.',
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
                                //<div class="question"><p>${questions[i].question}</p></div>
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
                                answerContainers[i].style.color = 'green';
                            }
                            // incorrect
                            else {
                                answerContainers[i].style.color = 'red';
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