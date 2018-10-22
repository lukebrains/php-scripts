<?php
    // PHP Script to run a container.
    // Pull a container image from a container repository.
    function pullContainer($containerImage) {
        // Run the command on the localhost to pull a container.
        echo exec('docker pull '.$containerImage);
    }
    // Run a container with an external port and name.
    function runContainer($containerImage, $containerName, $internalPort = NULL, $externalPort = NULL, $daemonize = TRUE) {
        // Run the container based on the parameters.
        if($daemonize == TRUE && ($internalPort == NULL && $externalPort == NULL)) {
            $command = 'docker run -d -it --name '.$containerName.' '.$containerImage.' /bin/bash';
            echo exec($command);
        } else {

        }
    }
    //pullContainer('debian:latest');
    runContainer('debian:latest', 'testdeb');
?>