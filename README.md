# photon-control
//
// README
// Brett Ian Balogh
// April 30, 2016
// brettbalogh@gmail.com
//
//
This photon control example consists of the following files:

access.php: Contains the ACCESS_TOKEN and an array of DEVICE_IDs. It is ok to have only one ID in the array

control.css: styling for the control.php page

control.html: The control page. Contains a text field for arguments to send to the photon. Button calls functions named RUN and STOP by POSTing to the proxy.php script

proxy.php: PHP script that cURLs requests to the devices in the DEVICE_ID array contained by access.php. It also posts the arguments supplied in the input field in control.php

control.ino: Firmware to flash on the photon(s) to be controlled. Exposes two functions, RUN and STOP to the cloud. RUN can be called with an integer argument to change fade time during RUN.
