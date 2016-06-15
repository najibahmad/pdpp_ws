#!/bin/bash

curdir=`pwd`

# -------------------------------------------- runAll
function runAll {

    if [ $# == 0 ]; then run
    else if [ "$1" == "dep" ]; then deploy
    else if [ "$1" == "push" ]; then push
    else if [ "$1" == "pull" ]; then pull
    else if [ "$1" == "composer" ]; then composer 
    fi
    fi
    fi
    fi
    fi
}

# -------------------------------------------- none / graph
function run {
    echo "Run in the local machine"
    php artisan serve
}


# -------------------------------------------- misc
function deploy {
    echo "deploy to openshift"
    git push openshift master
}

# -------------------------------------------- scbugs
function push {
    echo "pish to github"
    git push origin master

}

# -------------------------------------------- err
function pull {
    echo "Pull from github"
    git pull origin master
}


# -------------------------------------------- setup
function composer {
    echo "Composer update"
    composer update
}

# -------------------------------------------- help
function help {
    echo ""
    echo "  ./run.sh [optionalArg]"
    echo "   pull   	: pull to github "
    echo "   push   	: push to github "
    echo "   deploy     : deploy to openshift"
    echo "   composer   : run composer update "
    echo ""
    exit
}


# ------
runAll $*


