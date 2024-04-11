function askQuestion() {
    var question = document.getElementById("question").value;
    if (question.trim() === "") {
        alert("Please enter a question.");
        return;
    }

    var answer = getDoctorAnswer(question);
    displayAnswer(question, answer);
    document.getElementById("question").value = "";
}

function getDoctorAnswer(question) {
    
    return "You should get atleast 6 hours of sleep daily. Staying up till late night is not healthy for you - Doctor K";
}

function displayAnswer(question, answer) {
    var answersDiv = document.getElementById("answers");
    var answerElement = document.createElement("div");
    answerElement.classList.add("answer");
    answerElement.innerHTML = "<strong>Question:</strong> " + question + "<br><strong>Answer:</strong> " + answer;
    answersDiv.appendChild(answerElement);
}
