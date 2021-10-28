
minikube delete
minikube start --vm-driver=virtualbox
eval $(minikube docker-env)
minikube addons enable metallb
docker build -t nginx_image ./srcs/nginx/
docker build -t php_image ./srcs/php/
docker build -t mysql_image ./srcs/mysql/
docker build -t wp_image ./srcs/wp/
docker build -t ftps_image ./srcs/ftps/
docker build -t grafana_image ./srcs/grafana/
docker build -t influxdb_image ./srcs/influxdb/
kubectl apply -f  srcs/other/configmap.yaml
kubectl apply -f  srcs/php/php.yaml
kubectl apply -f  srcs/nginx/nginx.yaml
kubectl apply -f  srcs/mysql/mysql.yaml
kubectl apply -f  srcs/wp/wp.yaml
kubectl apply -f  srcs/ftps/ftps.yaml
kubectl apply -f  srcs/grafana/grafana.yaml
kubectl apply -f  srcs/influxdb/influxdb.yaml
kubectl apply -f  srcs/other/volume.yaml