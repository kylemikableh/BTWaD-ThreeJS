# BTWaD-ThreeJS Resources
Before There Was a Dam Project 3D model interactive viewer with information on how it works and how to add your own models to the layout.

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

## index.php
Most code in the index.php does not need to be changed, but rather the content. This is what you should change:
* Anywhere you see text relating to the title of the page. Simply replace inside the tags the correct Title. This includes the **meta** tags, the **title** tag, and the **h1** tag.
* The first **<button>** tag should have the link changed to the URL of the page you would like the button to redirect the user.
* The list of **<button>** tags inside the **main-content** tag should be modified to reflect the amout of models that will be on the page. For example, if you intend to have two models, there should be two buttons here. The _id_ needs to be changed to a unique name for it, ending in **-button**. This same _id_ will need to be reused later on. Inside the **onClick** of the button, the text needs to be changed to the _id_ from before **_minus the -button_**. As an example, if you name the _id_ in the **id** field to "house1-button", the **onClick** should just contain "house1". The content name of the button should lastly be changed to what you want the button to say to users.
