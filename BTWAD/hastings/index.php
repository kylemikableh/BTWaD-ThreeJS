<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- The Hastings Family.">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of the Hastings Family">
    <meta property="og:image" content="./img/hastings_barn.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Hastings | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://beforetherewasadam.com';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>The Hastings Family</h1>
            <div class="mt-2">
                <button id="henry-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('henry-house')">Henry C. Hastings’ House</button>
                <button id="henry-barn-button" type="button" class="btn btn-primary" onclick="showDivWithID('henry-barn')">Henry C. Hastings’ Barn</button>
                <button id="calvin-paint-button" type="button" class="btn btn-primary" onclick="showDivWithID('calvin-paint')">Calvin H. Hastings’ Paintshop</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="henry-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Henry C. Hastings’ House</h1>
                        <p class="lead">Henry was born in 1820, and married Polly Fairbanks in 1843. He is the son of Jonathan Jr. and Polly Hastings. They had three children: Marathon Ann, Waldo Henry, and Calvin Henry Hastings.<sup>1</sup>
                            <br>Henry inherited his farm, his property and farm from his father Jonathan Hastings. He had two kids Martha and Calvin, Martha would marry Henry L. Reed. Both attended the local school in their younger years.<sup>2</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/kd17cs977" target="_blank"><img src="./img/hastings_house.jpg" class="img-fluid" alt="Hastings House"></a>
                        <p><sup>1</sup>Lydia Nelson Hastings Buckminster, The Hastings Memorial : a genealogical account of the descendants of Thomas Hastings of Watertown, Mass. from 1634 to 1864 (Boston: Samuel G. Drake, 1866).
                        </p>
                        <p><sup>2</sup>Bruce Filgate, Boylston Historical Series, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                    </div>
                </div>
            </div>
            <div id="henry-barn" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Henry C. Hastings’ Barn</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/st74cv79z" target="_blank"><img src="./img/hastings_barn.jpg" class="img-fluid" alt="Hastings Barn" loading="lazy"></a>
                    </div>
                </div>
            </div>
            <div id="calvin-paint" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Calvin H. Hastings’ Paintshop</h1>
                        <p class="lead">Calvin was born in 1854 and married Cora Isabelle Carter in 1879.<sup>3</sup>
                            <br>Calvin, the son of Henry Hastings, established a wagon and carriage painting shop across from his father’s property. There was a young boy named Bradbury Foss who lived with Calvin, and he went to the local school and helped him with the business. When Calvin’s property was finally taken, he moved to Clinton and reopened and rebuilt his business.<sup>4</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/st74cv83j" target="_blank"><img src="./img/hastings_paint.jpg" class="img-fluid" alt="Hastings Paintshop" loading="lazy"></a>
                        <p><sup>3</sup><a href="https://www.findagrave.com/memorial/62088850/calvin-henry-hastings" target="_blank">“Calvin Henry Hastings,” Find A Grave.</a>
                        </p>
                        <p><sup>4</sup>Bruce Filgate, Boylston Historical Series, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
