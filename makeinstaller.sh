#!/usr/bin/env bash
mkdir srizon-one
cp -R ./fonts ./srizon-one/
cp -R ./inc ./srizon-one/
cp -R ./languages ./srizon-one/
cp -R ./layouts ./srizon-one/
cp -R ./template-parts ./srizon-one/

cp ./404.php ./srizon-one/
cp ./archive.php ./srizon-one/
cp ./comments.php ./srizon-one/
cp ./customizer.js ./srizon-one/
cp ./footer.php ./srizon-one/
cp ./functions.php ./srizon-one/
cp ./header.php ./srizon-one/
cp ./index.php ./srizon-one/
cp ./LICENSE ./srizon-one/
cp ./materialize.css ./srizon-one/
cp ./materialize.min.js ./srizon-one/
cp ./page.php ./srizon-one/
cp ./readme.txt ./srizon-one/
cp ./rtl.css ./srizon-one/
cp ./screenshot.png ./srizon-one/
cp ./search.php ./srizon-one/
cp ./sidebar.php ./srizon-one/
cp ./single.php ./srizon-one/
cp ./style.css ./srizon-one/
cp ./theme.js ./srizon-one/

zip -r srizon-one.1.0.zip srizon-one

rm -R srizon-one