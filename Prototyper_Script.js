/**
 * Created by John He on 11/12/2015.
 */



// CANVAS SIZING AREA - BELOW!!

/**
 * Sets the canvas size to: small.
 */
function sCanvas() {
    // Gets the canvas id from the html file and stores it in the variable 'canvas' for editing.
    var canvas = document.getElementById("myCanvas");
    // Create the canvas with these attributes.
    canvas.width = 320;
    canvas.height = 426;
}

/**
 * Sets the canvas size to: medium.
 */
function mCanvas() {
    // Gets the canvas id from the html file and stores it in the variable 'canvas' for editing.
    var canvas = document.getElementById("myCanvas");
    // Create the canvas with these attributes.
    canvas.width = 320;
    canvas.height = 470;
}

/**
 * Sets the canvas size to: large.
 */
function lCanvas() {
    // Gets the canvas id from the html file and stores it in the variable 'canvas' for editing.
    var canvas = document.getElementById("myCanvas");
    // Create the canvas with these attributes.
    canvas.width = 480;
    canvas.height = 640;
}

// CANVAS SIZING AREA - ABOVE!!



/**
 * Draws a square onto the canvas when it is called.
 * This can be further improved to be a textbox or a button.
 */
function drawSquare() {
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    //context.fillStyle = blue;
    context.fillRect(200, 20, 150, 100);
    // Parameters explanation for the rectangle: (X-Position, Y-Position, width, height)
}


/**
 * Draws a circle onto the canvas when it is called.
 * This can be useful for something.
 */
function drawCircle() {
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    context.beginPath();
    context.arc(100,75,50,0,2*Math.PI);
    context.stroke();

}

/**
 * Messing around, trying to get a function that'll prompt the user to input some text.
 * The text will then be added to the canvas *
 */
function drawText() {

    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    var input = prompt("Enter text below", "Here...");

    context.font = "20px Arial";
    context.fillText(input, 500, 50)
}

    function createButton() {

        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        var x = document.createElement("BUTTON");
        var t = document.createTextNode("Click me");
        x.appendChild(t);

    }

        context.appendChild(button, 500, 50);

    }


