<html>
<head>
    <meta charset="utf-8">
    <title>Tronax - Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calc.css">
    <link rel="shortcut icon" href="./img/logo.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
<!-- HEADER ---------------------------------------->

<?php
    require 'header.php';
    ?>

   <!-- HOME ---------------------------------------->

    <section id="imprint" class="container" class="vertical-center">
        <div id="calc">
        <form>
        <textarea id="eingabe" readonly></textarea>
        </br>
        <button type="button" onclick="seven()" class="numberbutton" id="7">7</button>
        <button type="button" onclick="eight()" class="numberbutton" id="8">8</button>
        <button type="button" onclick="nine()" class="numberbutton" id="9">9</button> 
        <button type="button" onclick="back()" class="numberbutton" id="backspace">«</button> 
        </br>
        <button type="button" onclick="four()" class="numberbutton" id="4">4</button>
        <button type="button" onclick="five()" class="numberbutton" id="5">5</button>
        <button type="button" onclick="six()" class="numberbutton" id="6">6</button> 
        <button type="button" onclick="CE()" class="numberbutton" id="ce">CE</button> 
        </br>
        <button type="button" onclick="one()" class="numberbutton" id="1">1</button>
        <button type="button" onclick="two()" class="numberbutton" id="2">2</button>
        <button type="button" onclick="three()" class="numberbutton" id="3">3</button>
        <button type="button" onclick="plusb()" class="numberbutton" id="plus">+</button> 
        </br>
        <button type="button" onclick="zero()" class="numberbutton" id="0">0</button>
        <button type="button" onclick="pib()" class="numberbutton" id="pi">Pi</button>
        <button type="button" onclick="coma()" class="numberbutton" id="coma">,</button>
        <button type="button" onclick="equalsb()" class="numberbutton" id="equals">=</button>

        </form>
        </div>
    </section>

    <script>
        function one() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "1";
        }
        function two() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "2";
        }
        function three() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "3";
        }
        function four() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "4";
        }
        function five() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "5";
        }
        function six() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "6";   
        }
        function seven() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "7";
        }
        function eight() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "8";
        }
        function nine() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "9";
        }
        function zero() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "0";
        }
        function CE() {
            document.getElementById("eingabe").value = "";
        }
        function back() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1.substring(0, t1.length - 1);
        }
        function equalsb() {
            var t1 = document.getElementById("eingabe").value  
            var t2 = t1.replace("𝜋", "Math.PI"); 
            document.getElementById("eingabe").value = eval(t2);
        }
        function plusb() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "+";
        }
        function pib() {
            var t1 = document.getElementById("eingabe").value
            document.getElementById("eingabe").value = t1 + "𝜋";
        }
    </script>

    <!-- FOOTER ---------------------------------------->

    <?php
    require 'footer.php';
    ?>
</body>

</html>