#!/bin/bash

set -e

cd content/
git add .
git commit -m 'update'
git push
cd ..


cd themes/sugiyama
git add .
git commit -m 'update'
git push
cd ../..

git add .
git commit -m 'update'
git push

