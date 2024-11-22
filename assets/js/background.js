// Snowfall animation
function createSnowflakes() {
    const snow = document.getElementById('snow');
    const numberOfSnowflakes = 50;

    function createSnowflake() {
        const snowflake = document.createElement('div');
        snowflake.className = 'snowflake';
        
        // Random properties for natural movement
        const size = Math.random() * 4 + 2; // 2-6px
        const startingLeft = Math.random() * 100; // 0-100%
        const startingOpacity = Math.random() * 0.6 + 0.4; // 0.4-1
        const duration = Math.random() * 20 + 10; // 10-30s
        const delay = Math.random() * 10; // 0-10s

        // Set snowflake styles
        Object.assign(snowflake.style, {
            width: `${size}px`,
            height: `${size}px`,
            left: `${startingLeft}%`,
            opacity: startingOpacity,
            animation: `fall ${duration}s linear ${delay}s infinite`
        });

        return snowflake;
    }

    // Add falling animation
    const styleSheet = document.createElement('style');
    styleSheet.textContent = `
        @keyframes fall {
            0% {
                transform: translateY(-5vh) translateX(0);
            }
            100% {
                transform: translateY(105vh) translateX(20px);
            }
        }
    `;
    document.head.appendChild(styleSheet);

    // Create and add snowflakes
    for (let i = 0; i < numberOfSnowflakes; i++) {
        snow.appendChild(createSnowflake());
    }
}

// Initialize snowfall when the page loads
document.addEventListener('DOMContentLoaded', createSnowflakes);