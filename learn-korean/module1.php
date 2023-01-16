<?php  
    $cookie_md1 = setcookie('module1','pass',time() + (86400 *30),true)
?>
<?php include 'header.php';?>

<body>
    <header>
        <!-- <a href="../index.html" class="btn">⬅︎ Change Language</a> -->
        <a href="english.php" class="btn">⬅︎ Main Page</a>
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
        <h1>Airport</h1>
        <div id="container">
            <div class="module">
                <section>
                    <div class="section-container">
                        <div class="video-container">
                            <video controls width="600" id="video">
                                <source src="../audio/airport.mp4" type="video/mp4">
                        </div>

                        <div class="section">
                            <div class="content-container">
                                <p id="asking"></p>
                                <p id="askingSound"></p>
                            </div>
                            <div class="content-container">
                                <p id="answering"></p>
                                <p id="answeringSound"></p>
                            </div>
                        </div>

                    </div>

                    <div class="btn-container">
                        <button class="btn btn-test">Test 1!</button>
                    </div>
                </section>
            </div>

            <div class="test hidden">
                <h2>Choose the correct answer to the question.</h2>
                <p>*You need to match 2 or more to move on to the next module.</p>
                <div class="test-container module1-test">

                    <form class="quiz"></form>

                    <div class="quiz-btns">
                        <button class="btn submit">Get Results</button>
                        <div class="results"></div>
                        <a href="module2.php" class="btn btn-next hidden">Next Module</a>
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
                        `<p>This'll be useful during the immigration process! 🍀 Good luck, ${localStorage.getItem('username')}🍀</p>`
                } else {
                    ballon.classList.add('hidden');
                }
                </script>
                <?php include 'footer.php'; ?>

                <script src="../js/script.js" defer></script>
                <script>
                // video
                let current = 0;

                video.addEventListener('timeupdate', function() {
                    let time = Math.floor(video.currentTime);
                    if (video.currentTime <= 4) {
                        asking.style.display = 'block';
                        asking.innerHTML = 'What is your purpose for visiting Korea?'
                        askingSound.innerHTML = '[Hangug-e on mogjeog-i mueos-ibnikka?]'
                    }
                    if (video.currentTime >= 4 && video.currentTime <= 8) {
                        asking.style.display = 'none';
                        askingSound.style.display = 'none';
                        answering.style.display = 'block';
                        answeringSound.style.display = 'block';
                        answering.innerHTML = 'I\'m here for sightseeing, pleasure';
                        answeringSound.innerHTML = '[Gwan gwang haleo wassseubnida.]'
                    }
                    if (video.currentTime >= 8 && video.currentTime <= 11) {
                        answering.style.display = 'none';
                        answeringSound.style.display = 'none';
                        asking.style.display = 'block';
                        askingSound.style.display = 'block';
                        asking.innerHTML = 'How long are you planning to stay?';
                        askingSound.innerHTML = '[Eolmana meomul yejeong isibnikka?]';
                    }
                    if (video.currentTime >= 11 && video.currentTime <= 15) {
                        answering.style.display = 'block';
                        answeringSound.style.display = 'block';
                        asking.style.display = 'none';
                        askingSound.style.display = 'none';
                        answering.innerHTML = 'I will be in Korea for a week';
                        answeringSound.innerHTML = '[Ilju-il jeongdo yeohaenghal saeng-gag ibnida.]';
                    }
                    if (video.currentTime >= 15 && video.currentTime <= 18) {
                        asking.style.display = 'block';
                        askingSound.style.display = 'block';
                        answering.style.display = 'none';
                        answeringSound.style.display = 'none';
                        asking.innerHTML = 'Please provide your accommodation';
                        askingSound.innerHTML = '[Sukso neun eodi ibnikka?]';
                    }
                    if (video.currentTime >= 18 && video.currentTime <= 22) {
                        answering.style.display = 'block';
                        answeringSound.style.display = 'block';
                        asking.style.display = 'none';
                        askingSound.style.display = 'none';
                        answering.innerHTML = 'I will be staying at the Shilla Hotel';
                        answeringSound.innerHTML = '[Sinlahotel-e meomul yejeong-ibnida.]';
                    }
                    if (video.currentTime >= 22 && video.currentTime <= 24) {
                        answering.style.display = 'none';
                        answeringSound.style.display = 'none';
                        asking.style.display = 'block';
                        askingSound.style.display = 'block';
                        asking.innerHTML = 'Welcome to Korea 💙';
                        askingSound.innerHTML = '[Hanguk-e osingeol hwan-yeonghabnida.]';
                    }
                    if (video.currentTime >= 24 && video.currentTime <= 28) {
                        answering.style.display = 'block';
                        answeringSound.style.display = 'block';
                        asking.style.display = 'none';
                        askingSound.style.display = 'none';
                        answering.innerHTML = 'Thank you 💛';
                        answeringSound.innerHTML = '[Gam sa hab ni da.]';
                    }
                })
                const quizContainer = document.querySelector('.quiz');
                const resultsContainer = document.querySelector('.results');
                const btnSubmit = document.querySelector('.submit');
                const btnNext = document.querySelector('.btn-next');
                const btnAgain = document.querySelector('.btn-again');
                let questions = [{
                        question: 'How long are you planning to stay? [eolmana meomul yejeong isibnikka?]',
                        answers: {
                            a: '[Gam sa hab ni da.]',
                            b: '[Hanguk-e osingeol hwan-yeonghabnida.]',
                            c: '[Ilju-il jeongdo yeohaenghal saeng-gag ibnida.]',
                        },
                        correctAnswer: 'c',
                    },
                    {
                        question: 'What is your purpose for visiting Korea? [hangug-e on mogjeog-i mueos-ibnikka?]',
                        answers: {
                            a: '[Gwan gwang haleo wassseubnida.]',
                            b: '[Sinlahotel-e meomul yejeong-ibnida.]',
                            c: '[Eolmana meomul yejeong isibnikka?]',
                        },
                        correctAnswer: 'a',
                    },
                    {
                        question: 'Welcome to Korea [Hanguk-e osingeol hwan-yeonghabnida.]',
                        answers: {
                            a: '[Ilju-il jeongdo yeohaenghal saeng-gag ibnida.]',
                            b: '[Gam sa hab ni da.]',
                            c: "[Gwan gwang haleo wassseubnida.]",
                        },
                        correctAnswer: 'b',
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
                                    `<label><input type="radio" name='question${i}' value="${letter}">${questions[i].answers[letter]}</label>`
                                );
                            }

                            output.push(
                                `<div class="question"><p>${questions[i].question}</p></div>
                                <div class="answers">${answers.join('')}</div>`
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