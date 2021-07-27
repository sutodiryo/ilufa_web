<html>

<head>
    <title>iLuFA 168 - Games</title>
    <link rel="stylesheet" href="<?php echo GUEST ?>javascript-winwheel-2.7.0/examples/wheel_of_fortune/main.css" type="text/css" />
    <script type="text/javascript" src="<?php echo GUEST ?>javascript-winwheel-2.7.0/Winwheel.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
</head>

<body>
    <div align="center">
        <h1>Kene ki ngko diisi opo ngono lho rek!</h1>
        <!-- <p>Here is an example of a code-drawn Wheel of Fortune looking wheel which spins to a stop with the prize won alerted to the user.</p> -->
        <!-- <br />
        <p>
            With some additional coding it could be made so that the prize won is added to a total after each spin rather than
            just alerting the prize to make a proper wheel of fortune like game.
        </p>
        <br />
        <p>Choose a power setting then press the Spin button. You will be alerted to the prize won when the spinning stops.</p> -->
        <br />
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <div class="power_controls">
                        <br />
                        <br />
                        <table class="power" cellpadding="10" cellspacing="0">
                            <tr>
                                <th align="center">Bantere sepiro?</th>
                            </tr>
                            <tr>
                                <td width="78" align="center" id="pw3" onClick="powerSelected(3);">Bhuwanter</td>
                            </tr>
                            <tr>
                                <td align="center" id="pw2" onClick="powerSelected(2);">Biasa</td>
                            </tr>
                            <tr>
                                <td align="center" id="pw1" onClick="powerSelected(1);">Alon</td>
                            </tr>
                        </table>
                        <br />
                        <img id="spin_button" src="<?php echo GUEST ?>javascript-winwheel-2.7.0/examples/wheel_of_fortune/spin_off.jpg" alt="Spin" onClick="startSpin();" />
                        <br /><br />
                        &nbsp;&nbsp;<a href="#" onClick="resetWheel(); return false;">Main Meneh</a><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(reset)
                    </div>
                </td>
                <td width="438" height="582" class="the_wheel" align="center" valign="center">
                    <canvas id="canvas" width="434" height="434">
                        <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                    </canvas>
                </td>
            </tr>
        </table>
        <script>
            // Create new wheel object specifying the parameters at creation time.
            var theWheel = new Winwheel({
                'outerRadius': 212, // Set outer radius so wheel fits inside the background.
                'innerRadius': 75, // Make wheel hollow so segments don't go all way to center.
                'textFontSize': 24, // Set default font size for the segments.
                'textOrientation': 'vertical', // Make text vertial so goes down from the outside of wheel.
                'textAlignment': 'outer', // Align text to outside of wheel.
                'numSegments': 24, // Specify number of segments.
                'segments': // Define segments including colour and text.
                    [ // font size and test colour overridden on backrupt segments.
                        {
                            'fillStyle': '#ee1c24',
                            'text': '300'
                        },
                        {
                            'fillStyle': '#3cb878',
                            'text': '450'
                        },
                        {
                            'fillStyle': '#f6989d',
                            'text': '600'
                        },
                        {
                            'fillStyle': '#00aef0',
                            'text': '750'
                        },
                        {
                            'fillStyle': '#f26522',
                            'text': '500'
                        },
                        {
                            'fillStyle': '#000000',
                            'text': 'BANKRUPT',
                            'textFontSize': 16,
                            'textFillStyle': '#ffffff'
                        },
                        {
                            'fillStyle': '#e70697',
                            'text': '3000'
                        },
                        {
                            'fillStyle': '#fff200',
                            'text': '600'
                        },
                        {
                            'fillStyle': '#f6989d',
                            'text': '700'
                        },
                        {
                            'fillStyle': '#ee1c24',
                            'text': '350'
                        },
                        {
                            'fillStyle': '#3cb878',
                            'text': '500'
                        },
                        {
                            'fillStyle': '#f26522',
                            'text': '800'
                        },
                        {
                            'fillStyle': '#a186be',
                            'text': '300'
                        },
                        {
                            'fillStyle': '#fff200',
                            'text': '400'
                        },
                        {
                            'fillStyle': '#00aef0',
                            'text': '650'
                        },
                        {
                            'fillStyle': '#ee1c24',
                            'text': '1000'
                        },
                        {
                            'fillStyle': '#f6989d',
                            'text': '500'
                        },
                        {
                            'fillStyle': '#f26522',
                            'text': '400'
                        },
                        {
                            'fillStyle': '#3cb878',
                            'text': '900'
                        },
                        {
                            'fillStyle': '#000000',
                            'text': 'BANKRUPT',
                            'textFontSize': 16,
                            'textFillStyle': '#ffffff'
                        },
                        {
                            'fillStyle': '#a186be',
                            'text': '600'
                        },
                        {
                            'fillStyle': '#fff200',
                            'text': '700'
                        },
                        {
                            'fillStyle': '#00aef0',
                            'text': '800'
                        },
                        {
                            'fillStyle': '#ffffff',
                            'text': 'LOOSE TURN',
                            'textFontSize': 12
                        }
                    ],
                'animation': // Specify the animation to use.
                {
                    'type': 'spinToStop',
                    'duration': 8, // Duration in seconds.
                    'spins': 3, // Default number of complete spins.
                    'callbackFinished': alertPrize
                }
            });

            // Vars used by the code in this page to do power controls.
            var wheelPower = 0;
            var wheelSpinning = false;

            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
            function powerSelected(powerLevel) {
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false) {
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    document.getElementById('pw1').className = "";
                    document.getElementById('pw2').className = "";
                    document.getElementById('pw3').className = "";

                    // Now light up all cells below-and-including the one selected by changing the class.
                    if (powerLevel >= 1) {
                        document.getElementById('pw1').className = "pw1";
                    }

                    if (powerLevel >= 2) {
                        document.getElementById('pw2').className = "pw2";
                    }

                    if (powerLevel >= 3) {
                        document.getElementById('pw3').className = "pw3";
                    }

                    // Set wheelPower var used when spin button is clicked.
                    wheelPower = powerLevel;

                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                    document.getElementById('spin_button').src = "spin_on.jpg";
                    document.getElementById('spin_button').className = "clickable";
                }
            }

            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin() {
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false) {
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.
                    if (wheelPower == 1) {
                        theWheel.animation.spins = 3;
                    } else if (wheelPower == 2) {
                        theWheel.animation.spins = 6;
                    } else if (wheelPower == 3) {
                        theWheel.animation.spins = 9;
                    }

                    // Disable the spin button so can't click again while wheel is spinning.
                    document.getElementById('spin_button').src = "<?php echo GUEST ?>javascript-winwheel-2.7.0/examples/wheel_of_fortune/spin_off.jpg";
                    document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();

                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }

            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel() {
                theWheel.stopAnimation(false); // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0; // Re-set the wheel angle to 0 degrees.
                theWheel.draw(); // Call draw to render changes to the wheel.

                document.getElementById('pw1').className = ""; // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";

                wheelSpinning = false; // Reset to false to power buttons and spin can be clicked again.
            }

            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // -------------------------------------------------------
            function alertPrize(indicatedSegment) {
                // Just alert to the user what happened.
                // In a real project probably want to do something more interesting than this with the result.
                if (indicatedSegment.text == 'LOOSE TURN') {
                    alert('Sorry but you loose a turn.');
                } else if (indicatedSegment.text == 'BANKRUPT') {
                    alert('Oh no, you have gone BANKRUPT!');
                } else {
                    alert("You have won " + indicatedSegment.text);
                }
            }
        </script>
</body>

</html>