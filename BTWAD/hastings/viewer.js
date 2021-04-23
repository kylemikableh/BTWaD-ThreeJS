
import * as THREE from '../../build/three.module.js';


import { OrbitControls } from '../jsm/controls/OrbitControls.js';
import {OBJLoader} from '../jsm/loaders/OBJLoader.js';
import {MTLLoader} from '../jsm/loaders/MTLLoader.js';

import {Projector} from '../jsm/renderers/Projector.js';

let container;
let camera, scene, projector, renderer;
let controls;

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

function renderHelper() {
    projector = new Projector();

    renderer = new THREE.WebGLRenderer( { antialias: true } );
    renderer.setPixelRatio( window.devicePixelRatio );
    camera.aspect = (window.innerWidth/2) / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth/2, window.innerHeight );
    renderer.outputEncoding = THREE.sRGBEncoding;
    renderer.shadowMap.enabled = true;
    //renderer.shadowMap.type = THREE.PCFSoftShadowMap;

    controls = new OrbitControls( camera, renderer.domElement );
    controls.minDistance = MIN_DISTANCE;
    controls.maxDistance = MAX_DISTANCE;
    controls.enablePan = false;
    controls.target.set(camX, camY, camZ);
    controls.update();
    controls.enableDamping = true;

    let centerPosition = controls.target.clone();
    centerPosition.y = 0;
    let groundPosition = camera.position.clone();
    groundPosition.y = 0;
    let d = (centerPosition.distanceTo(groundPosition));

    let origin = new THREE.Vector2(controls.target.y,0);
    let remote = new THREE.Vector2(5,d);
    let angleRadians = Math.atan2(remote.y - origin.y, remote.x - origin.x);
    controls.maxPolarAngle = angleRadians;

    container.appendChild( renderer.domElement );
}

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

function init() {

    container = document.getElementById('ThreeContainer');
    document.body.appendChild( container );

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

    document.addEventListener( 'mousemove', onDocumentMouseDown, false );
    window.addEventListener( 'resize', onWindowResize, false );
    document.addEventListener('keydown', logKey);
    document.addEventListener('keyup', logKeyUp);

}

function onWindowResize() {
    camera.aspect = (window.innerWidth/2) / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth/2, window.innerHeight );
}

let hovered = false;

function onDocumentMouseDown( event ) {
    event.preventDefault();

    let vector = new THREE.Vector3( ( event.clientX / window.innerWidth ) * 2 - 1, - ( event.clientY / window.innerHeight ) * 2 + 1, 0.5 );
    vector.unproject(camera);

    let raycaster = new THREE.Raycaster( camera.position, vector.sub( camera.position ).normalize() );

    let intersects = raycaster.intersectObjects( objects, true );

    if ( intersects.length > 0 ) {
        let objName = intersects[0].object.name;
        console.log(objName);
        if(!hovered)
        {
            console.log(objName);
            if(objName == "city_house_2")
            {
                console.log("intersected");
                hovered = true;
            }
            else if(objName.includes("calvin_hasting_paintshop_obj"))
            {
                console.log("touch");
                console.log("intersected");
                hovered = true;

            }
        }
    }
    else
    {
        if(hovered)
        {
            // let selectedObject = scene.getObjectByName("image");
            // scene.remove( selectedObject );
            // let selectedObject2 = scene.getObjectByName("text");
            // scene.remove( selectedObject2 );
            // let selectedObject3 = scene.getObjectByName("image2");
            // scene.remove( selectedObject3 );
            // let selectedObject4 = scene.getObjectByName("text2");
            // scene.remove( selectedObject4 );
        }
        hovered = false;
    }
}

function animate() {
    requestAnimationFrame( animate );
    scene.updateMatrixWorld();
    controls.target.set(camX+=(camXMulti * 15), camY, camZ+=(camYMulti * 15));
    camera.position.set(camera.position.x+=(camXMulti * 15), camera.position.y, camera.position.z+=(camYMulti * 15));
    console.log(camera.position)
    controls.update();
    render();
}

function render() {
    renderer.render( scene, camera );
}