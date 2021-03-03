#!/bin/bash
PWDL=$PWD

#package.sh
    chmod +x src/package/install.pkg
    . src/package/install.pkg

#Servidor local $ipp
    cd $PWDL
    chmod +x src/cmd/vnc.sh
    . src/cmd/vnc.sh &
