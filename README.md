Application

1.Application is highly  scalable (horizontal scaling) LEMP application which fetches visitor no from Mysql database and displays it  to user

Example output  is as follows
You are visitor no 1
You are visitor no 2
You are visitor no 3
And so on

Infrastructure:
- Launched a webapp server on linux image under a public subnet and added to a Loadbalancer.
- To have high availability, created a autoscalilng group with same launch configuration as webapp server which would launch the 
  servers with same configuration when the current webapp server is down.
- Launched a database server under a private subnet which would only be accessible by the webapp servers.

Configuration Management:
- Used Chef to make all the configuration on the servers.

- Installed applications on the webapp server
	Nginx  (Wisdmlabs-assignment/Wisdmlabs-repo/cookbooks/assesment/recipes/install_nginx.rb)
	PHP    (Wisdmlabs-assignment/Wisdmlabs-repo/cookbooks/assesment/recipes/install_php.rb)

- Installed Mysql on satabase server. (Wisdmlabs-assignment/Wisdmlabs-repo/cookbooks/assesment/recipes/install_mysql.rb)

- Deployed the PHP script to the desired location, i.e /var/www/html/  (Wisdmlabs-assignment/Wisdmlabs-repo/cookbooks/assesment/recipes/deploy_php.rb)

- Created Chef roles for webserver and database servers and applied to particular server while chef-client run.
  (Wisdmlabs-assignment/Wisdmlabs-repo/roles/)

- chef-client run output can be found here, Wisdmlabs-assignment/chef-client output
