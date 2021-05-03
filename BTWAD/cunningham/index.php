<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- Thomas K. Cunningham.">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of the Ball Family">
    <meta property="og:image" content="./img/hastings_barn.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Thomas K. Cunningham | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://beforetherewasadam.com/cunningham';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>Thomas K. Cunningham</h1>
            <div class="mt-2">
                <button id="cunning-b1-button" type="button" class="btn btn-primary active" onclick="showDivWithID('cunning-b1')">Thomas K. Cunningham #1</button>
                <button id="cunning-b2-button" type="button" class="btn btn-primary" onclick="showDivWithID('cunning-b2')">Thomas K. Cunningham #2</button>
                <button id="cunning-b3-button" type="button" class="btn btn-primary" onclick="showDivWithID('cunning-b3')">Thomas K. Cunningham #3</button>
                <button id="cunning-b4-button" type="button" class="btn btn-primary" onclick="showDivWithID('cunning-b4')">Thomas K. Cunningham #4</button>
                <button id="cunning-b5-button" type="button" class="btn btn-primary" onclick="showDivWithID('cunning-b5')">Thomas K. Cunningham #5</button>
                <button id="cunning-b6-button" type="button" class="btn btn-primary" onclick="showDivWithID('cunning-b6')">Thomas K. Cunningham #6</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="cunning-b1">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Thomas K. Cunningham #1</h1>
                        <p class="lead">A valley through which the Mine Swamp Brook flowed was located behind land that Thomas K. Cunningham owned. This valley also contained one or two houses. During the early 19th century, locals believed this area to be haunted and extremely unlucky. Many events contributed towards the formation of this belief.<sup>1</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/kd17cs870" target="_blank"><img src="./img/cunning_b1.jpg" class="img-fluid" alt="Cunningham b1"></a>
                        <p><sup>1</sup>Bruce Filgate, Boylston Historical Series, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                    </div>
                </div>
            </div>
            <div id="cunning-b2" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Thomas K. Cunningham #2</h1>
                        <p class="lead">One such event begins with two young women, Mary and Charlotte Sawyer, who were visiting friends in Boylston when a violent storm struck. The storm turned the brook into a great deluge and when the girls traveling on one horse attempted to cross the stream, their horse slipped. They both fell off the horse, into the rushing water and drowned.<sup>2</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/m326m3598" target="_blank"><img src="./img/cunning_b2.jpg" class="img-fluid" alt="Cunningham b2"></a>
                        <p><sup>1</sup>Ibid
                        </p>
                    </div>
                </div>
            </div>
            <div id="cunning-b3" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Thomas K. Cunningham #3</h1>
                        <p class="lead">Another time, a stranger suffering from smallpox was found on the side of the road on Burditt Hill in Clinton. He was taken to a house at Mine Swamp Brook where he passed away and was buried.
                            <br>
                            Due to the haunting, children avoided the area at all costs after dark. Adults who went into the house swore that they could hear the hoofbeats of a galloping horse that seemed to stop at the door. Yet, when they opened the door there was no horse and no sound except the wind. Explore the Mine Swamp Brook at your own risk; it may still be haunted to this day.<sup>3</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/kd17cs870" target="_blank"><img src="./img/cunning_b1.jpg" class="img-fluid" alt="Cunningham b3"></a>
                        <p><sup>1</sup>Ibid
                        </p>
                    </div>
                </div>
            </div>
            <div id="cunning-b4" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Thomas K. Cunningham #4</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/kd17cs91k" target="_blank"><img src="./img/cunning_b4.jpg" class="img-fluid" alt="Cunningham b4"></a>
                        </p>
                    </div>
                </div>
            </div>
            <div id="cunning-b5" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Thomas K. Cunningham #5</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/kd17cs870" target="_blank"><img src="./img/cunning_b1.jpg" class="img-fluid" alt="Cunningham b5"></a>
                    </div>
                </div>
            </div>
            <div id="cunning-b6" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Thomas K. Cunningham #6</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/kd17cs870" target="_blank"><img src="./img/cunning_b1.jpg" class="img-fluid" alt="Cunningham b6"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
