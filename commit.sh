#!/bin/bash
ID=$(docker container ls | grep -oP "[a-z0-9]+(?=\s+php_school)")
docker commit "$ID" php_school