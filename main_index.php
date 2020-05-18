<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game of Life</title>
    <link rel="stylesheet" href='sketch.css'>
</head>
<div>

	<p class="title center">Conways Game Of Life</p><br>
<div class="center">	
	


	<p>User: ht</p> &emsp;
	<p><a href="logout.php">Logout</a></p>
	


	
</div>
<div class="form">
        
    </div>

    <p class="center">Place points on the grid or select an option from the pre-created shapes and press the power button to start or stop the animation.</p>
        <div class="center">



            <div class="tooltip">
                <input class="buttons" type='image' id='btnstartstop' src="http://ps-resource-center.s3.amazonaws.com/material-design-icons/action/drawable-hdpi/ic_settings_power_grey600_48dp.png" onclick='start_stop();' />
                <span class="tooltiptext">Start/Stop</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='btnreset' src="http://ps-resource-center.s3.amazonaws.com/material-design-icons/navigation/drawable-hdpi/ic_refresh_grey600_48dp.png" onclick='resetgrid();' />
                <span class="tooltiptext">Reset</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='faster' src="http://ps-resource-center.s3.amazonaws.com/material-design-icons/av/drawable-hdpi/ic_fast_forward_grey600_48dp.png" onclick='faster();' />
                <span class="tooltiptext">Speed Up</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='btnonce' src="run_once.png" onclick='onetime();' />
                <span class="tooltiptext">Run once</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='btn23' src="run_23.png" onclick='two3times();' />
                <span class="tooltiptext">Run 23 times</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='blinker' src="blinker.PNG" onclick='blinker();' />
                <span class="tooltiptext">Blinker</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='still_life' src="stillform.PNG" onclick='still_life();' />
                <span class="tooltiptext">Block</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='beacon' src="beacon.PNG" onclick='beacon();' />
                <span class="tooltiptext">Beacon</span>
            </div>
            <div class="tooltip">
                <input class="buttons" type='image' id='glider' src="glider.PNG" onclick='glider();' />
                <span class="tooltiptext">Glider</span>
            </div>


            <div>Generation: <span id="gen"></span></div>

            <div>&nbsp Population: <span id="pop"></span></div>
        </div>

        <div class="center" id='grid'></div>



    </div>

<script src="sketch.js"></script>






</body>
</html>