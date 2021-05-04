# BTWaD-ThreeJS
Before There Was a Dam Project 3D model interactive viewer with information on how it works and how to add your own models to the layout.

# Resources
## Three.js
The [Three.js project](https://threejs.org/) is a library written in JavaScript that allows developers to use 3D models in a webbrowser with many customizations. Detailed examples and documentation are located here and is the backbone of this project

## SketchUp and Obj files
This project used [SketchUp](https://www.sketchup.com/) to texture the models. The Three.js part of this project uses .obj files instead of the standard .skp which comes from the SketchUp program. Thus, an [online converter](https://www.sketchup.com/) can be used to convert files from SketchUp into the required .obj file

## HTML Basics
This project uses [PHP](https://www.php.net/) files instead of [HTML](https://html.spec.whatwg.org/) files, but does not use any PHP functions. Thus, for the front-end User Interface, simple HTML knowledge and [CSS](https://www.w3.org/TR/CSS/#css) knowledge for styling is required to edit and make new pages, but these can be found on [W3Schools](https://www.w3schools.com/html/html_basic.asp).

## JavaScript Basics
[JavaScript](https://www.javascript.com/) is a scripting language for web browsers that allows for many interactive features in the web browser. Three.js is written in JavaScript and thus must be used in JavaScript. JavaScript basics can also be found on [W3Schools](https://www.w3schools.com/html/html_basic.asp).


# Overview
This project used very similar code in each folder because by design you can copy the directory of one page (e.g. ball) and change the names, titles, facts, models, and images. 
* The folders contain an **index.php** which contains all the HTML for that page. This will need to be changes with details below.
* The folder also contains an **index.css** file. This is for styling, but does not need to be changed. 
* Next, there is the **viewer.js** locate in the folders which is all the JavaScript that uses the Three.js. This file will need to be changed to reflect the different model file names and locations of each model in Three.js. This will also be described below. 
* Lastly, there are two folders inside the parent folder for each page. The **/img/** folder will contain the water and grass textures along with all images to be displated on the webpage. The **/demoFiles/** will contain all 3D model .obj, .mtl, and folders that contain the textures for each model.
