# PRE

# Create docker-registry with Harbor and push image: nginx and php-fpm
https://blog.vietnamlab.vn/p/3dd21b5b-10a1-4857-9e13-5f950c9a209c/

# Install NFS server
https://slack-redir.net/link?url=https%3A%2F%2Fwww.howtoforge.com%2Fnfs-server-and-client-on-centos-7

# Create K8s Cluster use Rancher 2.0
https://blog.vietnamlab.vn/2018/09/04/nhap-mon-kubernetes-p3-rancher-2-0-kien-truc-k8s/

# DEMO

# Pull source
$ git clone git@gitlab.vietnamlab.vn:phongnx/kubernetes-research-demo.git

# Install mysql by docker-compose
$ cd mysql
$ docker-compose up -d

# Coppy code and nginx config to NFS server
$ cp /php-fpm/code/index.php /var/code/index.php
$ cp /nginx/config/test.conf /var/config.d/test.conf


# Create PersistentVolume and PersistentVolumeClaim
$ cd demo
$ kubectl apply -f code-pv-pvc.yml
$ kubectl apply -f nginx-config-pv-pvc.yml

# create docker-registry secret key: harbor-secret-registry
https://blog.vietnamlab.vn/p/3dd21b5b-10a1-4857-9e13-5f950c9a209c/

# Deploy frontend-service
$ kubectl apply -f frontend_deployment.yml

# Create Node port service
$ kubectl apply -f frontend_service.yml

# RUN
http://{node-ip}:30000
