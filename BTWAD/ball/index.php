<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam -- The Ball Family.">
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

    <title>Ball Family | BTWAD</title>
</head>
<body>
    <div style="position: fixed;left: 10px;top: 10px;">
        <button type="button" class="btn btn-danger" onclick="location.href='https://beforetherewasadam.com/balls';">Back To Page</button>
    </div>
    <div style="position: fixed;left: 10px;bottom: 10px;color: azure;line-height: 0.3em;">
        <p>Click and Drag to move around</p>
        <p>Use scroll wheel/pinch to zoom</p>
    </div>
    <div class="main-container" id="main-container">
        <div id="content" class="container" style="overflow:auto;height: 100vh;">
            <h1>The Ball Family</h1>
            <div class="mt-2">
                <button id="george-ball-house-button" type="button" class="btn btn-primary active" onclick="showDivWithID('george-ball-house')">George W. Ball's House</button>
                <button id="george-ball-barn-button" type="button" class="btn btn-primary" onclick="showDivWithID('george-ball-barn')">George W. Ball's Barn</button>
                <button id="james-ball-barn-button" type="button" class="btn btn-primary" onclick="showDivWithID('james-ball-barn')">James E. Ball's Barn</button>
                <button id="lydia-ball-barn-button" type="button" class="btn btn-primary" onclick="showDivWithID('lydia-ball-barn')">Lydia Ball's House</button>
                <button type="button" class="btn btn-warning" onclick="toggleWater()">Toggle Town Flood</button>
            </div>
            <div id="george-ball-house">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">George W. Ball's House</h1>
                        <p class="lead">George W. Ball modernized buildings to make them more attractive. He took charge of one of the large boarding houses of Lancaster Mills. Later on, he bought a farm in Lancaster which is where he eventually died. He married Mary McReel, who previously lived at Sawyer’s Mills. They had three daughters: Abbie S., Lizzie, and Georgianna. All of their daughters attended the school in Boylston. Abbie S. married George Perry, a machinist, and she died during the great ice storm of December 1921 in Worcester. Lizzie married Edward Bartlett from Clinton. Georgianna married Thurston Gould from Leominster, a comb maker, and she died in 1921.<sup>1</sup> The picture to the right shows both George’s house and barn, which were demolished for the Wachusett Reservoir.
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zg487" target="_blank"><img src="./img/george_ball_house.jpg" class="img-fluid" alt="George Ball House"></a>
                        <p><sup>1</sup>Bruce Filgate, Boylston Historical Series, no. 1-14 (Boylston: The Boylston Historical Society, 2012).
                        </p>
                    </div>
                </div>
            </div>
            <div id="george-ball-barn" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">George W. Ball's Barn</h1>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/m326m387f" target="_blank"><img src="./img/george_ball_barn.jpg" class="img-fluid" alt="George Ball Barn" loading="lazy"></a>
                    </div>
                </div>
            </div>
            <div id="james-ball-barn" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">James E. Ball's Barn</h1>
                        <p class="lead">James E. Ball, son of Jonah Ball, was born in Providence, RI, and grew up in Dedham, MA. James lived in Boylston from when he was 14 until he moved to Holden after marrying Abigail Howe, the daughter of Silas Howe Jr. of Sterling, and worked at a butcher and marketman. They attended the Unitarian Church and had four children: . Nelson, Hattie, Abbie, and Mary.<sup>1</sup> <br>
                            Later in life he briefly moved to Vermont before returning to Massachusetts for work. James spent 5 years in Clinton working at a tripe fishing business. For nine years after that he lived on a farm in Sterling. In 1865, he returned to Boylston after being appointed as an assessor and a road commissioner. Pictured on the right is a barn that was on James’ property at the time of the Wachusett Reservoir creation before it was demolished.
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/hq37vw11f" target="_blank"><img src="./img/james_ball_barn.jpg" class="img-fluid" alt="James Ball's Barn" loading="lazy"></a>
                        <p><sup>1</sup>Ellery Bicknell Crane, Historic Homes and Institutions and Genealogical and Personal Memoirs of Worcester County, Massachusetts: With a History of Worcester Society of Antiquity, no. 2 (New York: Lewis Publishing Company, 1907).
                        </p>
                    </div>
                </div>
            </div>
            <div id="lydia-ball-barn" style="display: none;">
                <div class="jumbotron jumbotron-fluid mt-2" style="padding: 1em">
                    <div class="container">
                        <h1 class="display-5">Lydia Ball's House</h1>
                        <p class="lead">Aaron Ball was the son of Amaziah Ball and Lucy Moore, born June 1st 1805 in Boylston. Aaron was a painter. He married Lydia Harrington, the daughter of Captain Artenas Harrington and granddaughter of Deacon Levi Moore, born October 25 1806 in Boylston. Lydia spent nearly all of her 91 years of life in the immediate neighborhood of Shaw place, where she was born. Aaron died suddenly on November 1, 1881 of apoplexy when he was 76 years old. They had three children: Lucretia and Ellen as well as a son who died when he was young. Ellen married Charles H. Hastings. Lydia was cared for in her old age by her granddaughter Nellie Hastings Lord, who was married to Clephane L. Lord who was the Station Agent at South Clinton for a time.<sup>1</sup> Lydia was left Aaron’s house in Boylston after his death, which can be seen before its destruction on the next slide.
                        </p>
                        <a href="https://ark.digitalcommonwealth.org/ark:/50959/5h73zg52t" target="_blank"><img src="./img/lydia_ball_barn.jpg" class="img-fluid" alt="James Ball's Barn" loading="lazy"></a>
                        <p><sup>1</sup>Ellery Bicknell Crane, <i>Historic Homes and Institutions and Genealogical and Personal Memoirs of Worcester County, Massachusetts: With a History of Worcester Society of Antiquity.</i>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
