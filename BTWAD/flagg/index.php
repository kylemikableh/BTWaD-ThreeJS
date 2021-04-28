<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- The Flagg Family.">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models of the Flagg Family">
    <meta property="og:image" content="./img/hastings_barn.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
    <script type="module" src="viewer.js"></script>

    <title>Flaggs | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://www.beforetherewasadam.com/flaggs';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>The Flagg Family</h1>
            <div class="mt-2">
                <button id="george-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('george-house')">George Flagg's House</button>
                <button id="george-icehouse-button" type="button" class="btn btn-primary" onclick="showDivWithID('george-icehouse')">George Flagg's Icehouse</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="george-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">George Flagg's House</h1>
                        <p class="lead">George A. Flagg is the son of Levi Flagg and was born on June 14, 1855, in Boylston Massachusetts. George went to public school in Boylston and around the age as his father at the time, Levi, started working in the field, George did too. He worked on the family farm that Levi owned for three years after his schooling ended. Like Levi, he bought his own farm in Boylston and was involved in the cattle exchange business. George was also involved in a slaughterhouse, cider mill, and wood cutting businesses.<sup>1</sup> Moreover, George had invested heavily in local electric railways companies.<sup>2</sup>  Above is an image of George’s old house he owned but did not live in when the Wachusett Reservoir was formed.
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zk22q" target="_blank"><img src="./img/flagg_house.jpg" class="img-fluid" alt="George Flagg House"></a>
                        <p><sup>1</sup>Bruce Filgate, <i>Boylston Historical Series</i>, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                        <p><sup>2</sup>Ellery Bicknell Crane, <i>Historic Homes and Institutions and Genealogical and Personal Memoirs of Worcester County, Massachusetts: With a History of Worcester Society of Antiquity.</i>
                        </p>
                    </div>
                </div>
            </div>
            <div id="george-icehouse" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">George Flagg's Icehouse</h1>
                        <p class="lead">George was a Republican like his father and held multiple positions in the town such as collector of taxes, assessor, and town treasurer in Boylston.<sup>1</sup>  George also owned much land in the town of Boylston that was not flooded. For example, he owned another house on Main Street that had an apple orchard. George was also one of the main developers in the Morningdale section of Boylston. In 1898, he purchased a significant amount of land in the section of town and built 22 buildings on Flagg Street and Mill Road. This section was not flooded during the construction of the reservoir. The pond near George’s property is referred to as Flaggs Pond as the land around it had been owned by Stephen Flagg and his son Captain Stephen Flagg.<sup>2</sup>
                            <br>George married Mary Bruseau in 1888 and would have nine children. Who were Mabel, Levi, Frank, Caroline, Gertrude, Augustus, J. Walter, George, and Henry.13  On the right is another building of George's that was taken, it is an icehouse.
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zk027" target="_blank"><img src="./img/flagg_icehouse.jpg" class="img-fluid" alt="George Flagg Icehouse" loading="lazy"></a>
                        <p><sup>1</sup>Bruce Filgate, <i>Boylston Historical Series</i>, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                        <p><sup>2</sup>Ellery Bicknell Crane, <i>Historic Homes and Institutions and Genealogical and Personal Memoirs of Worcester County, Massachusetts: With a History of Worcester Society of Antiquity.</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
