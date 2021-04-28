<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- Persis Andrews">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of Persis Andrews">
    <meta property="og:image" content="./img/hastings_barn.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Persis Andrews | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://www.beforetherewasadam.com/persis';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>Persis Andrews</h1>
            <div class="mt-2">
                <button id="persis-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('persis-house')">Persis Andrews' House</button>
                <button id="persis-barn1-button" type="button" class="btn btn-primary" onclick="showDivWithID('persis-barn1')">Persis Andrews' First Barn</button>
                <button id="persis-barn2-button" type="button" class="btn btn-primary" onclick="showDivWithID('persis-barn2')">Persis Andrews' Second Barn</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="persis-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Persis Andrews' House</h1>
                        <p class="lead">Persis Andrews was a prominent landowner in the Nashua River Valley area. She owned land in Clinton as well as Boylston, including a 30 acre plot with her house and barns on it.<sup>1</sup> Like many people who were displaced by the reservoir, Persis Andrews’ family had lived in the area for multiple generations. Her father passed down the house that he had built to her; the same house in which she had resided since she was 6 years old.<sup>2</sup>
                            <br>Being forced to move and watch your family home be destroyed was an emotional blow to Persis as it was to
                            many others.
                        </p>
                        <blockquote class="blockquote">
                            <p class="mb-0">“It seems hard to me. I don't like to think about it, but I suppose I shall have to do the same as the rest. When I go down into the cellar and see the big stores in the wall, which father rolled into place with his own hands, it makes me feel sad to think that the house will be destroyed.”<sup>3</sup></p>
                            <footer class="blockquote-footer">Persis Andrews</footer>
                        </blockquote>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/41687s46h" target="_blank"><img src="./img/persis_house.jpg" class="img-fluid" alt="Persis House"></a>
                        <p><sup>1</sup>Carrie Crane, n.d. “The Taking of Sawyer’s Mills,” 3.
                        </p>
                        <p><sup>2</sup>Bruce Filgate, <i>Boylston Historical Series</i>, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                        <p><sup>3</sup>Ibid
                        </p>
                    </div>
                </div>
            </div>
            <div id="persis-barn1" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Persis Andrew's First Barn</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/st74cv99f" target="_blank"><img src="./img/persis_barn1.jpg" class="img-fluid" alt="Persis Barn"></a>
                    </div>
                </div>
            </div>
            <div id="persis-barn2" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Persis Andrew's Second Barn</h1>
                        <p class="lead">Persis Andrews lost all of her property when the reservoir was created in the late nineteenth century. In 1898, Persis received a settlement of $3,750 for all of her land and buildings which is equivalent to over $110,000 today.<sup>1</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/st74cv97w" target="_blank"><img src="./img/persis_barn2.jpg" class="img-fluid" alt="Persis Barn 2" loading="lazy"></a>
                        <p><sup>1</sup>Carrie Crane, n.d. “The Taking of Sawyer’s Mills,” 3.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
