document.addEventListener('DOMContentLoaded', function() {
    const adviceText = document.getElementById('advice');
    const adviceNumber = document.getElementById('advice-number');
    const adviceButton = document.getElementById('getAdviceBtn');

    // Function to fetch new advice
    function fetchAdvice() {
        // Show loading state
        adviceText.textContent = "Loading advice...";
        adviceButton.disabled = true;
        
        fetch('getadvice.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                adviceNumber.textContent = data.id;
                adviceText.textContent = `"${data.advice}"`;
                
                // Add a fade-in effect
                adviceText.classList.add('fade-in');
                setTimeout(() => {
                    adviceText.classList.remove('fade-in');
                }, 1000);
            })
            .catch(error => {
                console.error('Error fetching advice:', error);
                adviceText.textContent = "Could not load advice. Please try again.";
            })
            .finally(() => {
                // Re-enable the button
                adviceButton.disabled = false;
            });
    }

    // Event listener for the button
    adviceButton.addEventListener('click', function() {
        fetchAdvice();
    });
    
    // Optional: Load advice when page loads if no advice is displayed
    if (adviceText.textContent.trim() === "" || 
        adviceText.textContent.trim() === "Click the button below to get some advice") {
        fetchAdvice();
    }
});