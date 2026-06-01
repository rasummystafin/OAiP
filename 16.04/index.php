<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    "use strict";
    let x = 4;
    if (x>=0){
        console.log("число не отрицательное");
    } else {
        console.log("число отрицательное ");
    };


    x = 'restart';
    console.log(x.length);
    alert(x.length);


    console.log(x[x.length - 1]);


    x = 10;
    if (x % 2 === 0){
        console.log("ваше число чётное")
    } else {
        echo ("ваше число не чётное")
    };


    let s1 = "слово1", s2="слово2";
    if(s1[0] === s2[0]){
        console.log("первые буквы слов совпадают ")
    } else {
        console.log("первые буквы не совпадают ")
    };


    x = 123;
    let xx = `${x}`;
    console.log(xx[0]);


    console.log(xx[xx.length - 1]);


    let x1 = 224;
    let x11 = x1.toString();
    let xxx = x11[0]
    let xxx1 = x11[x11.length - 1];
    console.log(xxx1, xxx)
    let num = parseInt(xxx);
    let num1 = parseInt(xxx1);
    console.log(num + num1);


    x1 = 22412;
    x11 = x1.toString();
    console.log(x11.length);


    let ss1 = 2335678;
    let ss2 = 21548565;
    x11 = ss1.toString();
    let x22 = ss2.toString();
    xxx = x11[0];
    xxx1 = x22[0];
    if (xxx === xxx1){
        console.log('первые цифры совпадают');
    }
    </script>
</body>
</html>