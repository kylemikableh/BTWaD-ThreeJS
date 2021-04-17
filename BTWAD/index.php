<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Before There Was a Dam ">
    <meta name="keywords" content="Placeholder">
    <meta name="author" content="Kyle Mikolajczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="BTWaD IQP" />
    <meta property="og:description" content="Before There Was a Dam | Interactive 3D Models">
    <meta property="og:image" content="./img/exampleImg.jpg" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="demo.css">

    <title>BTWaD IQP</title>
</head>
<body>
<div class="container" id="ThreeContainer">
    <script type="module">

        import * as THREE from '../build/three.module.js';


        import { OrbitControls } from './jsm/controls/OrbitControls.js';
        import {OBJLoader} from './jsm/loaders/OBJLoader.js';
        import {MTLLoader} from './jsm/loaders/MTLLoader.js';

        import {Projector} from './jsm/renderers/Projector.js';

        let container;
        let camera, scene, projector, renderer;
        let controls;

        let textureLoader;
        let modelLoader;

        let camX = 2106;
        let camY = 100;
        let camZ = 400;

        let camXMulti = 0;
        let camYMulti = 0;
        let camZMulti = 0;

        let objects = [];

        init();
        animate();

        function init() {

            container = document.createElement( 'div' );
            document.body.appendChild( container );

            camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 1, 10000 );
            camera.position.set(0, 500, 1000*Math.PI );

            scene = new THREE.Scene();
            scene.fog = new THREE.Fog( 0xcce0ff, 1, 7000 );
            scene.background = new THREE.Color( 0xcce0ff );

            let manager = new THREE.LoadingManager();
            textureLoader = new THREE.ImageLoader( manager );
            modelLoader = new OBJLoader(manager);

            const hemiLight = new THREE.HemisphereLight( 0xffffff, 0x444444 );
            hemiLight.position.set( 0, 100, 0 );
            hemiLight.castShadow = true;
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

            const mtlLoader = new MTLLoader();
            mtlLoader.setMaterialOptions( { invertTrProperty: true } );
            mtlLoader.load('./demoFiles/threejsexamplesmall.mtl', (mtl) => {
                mtl.preload();
                for (const material of Object.values(mtl.materials)) {
                    material.side = THREE.DoubleSide;
                }
                const objLoader = new OBJLoader(manager);
                objLoader.setMaterials(mtl);
                objLoader.load('./demoFiles/ThreeJSExampleSmall.obj', (object) => {
                    object.traverse( function ( child ) {
                        child.castShadow = true;
                    } );
                    object.castShadow = true;
                    objects.push(object);
                    scene.add( object );
                    object.position.x = 10;
                    object.position.y = 0;
                    object.scale.set(25,25,25);
                    render();
                });
            });

            const mtlLoader2 = new MTLLoader();
            mtlLoader2.setMaterialOptions( { invertTrProperty: true } );
            mtlLoader2.load('./demoFiles/calvin_hasting_paintshop.mtl', (mtl) => {
                mtl.preload();
                for (const material of Object.values(mtl.materials)) {
                    material.side = THREE.DoubleSide;
                }
                const objLoader = new OBJLoader(manager);
                objLoader.setMaterials(mtl);
                objLoader.load('./demoFiles/calvin_hasting_paintshop.obj', (object) => {
                    object.traverse( function ( child ) {
                        child.castShadow = true;
                    } );
                    object.castShadow = true;
                    objects.push(object);
                    scene.add( object );
                    object.position.x = 1600;
                    object.position.y = 0;
                    object.position.z = 200;
                    object.rotation.y = 0;
                    object.scale.set(0.35,0.35,0.35);
                    object.name = "house2";
                    render();
                });
            });

            const textLoader = new THREE.TextureLoader();
            const groundTexture = textLoader.load('./img/grass.jpg');
            groundTexture.wrapS = groundTexture.wrapT = THREE.RepeatWrapping;
            groundTexture.repeat.set( 25, 25 );
            groundTexture.anisotropy = 16;
            groundTexture.encoding = THREE.sRGBEncoding;

            const groundMaterial = new THREE.MeshLambertMaterial( { map: groundTexture } );

            let mesh = new THREE.Mesh( new THREE.PlaneGeometry( 16384, 16384 ), groundMaterial );
            mesh.position.y = 0;
            mesh.rotation.x = - Math.PI / 2;
            mesh.receiveShadow = true;
            scene.add( mesh );

            projector = new Projector();

            renderer = new THREE.WebGLRenderer( { antialias: true } );
            renderer.setPixelRatio( window.devicePixelRatio );
            renderer.setSize( window.innerWidth, window.innerHeight );
            renderer.outputEncoding = THREE.sRGBEncoding;
            renderer.shadowMap.enabled = true;
            //renderer.shadowMap.type = THREE.PCFSoftShadowMap;

            controls = new OrbitControls( camera, renderer.domElement );
            controls.minDistance = 450;
            controls.maxDistance = 2000;
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

            document.addEventListener( 'mousemove', onDocumentMouseDown, false );
            window.addEventListener( 'resize', onWindowResize, false );
            document.addEventListener('keydown', logKey);
            document.addEventListener('keyup', logKeyUp);

        }

        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize( window.innerWidth, window.innerHeight );
        }

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
                    if(objName == "city_house_2")
                    {
                        console.log("intersected");
                        hovered = true;

                        let loader = new THREE.TextureLoader();
                        let material = new THREE.MeshLambertMaterial({
                            map: loader.load('./img/exampleImg.jpg')
                        });
                        material.side = THREE.DoubleSide;
                        let geometry = new THREE.PlaneGeometry(400, 400*.75);
                        let mesh = new THREE.Mesh(geometry, material);
                        mesh.position.set(500,200,100)
                        mesh.name = "image";
                        scene.add(mesh);

                        let loader2 = new THREE.TextureLoader();
                        let material2 = new THREE.MeshLambertMaterial({
                            map: loader2.load('./img/Text.png'), transparent: true, opacity: 0.9, color: 0xFF0000
                        });
                        material2.side = THREE.DoubleSide;
                        let geometry2 = new THREE.PlaneGeometry(400, 400*.75);
                        let mesh2 = new THREE.Mesh(geometry2, material2);
                        mesh2.position.set(-500,200,100)
                        mesh2.name = "text";
                        scene.add(mesh2);
                    }
                    else if(objName.includes("calvin_hasting_paintshop_obj"))
                    {
                        console.log("touch");
                        console.log("intersected");
                        hovered = true;

                        let loader = new THREE.TextureLoader();
                        let material = new THREE.MeshLambertMaterial({
                            map: loader.load('./img/hastings_paint.jpg')
                        });
                        material.side = THREE.DoubleSide;
                        let geometry = new THREE.PlaneGeometry(500, 500*.75);
                        let mesh = new THREE.Mesh(geometry, material);
                        mesh.position.set(2900,200,-200)
                        mesh.name = "image";
                        scene.add(mesh);

                        let loader2 = new THREE.TextureLoader();
                        let material2 = new THREE.MeshLambertMaterial({
                            map: loader2.load('./img/Hastings.png'), transparent: true, opacity: 0.9, color: 0xFF0000
                        });
                        material2.side = THREE.DoubleSide;
                        let geometry2 = new THREE.PlaneGeometry(200*3, 200);
                        let mesh2 = new THREE.Mesh(geometry2, material2);
                        mesh2.position.set(2900,500,-200)
                        mesh2.name = "text";
                        scene.add(mesh2);

                        let loader3 = new THREE.TextureLoader();
                        let material3 = new THREE.MeshLambertMaterial({
                            map: loader3.load('./img/hastings_paint_2.jpg')
                        });
                        material3.side = THREE.DoubleSide;
                        let geometry3 = new THREE.PlaneGeometry(500, 500*.75);
                        let mesh3 = new THREE.Mesh(geometry3, material3);
                        mesh3.position.set(1200,200,-200)
                        mesh3.name = "image2";
                        scene.add(mesh3);

                        let loader4 = new THREE.TextureLoader();
                        let material4 = new THREE.MeshLambertMaterial({
                            map: loader4.load('./img/Hastings_Calvin.png'), transparent: true, opacity: 0.9, color: 0xFF0000
                        });
                        material4.side = THREE.DoubleSide;
                        let geometry4 = new THREE.PlaneGeometry(200*3, 200);
                        let mesh4 = new THREE.Mesh(geometry4, material4);
                        mesh4.position.set(1200,500,-200)
                        mesh4.name = "text2";
                        scene.add(mesh4);
                    }
                }
            }
            else
            {
                if(hovered)
                {
                    let selectedObject = scene.getObjectByName("image");
                    scene.remove( selectedObject );
                    let selectedObject2 = scene.getObjectByName("text");
                    scene.remove( selectedObject2 );
                    let selectedObject3 = scene.getObjectByName("image2");
                    scene.remove( selectedObject3 );
                    let selectedObject4 = scene.getObjectByName("text2");
                    scene.remove( selectedObject4 );
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
    </script>
</div>
</body>
</html>
