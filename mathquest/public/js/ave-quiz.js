function submitAnswer() {
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault();
    
        var finalScore = 0;
        const correctAnswers = ["I", "P", "H", "C", "G"];
        
        var numberOne = document.getElementById('item-one');
        var numberTwo = document.getElementById('item-two');
        var numberThree = document.getElementById('item-two');
        var numberFour = document.getElementById('item-two');
        var numberFive = document.getElementById('item-two');

        if (numberOne == correctAnswers[0]) {
            finalScore += 1;
        };
        if (numberTwo == correctAnswers[1]) {
            finalScore += 1;
        };
        if (numberThree == correctAnswers[2]) {
            finalScore += 1;
        };
        if (numberFour == correctAnswers[3]) {
            finalScore += 1;
        };
        if (numberFive == correctAnswers[4]) {
            finalScore += 1;
        };

        const formData = new FormData(e.target);
        const userInput = {};
        for (const [key, value] of formData) {
            userInput[key] = parseInt(value, 10);
        }

        let score = 0;
        for (const key in answers) {
            if (userInput[key] === answers[key]) {
                score++;
            }
        }

        alert(`You scored ${score} out of 5!`);
    });
}