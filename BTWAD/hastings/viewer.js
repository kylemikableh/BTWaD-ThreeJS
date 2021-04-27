/**
 * Before There Was a Dam 3D model viewer using three.js
 *
 * By Kyle Mikolajczyk on 4/27/2021 for
 * Degree Completion Requirement at Worcester Polytechinic Institute
 *
 * and help from example codes and projects linked
 * on their functions
 */
import * as THREE from '../../build/three.module.js';


import { OrbitControls } from '../jsm/controls/OrbitControls.js';
import {OBJLoader} from '../jsm/loaders/OBJLoader.js';
import {MTLLoader} from '../jsm/loaders/MTLLoader.js';

import {Projector} from '../jsm/renderers/Projector.js';
import {Water} from '../jsm/objects/Water.js';

let container;
let camera, scene, projector, renderer, water;
let controls;

let waterMulti = 0;

let textureLoader;
let modelLoader;

let camX = -1500;
let camY = 0;
let camZ = 0;

const MIN_DISTANCE = 1000;
const MAX_DISTANCE = 5000;

let camXMulti = 0;
let camYMulti = 0;
let camZMulti = 0;

let objects = [];

init();
animate();

//Camera Move Function
function logKey(e) {
    e.preventDefault();
    let key = e.keyCode;
    const left = 37;
    const right = 39;
    const up = 38;
    const down = 40;

    switch (key) {
        case left:
            console.log("LEFT");
            camXMulti = -1;
            break;
        case right:
            console.log("RIGHT");
            camXMulti = 1;
            break;
        case up:
            console.log("UP");
            camYMulti = -1;
            break;
        case down:
            console.log("DOWN");
            camYMulti = 1;
            break;
    }
}

//Key up
function logKeyUp(e) {
    e.preventDefault();
    let key = e.keyCode;
    const left = 37;
    const right = 39;
    const up = 38;
    const down = 40;

    switch (key) {
        case left:
            console.log("LEFT");
            camXMulti = 0;
            break;
        case right:
            console.log("RIGHT");
            camXMulti = 0;
            break;
        case up:
            console.log("UP");
            camYMulti = 0;
            break;
        case down:
            console.log("DOWN");
            camYMulti = 0;
            break;
    }
}

/**
 * Function to load grass texture. Code modified from and image from example Three.js project:
 * https://threejs.org/examples/#webgl_animation_cloth
 */
function loadGround() {
    const textLoader = new THREE.TextureLoader();
    const groundTexture = textLoader.load('./img/grass.jpg');
    groundTexture.wrapS = groundTexture.wrapT = THREE.RepeatWrapping;
    groundTexture.repeat.set( 100, 100 );
    groundTexture.anisotropy = 16;
    groundTexture.encoding = THREE.sRGBEncoding;

    const groundMaterial = new THREE.MeshLambertMaterial( { map: groundTexture } );

    let mesh = new THREE.Mesh( new THREE.PlaneGeometry(32768, 32768), groundMaterial );
    mesh.position.y = 0;
    mesh.rotation.x = - Math.PI / 2;
    mesh.receiveShadow = true;
    scene.add( mesh );
}

/**
 * Function that does not allow camera to go under surface. Used from StackOverflow:
 * https://stackoverflow.com/questions/15827074/how-do-i-put-limits-on-orbitcontrol
 */
function setMinCameraAngle() {
    let centerPosition = controls.target.clone();
    centerPosition.y = 0;
    let groundPosition = camera.position.clone();
    groundPosition.y = 0;
    let d = (centerPosition.distanceTo(groundPosition));

    let origin = new THREE.Vector2(controls.target.y,0);
    let remote = new THREE.Vector2(5,d);
    let angleRadians = Math.atan2(remote.y - origin.y, remote.x - origin.x);
    controls.maxPolarAngle = angleRadians;
}

/**
 * Function to help render
 */
function renderHelper() {
    projector = new Projector();

    renderer = new THREE.WebGLRenderer( { antialias: true } );
    renderer.setPixelRatio( window.devicePixelRatio );
    camera.aspect = (window.innerWidth/2) / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth/2, window.innerHeight );
    renderer.outputEncoding = THREE.sRGBEncoding;
    renderer.shadowMap.enabled = true;

    controls = new OrbitControls( camera, renderer.domElement );
    controls.minDistance = MIN_DISTANCE;
    controls.maxDistance = MAX_DISTANCE;
    controls.enablePan = false;
    controls.target.set(camX, camY, camZ);
    controls.update();
    controls.enableDamping = true;

    setMinCameraAngle();

    container.appendChild( renderer.domElement );
}

/**
 * Function to load a model into the scene using filename and params
 * @param manager
 * @param path
 * @param objx
 * @param objy
 * @param objz
 * @param scalex
 * @param scaley
 * @param scalez
 * @param rotationy
 * @param name
 */
function loadModel(manager,path,objx,objy,objz,scalex,scaley,scalez,rotationy,name) {
    const mtlLoader = new MTLLoader();
    mtlLoader.setMaterialOptions( { invertTrProperty: true } );
    mtlLoader.load(path + '.mtl', (mtl) => {
        mtl.preload();
        for (const material of Object.values(mtl.materials)) {
            material.side = THREE.DoubleSide;
        }
        const objLoader = new OBJLoader(manager);
        objLoader.setMaterials(mtl);
        objLoader.load(path + '.obj', (object) => {
            object.traverse( function ( child ) {
                child.castShadow = true;
            } );
            object.castShadow = true;
            objects.push(object);
            scene.add( object );
            object.position.x = objx;
            object.position.y = objy;
            object.position.z = objz;
            object.scale.set(scalex,scaley,scalez);
            object.rotation.y = rotationy;
            object.name = name;
            render();
        });
    });
}

