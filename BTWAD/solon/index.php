<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- Solon Bailey">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of Solon Bailey">
    <meta property="og:image" content="./img/solon_house.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Solon Bailey | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://www.beforetherewasadam.com/solon';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>Solon Bailey</h1>
            <div class="mt-2">
                <button id="solon-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('solon-house')">Solon Bailey's House</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="solon-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Solon Bailey's House</h1>
                        <p class="lead">Solon Irving Bailey was a famous astronomer in the early 1900s. After graduating from Boston University, Bailey became a Professor at Harvard University in 1893. Bailey’s specialties were related to the Harvard Observatory and photometric work, a branch of the sciences that deals with the measurement of the intensity of light. Through his research, he was able to single handedly identify over 500 stars in the Omega Centauri cluster, more than what was previously known! He was also able to perform calculations to determine each star’s period and average magnitude.<sup>1</sup>
                        <br>
                        </p>
                        <hr class="my-4">
                        <p class="lead">
                            Another researcher followed in Bailey’s footsteps 25 years later, and with more advanced telescopes and technology was able to prove Bailey’s hand calculations were accurate to one-tenth of a second. Another one of Bailey’s notable works was his identification of a metallic asteroid, 504 Cora, located in the middle region of the asteroid belt.<sup>2</sup>
                        <br>
                        </p>
                        <hr class="my-4">
                        <p class="lead">
                            Bailey left his Boylston home to his son and only heir Irving Widmer Bailey, who had an extensive career in advancing botany in America and worked as an engineer in both of the World Wars.<sup>3</sup>
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zj54s" target="_blank"><img src="./img/solon_house.jpg" class="img-fluid" alt="Solon Bailey's House"></a>
                        <p><sup>1</sup><a href="http://www.nasonline.org/publications/biographical-memoirs/memoir-pdfs/bailey-solon-i.pdf" target="_blank">A.J. Cannon, <i>Biographical Memoir of Solon Irving Bailey 1854-1931, National Academy of Sciences of the United States of America Biographical Memoirs, XV.</i></a>
                        <p><sup>2</sup>Ibid
                        <p><sup>3</sup>Ibid
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
