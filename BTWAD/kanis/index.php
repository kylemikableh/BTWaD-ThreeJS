<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- Herman Kanis">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of Herman Kanis">
    <meta property="og:image" content="./img/kanis_house.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Herman Kanis | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://www.beforetherewasadam.com/kanis';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>Herman Kanis</h1>
            <div class="mt-2">
                <button id="kanis-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('kanis-house')">Herman Kanis' House</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="kanis-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Herman Kanis' House</h1>
                        <p class="lead">Herman Kanis was born in Germany in 1848. Later in life, Herman married Christiana Whilhemina who was born in Germany in 1853. In wedlock, Herman and Christiana had two kids Otto and Frank.<sup>1</sup>
                            <br>Herman purchased his house from Luther Hastings, Luther lived there with his sister Mary Ann. However, neither of them ever married and the property was put up for sale. The estate was known as the Timothy Fay Hastings Farm when Herman purchased the land. While Luther lived on the property, a child tragically drowned in the well.<sup>2</sup> Christiana died in 1905 and Herman took his own life in 1913.<sup>3</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/st74cv896" target="_blank"><img src="./img/kanis_house.jpg" class="img-fluid" alt="Solon Bailey's House"></a>
                        <p><sup>1</sup><a href="https://www.findagrave.com/memorial/218974170/herman-frank-kanis" target="_blank">“Herman Frank Kanis,” Find A Grave.</a>
                        <p><sup>2</sup>Bruce Filgate, <i>Boylston Historical Series</i>, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        <p><sup>3</sup><a href="https://search.ancestrylibrary.com/cgi-bin/sse.dll?indiv=1&dbid=2101&h=8640080&tid=&pid=&queryId=ee233117ae4e8b241661d89bc7002e2d&usePUB=true&_phsrc=KmQ10&_phstart=successSource" target="_blank">“Herman Frank Kanis,” Ancestry Library.</a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
