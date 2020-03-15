#!/bin/bash
version=$1

sass sass/index.scss:wordpress/wp-content/themes/the_peoples_meeple/style.css
rm the_peoples_meeple_$version.zip
pushd wordpress/wp-content/themes
cp -R the_peoples_meeple/ the_peoples_meeple_$version/
zip -r ../../../the_peoples_meeple_$version.zip the_peoples_meeple_$version/
rm -rf the_peoples_meeple_$version/
popd
