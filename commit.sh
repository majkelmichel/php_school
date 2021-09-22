#!/bin/bash
ID=$(docker ps | grep -oP "[a-z0-9]+(?=\s+php_school)")
docker commit "$ID" php_school

echo "Press any key to continue"
while [ true ]; do
  read -t 3 -n 1
  if [ $? = 0 ]; then
    exit
  else
    echo "waiting for the keypress"
  fi
done
