# BTWaD-ThreeJS Resources
Before There Was a Dam Project 3D model interactive viewer with information on how it works and how to add your own models to the layout.

## Three.js
The [Three.js project](https://threejs.org/) is a library written in JavaScript that allows developers to use 3D models in a webbrowser with many customizations. Detailed examples and documentation are located here and is the backbone of this project

## Bootstrap 4
The [Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/) library is a library that allows for a responsive, modern UI that makes designing a web page much easier by removing the need to design custom CSS.

## SketchUp and Obj files
This project used [SketchUp](https://www.sketchup.com/) to texture the models. The Three.js part of this project uses .obj files instead of the standard .skp which comes from the SketchUp program. Thus, an [online converter](https://anyconv.com/skp-to-obj-converter/) can be used to convert files from SketchUp into the required .obj file

## HTML Basics
This project uses [PHP](https://www.php.net/) files instead of [HTML](https://html.spec.whatwg.org/) files, but does not use any PHP functions. Thus, for the front-end User Interface, simple HTML knowledge and [CSS](https://www.w3.org/TR/CSS/#css) knowledge for styling is required to edit and make new pages, but these can be found on [W3Schools](https://www.w3schools.com/html/html_basic.asp).

## JavaScript Basics
[JavaScript](https://www.javascript.com/) is a scripting language for web browsers that allows for many interactive features in the web browser. Three.js is written in JavaScript and thus must be used in JavaScript. JavaScript basics can also be found on [W3Schools](https://www.w3schools.com/html/html_basic.asp).

# Overview
How does this project work?
* This project simply allows for models to be loaded together in one plane, with repeating grass textures to simulate the ground. The "Toggle Flood" button simply loads a plane geometry with the texture of water and a water normals texture to allow for proper shadows on the water. The plane is moved up and down, simulating water flooding the buildings. The index.php allows for content and details be loaded when the user wants to view a specific building.

This project used very similar code in each folder because by design you can copy the directory of one page (e.g. ball) and change the names, titles, facts, models, and images. 
* The folders contain an **index.php** which contains all the HTML for that page. This will need to be changes with details below.
* The folder also contains an **index.css** file. This is for styling, but does not need to be changed. 
* Next, there is the **viewer.js** locate in the folders which is all the JavaScript that uses the Three.js. This file will need to be changed to reflect the different model file names and locations of each model in Three.js. This will also be described below. 
* Lastly, there are two folders inside the parent folder for each page. The **/img/** folder will contain the water and grass textures along with all images to be displated on the webpage. The **/demoFiles/** will contain all 3D model .obj, .mtl, and folders that contain the textures for each model.

## index.php
Most code in the index.php does not need to be changed, but rather the content. This is what you should change:
* Anywhere you see text relating to the title of the page. Simply replace inside the tags the correct Title. This includes the ```<meta>``` tags, the ```<title>``` tag, and the ```<h1>``` tag.
* The first ```<button>``` tag should have the link changed to the URL of the page you would like the button to redirect the user.
* The list of ```<button>``` tags inside the ```main-content``` tag should be modified to reflect the amout of models that will be on the page. For example, if you intend to have two models, there should be two buttons here. The ```id``` needs to be changed to a unique name for it, ending in ```-button```. This same ```id``` will need to be reused later on. Inside the ```onClick=""``` of the button, the text needs to be changed to the ```id``` from before **_minus the -button_**. As an example, if you name the ```id``` in the ```id``` field to ```'house1-button'```, the ```onClick=''``` should just contain ```house1```. The content name of the button should lastly be changed to what you want the button to say to users.
* The first ```<button>``` should contain the class of ```active```.
* Each ```<div>``` after the button group should have the ```id``` of what you gave the buttons ```id``` before. Thus, if there were two buttons with the ids of ```house1-button``` and ```house2-button```, two divs should be copied with the ids of ```house1``` and ```house2```.
* The ``<h1>`` content should be replace with the name of the building you would like users to see
* The ``<p>`` tag should have the content of what you want the users to read. If you want a superposition number, add the ```<sup>1</sup>``` tag and replace the number with the respective number.
* In the ```<a href link="">``` tag, the link should be replaced to reflect the permalink to where the image was retrieved from. The ```src=""``` should be replaced to the filename of the img that is put in the **/img/** folder
* The ```alt=""``` should be replaced to reflect the name of the image for screen readers.
* Lastly, if sources were referenced there should be a ```p``` tag after the ```<img>``` tag that contains the references.
In the end, there should be a div with all the information for each building. The ```id``` used for each div will be important in the **viewer.js**.

## viewer.js
Most code in the viewer.js does not need to be changed. This is what should be changed:
* Inside the ```function init()``` function, the function call to ```loadModel``` should be copied for as many models that will be loaded. The ```path``` argument should be changed to reflect the file location of the .obj, **excluding** the file extension. For example, if the .obj had the name of house1.obj, the path would only contain ```house1```. The next three arguments are the coordinates of where the object will be placed (x, y, z). The three arguments afterwards are the scale of which you would like the models loaded (x, y, z). These arguments will have to be adjusted depending the scale of which the model was done in. The next argument is the rotation in degress. Lastly, the final argument is a name you would like to give the model. This is **not** the id from earlier. Here is an example line: ```loadModel(manager,'./demoFiles/george_ball_barn',3000,0,6000,2,2,2,0,'house2');```
* Inside the ```function moveCameraTo(id)``` function, there should be an ```if``` statement for each ```id``` that was created in the ```index.php```. Inside each if statement the ``camX`` and ```camZ``` should have the position of the camera for the respective model. Here is an example if the ```id``` was **house1**, at the position of -3000x and 0z:
```
if(id == "george-ball-house") {
        camX = -3000;
        camZ = 0;
    }
```
* Lastly, inside the ```function showDivWithID(id)``` function, the array called ```divs``` should contain every ```id``` from the index.php. 

# Conclusion
After following the instructions, any models should be able to be loaded. Tweaks to the viewer.js might be required if you want more customizations in the future. All example code used for the project are linked to where the example came from about the function. 
