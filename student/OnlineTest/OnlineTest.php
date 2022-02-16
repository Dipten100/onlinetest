<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="OnlineTest.css">
  <title>OnlineTest</title>
</head>
<body onload="countdown();">
  <div class="quiz-container" id="quiz">
    <div id="DT">
      <div>
        Time Left ::
        <input id="minutes" type="text" style="width: 10px;border: none; font-size: 16px; font-weight: bold; color: black;"><font size="5"> :</font>
        <input id="seconds" type="text" style="width: 20px;border: none; font-size: 16px;font-weight: bold; color: black;">
    </div>
    </div>
    <div class="quiz-header">
      <h2 id="question">Question Text</h2>
      <ul>
        <li>
          <input type="radio" name="answer" id="a" class="answer">
          <label for="a" id="a_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="b" class="answer">
          <label for="b" id="b_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="c" class="answer">
          <label for="c" id="c_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="d" class="answer">
          <label for="d" id="d_text">Answer</label>
        </li>
      </ul>
    </div>
    <div class="btn">
      <button id="submit">Submit</button>
      <button id="next">Next</button>
    </div>
  </div>
  <script src="OnlineTest.js"></script>
  
</body>
</html>