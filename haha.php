<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>
    <title>Document</title>

    <style>
        body {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 900;
            background-image: url(hama.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .navbar {
            background-size: cover;
            padding-bottom: 1rem;
        }

        h1 {
            margin: 0;
        }


        form {
            margin-top: 2rem;
        }

        .container {
            display: flex;
            justify-content: center; 
            margin-top: 3rem;
        }
        

        .box {
            width: 30rem;
            border-radius: 2rem;
            margin-left:10rem;
            background-image: url(hama.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25); 
             font-family: "Source Code Pro", monospace;
        }

        .box2 {
            background-color: grey;
            width: 28rem;
            border-radius: 2rem;
            margin: 0 11rem;
            background-image: url(hama.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
            text-align: 2rem;  
            padding-top: 2rem;
        }

        .code {
            text-align: left;
            margin: 3rem;
            padding-left: 3rem;
            font-family: "Source Code Pro", monospace;
            font-size: auto;
            font-weight: 400;
        }

        pre{
            background-color: transparent;
            padding: 10px;
        }


        .copy-button {
            background-color: transparent;
            border: 0;
            display: flex;
            align-items: center;
            margin-left: 5px;
            
        }

        .copy .icon {
            margin-right: 5px;
        }
        
        input{
            margin: 10px;
            border-radius: 5px;
            background-color: transparent;
            border-color: black;
        }

        select{
            border-radius: 5px;
            background-color: transparent;
            border-color: black
        }


    </style>
</head>
<body>
    <div class="navbar">
    <h1>LOOPING SEGITIGA ANTI RIBET 😎</h1>
    </div>
    <div class="container">
    <div class="box">
    <form action="" method = "post">
        <div >
            <input type="text" name="tinggi_segitiga"  placeholder="Input Jumlah Looping" required>
            <br>
            <form method="POST" action="">
            <label for="bahasa"></label>
            <select name="bahasa" id="bahasa" >
                <option value="pilih Bahasa" disabled selected>Pilih Bahasa</option> 
                <option value="java">java</option>
                <option value="C++">C++</option>
                <option value="PHP">PHP</option>
                <option value="javascript">Javascript</option>
                <option value="Pyton">Pyton</option>
            </select> 
            </form> <br>
            <input type="submit" name="submit">
        </div>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $tinggi_segitiga = $_POST['tinggi_segitiga'];

        echo "<div class = 'hasil'>";
        echo "<h2> hasil segitiga</h2>";
        echo "<span> (tinggi segitiga : $tinggi_segitiga)</span><br>";

        for ($i = 1; $i <= $tinggi_segitiga; $i++) {
            for ($j = 1; $j <= $i; $j++){
             echo "*";   
            }
            echo "<br>";
        }
        echo"</div>";

}
    
    ?>
    </div>
      <div class="box2">
        SOURCE CODE<br>
    <div class="code">
    <?php

        $code = "";

     if(isset($_POST['submit'])) {
        $tinggi_segitiga = $_POST['tinggi_segitiga']; 

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $bahasa = $_POST['bahasa'];
        echo "<h3>source code untuk $bahasa </h3>";

        switch ($bahasa) {
        case 'java':
        $code = 'public class HelloWorld {' . "\n" .
                '    public static void main(String[] args) {' . "\n" .
                '        int n = 5; // Tinggi segitiga' . "\n" .
                '        for (int i = 1; i <= n; i++) {' . "\n" .
                '            for (int j = 1; j <= i; j++) {' . "\n" .
                '                System.out.print("* ");' . "\n" .
                '            }' . "\n" .
                '            System.out.println();' . "\n" .
                '        }' . "\n" .
                '    }' . "\n" .
                '}' . "\n";
        break;
        case 'C++':
        $code = '#include <iostream>' . "\n" .
                'using namespace std;' . "\n" .
                '' . "\n" .
                'int main() {' . "\n" .
                '    int n = 5; // Tinggi segitiga' . "\n" .
                '    for (int i = 1; i <= n; i++) {' . "\n" .
                '        for (int j = 1; j <= i; j++) {' . "\n" .
                '            cout << "* ";' . "\n" .
                '        }' . "\n" .
                '        cout << endl;' . "\n" .
                '    }' . "\n" .
                '    return 0;' . "\n" .
                '}' . "\n";
        break;
        case 'PHP':
        $code = '&lt;?php' . "\n" .
                '$n = 5; // Tinggi segitiga' . "\n" .
                'for ($i = 1; $i <= $n; $i++) {' . "\n" .
                '    for ($j = 1; $j <= $i; $j++) {' . "\n" .
                '        echo "* ";' . "\n" .
                '    }' . "\n" .
                '    echo "&lt;br&gt;";' . "\n" .
                '}' . "\n" .
                '?&gt;' . "\n";
        break;
        case 'javascript':
        $code = 'function segitiga1(panjang) {' . "\n" .
                '    let hasil = \'\';' . "\n" .
                '    for (let i = 0; i < panjang; i++) {' . "\n" .
                '        for (let j = 0; j <= i; j++) {' . "\n" .
                '            hasil += \'* \';' . "\n" .
                '        }' . "\n" .
                '        hasil += \'\\n\';' . "\n" .
                '    }' . "\n" .
                '    return hasil;' . "\n" .
                '}' . "\n" .
                'console.log(segitiga1(10));' . "\n";
        break;
        case 'Pyton':
        $code = 'n = 5  # Tinggi segitiga' . "\n" .
                'for i in range(1, n + 1):' . "\n" .
                '    for j in range(i):' . "\n" .
                '        print("* ", end="")' . "\n" .
                '    print("")' . "\n";
        break;
        break;
        default:
        $code = "eweh";
        break;
        }
    }
}
        
    ?>
    <!-- logic memgcopy code , full chatGPT-->
     
    <div class="copy">
        <pre id="codeBlock"><?php echo htmlspecialchars($code); ?></pre> <?php if (!empty($code)) { ?>
                <button class="copy-button" onclick="copyCode()"><span class="icon"><i data-feather="copy"></i></span>Copy Code</button>
                     <?php } ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
    if (typeof feather !== 'undefined') {
        feather.replace(); // Inisialisasi feather icon setelah DOM dimuat
    }
});
    function copyCode() {
    var codeBlock = document.getElementById('codeBlock');
    var range = document.createRange();
    range.selectNode(codeBlock);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    try {
        document.execCommand('copy');
        alert('COPY CODE ✅');
    } catch (err) {
        console.error('COPY CODE ❎', err);
    }
    window.getSelection().removeAllRanges(); }
    </script>

    </div>
    </div>
    </div>
    </div>

    <script>
      
    </script>

</body>
</html>