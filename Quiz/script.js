function diagnose() {
  let yesCount = 0;

 
  for (let i = 1; i <= 10; i++) {
      const answer = document.querySelector(`input[name=q${i}]:checked`);
      if (answer && answer.value === "yes") {
          yesCount++;
      }
  }

  let result = "";

  if (yesCount >= 7) {
      result = "Based on your answers, it seems you may be experiencing symptoms of anxiety. We suggest checking out our section on anxiety and reaching out to a healthcare professional for assistance and guidance through our website";
      updateLink("../Guide detail/index.html");
  } else if (yesCount >= 5) {
      result = "Based on your answers, it appears you might be experiencing symptoms of depression. We suggest checking out our section on depression and reaching out to a healthcare professional for assistance and guidance through our website";
      updateLink("../Guide detail/index1.html");
  } else if (yesCount >= 3) {
      result = "Based on your answers, it seems you may be displaying symptoms of ADHD. We suggest checking out our section on ADHD and reaching out to a healthcare professional for assistance and guidance through our website";
      updateLink("../Guide detail/index2.html");
  } else {
      result = "Based on your answers, it seems you are not displaying significant symptoms of anxiety, depression, or ADHD. However, if you're still concerned about your mental health, don't hesitate to seek advice from a healthcare professional from our homepage";
      updateLink("../index.html");
  }

 
  document.getElementById("result").textContent = result;
}

function updateLink(url) {
  const redirectLink = document.getElementById("redirectLink");
  redirectLink.style.display = "inline"; 
  redirectLink.href = url; 
}