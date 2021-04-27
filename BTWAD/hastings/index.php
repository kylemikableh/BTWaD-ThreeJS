<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam ">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models">
    <meta property="og:image" content="./img/exampleImg.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>BTWaD IQP</title>
</head>
<body>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>The Hastings Family</h1>
            <div class="mt-2">
                <button id="henry-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('henry-house')">Henry C. Hastings’ House</button>
                <button id="henry-barn-button" type="button" class="btn btn-primary" onclick="showDivWithID('henry-barn')">Henry C. Hastings’ Barn</button>
                <button id="calvin-paint-button" type="button" class="btn btn-primary" onclick="showDivWithID('calvin-paint')">Calvin H. Hastings’ Paintshop</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Water</button>
            </div>
            <div id="henry-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Henry C. Hastings’ House</h1>
                        <p class="lead">Henry was born in 1820, and married Polly Fairbanks in 1843. He is the son of Jonathan Jr. and Polly Hastings. They had three children: Marathon Ann, Waldo Henry, and Calvin Henry Hastings.
                            <br>Henry inherited his farm, his property and farm from his father Jonathan Hastings. He had two kids Martha and Calvin, Martha would marry Henry L. Reed. Both attended the local school in their younger years.
                        </p>
                        <img src="./img/hastings_house.jpg" class="img-fluid" alt="Hastings House">
                    </div>
                </div>
            </div>
            <div id="henry-barn" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Henry C. Hastings’ Barn</h1>
                        <img src="./img/hastings_barn.jpg" class="img-fluid" alt="Hastings Barn">
                    </div>
                </div>
            </div>
            <div id="calvin-paint" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Calvin H. Hastings’ Paintshop</h1>
                        <p class="lead">Calvin was born in 1854 and married Cora Isabelle Carter in 1879.
                            <br>Calvin, the son of Henry Hastings, established a wagon and carriage painting shop across from his father’s property. There was a young boy named Bradbury Foss who lived with Calvin, and he went to the local school and helped him with the business. When Calvin’s property was finally taken, he moved to Clinton and reopened and rebuilt his business.
                        </p>
                        <img src="./img/hastings_paint.jpg" class="img-fluid" alt="Hastings Paintshop">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
