#
# Cookbook:: assesment
# Recipe:: install_mysql
#
# Copyright:: 2018, The Authors, All Rights Reserved.

cookbook_file '/tmp/mysql_install.sh' do
	source 'mysql_install.sh'
        mode '0777'
end

execute  'Install Mysql' do
	command './tmp/mysql_install.sh'
end

cookbook_file '/tmp/mysql_secure_install.sh' do
        source 'mysql_secure_install.sh'
	mode '0777'
end

execute 'Secure Install Mysql' do
        command './tmp/mysql_secure_install.sh'
end

