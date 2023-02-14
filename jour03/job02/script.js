    function shuffle(myArray) {
        
        var j, x, i;
        for (i = myArray.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = myArray[i];
            myArray[i] = myArray[j];
            myArray[j] = x;
        }  
        $('.shuffle').hide();
    }

    img1 = '<img id="img1" src="Images/arc1.png"/>'
    img2 = '<img id="img2" src="Images/arc2.png"/>'
    img3 = '<img id="img3" src="Images/arc3.png"/>'
    img4 = '<img id="img4" src="Images/arc4.png"/>'
    img5 = '<img id="img5" src="Images/arc5.png"/>'
    img6 = '<img id="img6" src="Images/arc6.png"/>'

    newArray = [img1, img2, img3, img4, img5, img6]

    newArray = shuffle(Array)

    $('.rainbow').replaceWith(newArray)