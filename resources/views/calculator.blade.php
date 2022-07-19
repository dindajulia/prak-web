<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculator.css">
    <title>Calculator</title>

    <style>
        .calculator-cal {
    padding: 5px;

    background-color: #ecf0f3;
    display: inline-grid;
    grid-template-columns: repeat(4, 70px);
    box-shadow: inset 5px 5px 12px white, 5px 5px 12px rgba(0, 0, 0, 0.16);
    margin: 15ch;
    margin-left: 40vmax;
}

.calculator-cal input {
    height: 50px;
    width: 230px;
    grid-column: span 4;
    background-color: #ecf0f3;
    box-shadow: inset 5px 5px 12px white, -5px -5px 12px rgba(0, 0, 0, 0.16);
    border: none;
   
    color: rgb(70, 70, 70);
    font-size: 50px;
    text-align: end;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 30px;
    padding: 20px;
}

.calculator-cal button {
    background-color: #ecf0f3;
    height: 50px;
    width: 50px;
    border: none;
    box-shadow: -5px -5px 12px white, 5px 5px 12px rgba(0, 0, 0, 0.16);
    margin: 10px;
    font-size: 16px;
    font-weight: bold;
    color: brown;
}

.calculator-cal button:hover {
    color: gray;
}

.hasil {
    width: 115px;
    box-shadow: -5px -5px 12px white, 5px 5px 12px rgba(0, 0, 0, 0.16);
    background-color: #ecf0f3;
}
    </style>
</head>

<body>
    <div class="Container" >
        <div class="calculator">
            <div class="calculator-cal">
            <input type="text" placeholder="0" id="output-screen">

            <button 
            onclick="bersihkan()">Cl</button>
            <button 
            onclick="del()">Del</button>

            <button 
            onclick="display('%')">%</button>
            <button 
            onclick="display('/')">/</button>
            <button 
            onclick="display('7')">7</button>
            <button 
            onclick="display('8')">8</button>
            <button 
            onclick="display('9')">9</button>

            <button 
            onclick="display('*')">*</button>
            <button 
            onclick="display('4')">4</button>
            <button 
            onclick="display('5')">5</button>
            <button onclick="display('6')">6</button>

            <button 
            onclick="display('-')">-</button>
            <button 
            onclick="display('1')">1</button>
            <button 
            onclick="display('2')">2</button>
            <button 
            onclick="display('3')">3</button>

            <button 
            onclick="display('+')">+</button>
            <button 
            onclick="display('.')">.</button>
            <button 
            onclick="display('0')">0</button>
            <button 
            onclick="display('00')">00</button>

            <button 
            onclick="calculator()" class="hasil">=</button>
            </div>       
        </div>

        <script>
            let outputscreen = document.getElementById("output-screen");
            function display(num){
                outputscreen.value += num;
            }
            function calculator(){
                try{
                    outputscreen.value = eval(outputscreen.value);
                }
                catch(err){
                    alert("invalid")
                }
            }
            function bersihkan (){
                outputscreen.value = "";
            }
            function del (){
                outputscreen.value = outputscreen.value.slice(0,-1);
            }
        </script>

        <script src="calculator.js"></script>
</body>
</html>