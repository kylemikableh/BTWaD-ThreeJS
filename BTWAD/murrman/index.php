<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- The Murrman Family.">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of the Murrman Family">
    <meta property="og:image" content="./img/flagg_house.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Murrman | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://www.beforetherewasadam.com/murrman';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>The Murrman Family</h1>
            <div class="mt-2">
                <button id="murrman-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('murrman-house')">George Murrman's House</button>
                <button id="murrman-barn-button" type="button" class="btn btn-primary" onclick="showDivWithID('murrman-barn')">George Murrman's Barn</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="murrman-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">George Murrman's House</h1>
                        <p class="lead">George Murrman and his family settled in Boylston sometime between 1845 to 1865. The farm beyond the schoolhouse and near Clinton Road was at one point owned by George Murrman. Several of his children attended this school, including Joseph F. Murrman who became the Postmaster of Clinton. Mrs. Murrman was known in Boylston for being very friendly and loved by all the school children. The Murrmans were Catholic and attend mass at one of the churches in town.<sup>1</sup> The picture shows the Murrman’s house and barn before it was destroyed for the creation of the Wachusett Reservoir. </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zf68h" target="_blank"><img src="./img/murrman_house.jpg" class="img-fluid" alt="George Murrman House"></a>
                        <p><sup>1</sup>Bruce Filgate, <i>Boylston Historical Series</i>, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                    </div>
                </div>
            </div>
            <div id="murrman-barn" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">George Murrman's Barn</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zf723" target="_blank"><img src="./img/murrman_barn.jpg" class="img-fluid" alt="George Murrman's Barn" loading="lazy"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
