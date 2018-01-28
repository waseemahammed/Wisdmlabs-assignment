#
# Cookbook:: assesment
# Recipe:: install_nginx
#
# Copyright:: 2018, The Authors, All Rights Reserved.

#Run all the updates
execute 'apt-get update' do
  command 'sudo apt-get update'
end

#Install nginx
execute 'install nginx' do
  command 'sudo apt-get install nginx -y'
end 

#
#execute 'install nginx' do
#  command 'sudo ufw allow 'Nginx HTTP''
#end
