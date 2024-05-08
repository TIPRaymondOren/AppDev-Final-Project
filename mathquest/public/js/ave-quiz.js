const { FieldValue } = require("firebase/firestore");

function computeScore() {
    console.log("Success in accessing this JS File");
    var finalScore = 0;
    const correctAnswers = ["I", "P", "H", "C", "G"];
    var name = "mamamo";
    var difficulty = "average";

    var numberOne = document.getElementById('item-one').value;
    var numberTwo = document.getElementById('item-two').value;
    var numberThree = document.getElementById('item-three').value;
    var numberFour = document.getElementById('item-four').value;
    var numberFive = document.getElementById('item-five').value;

    if (numberOne === correctAnswers[0]) {
        finalScore += 1;
    };
    if (numberTwo === correctAnswers[1]) {
        finalScore += 1;
    };
    if (numberThree === correctAnswers[2]) {
        finalScore += 1;
    };
    if (numberFour === correctAnswers[3]) {
        finalScore += 1;
    };
    if (numberFive === correctAnswers[4]) {
        finalScore += 1;
    };

    console.log("Fetching Data");

    // Send the score to the server
    fetch('/takeInformation', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ name: name, score: finalScore, difficulty: difficulty })
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            sendDataToDB(data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}

function sendDataToDB(results) {

    fetch('/submitScore', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({name: results.name, score: results.score, difficulty: results.difficulty})
    })
    .then(response => response.json())
    .then(data => {
        alert("Data is being processed")})
    .catch(error => console.error('Error:', error));
}