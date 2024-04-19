<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding-top: 50px;
        }
        input[type="text"], select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: blueviolet;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: blue;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>String Manipulation Tool</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="string">Enter a string:</label>
            <input type="text" id="string" name="string" value="<?php echo isset($_POST['string']) ? htmlspecialchars($_POST['string']) : ''; ?>" required>

            <label for="operation">Select operation:</label>
            <select id="operation" name="operation">
                <option value="length" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'length' ? 'selected' : ''; ?>>Calculate Length of String</option>
                <option value="lowercase" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'lowercase' ? 'selected' : ''; ?>>Convert to Lowercase</option>
                <option value="uppercase" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'uppercase' ? 'selected' : ''; ?>>Convert to Uppercase</option>
                <option value="whitespace" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'whitespace' ? 'selected' : ''; ?>>Calculate White Spaces</option>
                <option value="wordlinechar" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'wordlinechar' ? 'selected' : ''; ?>>Calculate Words, Lines, and Characters</option>
                <option value="findword" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'findword' ? 'selected' : ''; ?>>Find Position of Specific Word</option>
                <option value="replaceword" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'replaceword' ? 'selected' : ''; ?>>Replace Word</option>
                <option value="vowels" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'vowels' ? 'selected' : ''; ?>>Calculate Occurrence of Vowels</option>
            </select>

            <?php if(isset($_POST['operation']) && $_POST['operation'] == 'findword'): ?>
            <label for="specific_word">Specific Word:</label>
            <input type="text" id="specific_word" name="specific_word" value="<?php echo isset($_POST['specific_word']) ? htmlspecialchars($_POST['specific_word']) : ''; ?>">
            <?php endif; ?>

            <div class="replace_fields <?php echo isset($_POST['operation']) && $_POST['operation'] == 'replaceword' ? '' : 'hidden'; ?>">
                <label for="old_word">Old Word:</label>
                <input type="text" id="old_word" name="replace[old]" >

                <label for="new_word">New Word:</label>
                <input type="text" id="new_word" name="replace[new]" >
            </div>

            <input type="submit" value="Perform Operation">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["string"]) && !empty($_POST["string"])) {
                $string = $_POST["string"];

                switch ($_POST["operation"]) {
                    case "length":
                        echo "<p>Length of the string: " . strlen($string) . "</p>";
                        break;
                    case "lowercase":
                        echo "<p>String in lowercase: " . strtolower($string) . "</p>";
                        break;
                    case "uppercase":
                        echo "<p>String in uppercase: " . strtoupper($string) . "</p>";
                        break;
                    case "whitespace":
                        echo "<p>Number of white spaces: " . substr_count($string, ' ') . "</p>";
                        break;
                    case "wordlinechar":
                        $words = str_word_count($string);
                        $lines = substr_count($string, "\n") + 1;
                        $characters = strlen($string);
                        echo "<p>Number of words: $words</p>";
                        echo "<p>Number of lines: $lines</p>";
                        echo "<p>Number of characters: $characters</p>";
                        break;
                    case "findword":
                        if(isset($_POST['specific_word']) && !empty($_POST['specific_word'])){
                            $word = $_POST['specific_word']; 
                            $position = strpos($string, $word);
                            if ($position !== false) {
                                echo "<p>Position of the word '$word' in the string: $position</p>";
                            } else {
                                echo "<p>The word '$word' was not found in the string.</p>";
                            }
                        }
                        break;
                    case "replaceword":
                        if(isset($_POST["replace"])){
                            $old_word = $_POST["replace"]["old"]; 
                            $new_word = $_POST["replace"]["new"]; 
                            $new_string = str_replace($old_word, $new_word, $string);
                            echo "<p>String after replacing '$old_word' with '$new_word': $new_string</p>";
                        } else {
                            echo "<p style='color: red;'>Please provide both old and new words to replace.</p>";
                        }
                        break;
                    case "vowels":
                        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
                        $vowel_count = 0;
                        foreach ($vowels as $vowel) {
                            $vowel_count += substr_count($string, $vowel);
                        }
                        echo "<p>Number of vowels in the string: $vowel_count</p>";
                        break;
                    default:
                        echo "<p style='color: red;'>Invalid operation selected.</p>";
                        break;
                }
            } else {
                echo "<p style='color: red;'>Please enter a valid string.</p>";
            }
        }
        ?>
    </div>
    <script>
        var specificWordValue = "<?php echo isset($_POST['specific_word']) ? htmlspecialchars($_POST['specific_word']) : ''; ?>";

        document.getElementById('operation').addEventListener('change', function() {
            var replaceFields = document.querySelector('.replace_fields');
            if (this.value === 'replaceword') {
                replaceFields.classList.remove('hidden');
            } else {
                replaceFields.classList.add('hidden');
            }
            var specificWordField = document.querySelector('#specific_word');
            if (this.value === 'findword') {
                specificWordField.classList.remove('hidden');
                specificWordField.value = specificWordValue; // Set specific word value
            } else {
                specificWordField.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
