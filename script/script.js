function fetchAdvice() {
    adviceText.textContent = "Loading advice...";
    adviceButton.disabled = true;
    
    fetch('https://api.adviceslip.com/advice')
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        adviceNumber.textContent = data.slip.id;
        adviceText.textContent = `"${data.slip.advice}"`;
        
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
        adviceButton.disabled = false;
      });
  }