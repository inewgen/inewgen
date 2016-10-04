#!/usr/bin/env bash

echo "Here's the OSX environment:"
sw_vers
brew --version

echo "Updating brewbreakprice"
brew update

if [[ "${_PHP}" == "hhvm" ]]; then
    echo "Adding brew HHVM dependenciesbreakprice"
    brew tap hhvm/hhvm

else
    echo "Adding brew PHP dependenciesbreakprice"
    brew tap homebrew/dupes
    brew tap homebrew/versions
    brew tap homebrew/homebrew-php
fi
