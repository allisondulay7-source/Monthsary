<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For My Love ❤️ | Message Mosaic</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>❤️</text></svg>">
</head>
<body>
    <!-- Header with Love -->
    <header class="header">
        <div class="container">
            <h1 class="logo">For My <span class="pink heartbeat">Love</span> ❤️</h1>
            <nav class="nav">
                <a href="#home" class="active">Home</a>
                <a href="#messages">Our Memories</a>
                <a href="#secret" id="secretLink">Secret ❤️</a>
            </nav>
            <div class="love-counter">
                <i class="fas fa-heart pink"></i>
                <span id="loveCount">0</span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h2 class="hero-title">For the Most <span class="pink">Beautiful Girl</span></h2>
            <p class="hero-subtitle">Every moment with you is a precious memory in my heart</p>
            
            <!-- I Love You Button -->
            <div class="love-button-container">
                <button class="love-button" id="loveButton">
                    <i class="fas fa-heart"></i>
                    <span class="button-text">I Love You</span>
                    <span class="click-me">Click me!</span>
                </button>
                <div class="hearts-container" id="heartsContainer"></div>
            </div>
            
            <div class="dedication">
                <p class="dedication-text">"This is for you, my love. Every pixel, every word, every heartbeat."</p>
                <p class="dedication-from">- Forever Yours</p>
            </div>
        </div>
        <div class="hero-scroll">
            <i class="fas fa-chevron-down bounce"></i>
        </div>
    </section>

    <!-- Love Messages Grid -->
    <main class="container">
        <section class="messages-section" id="messages">
            <h2 class="section-title">Our Love <span class="pink">Mosaic</span></h2>
            <p class="section-subtitle">Click on each memory to reveal a special message just for you</p>
            
            <div class="masonry-grid">
                <!-- Message 1 -->
                <div class="message-card love-card">
                    <div class="card-image">
                        <img src="images/b.jpg" alt="Cherry Blossoms">
                        <div class="image-overlay">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">When We First Met</h3>
                        <p class="card-text">"The moment I saw you, my world changed colors..."</p>
                        <div class="card-footer">
                            <span class="card-date">Our Beginning</span>
                            <span class="card-author"><i class="fas fa-heart pink"></i> Always</span>
                        </div>
                    </div>
                    <div class="card-hover">
                        <i class="fas fa-heart"></i>
                        Read My Heart
                    </div>
                    <div class="secret-message">
                        <h3><i class="fas fa-heart pink"></i> My First Sight of You</h3>
                        <p>"I remember everything about that day - your smile, your laugh, the way your eyes sparkled. From that moment, I knew my heart had found its home."</p>
                        <button class="secret-love-btn" data-loves="3">
                            <i class="fas fa-heart"></i> Send Love Back
                        </button>
                    </div>
                </div>

                <!-- Message 2 -->
                <div class="message-card love-card">
                    <div class="card-image">
                        <img src="images/c.jpg" alt="Pink Flowers">
                        <div class="image-overlay">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Your Beautiful Smile</h3>
                        <p class="card-text">"Your smile is my favorite thing in the world..."</p>
                        <div class="card-footer">
                            <span class="card-date">Every Day</span>
                            <span class="card-author"><i class="fas fa-star pink"></i> Forever</span>
                        </div>
                    </div>
                    <div class="card-hover">
                        <i class="fas fa-heart"></i>
                        Read My Heart
                    </div>
                    <div class="secret-message">
                        <h3><i class="fas fa-star pink"></i> That Magical Smile</h3>
                        <p>"When you smile, the whole world stops. It's like sunshine breaking through clouds, warming everything it touches. I fall in love with you all over again each time I see it."</p>
                        <button class="secret-love-btn" data-loves="5">
                            <i class="fas fa-heart"></i> This Made Me Smile
                        </button>
                    </div>
                </div>

                <!-- Message 3 -->
                <div class="message-card love-card">
                    <div class="card-image">
                        <img src="images/d.jpg" alt="Pink Sunset">
                        <div class="image-overlay">
                            <i class="fas fa-sun"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Our First Sunset</h3>
                        <p class="card-text">"Watching the sunset with you felt like forever..."</p>
                        <div class="card-footer">
                            <span class="card-date">Golden Memory</span>
                            <span class="card-author"><i class="fas fa-sun pink"></i> Eternal</span>
                        </div>
                    </div>
                    <div class="card-hover">
                        <i class="fas fa-heart"></i>
                        Read My Heart
                    </div>
                    <div class="secret-message">
                        <h3><i class="fas fa-sun pink"></i> Sunset Promise</h3>
                        <p>"As the sun dipped below the horizon, I made a silent promise to myself - to love you through every sunrise and sunset, through all the days of my life."</p>
                        <button class="secret-love-btn" data-loves="7">
                            <i class="fas fa-heart"></i> My Promise Too
                        </button>
                    </div>
                </div>

                <!-- Message 4 -->
                <div class="message-card love-card">
                    <div class="card-image">
                        <img src="images/e.jpg" alt="Coffee Date">
                        <div class="image-overlay">
                            <i class="fas fa-coffee"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Our Coffee Dates</h3>
                        <p class="card-text">"Simple moments with you are my greatest treasures..."</p>
                        <div class="card-footer">
                            <span class="card-date">Sweet Memories</span>
                            <span class="card-author"><i class="fas fa-coffee pink"></i> Always</span>
                        </div>
                    </div>
                    <div class="card-hover">
                        <i class="fas fa-heart"></i>
                        Read My Heart
                    </div>
                    <div class="secret-message">
                        <h3><i class="fas fa-coffee pink"></i> Our Little Ritual</h3>
                        <p>"I don't remember what coffee we ordered, but I remember how you laughed. I don't recall the cafe's name, but I remember how your hand felt in mine. It's never about the coffee - it's about you."</p>
                        <button class="secret-love-btn" data-loves="4">
                            <i class="fas fa-heart"></i> Can't Wait For Next Time
                        </button>
                    </div>
                </div>

                <!-- Message 5 -->
                <div class="message-card love-card">
                    <div class="card-image">
                        <img src="images/a.jpg" alt="Adventure">
                        <div class="image-overlay">
                            <i class="fas fa-mountain"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Our Adventures</h3>
                        <p class="card-text">"With you, every path leads to happiness..."</p>
                        <div class="card-footer">
                            <span class="card-date">Journey Together</span>
                            <span class="card-author"><i class="fas fa-mountain pink"></i> Forever</span>
                        </div>
                    </div>
                    <div class="card-hover">
                        <i class="fas fa-heart"></i>
                        Read My Heart
                    </div>
                    <div class="secret-message">
                        <h3><i class="fas fa-mountain pink"></i> The Best Adventure</h3>
                        <p>"Life with you is the greatest adventure I could ever ask for. Whether we're climbing mountains or just walking hand in hand, every moment is perfect because I'm with you."</p>
                        <button class="secret-love-btn" data-loves="6">
                            <i class="fas fa-heart"></i> Adventure With You Forever
                        </button>
                    </div>
                </div>

                <!-- Message 6 -->
                <div class="message-card love-card">
                    <div class="card-image">
                        <img src="images/baby.jpg" alt="Ocean">
                        <div class="image-overlay">
                            <i class="fas fa-water"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Endless Love</h3>
                        <p class="card-text">"My love for you is as deep as the ocean..."</p>
                        <div class="card-footer">
                            <span class="card-date">Infinite Love</span>
                            <span class="card-author"><i class="fas fa-infinity pink"></i> Eternal</span>
                        </div>
                    </div>
                    <div class="card-hover">
                        <i class="fas fa-heart"></i>
                        Read My Heart
                    </div>
                    <div class="secret-message">
                        <h3><i class="fas fa-infinity pink"></i> My Forever Promise</h3>
                        <p>"Like the ocean is deep and the sky is wide, my love for you knows no bounds. Today, tomorrow, and all the days after - my heart beats only for you."</p>
                        <button class="secret-love-btn" data-loves="10">
                            <i class="fas fa-heart"></i> I Love You Infinity
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Secret Surprise Section -->
        <section class="secret-section" id="secret">
            <div class="secret-container">
                <div class="secret-content">
                    <h2 class="secret-title">
                        <i class="fas fa-lock-open pink"></i>
                        Our Secret Place
                    </h2>
                    <p class="secret-subtitle">A special message that grows with our love</p>
                    
                    <div class="love-letter">
                        <div class="letter-content">
                            <h3>My Dearest Love,</h3>
                            <p>Happy monthsary love mahal na mahal kita thank you andyan ka palagi para saken.</p>
                            <p>ingatan mo sarili mo love ko dito lang ako palagi para sayo.</p>
                            <p>No matter where life takes us, know this: I will always love you, today and every day that follows.</p>
                            <div class="letter-signature">
                                <p></p>
                                <p class="signature"></p>
                                <div class="love-seal">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="interactive-love">
                        <h3>Add Your Love Here</h3>
                        <div class="love-input">
                            <textarea id="loveNote" placeholder="Write your love note here..."></textarea>
                            <button id="addLoveNote" class="love-note-btn">
                                <i class="fas fa-heart"></i> Seal With Love
                            </button>
                        </div>
                        <div class="love-notes-display" id="loveNotesDisplay">
                            <!-- Love notes will appear here -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
            
            <div class="final-message">
                <p class="eternal-love">
                    <i class="fas fa-heart pink"></i>
                    I will love you until the last star in the galaxy burns out
                    <i class="fas fa-heart pink"></i>
                </p>
            </div>
        </div>
    </footer>

    <!-- Love Confetti Modal -->
    <div class="love-modal" id="loveModal">
        <div class="love-modal-content">
            <div class="love-modal-heart">
                <i class="fas fa-heart"></i>
            </div>
            <h2 class="love-modal-title" id="loveModalTitle">I Love You!</h2>
            <p class="love-modal-text" id="loveModalText">You just earned <span class="pink" id="lovePoints">0</span> love points!</p>
            <div class="love-messages" id="loveMessages">
                <!-- Love messages will appear here -->
            </div>
            <button class="close-love-modal" id="closeLoveModal">
                <i class="fas fa-heart"></i> Continue Loving
            </button>
        </div>
    </div>

    <!-- Floating Hearts -->
    <div id="floatingHearts"></div>

    <script src="script.js"></script>
</body>
</html>