/**
 * Used some code from the example Three.js project:
 * https://threejs.org/examples/#webgl_shaders_ocean
 */
function addWater() {
    const waterGeometry = new THREE.PlaneGeometry( 32768, 32768 );
    water = new Water(
        waterGeometry,
        {
            textureWidth: 512,
            textureHeight: 512,
            waterNormals: new THREE.TextureLoader().load( 'img/waternormals.jpg', function ( texture ) {

                texture.wrapS = texture.wrapT = THREE.RepeatWrapping;

            } ),
            sunDirection: new THREE.Vector3(),
            sunColor: 0xffffff,
            waterColor: 0x001e0f,
            distortionScale: 3.7,
            fog: scene.fog !== undefined
        }
    );
    water.rotation.x = - Math.PI / 2;
    water.position.y = -5;
    scene.add( water );

}

/**
 * Function to load hemisphere light and directional light
 */
function lightLoader() {
    const hemiLight = new THREE.HemisphereLight( 0xffffff, 0x444444 );
    hemiLight.position.set( 0, 100, 0 );
    scene.add( hemiLight );

    const dirLight = new THREE.DirectionalLight( 0xffffff );
    dirLight.position.set( 400, 50, 0 );
    dirLight.castShadow = true;
    dirLight.shadow.camera.top = 50;
    dirLight.shadow.camera.bottom = - 25;
    dirLight.shadow.camera.left = - 25;
    dirLight.shadow.camera.right = 25;
    dirLight.shadow.camera.near = 0.1;
    dirLight.shadow.camera.far = 200;
    dirLight.shadow.mapSize.set( 1024, 1024 );
    scene.add( dirLight );
}

/**
 * Init function for Three.js and call helper functions
 */
function init() {

    container = document.getElementById('main-container');

    camera = new THREE.PerspectiveCamera( 70, (window.innerWidth/2) / window.innerHeight, 1, 10000 );
    camera.position.set(-1500, 0, 1000*Math.PI );

    scene = new THREE.Scene();
    scene.fog = new THREE.Fog( 0xcce0ff, 2000, 10000 );
    scene.background = new THREE.Color( 0xcce0ff );

    let manager = new THREE.LoadingManager();
    textureLoader = new THREE.ImageLoader( manager );
    modelLoader = new OBJLoader(manager);

    lightLoader();
    loadGround();
    loadModel(manager,'./demoFiles/calvin_hasting_paintshop',3000,0,6000,0.5,0.5,0.5,0,'house2');
    loadModel(manager,'./demoFiles/henry_hasting_house',-3000,-20,0,1.75,1.75,1.75,0,'house3');
    loadModel(manager,'./demoFiles/HastingsFarm',-3000,-20,-6000,1.75,1.75,1.75,0,'house4');
    renderHelper();
    addWater();

    window.addEventListener( 'resize', onWindowResize, false );
    document.addEventListener('keydown', logKey);
    document.addEventListener('keyup', logKeyUp);

}

function onWindowResize() {
    camera.aspect = (window.innerWidth/2) / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth/2, window.innerHeight );
}

/**
 * Function to set camera to given model id
 * @param id
 */
function moveCameraTo(id) {
    if(id == "henry-house") {
        camX = -1500;
        camZ = 0;
    }
    if(id == "henry-barn") {
        camX = -3000;
        camZ = -7000;
    }
    if(id == "calvin-paint") {
        camX = 3500;
        camZ = 6000;
    }
}

/**
 * Function to show div with id and to hide all other divs
 * @param id
 */
function showDivWithID(id) {
    let divs = ['henry-house', 'henry-barn', 'calvin-paint']
    for (let i = 0; i < divs.length; i++) {
        let temp = document.getElementById(divs[i]);
        let tempButton = document.getElementById(divs[i] + "-button");
        console.log(divs[i] + "-button");
        tempButton.classList.remove("active")
        temp.style.display = "none";
    }
    let x = document.getElementById(id);
    let xButton = document.getElementById(id + "-button");
    xButton.classList.add("active");
    x.style.display = "block";
    moveCameraTo(id);
}

window.showDivWithID = showDivWithID;

let waterAbove = false;

/**
 * Function to toggle flood water
 */
function toggleWater() {
    waterAbove = !waterAbove;
    if(waterAbove) {
        waterMulti = 1;
        camY = 500;
    }
    else {
        waterMulti = -1;
        camY = 0;
    }
}

window.toggleWater = toggleWater;

function animate() {
    requestAnimationFrame( animate );
    scene.updateMatrixWorld();
    controls.target.set(camX+=(camXMulti * 15), camY, camZ+=(camYMulti * 15));
    camera.position.set(camera.position.x+=(camXMulti * 15), camera.position.y, camera.position.z+=(camYMulti * 15));
    water.position.y = water.position.y + waterMulti;
    if(water.position.y > 500){waterMulti = 0;}
    if(water.position.y < -5){waterMulti = 0;}
    controls.update();
    render();
}

function render() {
    renderer.render( scene, camera );
}