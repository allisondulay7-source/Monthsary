document.addEventListener('DOMContentLoaded', function() {
    // Love counter
    let loveCount = 0;
    let totalLoves = 0;
    const loveCountElement = document.getElementById('loveCount');
    const totalLovesElement = document.getElementById('totalLoves');
    const heartsContainer = document.getElementById('heartsContainer');
    const loveModal = document.getElementById('loveModal');
    const loveModalTitle = document.getElementById('loveModalTitle');
    const loveModalText = document.getElementById('loveModalText');
    const lovePointsElement = document.getElementById('lovePoints');
    const loveMessages = document.getElementById('loveMessages');
    const closeLoveModal = document.getElementById('closeLoveModal');
    const secretLink = document.getElementById('secretLink');
    const floatingHearts = document.getElementById('floatingHearts');
    const addLoveNoteBtn = document.getElementById('addLoveNote');
    const loveNoteInput = document.getElementById('loveNote');
    const loveNotesDisplay = document.getElementById('loveNotesDisplay');
    
    // Love messages array
    const loveMessagesArray = [
        "My love for you grows every day!",
        "You make my heart skip a beat!",
        "Every moment with you is precious!",
        "I fall in love with you more each day!",
        "You're the best thing that ever happened to me!",
        "My heart belongs to you forever!",
        "I'm so lucky to have you in my life!",
        "You're my everything!",
        "I love you more than words can say!",
        "You're my dream come true!"
    ];
    
    // Initialize love notes from localStorage
    let loveNotes = JSON.parse(localStorage.getItem('loveNotes')) || [];
    displayLoveNotes();
    
    // Main "I Love You" button
    const loveButton = document.getElementById('loveButton');
    loveButton.addEventListener('click', function(e) {
        e.stopPropagation();
        createHearts(15);
        
        // Increase love count
        loveCount += 5;
        totalLoves += 5;
        updateLoveCounters();
        
        // Show love message
        const randomMessage = loveMessagesArray[Math.floor(Math.random() * loveMessagesArray.length)];
        showLoveModal("I Love You!", randomMessage, 5);
        
        // Animate button
        this.style.animation = 'none';
        setTimeout(() => {
            this.style.animation = 'pulse 1s infinite';
        }, 10);
    });
    
    // Secret link
    secretLink.addEventListener('click', function(e) {
        e.preventDefault();
        createHearts(20);
        showLoveModal("Our Secret!", "This is our special place, just for us. I love you endlessly.", 10);
        
        // Scroll to secret section
        const secretSection = document.getElementById('secret');
        secretSection.scrollIntoView({ behavior: 'smooth' });
    });
    
    // Love cards click events
    const loveCards = document.querySelectorAll('.love-card');
    loveCards.forEach(card => {
        card.addEventListener('click', function() {
            // Toggle active class
            this.classList.toggle('active');
            
            if (this.classList.contains('active')) {
                createHearts(8);
                loveCount += 3;
                totalLoves += 3;
                updateLoveCounters();
            }
        });
        
        // Love buttons inside cards
        const loveBtn = this.querySelector('.secret-love-btn');
        if (loveBtn) {
            loveBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                const loves = parseInt(this.getAttribute('data-loves'));
                loveCount += loves;
                totalLoves += loves;
                updateLoveCounters();
                createHearts(loves);
                
                showLoveModal("Love Received!", `You sent ${loves} hearts of love back to me!`, loves);
            });
        }
    });
    
    // Add love note
    addLoveNoteBtn.addEventListener('click', function() {
        const note = loveNoteInput.value.trim();
        if (note) {
            addLoveNote(note);
            loveNoteInput.value = '';
            createHearts(5);
            loveCount += 2;
            totalLoves += 2;
            updateLoveCounters();
        }
    });
    
    // Close love modal
    closeLoveModal.addEventListener('click', function() {
        loveModal.style.display = 'none';
        createHearts(10);
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target === loveModal) {
            loveModal.style.display = 'none';
        }
    });
    
    // Smooth scrolling for navigation
    document.querySelectorAll('nav a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId.startsWith('#')) {
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
    
    // Helper functions
    function updateLoveCounters() {
        loveCountElement.textContent = loveCount;
        totalLovesElement.textContent = totalLoves;
        
        // Animate the counter
        loveCountElement.style.transform = 'scale(1.5)';
        totalLovesElement.style.transform = 'scale(1.5)';
        setTimeout(() => {
            loveCountElement.style.transform = 'scale(1)';
            totalLovesElement.style.transform = 'scale(1)';
        }, 300);
    }
    
    function createHearts(count) {
        for (let i = 0; i < count; i++) {
            setTimeout(() => {
                const heart = document.createElement('div');
                heart.className = 'floating-heart';
                heart.innerHTML = '<i class="fas fa-heart"></i>';
                heart.style.left = Math.random() * 100 + 'vw';
                heart.style.fontSize = (Math.random() * 20 + 15) + 'px';
                heart.style.color = getRandomPinkColor();
                
                floatingHearts.appendChild(heart);
                
                // Remove heart after animation
                setTimeout(() => {
                    heart.remove();
                }, 3000);
            }, i * 100);
        }
    }
    
    function getRandomPinkColor() {
        const pinks = ['#ff6b9d', '#ff4d8d', '#ff85b3', '#ffc2d6', '#ff3377'];
        return pinks[Math.floor(Math.random() * pinks.length)];
    }
    
    function showLoveModal(title, message, points) {
        loveModalTitle.textContent = title;
        loveMessages.textContent = message;
        lovePointsElement.textContent = points;
        loveModal.style.display = 'flex';
        
        // Add random love messages
        const extraMessages = document.createElement('div');
        extraMessages.innerHTML = `<p>"${getRandomLoveMessage()}"</p>`;
        loveMessages.appendChild(extraMessages);
    }
    
    function getRandomLoveMessage() {
        const messages = [
            "You're my forever and always",
            "My heart beats for you",
            "Every day with you is a blessing",
            "I'm yours, now and forever",
            "You complete me",
            "My love for you is infinite",
            "You're the reason I smile",
            "I cherish every moment with you",
            "You're my happy place",
            "Forever isn't long enough with you"
        ];
        return messages[Math.floor(Math.random() * messages.length)];
    }
    
    function addLoveNote(note) {
        const timestamp = new Date().toLocaleString();
        loveNotes.unshift({ note, timestamp });
        
        // Save to localStorage
        localStorage.setItem('loveNotes', JSON.stringify(loveNotes));
        
        // Display
        displayLoveNotes();
        
        // Show confirmation
        showLoveModal("Note Saved!", "Your love note has been added to our collection!", 2);
    }
    
    function displayLoveNotes() {
        loveNotesDisplay.innerHTML = '';
        loveNotes.slice(0, 5).forEach(item => {
            const noteElement = document.createElement('div');
            noteElement.className = 'love-note-item';
            noteElement.innerHTML = `
                <p>${item.note}</p>
                <small>${item.timestamp}</small>
            `;
            loveNotesDisplay.appendChild(noteElement);
        });
    }
    
    // Create initial floating hearts
    setInterval(() => {
        if (Math.random() > 0.7) {
            createHearts(1);
        }
    }, 3000);
    
    // Add keyboard shortcut for love
    document.addEventListener('keydown', function(e) {
        if (e.key === 'L' || e.key === 'l') {
            createHearts(10);
            loveCount += 3;
            totalLoves += 3;
            updateLoveCounters();
        }
    });
    
    // Easter egg: triple click anywhere for extra love
    let clickCount = 0;
    let clickTimer;
    document.addEventListener('click', function() {
        clickCount++;
        clearTimeout(clickTimer);
        clickTimer = setTimeout(() => {
            clickCount = 0;
        }, 500);
        
        if (clickCount === 3) {
            createHearts(25);
            loveCount += 15;
            totalLoves += 15;
            updateLoveCounters();
            showLoveModal("Triple Love!", "You found the secret! I love you times infinity!", 15);
            clickCount = 0;
        }
    });
});