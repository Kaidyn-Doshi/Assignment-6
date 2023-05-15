<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Calculate Pi</title>
    <style>
      body {
        font-family: 'Roboto', sans-serif;
        background-color: #f0f0f0;
      }

      .container {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 275px;
        background-color: #fff;
        padding: 24px;
        border-radius: 8px;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
      }

      h1 {
        font-weight: bold;
        font-size: 28px;
        margin-bottom: 24px;
        text-align: center;
      }

      form {
        margin-top: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      label {
        display: block;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 8px;
      }

      input {
        width: 100%;
        padding: 12px;
        border-radius: 4px;
        border: 1px solid #ccc;
        margin-bottom: 16px;
        font-size: 16px;
      }

      button {
        display: block;
        width: 100%;
        padding: 12px;
        border-radius: 4px;
        border: none;
        background-color: #4CAF50;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button:hover {
        background-color: #66BB6A;
      }

      p {
        font-size: 24px;
        font-weight: bold;
        margin-top: 16px;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Calculate Pi</h1>
      <form method="POST">
        <label for="iterations">Enter the number of iterations or type 'quit' to exit:</label>
        <input type="text" id="iterations" name="iterations">
        <button type="submit">Calculate</button>
      </form> 
      <?php
      function calculate_pi($iterations) {
        $pi = 0;
        for ($i = 0; $i < $iterations; $i++) {
          $pi += pow(-1, $i) * (4 / (2 * $i + 1));
        }
        return $pi;
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_input = $_POST['iterations'];
        if ($user_input == "quit") {
          echo "
					<p>Bye!</p>";
          exit();
        }
        $iterations = intval($user_input);
        if ($iterations <= 0) {
          echo "
					<p>Please enter a positive number.</p>";
        } else {
          echo "
					<p>The value of pi is " . calculate_pi($iterations) . "</p>";
        }
      }
    ?>
    </div>
  </body>
</html>
