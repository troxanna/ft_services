#!/bin/sh

minikube start —vm-driver=virtualbox 

eval $(minikube docker-env)

docker build  -t nginx_image .

minikube addons enable metallb

kubectl apply -f configMap.yaml

kubectl apply -f nginx.yaml
